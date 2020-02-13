<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Cart extends Model
{
    public function viewCart() { // Selects all items stored in 'cart' table
        $result = DB::select("
            SELECT 
                cart.orderId,
                cart.orderAmount,
                products.productId,
                products.productTitle, 
                products.productProducer, 
                products.productPrice,
                products.productType,
                products.productPrice*cart.orderAmount AS cost
            FROM 
                cart 
                    INNER JOIN 
                        products
                    ON
                        cart.productId = products.productId");
        return $result;
    }

    public function countCart() {
        $result = DB::select("
            SELECT 
                cart.orderId,
                cart.orderAmount,
                products.productId,
                products.productTitle, 
                products.productProducer, 
                products.productPrice,
                products.productType,
                products.productPrice*cart.orderAmount AS cost
            FROM 
                cart 
                    INNER JOIN 
                        products
                    ON
                        cart.productId = products.productId");
        $count = count($result);
        return $count;
    }

    public function addToCart($addedItem) {
        $item=array('productId'=>$addedItem,"orderAmount"=>1);
        DB::table('cart')->insert($item);
    }

    public function addOne($order) { // Adds one to the current 'orderAmount' value
        DB::update("
            UPDATE 
                cart 
            SET 
                orderAmount = orderAmount+1 
            WHERE 
                orderId = ?", 
            [$order]);
    }

    public function removeOne($id, $amount) {
        if ($amount == 1) { // If there is only one item, the whole row is removed in 'cart' table
            DB::table('cart')->where('orderId', '=', $id)->delete();
        } else { // Removes one to the current 'orderAmount' value
            DB::update(" 
                UPDATE 
                    cart 
                SET 
                    orderAmount = orderAmount-1 
                WHERE 
                    orderId = ?", 
                [$id]);
        }
    }

    public function clearCart() { // Deletes all rows from table 'cart'
        DB::table('cart')->delete();
    }
}

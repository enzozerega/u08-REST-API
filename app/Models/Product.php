<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{

    public function getAllProducts() {
        $result = DB::select("select * from products");
        return $result;
    }

    public function search($user_input) {
        $result =  DB::select(
            "select * from products 
             where productTitle like '%".$user_input."%' 
             or productProducer like '%".$user_input."%' 
             or productType like '%".$user_input."%'"
            );
        return $result;
        }
    
    public function getProduct($product_id) {
        $result = DB::select("select * from products where productId = ".$product_id);
        return $result;
    }
    
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;

class CartController extends Controller
{
    public function openCart() {
        $cart = new Cart();
        $orderArray = $cart->viewCart();
        $totalCost = null;
        foreach ($orderArray as $cost) {
            $totalCost = $cost->cost + $totalCost;
        }
        $count = $cart->countCart();
        return view('CartResult', ['orders' => $orderArray, "totalCost" => $totalCost, 'count' => $count]);
    }

    public function addToCart(Request $request) {
        $cart = new Cart();
        $addedItem = $request->addedItem;
        $cart->addToCart($addedItem);
        return redirect()->action('MainMenuController@mainMenu');
    }

    public function addSearch(Request $request) {
        $cart = new Cart();
        $addedItem = $request->addedItem;
        $cart->addToCart($addedItem);
        return redirect()->back();
    }

    public function clearCart() {
        $cart = new Cart();
        $cart->clearCart();
        return redirect()->action('CartController@openCart'); // It goes to shopping cart page showing an empty cart  
    }

    public function addOne(Request $request) {
        $cart = new Cart();
        $order = $request->order;
        $cart->addOne($order);
        return redirect()->action('CartController@openCart');
    }

    public function removeOne(Request $request) {
        $cart = new Cart();
        $id = $request->order;
        $amount = $request->amount;
        $cart->removeOne($id, $amount);
        return redirect()->action('CartController@openCart');
    }

    public function buy() {
        $cart = new Cart();
        $items = $cart->viewCart();
        $count = $cart->countCart();
        $cart->clearCart();
        $totalCost = null;
        foreach ($items as $cost) {
            $totalCost = $cost->cost + $totalCost;
        }
        return view('Buy', ['orders' => $items, "totalCost" => $totalCost, 'count' => $count]);
    }
}

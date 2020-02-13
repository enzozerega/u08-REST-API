<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class SearchController extends Controller
{
    public function search(Request $request){
        if ($request->userInput != "") {
            $user_input = $request->userInput;
            $product = new Product();
            $result = $product->search($user_input);
            return view('SearchItem', ['input' => $user_input, 'results' => $result]);
        } else {
            $user_input = "";
        }
        return view('SearchItem', ['input' => $user_input]);

    }
}

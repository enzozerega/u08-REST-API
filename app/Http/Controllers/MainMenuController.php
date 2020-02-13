<?php
    namespace App\Http\Controllers;
    use Illuminate\Http\Request;
    use App\Models\Product;

    class MainMenuController extends Controller {
        public function mainMenu(){
            $product = new Product();
            $productArray = $product->getAllProducts();
            return view('MainMenu', ['products' => $productArray]);
        }

        public function getThisProduct($productId) {
            $product = new Product();
            $productArray = $product->getProduct($productId);
            return response()->json($productArray);
        }

        public function getAllProducts() {
            $product = new Product();
            $productArray = $product->getAllProducts();
            return response()->json($productArray);
        }
    }

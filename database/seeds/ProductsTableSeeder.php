<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProductsTableSeeder extends Seeder
{
    /*
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(array(
            array( 'productTitle' => 'Mellanmjölk', 'productType' => 'Mejeri & Ägg', 'productProducer' => 'Coop', 'productPrice' => 13, 'productAmount' => 10, ),

            array( 'productTitle' => 'Mellanmjölk', 'productType' => 'Mejeri & Ägg', 'productProducer' => 'Arla', 'productPrice' => 11, 'productAmount' => 20, ),
            
            array( 'productTitle' => 'Mellanmjölk', 'productType' => 'Mejeri & Ägg', 'productProducer' => 'Anglamark', 'productPrice' => 12, 'productAmount' => 30, ),
            
            array( 'productTitle' => 'Bananer', 'productType' => 'Frukt & Grönsaker', 'productProducer' => 'Ecuador', 'productPrice' => 28, 'productAmount' => 55, ),
            
            array( 'productTitle' => 'Bananer', 'productType' => 'Frukt & Grönsaker', 'productProducer' => 'Änglamark', 'productPrice' => 30, 'productAmount' => 45, ),
            
            array( 'productTitle' => 'Potatis', 'productType' => 'Frukt & Grönsaker', 'productProducer' => 'Storbritanien', 'productPrice' => 9, 'productAmount' => 121, ),
            
            array( 'productTitle' => 'Potatis', 'productType' => 'Frukt & Grönsaker', 'productProducer' => 'Storbritanien', 'productPrice' => 22, 'productAmount' => 78, ),
            
            array( 'productTitle' => 'Potatis', 'productType' => 'Frukt & Grönsaker', 'productProducer' => 'USA', 'productPrice' => 96, 'productAmount' => 52, ),
            
            array( 'productTitle' => 'Äpple', 'productType' => 'Frukt & Grönsaker', 'productProducer' => 'Holland', 'productPrice' => 30, 'productAmount' => 130, ),
            
            array( 'productTitle' => 'Äpple', 'productType' => 'Frukt & Grönsaker', 'productProducer' => 'Italien', 'productPrice' => 30, 'productAmount' => 89, ),
            
            array( 'productTitle' => 'Tomater', 'productType' => 'Frukt & Grönsaker', 'productProducer' => 'Marocko', 'productPrice' => 35, 'productAmount' => 76, ),
            
            array( 'productTitle' => 'Tomater', 'productType' => 'Frukt & Grönsaker', 'productProducer' => 'Holland', 'productPrice' => 45, 'productAmount' => 59, ),
            
            array( 'productTitle' => 'Coctailomater', 'productType' => 'Frukt & Grönsaker', 'productProducer' => 'Marocko', 'productPrice' => 69, 'productAmount' => 41, ),
            
            array( 'productTitle' => 'Smör', 'productType' => 'Mejeri & Ägg', 'productProducer' => 'Valio', 'productPrice' => 30, 'productAmount' => 280, ),
            
            array( 'productTitle' => 'Smör', 'productType' => 'Mejeri & Ägg', 'productProducer' => 'Coop', 'productPrice' => 39, 'productAmount' => 321, ),
            
            array( 'productTitle' => 'Smör', 'productType' => 'Mejeri & Ägg', 'productProducer' => 'Arla', 'productPrice' => 47, 'productAmount' => 92, ),
            
            array( 'productTitle' => 'Juice', 'productType' => 'Mejeri & Ägg', 'productProducer' => 'Innocent', 'productPrice' => 30, 'productAmount' => 18, ),
            
            array( 'productTitle' => 'Juice', 'productType' => 'Mejeri & Ägg', 'productProducer' => 'God Morgon', 'productPrice' => 18, 'productAmount' => 2, ),
            
            array( 'productTitle' => 'Juice', 'productType' => 'Mejeri & Ägg', 'productProducer' => 'Bravo', 'productPrice' => 25, 'productAmount' => 90, ),
            
            array( 'productTitle' => 'Ägg', 'productType' => 'Mejeri & Ägg', 'productProducer' => 'Änglamark', 'productPrice' => 40, 'productAmount' => 111, ),
            
            array( 'productTitle' => 'Ägg', 'productType' => 'Mejeri & Ägg', 'productProducer' => 'Coop', 'productPrice' => 40, 'productAmount' => 111, ),
            
            array( 'productTitle' => 'Kycklingfile', 'productType' => 'Kött & Fågel', 'productProducer' => 'Coop', 'productPrice' => 110, 'productAmount' => 43, ),
            
            array( 'productTitle' => 'Kycklingfile', 'productType' => 'Kött & Fågel', 'productProducer' => 'Guldfågel', 'productPrice' => 80, 'productAmount' => 73, ),
            
            array( 'productTitle' => 'Kyckling Hel', 'productType' => 'Kött & Fågel', 'productProducer' => 'Reko Kyckling', 'productPrice' => 248, 'productAmount' => 17, ),
            
            array( 'productTitle' => 'Kyckling Hel', 'productType' => 'Kött & Fågel', 'productProducer' => 'Kronofågel Bpsarp', 'productPrice' => 230, 'productAmount' => 2, ),
            
            array( 'productTitle' => 'Lövbiff', 'productType' => 'Kött & Fågel', 'productProducer' => 'Gräsbeteskött', 'productPrice' => 38, 'productAmount' => 16, ),
            
            array( 'productTitle' => 'Lax Kallrökt', 'productType' => 'Fisk & Skaldjur', 'productProducer' => 'Änglamark', 'productPrice' => 48, 'productAmount' => 52, ),
            
            array( 'productTitle' => 'Lax Kallrökt', 'productType' => 'Fisk & Skaldjur', 'productProducer' => 'Coop', 'productPrice' => 53, 'productAmount' => 53, ),
            
            array( 'productTitle' => 'Frukost', 'productType' => 'Bröd & Bageri', 'productProducer' => 'Wasa', 'productPrice' => 21, 'productAmount' => 20, ),
            
            array( 'productTitle' => 'Råg', 'productType' => 'Bröd & Bageri', 'productProducer' => 'Fazer', 'productPrice' => 25, 'productAmount' => 12, ),
            
            array( 'productTitle' => 'Knäckebröd', 'productType' => 'Bröd & Bageri', 'productProducer' => 'Coop', 'productPrice' => 11, 'productAmount' => 42, ),
            
            array( 'productTitle' => 'Semla', 'productType' => 'Bröd & Bageri', 'productProducer' => 'Easybake', 'productPrice' => 30, 'productAmount' => 8, ),
            
            array( 'productTitle' => 'Kanelsnäcka', 'productType' => 'Bröd & Bageri', 'productProducer' => 'Alimenta', 'productPrice' => 10, 'productAmount' => 14, ),
            
            array( 'productTitle' => 'Präst', 'productType' => 'Ost', 'productProducer' => 'Arla', 'productPrice' => 65, 'productAmount' => 13, ),
            
            array( 'productTitle' => 'Präst', 'productType' => 'Ost', 'productProducer' => 'Skånemejerier', 'productPrice' => 88, 'productAmount' => 13, )
    ));
    }
}

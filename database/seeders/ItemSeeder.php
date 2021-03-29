<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            [
                'name' => 'Women Crop Top Sleeveless - Pink',
                'price' => 29.90,
                'image' => 'https://cdn.shopify.com/s/files/1/0450/7376/0420/products/HE6583.jpg',
                'quantity' => 30,
                'category' => 'Women',
                'created_by' => 'System',
                'user_id' => 0,
                'description' => '',
                "created_at" =>  \Carbon\Carbon::now(),
                "updated_at" => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Women Graphic Short Sleeve T-Shirt - Yellow ',
                'price' => 39.90,
                'image' => 'https://cdn.shopify.com/s/files/1/0450/7376/0420/products/HIS0561.jpg',
                'quantity' => 20,
                'category' => 'Women',
                'created_by' => 'System',
                'user_id' => 0,
                'description' => '',
                "created_at" =>  \Carbon\Carbon::now(),
                "updated_at" => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Women Graphic Short Sleeve T-Shirt - Light Orange',
                'price' => 49.90,
                'image' => 'https://cdn.shopify.com/s/files/1/0450/7376/0420/products/HIS3071.jpg',
                'quantity' => 40,
                'category' => 'Women',
                'created_by' => 'System',
                'user_id' => 0,
                'description' => '',
                "created_at" =>  \Carbon\Carbon::now(),
                "updated_at" => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Women Graphic Short Sleeve T-Shirt - Light Green',
                'price' => 29.90,
                'image' => 'https://cdn.shopify.com/s/files/1/0450/7376/0420/products/HIS3697.jpg',
                'quantity' => 50,
                'category' => 'Women',
                'created_by' => 'System',
                'user_id' => 0,
                'description' => '',
                "created_at" =>  \Carbon\Carbon::now(),
                "updated_at" => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Women V Neck Short Sleeve Ribbed T-Shirt - NAVY',
                'price' => 69.90,
                'image' => 'https://cdn.shopify.com/s/files/1/0450/7376/0420/products/Untitled-Session5480.jpg',
                'quantity' => 60,
                'category' => 'Women',
                'created_by' => 'System',
                'user_id' => 0,
                'description' => '',
                "created_at" =>  \Carbon\Carbon::now(),
                "updated_at" => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Women Crop Top Tee - Army Green',
                'price' => 99.90,
                'image' => 'https://cdn.shopify.com/s/files/1/0450/7376/0420/products/HE7230.jpg',
                'quantity' => 35,
                'category' => 'Women',
                'created_by' => 'System',
                'user_id' => 0,
                'description' => '',
                "created_at" =>  \Carbon\Carbon::now(),
                "updated_at" => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Men Plain Short Sleeve Shirt - Black',
                'price' => 69.90,
                'image' => 'https://cdn.shopify.com/s/files/1/0450/7376/0420/products/HE6623.jpg',
                'quantity' => 30,
                'category' => 'Men',
                'created_by' => 'System',
                'user_id' => 0,
                'description' => '',
                "created_at" =>  \Carbon\Carbon::now(),
                "updated_at" => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Men Smart Casual Long Sleeve Shirt - Black',
                'price' => 29.90,
                'image' => 'https://cdn.shopify.com/s/files/1/0450/7376/0420/products/HI02005.jpg',
                'quantity' => 45,
                'category' => 'Men',
                'created_by' => 'System',
                'user_id' => 0,
                'description' => '',
                "created_at" =>  \Carbon\Carbon::now(),
                "updated_at" => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Men Plain Short Sleeve Shirt - White',
                'price' => 29.90,
                'image' => 'https://cdn.shopify.com/s/files/1/0450/7376/0420/products/HS57642.jpg',
                'quantity' => 30,
                'category' => 'Men',
                'created_by' => 'System',
                'user_id' => 0,
                'description' => '',
                "created_at" =>  \Carbon\Carbon::now(),
                "updated_at" => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Men Leaf Short Sleeve Shirt - Red',
                'price' => 29.90,
                'image' => 'https://cdn.shopify.com/s/files/1/0450/7376/0420/products/histyleaug1911719.jpg',
                'quantity' => 40,
                'category' => 'Men',
                'created_by' => 'System',
                'user_id' => 0,
                'description' => '',
                "created_at" =>  \Carbon\Carbon::now(),
                "updated_at" => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Men Short Sleeve Chambray Shirt - Navy',
                'price' => 29.90,
                'image' => 'https://cdn.shopify.com/s/files/1/0450/7376/0420/products/HI02450.jpg',
                'quantity' => 70,
                'category' => 'Men',
                'created_by' => 'System',
                'user_id' => 0,
                'description' => '',
                "created_at" =>  \Carbon\Carbon::now(),
                "updated_at" => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Men Checkered Long Sleeve Shirt - Red',
                'price' => 29.90,
                'image' => 'https://cdn.shopify.com/s/files/1/0450/7376/0420/products/HE6662.jpg',
                'quantity' => 20,
                'category' => 'Men',
                'created_by' => 'System',
                'user_id' => 0,
                'description' => '',
                "created_at" =>  \Carbon\Carbon::now(),
                "updated_at" => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Cotton Ribbed Loungewear Set - Olive Green',
                'price' => 29.90,
                'image' => 'https://cdn.shopify.com/s/files/1/0010/1223/6403/products/product-model-202_600x.jpg',
                'quantity' => 25,
                'category' => 'Kids',
                'created_by' => 'System',
                'user_id' => 0,
                'description' => '',
                "created_at" =>  \Carbon\Carbon::now(),
                "updated_at" => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Square Neck Top, Daisy',
                'price' => 39.90,
                'image' => 'https://cdn.shopify.com/s/files/1/0010/1223/6403/products/model_2_600x.jpg',
                'quantity' => 50,
                'category' => 'Kids',
                'created_by' => 'System',
                'user_id' => 0,
                'description' => '',
                "created_at" =>  \Carbon\Carbon::now(),
                "updated_at" => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Empire Dress - Mint Green',
                'price' => 19.90,
                'image' => 'https://cdn.shopify.com/s/files/1/0010/1223/6403/products/model_13_600x.jpg',
                'quantity' => 10,
                'category' => 'Kids',
                'created_by' => 'System',
                'user_id' => 0,
                'description' => '',
                "created_at" =>  \Carbon\Carbon::now(),
                "updated_at" => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Cotton Linen Short - Cantaloupe',
                'price' => 99.90,
                'image' => 'https://cdn.shopify.com/s/files/1/0010/1223/6403/products/model_30_600x.jpg',
                'quantity' => 65,
                'category' => 'Kids',
                'created_by' => 'System',
                'user_id' => 0,
                'description' => '',
                "created_at" =>  \Carbon\Carbon::now(),
                "updated_at" => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Square Neck Dress - Periwinkle Purple',
                'price' => 49.90,
                'image' => 'https://cdn.shopify.com/s/files/1/0010/1223/6403/products/model_25_600x.jpg',
                'quantity' => 35,
                'category' => 'Kids',
                'created_by' => 'System',
                'user_id' => 0,
                'description' => '',
                "created_at" =>  \Carbon\Carbon::now(),
                "updated_at" => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Soft Cotton Top - Garnet Red',
                'price' => 29.90,
                'image' => 'https://cdn.shopify.com/s/files/1/0010/1223/6403/products/model_37_600x.jpg',
                'quantity' => 20,
                'category' => 'Kids',
                'created_by' => 'System',
                'user_id' => 0,
                'description' => '',
                "created_at" =>  \Carbon\Carbon::now(),
                "updated_at" => \Carbon\Carbon::now()
            ],
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
            'name'=>'Samsung M31',
            'price'=>'14499',
            'category'=>'Mobile',
            'description'=>'4G Mobile with 6GB RAM and 16pxl',
            'gallery'=>'https://vlebazaar.in/image/cache/catalog//B087RT6N5L/Samsung-Galaxy-M31-6GB-64GB-Space-Black-B087RT6N5L-550x550h.jpg',
            ],
            [
                'name'=>'MI X2',
                'price'=>'18999',
                'category'=>'Mobile',
                'description'=>'4G Mobile with 4GB RAM and 32pxl',
                'gallery'=>'https://i.gadgets360cdn.com/products/large/xiaomi-mi-9t-db-369x800-1560921039.jpg',
            ],
            [
                'name'=>'HP 8GB 256GBSSD',
                'price'=>'16999',
                'category'=>'Laptop',
                'description'=>'Windows Laptop With 8GB RAM and 256GBSSD',
                'gallery'=>'https://5.imimg.com/data5/WT/WU/MY-13922529/hp-laptop-500x500.jpg',
            ]
        ]);
    }
}

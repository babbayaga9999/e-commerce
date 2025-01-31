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
            'name'=>'Oppo mobile',
            'price'=>'20000',
            'description'=>'a smartphone with 8gb ram and much more features',
            'category'=>'mobile',
            'gallery'=>'https://m.media-amazon.com/images/I/81ZFLjC0JJL._AC_UY218_.jpg'
            
        ],
        [
            'name'=>'xiaomi tv',
            'price'=>'40000',
            'description'=>'a smart tv with beautiful panel and much more features',
            'category'=>'tv',
            'gallery'=>'https://m.media-amazon.com/images/I/81DThWoxTuL._AC_UY218_.jpg'
            
        ],
        [
            'name'=>'Dell tv',
            'price'=>'25000',
            'description'=>'a smart tv with  much more features',
            'category'=>'tv',
            'gallery'=>'https://m.media-amazon.com/images/I/61uUuuEilxL._AC_UL640_QL65_.jpg'
            
        ],
        [
            'name'=>'Godrej refrigerator',
            'price'=>'10000',
            'description'=>'244L refrigerator with much more features',
            'category'=>'refrigerator',
            'gallery'=>'https://m.media-amazon.com/images/I/519sPuNsCDL._AC_UY218_.jpg'
            
        ],

    ]);
    }
}

<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =[
            [
                'product_name'=>'Tshirt-1',
                'product_code'=>'TS-001',
                'details'=>'Cotton Tshirt-1 for formal getup',
                'logo'=>'tshirt-1.png',
            ],
            [
                'product_name'=>'Tshirt-2',
                'product_code'=>'TS-002',
                'details'=>'Cotton Tshirt-2 for formal getup',
                'logo'=>'tshirt-2.png',
            ],
            [
                'product_name'=>'Tshirt-3',
                'product_code'=>'TS-003',
                'details'=>'Cotton Tshirt-3 for formal getup',
                'logo'=>'tshirt-3.png',
            ],
        ];
        Product::insert($data);
    }
}

<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Product = new \App\Product([
            'imagePath' => 'http://ecx.images-amazon.com/images/I/919-FLL37TL.jpg',
            'description' => 'This phone is the best Phone and the coolest ever',
            'title' => 'Iphone X',
            'price' => 1250,
        ]);
        $Product->save();
        $Product = new \App\Product([
            'imagePath' => 'http://ecx.images-amazon.com/images/I/919-FLL37TL.jpg',
            'description' => 'This phone is the best Phone and the coolest ever',
            'title' => 'Iphone X',
            'price' => 1250,
        ]);
        $Product->save();
        $Product = new \App\Product([
            'imagePath' => 'http://ecx.images-amazon.com/images/I/919-FLL37TL.jpg',
            'description' => 'This phone is the best Phone and the coolest ever',
            'title' => 'Iphone X',
            'price' => 1250,
        ]);
        $Product->save();
        $Product = new \App\Product([
            'imagePath' => 'http://ecx.images-amazon.com/images/I/919-FLL37TL.jpg',
            'description' => 'This phone is the best Phone and the coolest ever',
            'title' => 'Iphone X',
            'price' => 1250,
        ]);
        $Product->save();
        $Product = new \App\Product([
            'imagePath' => 'http://ecx.images-amazon.com/images/I/919-FLL37TL.jpg',
            'description' => 'This phone is the best Phone and the coolest ever',
            'title' => 'Iphone X',
            'price' => 1250,
        ]);
        $Product->save();
    }
}

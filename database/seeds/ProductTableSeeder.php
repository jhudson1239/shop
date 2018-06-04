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
        DB::table('product')->insert(array(
            array('id' => '1', 'name'=> 'BURVIK', 'description' => 'The side table is light and small enough to lift with one hand, and the handle makes it easy to carry around the home','price' => '27', 'image' => '/img/sidetable/burvik.jpg', 'dimensions' => '78x38', 'collection' => 'NA', 'type' => 'Side Table'),
            array('id' => '2', 'name'=> 'GUALOV', 'description' => 'You can store everything from throws and pillows to newspapers and yarn in the basket - or let it stay empty to give an open, spacious feeling.','price' => '40', 'image' => '/img/sidetable/gualov.jpg', 'dimensions' => '47x60', 'collection' => 'NA', 'type' => 'Side Table'),
            array('id' => '3', 'name'=> 'LACK', 'description' => 'Separate shelf for magazines, etc. helps you keep your things organised and the table top clear.','price' => '14', 'image' => '/img/sidetable/lack.jpeg', 'dimensions' => '45x55x90', 'collection' => 'NA', 'type' => 'Side Table'),
            
            array('id' => '4', 'name'=> 'SONGE', 'description' => 'Signs of aging and slight imperfections give this mirror a vintage look, and is the result of a special surface treatment.','price' => '100', 'image' => '/img/mirror/songe.jpg', 'dimensions' => '130x91', 'collection' => 'NA', 'type' => 'Mirror'),
            array('id' => '5', 'name'=> 'HEMNES', 'description' => 'Provided with safety film - reduces damage if glass is broken.','price' => '50', 'image' => '/img/mirror/hemnes.jpeg', 'dimensions' => '90x60', 'collection' => 'NA', 'type' => 'Mirror'),
            array('id' => '6', 'name'=> 'MONGSTAD', 'description' => 'Full-length mirror.','price' => '100', 'image' => '/img/mirror/mongstad.jpeg', 'dimensions' => '190x94', 'collection' => 'NA', 'type' => 'Mirror'),  
        ));
    }
}

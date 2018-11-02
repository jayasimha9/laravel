<?php

use Illuminate\Database\Seeder;

//use App\settings;

class settingstableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\settings::create([
            
           'sitename' => 'blog',
            'contactnumber'=>'9703788480',
            'address'=>'BV Nagar',
            'contactemail'=>'rajujayasimha@gmail.com'
            
            
        ]);
    }
}

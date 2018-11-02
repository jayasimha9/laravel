<?php

use Illuminate\Database\Seeder;
use App\User;
use App\profile;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
       $user = App\User::create([
            
            'name' => 'jay',
            'email' => 'jayasimha.mudduluru@cgi.com',
            'password' => bcrypt('password'),
            'admin' => 1,
            
            
            
            
        ]);
        
        profile::create([
            
            'user_id' => $user->id,
            'avatar' => 'uploads/e5.jpg',
            'about' => 'hello',
            'facebook' => 'facebook.com',
            'youtube' => 'youtube.com',
            
            
            
            
            
        ]);
        
        
        
        
        
        
    }
}

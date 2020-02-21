<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder{

   /**
    * Run the database seeds.
    *
    * @return void
    */
   public function run(){

      /*
      User::create([
         'name' => 'John Doe',
         'email' => 'demo@demo.com',
         'password' => bcrypt('secret')
      ]);
      */

      //User::truncate();
      factory(User::class, 20)->create();
   }
}

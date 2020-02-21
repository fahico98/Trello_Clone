<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\Task;
use App\User;

class TasksTableSeeder extends Seeder{

   /**
    * Run the database seeds.
    *
    * @return void
    */
   public function run(){
      //Task::truncate();
      factory(Task::class, 50)->create();
   }
}

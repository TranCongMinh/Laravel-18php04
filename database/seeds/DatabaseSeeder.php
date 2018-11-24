<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
        	'username' => str_random(15),
        	'loginname' => str_random(15),
        	'password' => str_random(15),
        	
        	'email' => str_random(15).'@gmail.com',

        ]);
    }
}

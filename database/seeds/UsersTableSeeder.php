<?php

use App\Events\Inst;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();

        // Create admin account
        DB::table('users')->insert([
            'type' => 'admin',
            'name' => 'Admin',            
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin')
        ]);
        // Create User account
        DB::table('users')->insert([
            'type' => 'user',
            'name' => 'User',            
            'email' => 'user@user.com',
            'password' => bcrypt('123456')
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $data = [
             'username' => 'admin',
             'password'=>bcrypt('admin'),
             'email'=>'1063632283@qq.com'
        ];
         User::create($data);
    }
}

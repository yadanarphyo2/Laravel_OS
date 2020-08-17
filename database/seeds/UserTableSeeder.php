<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=new User;
        $user->name="Admin";
        $email->email='admin@mail.com';
        $user->password=Hash::make('1235678');
        $user->save();
        $user->assignRole('admin');
    }
}

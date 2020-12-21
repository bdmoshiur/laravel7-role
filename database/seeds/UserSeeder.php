<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email','admin@gmail.com')->first();
        if(is_null($user)){
            $user = new User();
            $user->name = "Admin";
            $user->email = "admin@gmail.com";
            $user->password = Hash::make('admin@gmail.com');
            $user->save();
        }

    }
}

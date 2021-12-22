<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
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
        $user = new User();
        $user->name='Ikhsan Muhamad Ramadan';
        $user->email='ikhsan@gmail.com';
        $user->password = Hash::make('12345678');
        $user->save();

        $user = new User();
        $user->name='Altaf Fadli';
        $user->email='altaf@gmail.com';
        $user->password = Hash::make('123456789');
        $user->save();

        $user = new User();
        $user->name='Muhammad Fatah';
        $user->email='fatah@gmail.com';
        $user->password = Hash::make('123456789');
        $user->save();

        $user = new User();
        $user->name='Sergio Jason';
        $user->email='jason@gmail.com';
        $user->password = Hash::make('12345678');
        $user->save();

        $user = new User();
        $user->name='Siti Maimunah';
        $user->email='siti@gmail.com';
        $user->password = Hash::make('12345678');
        $user->save();
    }
}

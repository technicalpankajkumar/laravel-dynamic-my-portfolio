<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class admin_seeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        User::create([
        'f_name'=>'Pankaj',
        'l_name'=>'Kumar',
        'email'=>'technicalpankajkumar@gmail.com',
        'password'=>Hash::make('Pankajkumar@Laravel@#8090'),
        'mobile_number'=>8090433558
        ]);
    }
}

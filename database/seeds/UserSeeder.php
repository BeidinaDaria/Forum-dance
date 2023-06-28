<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $us=User::create([
            'name'=>'Jerry',
            'email'=>'ld181@mail.ru',
            'password'=>Hash::male('qwer1234'),
        ]);
        $us->asignRole('super-admin');
    }
}

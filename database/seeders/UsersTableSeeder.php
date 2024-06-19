<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Crypt;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::factory()->count(50)->create();

        $user = User::find(1);
        $user->name = 'Jack';
        $user->email = '1210704663@qq.com';
        $user->password = bcrypt('12345678');
        $user->is_admin = true;
        $user->save();
    }
}

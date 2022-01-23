<?php

namespace Database\Seeders;

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
        //
        $user = new User;
        $user->name = "AslanUser1";
        $user->email = "aslanuser1@gmail.com";
        $user->role = 0;
        $user->password = bcrypt('aslanuser1'); 
        $user->save();
    }
}

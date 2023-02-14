<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = Role::where('name','user')->first();
        $role_admin = Role::where('name','admin')->first();

        $user1 = new User();
        $user1->name = "user";
        $user1->email = "user@gmail.com";
        $user1->password = bcrypt('query');
        $user1->save();
        $user1->roles()->attach($role_user);

        $user2 = new User();
        $user2->name = "admin";
        $user2->email = "admin@gmail.com";
        $user2->password = bcrypt('query');
        $user2->save();
        $user2->roles()->attach($role_admin);
    }
}

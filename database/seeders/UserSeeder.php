<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'cashier']);
        Role::create(['name' => 'chef']);

        User::create([
            'name'      => 'Admin',
            'email'     => 'admin@mail.com',
            'password'  => bcrypt('password')
        ]);
        
        User::create([
            'name'      => 'Kasir',
            'email'     => 'kasir@mail.com',
            'password'  => bcrypt('password')
        ]);

        User::create([
            'name'      => 'Chef',
            'email'     => 'chef@mail.com',
            'password'  => bcrypt('password')
        ]);
    }
}

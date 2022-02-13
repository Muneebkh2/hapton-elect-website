<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $users = [
            [
                'name' => 'Admin',
                'email' => 'admin@hapton.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('123456')
            ]
        ];

        // Servcategory::insert($products);
        collect($users)->each(function ($user) { User::create($user); });
    }
}

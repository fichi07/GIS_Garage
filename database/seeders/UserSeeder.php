<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin laundry',
            'email' => 'admin.laundry@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('admin123'),
            'is_admin' => true,
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Alby Laundry',
            'email' => 'alby.laundry@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'is_admin' => false,
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Putri Laundry',
            'email' => 'putri.laundry@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'is_admin' => false,
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Ikko Laundry',
            'email' => 'ikko.laundry@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'is_admin' => false,
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Wei Laundry',
            'email' => 'wei.laundry@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'is_admin' => false,
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'O Mee Laundry',
            'email' => 'mee.laundry@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'is_admin' => false,
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Kartika Laundry Mart',
            'email' => 'kartikamart.laundry@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'is_admin' => false,
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Waroenk Laundry',
            'email' => 'waroenk.laundry@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'is_admin' => false,
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Arafah Laundry',
            'email' => 'arafah.laundry@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'is_admin' => false,
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Assalamualaikum Laundry',
            'email' => 'salam.laundry@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'is_admin' => false,
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Buzz Laundry',
            'email' => 'buzz.laundry@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'is_admin' => false,
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Wils Wash Laundry',
            'email' => 'ww.laundry@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'is_admin' => false,
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Al Fazza Laundry',
            'email' => 'fazza.laundry@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'is_admin' => false,
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'AFN Laundry',
            'email' => 'afn.laundry@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'is_admin' => false,
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Fanseb Laundry',
            'email' => 'fanseb.laundry@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'is_admin' => false,
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'D Laundry',
            'email' => 'd.laundry@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'is_admin' => false,
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Keyla Laundry',
            'email' => 'keyla.laundry@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'is_admin' => false,
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'HM Laundry',
            'email' => 'hm.laundry@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'is_admin' => false,
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Berkah Laundry',
            'email' => 'berkah.laundry@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'is_admin' => false,
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Kapten Laundry',
            'email' => 'kapten.laundry@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'is_admin' => false,
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Samarinda Laundry Mart',
            'email' => 'smdmart.laundry@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'is_admin' => false,
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Neo Laundry',
            'email' => 'neo.laundry@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'is_admin' => false,
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Richman Laundry',
            'email' => 'richman.laundry@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'is_admin' => false,
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Area Laundry',
            'email' => 'areasmd.laundry@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'is_admin' => false,
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Reyhan Laundry',
            'email' => 'reyhan.laundry@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'is_admin' => false,
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Yuk Laundry',
            'email' => 'kuysmd.laundry@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'is_admin' => false,
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Fresh Laundry',
            'email' => 'fresh.laundry@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'is_admin' => false,
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Ibay Laundry',
            'email' => 'ibay.laundry@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'is_admin' => false,
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Wozmi Laundry',
            'email' => 'wozmi.laundry@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'is_admin' => false,
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Gerai Laundry',
            'email' => 'gerai.laundry@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'is_admin' => false,
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Elmadinah Laundry',
            'email' => 'madinahsmd.laundry@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'is_admin' => false,
            'remember_token' => Str::random(10),
        ]);
    }
}

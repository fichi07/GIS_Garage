<?php

namespace Database\Seeders;

use App\Models\Transaksi;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class TransaksiSeeder extends Seeder
{
    /**
     * Run Sthe database seeds.
     *
     * @return void
     */
    public function run()
    {
        Transaksi::create([
            'nama' => 'Maya Putri Azzahra',
            'berat' => mt_rand(1,5),
            'nama_toko' => 'Alby Laundry',
            'token' => Str::random(6),
            // 'toko_id' => 1,
            'layanan_id' => mt_rand(1,30),
            'status_id' => mt_rand(1,5),
        ]);

        Transaksi::create([
            'nama' => 'Maya Putri Azzahra',
            'berat' => mt_rand(1,5),
            'nama_toko' => 'Putri Laundry',
            'token' => Str::random(6),
            // 'toko_id' => 2,
            'layanan_id' => mt_rand(1,30),
            'status_id' => mt_rand(1,5),
        ]);

        Transaksi::create([
            'nama' => 'Maya Putri Azzahra',
            'berat' => mt_rand(1,5),
            'nama_toko' => 'Ikko Laundry',
            'token' => Str::random(6),
            // 'toko_id' => 3,
            'layanan_id' => mt_rand(1,30),
            'status_id' => mt_rand(1,5),
        ]);

        Transaksi::create([
            'nama' => 'Maya Putri Azzahra',
            'berat' => mt_rand(1,5),
            'nama_toko' => 'Wei Laundry',
            'token' => Str::random(6),
            // 'toko_id' => 4,
            'layanan_id' => mt_rand(1,30),
            'status_id' => mt_rand(1,5),
        ]);

        Transaksi::create([
            'nama' => 'Maya Putri Azzahra',
            'berat' => mt_rand(1,5),
            'nama_toko' => 'O Mee Laundry',
            'token' => Str::random(6),
            // 'toko_id' => 5,
            'layanan_id' => mt_rand(1,30),
            'status_id' => mt_rand(1,5),
        ]);

        Transaksi::create([
            'nama' => 'Maya Putri Azzahra',
            'berat' => mt_rand(1,5),
            'nama_toko' => 'Kartika Laundry Mart',
            'token' => Str::random(6),
            // 'toko_id' => 6,
            'layanan_id' => mt_rand(1,30),
            'status_id' => mt_rand(1,5),
        ]);

        Transaksi::create([
            'nama' => 'Maya Putri Azzahra',
            'berat' => mt_rand(1,5),
            'nama_toko' => 'Waroenk Laundry',
            'token' => Str::random(6),
            // 'toko_id' => 7,
            'layanan_id' => mt_rand(1,30),
            'status_id' => mt_rand(1,5),
        ]);

        Transaksi::create([
            'nama' => 'Maya Putri Azzahra',
            'berat' => mt_rand(1,5),
            'nama_toko' => 'Arafah Laundry',
            'token' => Str::random(6),
            // 'toko_id' => 8,
            'layanan_id' => mt_rand(1,30),
            'status_id' => mt_rand(1,5),
        ]);

        Transaksi::create([
            'nama' => 'Maya Putri Azzahra',
            'berat' => mt_rand(1,5),
            'nama_toko' => 'Assalamualaikum Laundry',
            'token' => Str::random(6),
            // 'toko_id' => 9,
            'layanan_id' => mt_rand(1,30),
            'status_id' => mt_rand(1,5),
        ]);

        Transaksi::create([
            'nama' => 'Maya Putri Azzahra',
            'berat' => mt_rand(1,5),
            'nama_toko' => 'Buzz Laundry',
            'token' => Str::random(6),
            // 'toko_id' => 10,
            'layanan_id' => mt_rand(1,30),
            'status_id' => mt_rand(1,5),
        ]);

        Transaksi::create([
            'nama' => 'Maya Putri Azzahra',
            'berat' => mt_rand(1,5),
            'nama_toko' => 'Wils Wash Laundry',
            'token' => Str::random(6),
            // 'toko_id' => 11,
            'layanan_id' => mt_rand(1,30),
            'status_id' => mt_rand(1,5),
        ]);

        Transaksi::create([
            'nama' => 'Maya Putri Azzahra',
            'berat' => mt_rand(1,5),
            'nama_toko' => 'Al Fazza Laundry',
            'token' => Str::random(6),
            // 'toko_id' => 12,
            'layanan_id' => mt_rand(1,30),
            'status_id' => mt_rand(1,5),
        ]);

        Transaksi::create([
            'nama' => 'Maya Putri Azzahra',
            'berat' => mt_rand(1,5),
            'nama_toko' => 'Afn Laundry',
            'token' => Str::random(6),
            // 'toko_id' => 13,
            'layanan_id' => mt_rand(1,30),
            'status_id' => mt_rand(1,5),
        ]);

        Transaksi::create([
            'nama' => 'Maya Putri Azzahra',
            'berat' => mt_rand(1,5),
            'nama_toko' => 'Fanseb Laundry',
            'token' => Str::random(6),
            // 'toko_id' => 14,
            'layanan_id' => mt_rand(1,30),
            'status_id' => mt_rand(1,5),
        ]);

        Transaksi::create([
            'nama' => 'Maya Putri Azzahra',
            'berat' => mt_rand(1,5),
            'nama_toko' => 'D Laundry',
            'token' => Str::random(6),
            // 'toko_id' => 15,
            'layanan_id' => mt_rand(1,30),
            'status_id' => mt_rand(1,5),
        ]);

        Transaksi::create([
            'nama' => 'Maya Putri',
            'berat' => mt_rand(1,5),
            'nama_toko' => 'Keyla Laundry',
            'token' => Str::random(6),
            // 'toko_id' => 16,
            'layanan_id' => mt_rand(1,30),
            'status_id' => mt_rand(1,5),
        ]);

        Transaksi::create([
            'nama' => 'Maya Putri',
            'berat' => mt_rand(1,5),
            'nama_toko' => 'HM Laundry',
            'token' => Str::random(6),
            // 'toko_id' => 17,
            'layanan_id' => mt_rand(1,30),
            'status_id' => mt_rand(1,5),
        ]);

        Transaksi::create([
            'nama' => 'Maya Putri',
            'berat' => mt_rand(1,5),
            'nama_toko' => 'Berkah Laundry',
            'token' => Str::random(6),
            // 'toko_id' => 18,
            'layanan_id' => mt_rand(1,30),
            'status_id' => mt_rand(1,5),
        ]);

        Transaksi::create([
            'nama' => 'Maya Putri',
            'berat' => mt_rand(1,5),
            'nama_toko' => 'Kapten Laundry',
            'token' => Str::random(6),
            // 'toko_id' => 19,
            'layanan_id' => mt_rand(1,30),
            'status_id' => mt_rand(1,5),
        ]);

        Transaksi::create([
            'nama' => 'Maya Putri',
            'berat' => mt_rand(1,5),
            'nama_toko' => 'Samarinda Laundry Mart',
            'token' => Str::random(6),
            // 'toko_id' => 20,
            'layanan_id' => mt_rand(1,30),
            'status_id' => mt_rand(1,5),
        ]);

        Transaksi::create([
            'nama' => 'Maya Putri',
            'berat' => mt_rand(1,5),
            'nama_toko' => 'Neo Laundry',
            'token' => Str::random(6),
            // 'toko_id' => 21,
            'layanan_id' => mt_rand(1,30),
            'status_id' => mt_rand(1,5),
        ]);

        Transaksi::create([
            'nama' => 'Maya Putri',
            'berat' => mt_rand(1,5),
            'nama_toko' => 'Richman Laundry',
            'token' => Str::random(6),
            // 'toko_id' => 22,
            'layanan_id' => mt_rand(1,30),
            'status_id' => mt_rand(1,5),
        ]);

        Transaksi::create([
            'nama' => 'Maya Putri',
            'berat' => mt_rand(1,5),
            'nama_toko' => 'Area Laundry',
            'token' => Str::random(6),
            // 'toko_id' => 23,
            'layanan_id' => mt_rand(1,30),
            'status_id' => mt_rand(1,5),
        ]);

        Transaksi::create([
            'nama' => 'Maya Putri',
            'berat' => mt_rand(1,5),
            'nama_toko' => 'Reyhan Laundry',
            'token' => Str::random(6),
            // 'toko_id' => 24,
            'layanan_id' => mt_rand(1,30),
            'status_id' => mt_rand(1,5),
        ]);

        Transaksi::create([
            'nama' => 'Maya Putri',
            'berat' => mt_rand(1,5),
            'nama_toko' => 'Yuk Laundry',
            'token' => Str::random(6),
            // 'toko_id' => 25,
            'layanan_id' => mt_rand(1,30),
            'status_id' => mt_rand(1,5),
        ]);

        Transaksi::create([
            'nama' => 'Maya Putri',
            'berat' => mt_rand(1,5),
            'nama_toko' => 'Fresh Laundry',
            'token' => Str::random(6),
            // 'toko_id' => 26,
            'layanan_id' => mt_rand(1,30),
            'status_id' => mt_rand(1,5),
        ]);

        Transaksi::create([
            'nama' => 'Maya Putri',
            'berat' => mt_rand(1,5),
            'nama_toko' => 'Ibay Laundry',
            'token' => Str::random(6),
            // 'toko_id' => 27,
            'layanan_id' => mt_rand(1,30),
            'status_id' => mt_rand(1,5),
        ]);

        Transaksi::create([
            'nama' => 'Maya Putri',
            'berat' => mt_rand(1,5),
            'nama_toko' => 'Wozmi Laundry',
            'token' => Str::random(6),
            // 'toko_id' => 28,
            'layanan_id' => mt_rand(1,30),
            'status_id' => mt_rand(1,5),
        ]);

        Transaksi::create([
            'nama' => 'Maya Putri',
            'berat' => mt_rand(1,5),
            'nama_toko' => 'Gerai Laundry',
            'token' => Str::random(6),
            // 'toko_id' => 29,
            'layanan_id' => mt_rand(1,30),
            'status_id' => mt_rand(1,5),
        ]);

        Transaksi::create([
            'nama' => 'Maya Putri',
            'berat' => mt_rand(1,5),
            'nama_toko' => 'Elmadinah Laundry',
            'token' => Str::random(6),
            // 'toko_id' => 30,
            'layanan_id' => mt_rand(1,30),
            'status_id' => mt_rand(1,5),
        ]);


    }
}

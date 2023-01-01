<?php

namespace Database\Seeders;

use App\Models\Toko;
use Illuminate\Database\Seeder;

class TokoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jam_buka = '08:00:00';
        $jam_tutup = '22:00:00';

        Toko::create([
            'x' => '-0.471852',
            'y' => '117.160556',
            'jam_buka' => $jam_buka,
            'jam_tutup' => '16:00:00',
            'nama' => 'Alby Laundry',
            'no_hp' => '08125461564',
            'alamat' => 'Jl. Gelatik 2 No. 1, Sungai Pinang Dalam, Kec. Sungai Pinang, Kota Samarinda, Kalimantan Timur'
        ]);

        Toko::create([
            'x' => '-0.465523',
            'y' => '117.172613',
            'jam_buka' => $jam_buka,
            'jam_tutup' => '20:00:00',
            'nama' => 'Putri Laundry',
            'no_hp' => '082122074447',
            'alamat' => 'Jl. DI Panjaitan No. 10, Sungai Pinang Dalam, Kec. Sungai Pinang, Kota Samarinda, Kalimantan Timur'
        ]);

        Toko::create([
            'x' => '-0.462351',
            'y' => '117.174818',
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'nama' => 'Ikko Laundry',
            'no_hp' => '085348555518',
            'alamat' => 'Jl. DI Panjaitan No. 12, Sungai Pinang Dalam, Kec. Sungai Pinang, Kota Samarinda, Kalimantan Timur'
        ]);

        Toko::create([
            'x' => '-0.475619',
            'y' => '117.14688',
            'jam_buka' => $jam_buka,
            'jam_tutup' => '18:00:00',
            'nama' => 'Wei Laundry',
            'no_hp' => '082154596305',
            'alamat' => 'Jl. Elang Di No.52, Sungai Pinang Dalam, Kec. Sungai Pinang, Kota Samarinda, Kalimantan Timur 75242'
        ]);

        Toko::create([
            'x' => '-0.480295',
            'y' => '117.135854',
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'nama' => 'O Mee Laundry',
            'no_hp' => '082252525525',
            'alamat' => 'Jl. Juanda No. 55, Sidodadi, Kec. Samarinda Ulu, Kota Samarinda, Kalimantan Timur'
        ]);

        Toko::create([
            'x' => '-0.499446',
            'y' => '117.120027',
            'jam_buka' => $jam_buka,
            'jam_tutup' => '19:00:00',
            'nama' => 'Kartika Laundry Mart',
            'no_hp' => '081346001655',
            'alamat' => 'Jl. KS Tubun Dalam, Dadi Mulya, Kec. Samarinda Ulu, Kota Samarinda, Kalimantan Timur 75243'
        ]);

        Toko::create([
            'x' => '-0.499446',
            'y' => '117.120014',
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'nama' => 'Waroenk Laundry',
            'no_hp' => '085266008894',
            'alamat' => 'Jl. Cendana No.6 kel, Karang Anyar, Kec. Sungai Kunjang, Kota Samarinda, Kalimantan Timur 75243'
        ]);

        Toko::create([
            'x' => '-0.513166',
            'y' => '117.112576',
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'nama' => 'Arafah Laundry',
            'no_hp' => '08115540789',
            'alamat' => 'Jl. Teuku Umar Perumahan Bukit Indah Permai Blok M 3 B, Karang Asam Ilir, Kec. Sungai Kunjang, Kota Samarinda, Kalimantan Timur 75126'
        ]);

        Toko::create([
            'x' => '-0.513633',
            'y' => '117.113103',
            'jam_buka' => $jam_buka,
            'jam_tutup' => '17:00:00',
            'nama' => 'Assalamualaikum Laundry',
            'no_hp' => '082226639483',
            'alamat' => 'Jl. Adam Malik No.27, Karang Asam Ilir, Kec. Sungai Kunjang, Kota Samarinda, Kalimantan Timur 75243'
        ]);

        Toko::create([
            'x' => '-0.513962',
            'y' => '117.113434',
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'nama' => 'Buzz Laundry',
            'no_hp' => '082370007192',
            'alamat' => 'Jl. Bung Tomo No.24d, Sungai Keledang, Kec. Samarinda Seberang, Kota Samarinda, Kalimantan Timur 75242'
        ]);

        Toko::create([
            'x' => '-0.514826',
            'y' => '117.114752',
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'nama' => 'Wils Wash Laundry',
            'no_hp' => '082255665577',
            'alamat' => 'Jl. Bung Tomo No.32, Sungai Keledang, Kec. Samarinda Seberang, Kota Samarinda, Kalimantan Timur 75242'
        ]);

        Toko::create([
            'x' => '-0.519425',
            'y' => '117.117467',
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'nama' => 'Al Fazza Laundry',
            'no_hp' => '081349410573',
            'alamat' => 'Jl. Bung Tomo No.39, Sungai Keledang, Kec. Samarinda Seberang, Kota Samarinda, Kalimantan Timur 75242'
        ]);

        Toko::create([
            'x' => '-0.514298',
            'y' => '117.130418',
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'nama' => 'Afn Laundry',
            'no_hp' => '082152682968',
            'alamat' => 'Jl. Bung Tomo No.45, Sungai Keledang, Kec. Samarinda Seberang, Kota Samarinda, Kalimantan Timur 75242'
        ]);

        Toko::create([
            'x' => '-0.514097',
            'y' => '117.130682',
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'nama' => 'Fanseb Laundry',
            'no_hp' => '082353239957',
            'alamat' => 'Jl. Bung Tomo No.49, Sungai Keledang, Kec. Samarinda Seberang, Kota Samarinda, Kalimantan Timur 75242'
        ]);

        Toko::create([
            'x' => '-0.509394',
            'y' => '117.144966',
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'nama' => 'D Laundry',
            'no_hp' => '08115537377',
            'alamat' => 'Jl. Bung Tomo No.63, Sungai Keledang, Kec. Samarinda Seberang, Kota Samarinda, Kalimantan Timur 75242'
        ]);

        Toko::create([
            'x' => '-0.511399',
            'y' => '117.145409',
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'nama' => 'Keyla Laundry',
            'alamat' => 'Jl. Bung Tomo No.66, Sungai Keledang, Kec. Samarinda Seberang, Kota Samarinda, Kalimantan Timur 75242'
        ]);

        Toko::create([
            'x' => '-0.509638',
            'y' => '117.145299',
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'nama' => 'HM Laundry',
            'alamat' => 'Jl. Jelawat No.12, Mugirejo, Kec. Sungai Pinang, Kota Samarinda, Kalimantan Timur 75242'
        ]);

        Toko::create([
            'x' => '-0.471038',
            'y' => '117.158012',
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'nama' => 'Berkah Laundry',
            'no_hp' => '085820274597',
            'alamat' => 'Jl. Damanhuri No.12, Mugirejo, Kec. Sungai Pinang, Kota Samarinda, Kalimantan Timur 75242'
        ]);

        Toko::create([
            'x' => '-0.476979',
            'y' => '117.140177',
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'nama' => 'Kapten Laundry',
            'alamat' => 'Jl. Anggur Samarinda No. 13, Sidodadi, Kec. Samarinda Ulu, Kota Samarinda, Kalimantan Timur 75243'
        ]);

        Toko::create([
            'x' => '-0.485428',
            'y' => '117.141726',
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'nama' =>'Samarinda Laundry Mart',
            'no_hp' => '082155198519',
            'alamat' => 'Jl. Anggur Samarinda No. 45, Sidodadi, Kec. Samarinda Ulu, Kota Samarinda, Kalimantan Timur 75243'
        ]);

        Toko::create([
            'x' => '-0.497975',
            'y' => '117.135969',
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'nama' => 'Neo Laundry',
            'alamat' => 'Jl. Anggur Samarinda No. 56, Sidodadi, Kec. Samarinda Ulu, Kota Samarinda, Kalimantan Timur 75243'
        ]);

        Toko::create([
            'x' => '-0.507206',
            'y' => '117.177852',
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'nama' => 'Richman Laundry',
            'alamat' => 'Jl. Sultan Sulaiman, Sambutan, Kec. Sambutan, Kota Samarinda, Kalimantan Timur 75251'
        ]);

        Toko::create([
            'x' => '-0.516853',
            'y' => '117.18162',
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'nama' => 'Area Laundry',
            'no_hp' => '085255504405',
            'alamat' => 'Jl. Sultan Sulaiman, Sambutan, Kec. Sambutan, Kota Samarinda, Kalimantan Timur 75251'
        ]);

        Toko::create([
            'x' => '-0.515928',
            'y' => '117.164173',
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'nama' => 'Rayhan Laundry',
            'no_hp' => '081347549082',
            'alamat' => 'Jl. Sultan Sulaiman, Sambutan, Kec. Sambutan, Kota Samarinda, Kalimantan Timur 75251'
        ]);

        Toko::create([
            'x' => '-0.515265',
            'y' => '117.164359',
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'nama' => 'Yuk Laundry',
            'no_hp' => '081244818242',
            'alamat' => 'Gn. Lingai, Kec. Sungai Pinang, Kota Samarinda, Kalimantan Timur 75242'
        ]);

        Toko::create([
            'x' => '-0.503457',
            'y' => '117.159937',
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'nama' => 'Fresh Laundry',
            'no_hp' => '05417773492',
            'alamat' => 'Tlk. Lerong Ulu, Kec. Sungai Kunjang, Kota Samarinda, Kalimantan Timur 75243'
        ]);

        Toko::create([
            'x' => '-0.500336',
            'y' => '117.159883',
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'nama' => 'Ibay Laundry',
            'no_hp' => '085347525433',
            'alamat' => 'Jl. Jelawat, Sidodamai, Kec. Samarinda Ilir, Kota Samarinda, Kalimantan Timur 75115'
        ]);

        Toko::create([
            'x' => '-0.495083',
            'y' => '117.162406',
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'nama' => 'Wozmi Laundry',
            'no_hp' => '082154158538',
            'alamat' => 'Jl. Jelawat, Sidodamai, Kec. Samarinda Ilir, Kota Samarinda, Kalimantan Timur 75115'
        ]);

        Toko::create([
            'x' => '-0.495056',
            'y' => '117.162435',
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'nama' => 'Gerai Laundry',
            'no_hp' => '081352719284',
            'alamat' => 'Jl. Biawan No.39C, Sidomulyo, Kec. Samarinda Ilir, Kota Samarinda, Kalimantan Timur 75242'
        ]);

        Toko::create([
            'x' => '-0.48949',
            'y' => '117.161952',
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'nama' => 'Elmadinah Laundry',
            'no_hp' => '085242266652',
            'alamat' => 'Jl. Kemakmuran No.7, Sungai Pinang Dalam, Kec. Sungai Pinang, Kota Samarinda, Kalimantan Timur 75117'
        ]);
    }
}

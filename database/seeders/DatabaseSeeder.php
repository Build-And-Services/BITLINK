<?php

namespace Database\Seeders;

use App\Models\BenihData;
use App\Models\DataAkunProdusen;
use App\Models\DataMitra;
use App\Models\Pesanan;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        $image = $faker->image('public/img/benih', 640, 480, null, false);
        // User::factory(10)->create();

        $user = User::factory()->create([
            'name' => 'Test User',
            'email' => 'admin@admin.com',
            'username' => 'pembeli',
            'password' => Hash::make('admin123')
        ]);

        $userProdusen = User::factory()->create([
            'name' => 'Produsen',
            'username' => 'produsen',
            'role' => 'PRODUSEN',
            'email' => 'produsen@produsen.com',
            'password' => Hash::make('produsen123')
        ]);

        $mitra = DataMitra::create([
            'nama_mitra' => 'Kelompok Tani Jaya Berkah'
        ]);

        $produsen = DataAkunProdusen::create([
            'id_user' => $userProdusen->id,
            'nama_perusahaan' => 'PT Gudang Garam Merah',
            'nomor_legalitas_usaha' => '9120106570390',
            'alamat_lengkap' => 'Jl Sumatera',
            'telepon' => '087178903345',
            'id_kemitraan' => $mitra->id_kemitraan,
        ]);

        $benih = BenihData::create([
            'varietas' => 'Logawa',
            'jenis_benih' => 'kedelai',
            'stok_benih' => 150,
            'kualitas_benih' => 'Benih Pokok',
            'harga_benih' => 10000,
            'foto_benih' => url("/img/benih/{$image}"),
            'tgl_masuk' => now(),
            'turun_gudang' => 10,
            'jemur_kering' => 10,
            'blower1' => 10,
            'benih_susut' => 10,
            'biji_kecil' => 10,
            'jumlah_benih' => 10,
            'id_akunp' => $userProdusen->id
        ]);

        $benih = BenihData::create([
            'varietas' => 'Logawa',
            'jenis_benih' => 'padi',
            'stok_benih' => 150,
            'kualitas_benih' => 'Benih Pokok',
            'harga_benih' => 10000,
            'foto_benih' => url("/img/benih/{$image}"),
            'tgl_masuk' => now(),
            'turun_gudang' => 10,
            'jemur_kering' => 10,
            'blower1' => 10,
            'benih_susut' => 10,
            'biji_kecil' => 10,
            'jumlah_benih' => 10,
            'id_akunp' => $userProdusen->id
        ]);
    }
}

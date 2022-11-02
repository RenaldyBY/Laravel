<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\Dosen;
class MatakuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        
            $matkul = array('Pemrograman Web Lanjut','Pemrograman Dasar','Piranti Bergerak','jaringan komputer','IMK');
            foreach($matkul as $value){
            DB::table('matakuliahs')->insert([
                'kode_matakuliah' => rand(00000000, 99999999),
                'nama_matakuliah' => $value,
                'sks' => $faker->randomElement(['3','2']),
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]);
            }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\Mahasiswa;
use App\Models\MataKuliah;

class KrsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for($i=0; $i <= 10; $i++){
            $mhs = Mahasiswa::inRandomOrder()->first();
            $matkuls = MataKuliah::inRandomOrder()->first();
            DB::table('krs')->insert([
                'kode_matakuliah'=>$matkuls->kode_matakuliah,
                'npm'=> $mhs->npm,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]);
        } 
    }
}

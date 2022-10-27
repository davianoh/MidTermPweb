<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class StudioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('studio')->delete();

        for ($i=7; $i < 23; $i++) {
            if($i <10 ){
                $j = sprintf("%02d", $i);
                $end = sprintf("%02d", $i+1);
                $jam = $j.'.00-'.$end.'.00';
            }else{
                $j = $i;
                $end = $i+1;
                $jam = $i.'.00-'.$end.'.00';
            } 

            DB::table('studio')->insert([
               'kode_studio' => 'LA-'.$j ,
               'nama' => 'studio Atas',
               'lokasi' => 'Atas',
               'kode_jadwal' => 'A'.$j,
               'lat' => '-5.376350',
               'lng' => '105.255730',
           ]);
        }

        for ($i=7; $i < 23; $i++) {
            if($i <10 ){
                $j = sprintf("%02d", $i);
                $end = sprintf("%02d", $i+1);
                $jam = $j.'.00-'.$end.'.00';
            }else{
                $j = $i;
                $end = $i+1;
                $jam = $i.'.00-'.$end.'.00';
            } 

            DB::table('studio')->insert([
               'kode_studio' => 'LB-'.$j ,
               'nama' => 'studio Bawah',
               'lokasi' => 'Bawah',
               'kode_jadwal' => 'B'.$j,
               'lat' => '-5.376141',
               'lng' => '105.255585',
           ]);
        }

        for ($i=7; $i < 23; $i++) {
            if($i <10 ){
                $j = sprintf("%02d", $i);
                $end = sprintf("%02d", $i+1);
                $jam = $j.'.00-'.$end.'.00';
            }else{
                $j = $i;
                $end = $i+1;
                $jam = $i.'.00-'.$end.'.00';
            } 

            DB::table('studio')->insert([
               'kode_studio' => 'LT-'.$j ,
               'nama' => 'studio Tengah',
               'lokasi' => 'Tengah',
               'kode_jadwal' => 'T'.$j,
               'lat' => '-5.376303',
               'lng' => '105.255432',
           ]);
        }

    }
}

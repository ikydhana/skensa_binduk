<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MasterJurusanTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('master_jurusan')->delete();
        
        \DB::table('master_jurusan')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nama_jurusan' => 'Kria Kreatif Kayu dan Rotan',
            ),
            1 => 
            array (
                'id' => 2,
                'nama_jurusan' => 'Kria Kreatif Batik dan Tekstil',
            ),
            2 => 
            array (
                'id' => 3,
                'nama_jurusan' => 'Kria Kreatif Keramik',
            ),
            3 => 
            array (
                'id' => 4,
                'nama_jurusan' => 'Kria Kreatif Logam dan Perhiasan',
            ),
            4 => 
            array (
                'id' => 5,
                'nama_jurusan' => 'Otomatisasi dan Tata Kelola Perkantoran',
            ),
            5 => 
            array (
                'id' => 6,
                'nama_jurusan' => 'Perhotelan',
            ),
            6 => 
            array (
                'id' => 7,
                'nama_jurusan' => 'Tata Boga',
            ),
            7 => 
            array (
                'id' => 8,
                'nama_jurusan' => 'Desain Komunikasi Visual',
            ),
        ));
        
        
    }
}
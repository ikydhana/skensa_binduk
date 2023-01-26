<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MasterKategoriTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('master_kategori')->delete();
        
        \DB::table('master_kategori')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nama_kategori' => 'Mata Pelajaran Studi Wajib',
            ),
            1 => 
            array (
                'id' => 2,
                'nama_kategori' => 'Mata Pelajaran Muatan Nasional',
            ),
            2 => 
            array (
                'id' => 3,
                'nama_kategori' => 'Mata Pelajaran Muatan Kewilayahan',
            ),
            3 => 
            array (
                'id' => 4,
            'nama_kategori' => 'Dasar Bidang Keahlian (C1)',
            ),
            4 => 
            array (
                'id' => 5,
            'nama_kategori' => 'Dasar Program Keahlian (C2)',
            ),
            5 => 
            array (
                'id' => 6,
                'nama_kategori' => 'Mata Pelajaran Lainnya',
            ),
            6 => 
            array (
                'id' => 7,
            'nama_kategori' => 'Kompetensi Keahlian (C3)',
            ),
        ));
        
        
    }
}
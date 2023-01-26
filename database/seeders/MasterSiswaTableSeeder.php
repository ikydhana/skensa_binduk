<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MasterSiswaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('master_siswa')->delete();
        
        \DB::table('master_siswa')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nama_lengkap' => 'Budi',
                'jenis_kelamin' => 'Laki-Laki',
                'tempat_lahir' => 'Banjarbaru',
                'kewarganegaraan' => 'Indonesia',
                'agama' => 'Islam',
                'alamat' => 'Landasan Ulin',
                'tgl_lahir' => '2007-06-13',
                'nama_orangtua' => 'Yanto',
                'pekerjaan_orangtua' => 'Swasta',
                'alamat_orangtua' => 'Sama',
                'nama_wali' => 'Tidak Ada Wali',
                'pekerjaan_wali' => 'Tidak Ada Wali',
                'alamat_wali' => 'Tidak Ada Wali',
            ),
        ));
        
        
    }
}
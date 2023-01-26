<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MasterMapelTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('master_mapel')->delete();
        
        \DB::table('master_mapel')->insert(array (
            0 => 
            array (
                'id' => 24,
                'id_master_jurusan' => 1,
                'id_master_kategori' => 6,
            'nama_mapel' => 'Bimbingan dan Konseling/Konselor (BP/BK)',
            ),
            1 => 
            array (
                'id' => 25,
                'id_master_jurusan' => 1,
                'id_master_kategori' => 6,
                'nama_mapel' => 'Teknologi Informasi dan Komunikasi',
            ),
            2 => 
            array (
                'id' => 26,
                'id_master_jurusan' => 1,
                'id_master_kategori' => 3,
                'nama_mapel' => 'Seni Budaya',
            ),
            3 => 
            array (
                'id' => 27,
                'id_master_jurusan' => 1,
                'id_master_kategori' => 3,
                'nama_mapel' => 'Pendidikan Jasmani, Olahraga, dan Kesehatan',
            ),
            4 => 
            array (
                'id' => 28,
                'id_master_jurusan' => 1,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Pendidikan Agama Katholik dan Budi Pekerti',
            ),
            5 => 
            array (
                'id' => 29,
                'id_master_jurusan' => 1,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Pendidikan Agama Konghuchu dan Budi Pekerti',
            ),
            6 => 
            array (
                'id' => 30,
                'id_master_jurusan' => 1,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Bahasa Inggris',
            ),
            7 => 
            array (
                'id' => 31,
                'id_master_jurusan' => 1,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Pendidikan Agama Kristen dan Budi Pekerti',
            ),
            8 => 
            array (
                'id' => 32,
                'id_master_jurusan' => 1,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Pendidikan Agama Hindu dan Budi Pekerti',
            ),
            9 => 
            array (
                'id' => 33,
                'id_master_jurusan' => 1,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Bahasa Indonesia',
            ),
            10 => 
            array (
                'id' => 34,
                'id_master_jurusan' => 1,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Sejarah Indonesia',
            ),
            11 => 
            array (
                'id' => 35,
                'id_master_jurusan' => 1,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Pendidikan Agama Islam dan Budi Pekerti',
            ),
            12 => 
            array (
                'id' => 36,
                'id_master_jurusan' => 1,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Pendidikan Agama Buddha dan Budi Pekerti',
            ),
            13 => 
            array (
                'id' => 37,
                'id_master_jurusan' => 1,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Pendidikan Pancasila dan Kewarganegaraan',
            ),
            14 => 
            array (
                'id' => 38,
                'id_master_jurusan' => 1,
                'id_master_kategori' => 2,
            'nama_mapel' => 'Matematika (Umum)',
            ),
            15 => 
            array (
                'id' => 39,
                'id_master_jurusan' => 1,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Bahasa Arab',
            ),
            16 => 
            array (
                'id' => 40,
                'id_master_jurusan' => 1,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Bahasa Belanda',
            ),
            17 => 
            array (
                'id' => 41,
                'id_master_jurusan' => 1,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Bahasa Cina',
            ),
            18 => 
            array (
                'id' => 42,
                'id_master_jurusan' => 1,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Bahasa Jepang',
            ),
            19 => 
            array (
                'id' => 43,
                'id_master_jurusan' => 1,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Bahasa Jerman',
            ),
            20 => 
            array (
                'id' => 44,
                'id_master_jurusan' => 1,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Bahasa Korea',
            ),
            21 => 
            array (
                'id' => 45,
                'id_master_jurusan' => 1,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Bahasa Mandarin',
            ),
            22 => 
            array (
                'id' => 46,
                'id_master_jurusan' => 1,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Bahasa Perancis',
            ),
            23 => 
            array (
                'id' => 47,
                'id_master_jurusan' => 1,
                'id_master_kategori' => 1,
                'nama_mapel' => 'Muatan Lokal Potensi Daerah',
            ),
            24 => 
            array (
                'id' => 48,
                'id_master_jurusan' => 1,
                'id_master_kategori' => 1,
                'nama_mapel' => 'Muatan Lokal Bahasa Daerah',
            ),
            25 => 
            array (
                'id' => 49,
                'id_master_jurusan' => 1,
                'id_master_kategori' => 4,
                'nama_mapel' => 'Simulasi dan Komunikasi Digital',
            ),
            26 => 
            array (
                'id' => 50,
                'id_master_jurusan' => 1,
                'id_master_kategori' => 4,
                'nama_mapel' => 'Dasar-dasar Kreativitas',
            ),
            27 => 
            array (
                'id' => 51,
                'id_master_jurusan' => 1,
                'id_master_kategori' => 4,
                'nama_mapel' => 'Tinjauan Seni',
            ),
            28 => 
            array (
                'id' => 52,
                'id_master_jurusan' => 1,
                'id_master_kategori' => 5,
                'nama_mapel' => 'Dasar-dasar Desain Kriya',
            ),
            29 => 
            array (
                'id' => 53,
                'id_master_jurusan' => 1,
                'id_master_kategori' => 5,
                'nama_mapel' => 'Desain Produk',
            ),
            30 => 
            array (
                'id' => 54,
                'id_master_jurusan' => 1,
                'id_master_kategori' => 5,
                'nama_mapel' => 'Gambar',
            ),
            31 => 
            array (
                'id' => 55,
                'id_master_jurusan' => 1,
                'id_master_kategori' => 7,
                'nama_mapel' => 'Produk Kreatif dan Kewirausahaan',
            ),
            32 => 
            array (
                'id' => 56,
                'id_master_jurusan' => 1,
                'id_master_kategori' => 7,
                'nama_mapel' => 'Kerja Finishing',
            ),
            33 => 
            array (
                'id' => 57,
                'id_master_jurusan' => 1,
                'id_master_kategori' => 7,
                'nama_mapel' => 'Teknik Kerja Bangku',
            ),
            34 => 
            array (
                'id' => 58,
                'id_master_jurusan' => 1,
                'id_master_kategori' => 7,
                'nama_mapel' => 'Teknik Kerja Mesin',
            ),
            35 => 
            array (
                'id' => 59,
                'id_master_jurusan' => 1,
                'id_master_kategori' => 7,
                'nama_mapel' => 'Teknik Kerja Ukir',
            ),
            36 => 
            array (
                'id' => 60,
                'id_master_jurusan' => 2,
                'id_master_kategori' => 6,
            'nama_mapel' => 'Bimbingan dan Konseling/Konselor (BP/BK)',
            ),
            37 => 
            array (
                'id' => 61,
                'id_master_jurusan' => 2,
                'id_master_kategori' => 6,
                'nama_mapel' => 'Teknologi Informasi dan Komunikasi',
            ),
            38 => 
            array (
                'id' => 62,
                'id_master_jurusan' => 2,
                'id_master_kategori' => 3,
                'nama_mapel' => 'Seni Budaya',
            ),
            39 => 
            array (
                'id' => 63,
                'id_master_jurusan' => 2,
                'id_master_kategori' => 3,
                'nama_mapel' => 'Pendidikan Jasmani, Olahraga, dan Kesehatan',
            ),
            40 => 
            array (
                'id' => 64,
                'id_master_jurusan' => 2,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Pendidikan Agama Katholik dan Budi Pekerti',
            ),
            41 => 
            array (
                'id' => 65,
                'id_master_jurusan' => 2,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Pendidikan Agama Konghuchu dan Budi Pekerti',
            ),
            42 => 
            array (
                'id' => 66,
                'id_master_jurusan' => 2,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Bahasa Inggris',
            ),
            43 => 
            array (
                'id' => 67,
                'id_master_jurusan' => 2,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Pendidikan Agama Kristen dan Budi Pekerti',
            ),
            44 => 
            array (
                'id' => 68,
                'id_master_jurusan' => 2,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Pendidikan Agama Hindu dan Budi Pekerti',
            ),
            45 => 
            array (
                'id' => 69,
                'id_master_jurusan' => 2,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Bahasa Indonesia',
            ),
            46 => 
            array (
                'id' => 70,
                'id_master_jurusan' => 2,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Sejarah Indonesia',
            ),
            47 => 
            array (
                'id' => 71,
                'id_master_jurusan' => 2,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Pendidikan Agama Islam dan Budi Pekerti',
            ),
            48 => 
            array (
                'id' => 72,
                'id_master_jurusan' => 2,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Pendidikan Agama Buddha dan Budi Pekerti',
            ),
            49 => 
            array (
                'id' => 73,
                'id_master_jurusan' => 2,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Pendidikan Pancasila dan Kewarganegaraan',
            ),
            50 => 
            array (
                'id' => 74,
                'id_master_jurusan' => 2,
                'id_master_kategori' => 2,
            'nama_mapel' => 'Matematika (Umum)',
            ),
            51 => 
            array (
                'id' => 75,
                'id_master_jurusan' => 2,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Bahasa Arab',
            ),
            52 => 
            array (
                'id' => 76,
                'id_master_jurusan' => 2,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Bahasa Belanda',
            ),
            53 => 
            array (
                'id' => 77,
                'id_master_jurusan' => 2,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Bahasa Cina',
            ),
            54 => 
            array (
                'id' => 78,
                'id_master_jurusan' => 2,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Bahasa Jepang',
            ),
            55 => 
            array (
                'id' => 79,
                'id_master_jurusan' => 2,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Bahasa Jerman',
            ),
            56 => 
            array (
                'id' => 80,
                'id_master_jurusan' => 2,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Bahasa Korea',
            ),
            57 => 
            array (
                'id' => 81,
                'id_master_jurusan' => 2,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Bahasa Mandarin',
            ),
            58 => 
            array (
                'id' => 82,
                'id_master_jurusan' => 2,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Bahasa Perancis',
            ),
            59 => 
            array (
                'id' => 83,
                'id_master_jurusan' => 2,
                'id_master_kategori' => 1,
                'nama_mapel' => 'Muatan Lokal Potensi Daerah',
            ),
            60 => 
            array (
                'id' => 84,
                'id_master_jurusan' => 2,
                'id_master_kategori' => 1,
                'nama_mapel' => 'Muatan Lokal Bahasa Daerah',
            ),
            61 => 
            array (
                'id' => 85,
                'id_master_jurusan' => 2,
                'id_master_kategori' => 4,
                'nama_mapel' => 'Simulasi dan Komunikasi Digital',
            ),
            62 => 
            array (
                'id' => 86,
                'id_master_jurusan' => 2,
                'id_master_kategori' => 4,
                'nama_mapel' => 'Dasar-dasar Kreativitas',
            ),
            63 => 
            array (
                'id' => 87,
                'id_master_jurusan' => 2,
                'id_master_kategori' => 4,
                'nama_mapel' => 'Tinjauan Seni',
            ),
            64 => 
            array (
                'id' => 88,
                'id_master_jurusan' => 2,
                'id_master_kategori' => 5,
                'nama_mapel' => 'Dasar-dasar Desain Kriya',
            ),
            65 => 
            array (
                'id' => 89,
                'id_master_jurusan' => 2,
                'id_master_kategori' => 5,
                'nama_mapel' => 'Desain Produk',
            ),
            66 => 
            array (
                'id' => 90,
                'id_master_jurusan' => 2,
                'id_master_kategori' => 5,
                'nama_mapel' => 'Gambar',
            ),
            67 => 
            array (
                'id' => 91,
                'id_master_jurusan' => 2,
                'id_master_kategori' => 7,
                'nama_mapel' => 'Produk Kreatif dan Kewirausahaan',
            ),
            68 => 
            array (
                'id' => 92,
                'id_master_jurusan' => 2,
                'id_master_kategori' => 7,
                'nama_mapel' => 'Batik',
            ),
            69 => 
            array (
                'id' => 93,
                'id_master_jurusan' => 2,
                'id_master_kategori' => 7,
                'nama_mapel' => 'Tenun',
            ),
            70 => 
            array (
                'id' => 94,
                'id_master_jurusan' => 2,
                'id_master_kategori' => 7,
                'nama_mapel' => 'Sablon',
            ),
            71 => 
            array (
                'id' => 95,
                'id_master_jurusan' => 2,
                'id_master_kategori' => 7,
                'nama_mapel' => 'Jahit',
            ),
            72 => 
            array (
                'id' => 96,
                'id_master_jurusan' => 3,
                'id_master_kategori' => 6,
            'nama_mapel' => 'Bimbingan dan Konseling/Konselor (BP/BK)',
            ),
            73 => 
            array (
                'id' => 97,
                'id_master_jurusan' => 3,
                'id_master_kategori' => 6,
                'nama_mapel' => 'Teknologi Informasi dan Komunikasi',
            ),
            74 => 
            array (
                'id' => 98,
                'id_master_jurusan' => 3,
                'id_master_kategori' => 3,
                'nama_mapel' => 'Seni Budaya',
            ),
            75 => 
            array (
                'id' => 99,
                'id_master_jurusan' => 3,
                'id_master_kategori' => 3,
                'nama_mapel' => 'Pendidikan Jasmani, Olahraga, dan Kesehatan',
            ),
            76 => 
            array (
                'id' => 100,
                'id_master_jurusan' => 3,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Pendidikan Agama Katholik dan Budi Pekerti',
            ),
            77 => 
            array (
                'id' => 101,
                'id_master_jurusan' => 3,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Pendidikan Agama Konghuchu dan Budi Pekerti',
            ),
            78 => 
            array (
                'id' => 102,
                'id_master_jurusan' => 3,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Bahasa Inggris',
            ),
            79 => 
            array (
                'id' => 103,
                'id_master_jurusan' => 3,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Pendidikan Agama Kristen dan Budi Pekerti',
            ),
            80 => 
            array (
                'id' => 104,
                'id_master_jurusan' => 3,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Pendidikan Agama Hindu dan Budi Pekerti',
            ),
            81 => 
            array (
                'id' => 105,
                'id_master_jurusan' => 3,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Bahasa Indonesia',
            ),
            82 => 
            array (
                'id' => 106,
                'id_master_jurusan' => 3,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Sejarah Indonesia',
            ),
            83 => 
            array (
                'id' => 107,
                'id_master_jurusan' => 3,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Pendidikan Agama Islam dan Budi Pekerti',
            ),
            84 => 
            array (
                'id' => 108,
                'id_master_jurusan' => 3,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Pendidikan Agama Buddha dan Budi Pekerti',
            ),
            85 => 
            array (
                'id' => 109,
                'id_master_jurusan' => 3,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Pendidikan Pancasila dan Kewarganegaraan',
            ),
            86 => 
            array (
                'id' => 110,
                'id_master_jurusan' => 3,
                'id_master_kategori' => 2,
            'nama_mapel' => 'Matematika (Umum)',
            ),
            87 => 
            array (
                'id' => 111,
                'id_master_jurusan' => 3,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Bahasa Arab',
            ),
            88 => 
            array (
                'id' => 112,
                'id_master_jurusan' => 3,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Bahasa Belanda',
            ),
            89 => 
            array (
                'id' => 113,
                'id_master_jurusan' => 3,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Bahasa Cina',
            ),
            90 => 
            array (
                'id' => 114,
                'id_master_jurusan' => 3,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Bahasa Jepang',
            ),
            91 => 
            array (
                'id' => 115,
                'id_master_jurusan' => 3,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Bahasa Jerman',
            ),
            92 => 
            array (
                'id' => 116,
                'id_master_jurusan' => 3,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Bahasa Korea',
            ),
            93 => 
            array (
                'id' => 117,
                'id_master_jurusan' => 3,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Bahasa Mandarin',
            ),
            94 => 
            array (
                'id' => 118,
                'id_master_jurusan' => 3,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Bahasa Perancis',
            ),
            95 => 
            array (
                'id' => 119,
                'id_master_jurusan' => 3,
                'id_master_kategori' => 1,
                'nama_mapel' => 'Muatan Lokal Potensi Daerah',
            ),
            96 => 
            array (
                'id' => 120,
                'id_master_jurusan' => 3,
                'id_master_kategori' => 1,
                'nama_mapel' => 'Muatan Lokal Bahasa Daerah',
            ),
            97 => 
            array (
                'id' => 121,
                'id_master_jurusan' => 3,
                'id_master_kategori' => 4,
                'nama_mapel' => 'Simulasi dan Komunikasi Digital',
            ),
            98 => 
            array (
                'id' => 122,
                'id_master_jurusan' => 3,
                'id_master_kategori' => 4,
                'nama_mapel' => 'Dasar-dasar Kreativitas',
            ),
            99 => 
            array (
                'id' => 123,
                'id_master_jurusan' => 3,
                'id_master_kategori' => 4,
                'nama_mapel' => 'Tinjauan Seni',
            ),
            100 => 
            array (
                'id' => 124,
                'id_master_jurusan' => 3,
                'id_master_kategori' => 5,
                'nama_mapel' => 'Dasar-dasar Desain Kriya',
            ),
            101 => 
            array (
                'id' => 125,
                'id_master_jurusan' => 3,
                'id_master_kategori' => 5,
                'nama_mapel' => 'Desain Produk',
            ),
            102 => 
            array (
                'id' => 126,
                'id_master_jurusan' => 3,
                'id_master_kategori' => 5,
                'nama_mapel' => 'Gambar',
            ),
            103 => 
            array (
                'id' => 127,
                'id_master_jurusan' => 3,
                'id_master_kategori' => 7,
                'nama_mapel' => 'Produk Kreatif dan Kewirausahaan',
            ),
            104 => 
            array (
                'id' => 128,
                'id_master_jurusan' => 3,
                'id_master_kategori' => 7,
                'nama_mapel' => 'Pembentukan dengan Teknik Cetak',
            ),
            105 => 
            array (
                'id' => 129,
                'id_master_jurusan' => 3,
                'id_master_kategori' => 7,
                'nama_mapel' => 'Pembentukan dengan Teknik Langsung',
            ),
            106 => 
            array (
                'id' => 130,
                'id_master_jurusan' => 3,
                'id_master_kategori' => 7,
                'nama_mapel' => 'Pembentukan dengan Teknik Putar Centering',
            ),
            107 => 
            array (
                'id' => 131,
                'id_master_jurusan' => 3,
                'id_master_kategori' => 7,
                'nama_mapel' => 'Pembentukan dengan Teknik Putar Pilin',
            ),
            108 => 
            array (
                'id' => 132,
                'id_master_jurusan' => 4,
                'id_master_kategori' => 6,
            'nama_mapel' => 'Bimbingan dan Konseling/Konselor (BP/BK)',
            ),
            109 => 
            array (
                'id' => 133,
                'id_master_jurusan' => 4,
                'id_master_kategori' => 6,
                'nama_mapel' => 'Teknologi Informasi dan Komunikasi',
            ),
            110 => 
            array (
                'id' => 134,
                'id_master_jurusan' => 4,
                'id_master_kategori' => 3,
                'nama_mapel' => 'Seni Budaya',
            ),
            111 => 
            array (
                'id' => 135,
                'id_master_jurusan' => 4,
                'id_master_kategori' => 3,
                'nama_mapel' => 'Pendidikan Jasmani, Olahraga, dan Kesehatan',
            ),
            112 => 
            array (
                'id' => 136,
                'id_master_jurusan' => 4,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Pendidikan Agama Katholik dan Budi Pekerti',
            ),
            113 => 
            array (
                'id' => 137,
                'id_master_jurusan' => 4,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Pendidikan Agama Konghuchu dan Budi Pekerti',
            ),
            114 => 
            array (
                'id' => 138,
                'id_master_jurusan' => 4,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Bahasa Inggris',
            ),
            115 => 
            array (
                'id' => 139,
                'id_master_jurusan' => 4,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Pendidikan Agama Kristen dan Budi Pekerti',
            ),
            116 => 
            array (
                'id' => 140,
                'id_master_jurusan' => 4,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Pendidikan Agama Hindu dan Budi Pekerti',
            ),
            117 => 
            array (
                'id' => 141,
                'id_master_jurusan' => 4,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Bahasa Indonesia',
            ),
            118 => 
            array (
                'id' => 142,
                'id_master_jurusan' => 4,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Sejarah Indonesia',
            ),
            119 => 
            array (
                'id' => 143,
                'id_master_jurusan' => 4,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Pendidikan Agama Islam dan Budi Pekerti',
            ),
            120 => 
            array (
                'id' => 144,
                'id_master_jurusan' => 4,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Pendidikan Agama Buddha dan Budi Pekerti',
            ),
            121 => 
            array (
                'id' => 145,
                'id_master_jurusan' => 4,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Pendidikan Pancasila dan Kewarganegaraan',
            ),
            122 => 
            array (
                'id' => 146,
                'id_master_jurusan' => 4,
                'id_master_kategori' => 2,
            'nama_mapel' => 'Matematika (Umum)',
            ),
            123 => 
            array (
                'id' => 147,
                'id_master_jurusan' => 4,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Bahasa Arab',
            ),
            124 => 
            array (
                'id' => 148,
                'id_master_jurusan' => 4,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Bahasa Belanda',
            ),
            125 => 
            array (
                'id' => 149,
                'id_master_jurusan' => 4,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Bahasa Cina',
            ),
            126 => 
            array (
                'id' => 150,
                'id_master_jurusan' => 4,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Bahasa Jepang',
            ),
            127 => 
            array (
                'id' => 151,
                'id_master_jurusan' => 4,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Bahasa Jerman',
            ),
            128 => 
            array (
                'id' => 152,
                'id_master_jurusan' => 4,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Bahasa Korea',
            ),
            129 => 
            array (
                'id' => 153,
                'id_master_jurusan' => 4,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Bahasa Mandarin',
            ),
            130 => 
            array (
                'id' => 154,
                'id_master_jurusan' => 4,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Bahasa Perancis',
            ),
            131 => 
            array (
                'id' => 155,
                'id_master_jurusan' => 4,
                'id_master_kategori' => 1,
                'nama_mapel' => 'Muatan Lokal Potensi Daerah',
            ),
            132 => 
            array (
                'id' => 156,
                'id_master_jurusan' => 4,
                'id_master_kategori' => 1,
                'nama_mapel' => 'Muatan Lokal Bahasa Daerah',
            ),
            133 => 
            array (
                'id' => 157,
                'id_master_jurusan' => 4,
                'id_master_kategori' => 4,
                'nama_mapel' => 'Simulasi dan Komunikasi Digital',
            ),
            134 => 
            array (
                'id' => 158,
                'id_master_jurusan' => 4,
                'id_master_kategori' => 4,
                'nama_mapel' => 'Dasar-dasar Kreativitas',
            ),
            135 => 
            array (
                'id' => 159,
                'id_master_jurusan' => 4,
                'id_master_kategori' => 4,
                'nama_mapel' => 'Tinjauan Seni',
            ),
            136 => 
            array (
                'id' => 160,
                'id_master_jurusan' => 4,
                'id_master_kategori' => 5,
                'nama_mapel' => 'Dasar-dasar Desain Kriya',
            ),
            137 => 
            array (
                'id' => 161,
                'id_master_jurusan' => 4,
                'id_master_kategori' => 5,
                'nama_mapel' => 'Desain Produk',
            ),
            138 => 
            array (
                'id' => 162,
                'id_master_jurusan' => 4,
                'id_master_kategori' => 5,
                'nama_mapel' => 'Gambar',
            ),
            139 => 
            array (
                'id' => 163,
                'id_master_jurusan' => 4,
                'id_master_kategori' => 7,
                'nama_mapel' => 'Produk Kreatif dan Kewirausahaan',
            ),
            140 => 
            array (
                'id' => 164,
                'id_master_jurusan' => 4,
                'id_master_kategori' => 7,
                'nama_mapel' => 'Pengelasan dan Pembubutan',
            ),
            141 => 
            array (
                'id' => 165,
                'id_master_jurusan' => 4,
                'id_master_kategori' => 7,
                'nama_mapel' => 'Pembuatan Perhiasan',
            ),
            142 => 
            array (
                'id' => 166,
                'id_master_jurusan' => 4,
                'id_master_kategori' => 7,
                'nama_mapel' => 'Dekorasi dan Kethok Pembentukan',
            ),
            143 => 
            array (
                'id' => 167,
                'id_master_jurusan' => 4,
                'id_master_kategori' => 7,
                'nama_mapel' => 'Pengecoran Logam',
            ),
            144 => 
            array (
                'id' => 168,
                'id_master_jurusan' => 4,
                'id_master_kategori' => 7,
                'nama_mapel' => 'Dekorasi dan Kethok Pembentukan',
            ),
            145 => 
            array (
                'id' => 169,
                'id_master_jurusan' => 5,
                'id_master_kategori' => 6,
            'nama_mapel' => 'Bimbingan dan Konseling/Konselor (BP/BK)',
            ),
            146 => 
            array (
                'id' => 170,
                'id_master_jurusan' => 5,
                'id_master_kategori' => 6,
                'nama_mapel' => 'Teknologi Informasi dan Komunikasi',
            ),
            147 => 
            array (
                'id' => 171,
                'id_master_jurusan' => 5,
                'id_master_kategori' => 3,
                'nama_mapel' => 'Seni Budaya',
            ),
            148 => 
            array (
                'id' => 172,
                'id_master_jurusan' => 5,
                'id_master_kategori' => 3,
                'nama_mapel' => 'Pendidikan Jasmani, Olahraga, dan Kesehatan',
            ),
            149 => 
            array (
                'id' => 173,
                'id_master_jurusan' => 5,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Pendidikan Agama Katholik dan Budi Pekerti',
            ),
            150 => 
            array (
                'id' => 174,
                'id_master_jurusan' => 5,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Pendidikan Agama Konghuchu dan Budi Pekerti',
            ),
            151 => 
            array (
                'id' => 175,
                'id_master_jurusan' => 5,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Bahasa Inggris',
            ),
            152 => 
            array (
                'id' => 176,
                'id_master_jurusan' => 5,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Pendidikan Agama Kristen dan Budi Pekerti',
            ),
            153 => 
            array (
                'id' => 177,
                'id_master_jurusan' => 5,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Pendidikan Agama Hindu dan Budi Pekerti',
            ),
            154 => 
            array (
                'id' => 178,
                'id_master_jurusan' => 5,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Bahasa Indonesia',
            ),
            155 => 
            array (
                'id' => 179,
                'id_master_jurusan' => 5,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Sejarah Indonesia',
            ),
            156 => 
            array (
                'id' => 180,
                'id_master_jurusan' => 5,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Pendidikan Agama Islam dan Budi Pekerti',
            ),
            157 => 
            array (
                'id' => 181,
                'id_master_jurusan' => 5,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Pendidikan Agama Buddha dan Budi Pekerti',
            ),
            158 => 
            array (
                'id' => 182,
                'id_master_jurusan' => 5,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Pendidikan Pancasila dan Kewarganegaraan',
            ),
            159 => 
            array (
                'id' => 183,
                'id_master_jurusan' => 5,
                'id_master_kategori' => 2,
            'nama_mapel' => 'Matematika (Umum)',
            ),
            160 => 
            array (
                'id' => 184,
                'id_master_jurusan' => 5,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Bahasa Arab',
            ),
            161 => 
            array (
                'id' => 185,
                'id_master_jurusan' => 5,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Bahasa Belanda',
            ),
            162 => 
            array (
                'id' => 186,
                'id_master_jurusan' => 5,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Bahasa Cina',
            ),
            163 => 
            array (
                'id' => 187,
                'id_master_jurusan' => 5,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Bahasa Jepang',
            ),
            164 => 
            array (
                'id' => 188,
                'id_master_jurusan' => 5,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Bahasa Jerman',
            ),
            165 => 
            array (
                'id' => 189,
                'id_master_jurusan' => 5,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Bahasa Korea',
            ),
            166 => 
            array (
                'id' => 190,
                'id_master_jurusan' => 5,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Bahasa Mandarin',
            ),
            167 => 
            array (
                'id' => 191,
                'id_master_jurusan' => 5,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Bahasa Perancis',
            ),
            168 => 
            array (
                'id' => 192,
                'id_master_jurusan' => 5,
                'id_master_kategori' => 1,
                'nama_mapel' => 'Muatan Lokal Potensi Daerah',
            ),
            169 => 
            array (
                'id' => 193,
                'id_master_jurusan' => 5,
                'id_master_kategori' => 1,
                'nama_mapel' => 'Muatan Lokal Bahasa Daerah',
            ),
            170 => 
            array (
                'id' => 194,
                'id_master_jurusan' => 5,
                'id_master_kategori' => 4,
            'nama_mapel' => 'Ilmu Pengetahuan Alam (IPA)',
            ),
            171 => 
            array (
                'id' => 195,
                'id_master_jurusan' => 5,
                'id_master_kategori' => 4,
                'nama_mapel' => 'Simulasi dan Komunikasi Digital',
            ),
            172 => 
            array (
                'id' => 196,
                'id_master_jurusan' => 5,
                'id_master_kategori' => 4,
                'nama_mapel' => 'Ekonomi Bisnis',
            ),
            173 => 
            array (
                'id' => 197,
                'id_master_jurusan' => 5,
                'id_master_kategori' => 4,
                'nama_mapel' => 'Administrasi Umum',
            ),
            174 => 
            array (
                'id' => 198,
                'id_master_jurusan' => 5,
                'id_master_kategori' => 5,
                'nama_mapel' => 'Teknologi Perkantoran',
            ),
            175 => 
            array (
                'id' => 199,
                'id_master_jurusan' => 5,
                'id_master_kategori' => 5,
                'nama_mapel' => 'Korespondensi',
            ),
            176 => 
            array (
                'id' => 200,
                'id_master_jurusan' => 5,
                'id_master_kategori' => 5,
                'nama_mapel' => 'Kearsipan',
            ),
            177 => 
            array (
                'id' => 201,
                'id_master_jurusan' => 5,
                'id_master_kategori' => 7,
                'nama_mapel' => 'Produk Kreatif dan Kewirausahaan',
            ),
            178 => 
            array (
                'id' => 202,
                'id_master_jurusan' => 5,
                'id_master_kategori' => 7,
                'nama_mapel' => 'Otomatisasi Tata Kelola Kepegawaian',
            ),
            179 => 
            array (
                'id' => 203,
                'id_master_jurusan' => 5,
                'id_master_kategori' => 7,
                'nama_mapel' => 'Otomatisasi Tata Kelola Keuangan',
            ),
            180 => 
            array (
                'id' => 204,
                'id_master_jurusan' => 5,
                'id_master_kategori' => 7,
                'nama_mapel' => 'Otomatisasi Tata Kelola Sarana dan Prasarana',
            ),
            181 => 
            array (
                'id' => 205,
                'id_master_jurusan' => 5,
                'id_master_kategori' => 7,
                'nama_mapel' => 'Otomatisasi Tata Kelola Humas dan Keprotokolan',
            ),
            182 => 
            array (
                'id' => 206,
                'id_master_jurusan' => 6,
                'id_master_kategori' => 6,
            'nama_mapel' => 'Bimbingan dan Konseling/Konselor (BP/BK)',
            ),
            183 => 
            array (
                'id' => 207,
                'id_master_jurusan' => 6,
                'id_master_kategori' => 6,
                'nama_mapel' => 'Teknologi Informasi dan Komunikasi',
            ),
            184 => 
            array (
                'id' => 208,
                'id_master_jurusan' => 6,
                'id_master_kategori' => 3,
                'nama_mapel' => 'Seni Budaya',
            ),
            185 => 
            array (
                'id' => 209,
                'id_master_jurusan' => 6,
                'id_master_kategori' => 3,
                'nama_mapel' => 'Pendidikan Jasmani, Olahraga, dan Kesehatan',
            ),
            186 => 
            array (
                'id' => 210,
                'id_master_jurusan' => 6,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Pendidikan Agama Katholik dan Budi Pekerti',
            ),
            187 => 
            array (
                'id' => 211,
                'id_master_jurusan' => 6,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Pendidikan Agama Konghuchu dan Budi Pekerti',
            ),
            188 => 
            array (
                'id' => 212,
                'id_master_jurusan' => 6,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Bahasa Inggris',
            ),
            189 => 
            array (
                'id' => 213,
                'id_master_jurusan' => 6,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Pendidikan Agama Kristen dan Budi Pekerti',
            ),
            190 => 
            array (
                'id' => 214,
                'id_master_jurusan' => 6,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Pendidikan Agama Hindu dan Budi Pekerti',
            ),
            191 => 
            array (
                'id' => 215,
                'id_master_jurusan' => 6,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Bahasa Indonesia',
            ),
            192 => 
            array (
                'id' => 216,
                'id_master_jurusan' => 6,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Sejarah Indonesia',
            ),
            193 => 
            array (
                'id' => 217,
                'id_master_jurusan' => 6,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Pendidikan Agama Islam dan Budi Pekerti',
            ),
            194 => 
            array (
                'id' => 218,
                'id_master_jurusan' => 6,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Pendidikan Agama Buddha dan Budi Pekerti',
            ),
            195 => 
            array (
                'id' => 219,
                'id_master_jurusan' => 6,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Pendidikan Pancasila dan Kewarganegaraan',
            ),
            196 => 
            array (
                'id' => 220,
                'id_master_jurusan' => 6,
                'id_master_kategori' => 2,
            'nama_mapel' => 'Matematika (Umum)',
            ),
            197 => 
            array (
                'id' => 221,
                'id_master_jurusan' => 6,
                'id_master_kategori' => 5,
                'nama_mapel' => 'Bahasa Arab',
            ),
            198 => 
            array (
                'id' => 222,
                'id_master_jurusan' => 6,
                'id_master_kategori' => 5,
                'nama_mapel' => 'Bahasa Belanda',
            ),
            199 => 
            array (
                'id' => 223,
                'id_master_jurusan' => 6,
                'id_master_kategori' => 5,
                'nama_mapel' => 'Bahasa Cina',
            ),
            200 => 
            array (
                'id' => 224,
                'id_master_jurusan' => 6,
                'id_master_kategori' => 5,
                'nama_mapel' => 'Bahasa Jepang',
            ),
            201 => 
            array (
                'id' => 225,
                'id_master_jurusan' => 6,
                'id_master_kategori' => 5,
                'nama_mapel' => 'Bahasa Jerman',
            ),
            202 => 
            array (
                'id' => 226,
                'id_master_jurusan' => 6,
                'id_master_kategori' => 5,
                'nama_mapel' => 'Bahasa Korea',
            ),
            203 => 
            array (
                'id' => 227,
                'id_master_jurusan' => 6,
                'id_master_kategori' => 5,
                'nama_mapel' => 'Bahasa Mandarin',
            ),
            204 => 
            array (
                'id' => 228,
                'id_master_jurusan' => 6,
                'id_master_kategori' => 5,
                'nama_mapel' => 'Bahasa Perancis',
            ),
            205 => 
            array (
                'id' => 229,
                'id_master_jurusan' => 6,
                'id_master_kategori' => 1,
                'nama_mapel' => 'Muatan Lokal Potensi Daerah',
            ),
            206 => 
            array (
                'id' => 230,
                'id_master_jurusan' => 6,
                'id_master_kategori' => 1,
                'nama_mapel' => 'Muatan Lokal Bahasa Daerah',
            ),
            207 => 
            array (
                'id' => 231,
                'id_master_jurusan' => 6,
                'id_master_kategori' => 4,
            'nama_mapel' => 'Ilmu Pengetahuan Alam (Terapan)',
            ),
            208 => 
            array (
                'id' => 232,
                'id_master_jurusan' => 6,
                'id_master_kategori' => 4,
                'nama_mapel' => 'Simulasi dan Komunikasi Digital',
            ),
            209 => 
            array (
                'id' => 233,
                'id_master_jurusan' => 6,
                'id_master_kategori' => 4,
                'nama_mapel' => 'Kepariwisataan',
            ),
            210 => 
            array (
                'id' => 234,
                'id_master_jurusan' => 6,
                'id_master_kategori' => 7,
                'nama_mapel' => 'Produk Kreatif dan Kewirausahaan',
            ),
            211 => 
            array (
                'id' => 235,
                'id_master_jurusan' => 6,
                'id_master_kategori' => 7,
                'nama_mapel' => 'Industri Perhotelan',
            ),
            212 => 
            array (
                'id' => 236,
                'id_master_jurusan' => 6,
                'id_master_kategori' => 7,
                'nama_mapel' => 'Front Office',
            ),
            213 => 
            array (
                'id' => 237,
                'id_master_jurusan' => 6,
                'id_master_kategori' => 7,
                'nama_mapel' => 'Housekeeping',
            ),
            214 => 
            array (
                'id' => 238,
                'id_master_jurusan' => 6,
                'id_master_kategori' => 7,
                'nama_mapel' => 'Laundry',
            ),
            215 => 
            array (
                'id' => 239,
                'id_master_jurusan' => 6,
                'id_master_kategori' => 7,
                'nama_mapel' => 'Food and Beverage',
            ),
            216 => 
            array (
                'id' => 240,
                'id_master_jurusan' => 7,
                'id_master_kategori' => 4,
                'nama_mapel' => 'Simulasi dan Komunikasi Digital',
            ),
            217 => 
            array (
                'id' => 241,
                'id_master_jurusan' => 7,
                'id_master_kategori' => 4,
            'nama_mapel' => 'Ilmu Pengetahuan Alam (Terapan)',
            ),
            218 => 
            array (
                'id' => 242,
                'id_master_jurusan' => 7,
                'id_master_kategori' => 5,
            'nama_mapel' => 'Keamanan Pangan (Sanitasi, Higienis, dan Keselamatan Kerja)',
            ),
            219 => 
            array (
                'id' => 243,
                'id_master_jurusan' => 7,
                'id_master_kategori' => 5,
                'nama_mapel' => 'Boga Dasar',
            ),
            220 => 
            array (
                'id' => 244,
                'id_master_jurusan' => 7,
                'id_master_kategori' => 5,
                'nama_mapel' => 'Pengetahuan Bahan Makanan',
            ),
            221 => 
            array (
                'id' => 245,
                'id_master_jurusan' => 7,
                'id_master_kategori' => 7,
                'nama_mapel' => 'Produk Kreatif dan Kewirausahaan',
            ),
            222 => 
            array (
                'id' => 246,
                'id_master_jurusan' => 7,
                'id_master_kategori' => 7,
                'nama_mapel' => 'Tata Hidang',
            ),
            223 => 
            array (
                'id' => 247,
                'id_master_jurusan' => 7,
                'id_master_kategori' => 7,
                'nama_mapel' => 'Pengolahan dan Penyajian Makanan',
            ),
            224 => 
            array (
                'id' => 248,
                'id_master_jurusan' => 7,
                'id_master_kategori' => 7,
                'nama_mapel' => 'Produk Cake, dan Kue Indonesia',
            ),
            225 => 
            array (
                'id' => 249,
                'id_master_jurusan' => 7,
                'id_master_kategori' => 7,
                'nama_mapel' => 'Produk Pastry dan Bakery',
            ),
            226 => 
            array (
                'id' => 250,
                'id_master_jurusan' => 7,
                'id_master_kategori' => 7,
                'nama_mapel' => 'Pengolahan dan Penyajian Makanan',
            ),
            227 => 
            array (
                'id' => 251,
                'id_master_jurusan' => 7,
                'id_master_kategori' => 6,
            'nama_mapel' => 'Bimbingan dan Konseling/Konselor (BP/BK)',
            ),
            228 => 
            array (
                'id' => 252,
                'id_master_jurusan' => 7,
                'id_master_kategori' => 6,
                'nama_mapel' => 'Teknologi Informasi dan Komunikasi',
            ),
            229 => 
            array (
                'id' => 253,
                'id_master_jurusan' => 7,
                'id_master_kategori' => 3,
                'nama_mapel' => 'Seni Budaya',
            ),
            230 => 
            array (
                'id' => 254,
                'id_master_jurusan' => 7,
                'id_master_kategori' => 3,
                'nama_mapel' => 'Pendidikan Jasmani, Olahraga, dan Kesehatan',
            ),
            231 => 
            array (
                'id' => 255,
                'id_master_jurusan' => 7,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Pendidikan Agama Katholik dan Budi Pekerti',
            ),
            232 => 
            array (
                'id' => 256,
                'id_master_jurusan' => 7,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Pendidikan Agama Konghuchu dan Budi Pekerti',
            ),
            233 => 
            array (
                'id' => 257,
                'id_master_jurusan' => 7,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Bahasa Inggris',
            ),
            234 => 
            array (
                'id' => 258,
                'id_master_jurusan' => 7,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Pendidikan Agama Kristen dan Budi Pekerti',
            ),
            235 => 
            array (
                'id' => 259,
                'id_master_jurusan' => 7,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Pendidikan Agama Hindu dan Budi Pekerti',
            ),
            236 => 
            array (
                'id' => 260,
                'id_master_jurusan' => 7,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Bahasa Indonesia',
            ),
            237 => 
            array (
                'id' => 261,
                'id_master_jurusan' => 7,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Sejarah Indonesia',
            ),
            238 => 
            array (
                'id' => 262,
                'id_master_jurusan' => 7,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Pendidikan Agama Islam dan Budi Pekerti',
            ),
            239 => 
            array (
                'id' => 263,
                'id_master_jurusan' => 7,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Pendidikan Agama Buddha dan Budi Pekerti',
            ),
            240 => 
            array (
                'id' => 264,
                'id_master_jurusan' => 7,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Pendidikan Pancasila dan Kewarganegaraan',
            ),
            241 => 
            array (
                'id' => 265,
                'id_master_jurusan' => 7,
                'id_master_kategori' => 2,
            'nama_mapel' => 'Matematika (Umum)',
            ),
            242 => 
            array (
                'id' => 266,
                'id_master_jurusan' => 7,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Bahasa Arab',
            ),
            243 => 
            array (
                'id' => 267,
                'id_master_jurusan' => 7,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Bahasa Belanda',
            ),
            244 => 
            array (
                'id' => 268,
                'id_master_jurusan' => 7,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Bahasa Cina',
            ),
            245 => 
            array (
                'id' => 269,
                'id_master_jurusan' => 7,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Bahasa Jepang',
            ),
            246 => 
            array (
                'id' => 270,
                'id_master_jurusan' => 7,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Bahasa Jerman',
            ),
            247 => 
            array (
                'id' => 271,
                'id_master_jurusan' => 7,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Bahasa Korea',
            ),
            248 => 
            array (
                'id' => 272,
                'id_master_jurusan' => 7,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Bahasa Mandarin',
            ),
            249 => 
            array (
                'id' => 273,
                'id_master_jurusan' => 7,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Bahasa Perancis',
            ),
            250 => 
            array (
                'id' => 274,
                'id_master_jurusan' => 7,
                'id_master_kategori' => 1,
                'nama_mapel' => 'Muatan Lokal Potensi Daerah',
            ),
            251 => 
            array (
                'id' => 275,
                'id_master_jurusan' => 7,
                'id_master_kategori' => 1,
                'nama_mapel' => 'Muatan Lokal Bahasa Daerah',
            ),
            252 => 
            array (
                'id' => 276,
                'id_master_jurusan' => 8,
                'id_master_kategori' => 6,
            'nama_mapel' => 'Bimbingan dan Konseling/Konselor (BP/BK)',
            ),
            253 => 
            array (
                'id' => 277,
                'id_master_jurusan' => 8,
                'id_master_kategori' => 6,
                'nama_mapel' => 'Teknologi Informasi dan Komunikasi',
            ),
            254 => 
            array (
                'id' => 278,
                'id_master_jurusan' => 8,
                'id_master_kategori' => 3,
                'nama_mapel' => 'Seni Budaya',
            ),
            255 => 
            array (
                'id' => 279,
                'id_master_jurusan' => 8,
                'id_master_kategori' => 3,
                'nama_mapel' => 'Pendidikan Jasmani, Olahraga, dan Kesehatan',
            ),
            256 => 
            array (
                'id' => 280,
                'id_master_jurusan' => 8,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Pendidikan Agama Katholik dan Budi Pekerti',
            ),
            257 => 
            array (
                'id' => 281,
                'id_master_jurusan' => 8,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Pendidikan Agama Konghuchu dan Budi Pekerti',
            ),
            258 => 
            array (
                'id' => 282,
                'id_master_jurusan' => 8,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Bahasa Inggris',
            ),
            259 => 
            array (
                'id' => 283,
                'id_master_jurusan' => 8,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Pendidikan Agama Kristen dan Budi Pekerti',
            ),
            260 => 
            array (
                'id' => 284,
                'id_master_jurusan' => 8,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Pendidikan Agama Hindu dan Budi Pekerti',
            ),
            261 => 
            array (
                'id' => 285,
                'id_master_jurusan' => 8,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Bahasa Indonesia',
            ),
            262 => 
            array (
                'id' => 286,
                'id_master_jurusan' => 8,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Sejarah Indonesia',
            ),
            263 => 
            array (
                'id' => 287,
                'id_master_jurusan' => 8,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Pendidikan Agama Islam dan Budi Pekerti',
            ),
            264 => 
            array (
                'id' => 288,
                'id_master_jurusan' => 8,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Pendidikan Agama Buddha dan Budi Pekerti',
            ),
            265 => 
            array (
                'id' => 289,
                'id_master_jurusan' => 8,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Pendidikan Pancasila dan Kewarganegaraan',
            ),
            266 => 
            array (
                'id' => 290,
                'id_master_jurusan' => 8,
                'id_master_kategori' => 2,
            'nama_mapel' => 'Matematika (Umum)',
            ),
            267 => 
            array (
                'id' => 291,
                'id_master_jurusan' => 8,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Bahasa Arab',
            ),
            268 => 
            array (
                'id' => 292,
                'id_master_jurusan' => 8,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Bahasa Belanda',
            ),
            269 => 
            array (
                'id' => 293,
                'id_master_jurusan' => 8,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Bahasa Cina',
            ),
            270 => 
            array (
                'id' => 294,
                'id_master_jurusan' => 8,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Bahasa Jepang',
            ),
            271 => 
            array (
                'id' => 295,
                'id_master_jurusan' => 8,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Bahasa Jerman',
            ),
            272 => 
            array (
                'id' => 296,
                'id_master_jurusan' => 8,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Bahasa Korea',
            ),
            273 => 
            array (
                'id' => 297,
                'id_master_jurusan' => 8,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Bahasa Mandarin',
            ),
            274 => 
            array (
                'id' => 298,
                'id_master_jurusan' => 8,
                'id_master_kategori' => 2,
                'nama_mapel' => 'Bahasa Perancis',
            ),
            275 => 
            array (
                'id' => 299,
                'id_master_jurusan' => 8,
                'id_master_kategori' => 1,
                'nama_mapel' => 'Muatan Lokal Potensi Daerah',
            ),
            276 => 
            array (
                'id' => 300,
                'id_master_jurusan' => 8,
                'id_master_kategori' => 1,
                'nama_mapel' => 'Muatan Lokal Bahasa Daerah',
            ),
            277 => 
            array (
                'id' => 301,
                'id_master_jurusan' => 8,
                'id_master_kategori' => 4,
                'nama_mapel' => 'Simulasi dan Komunikasi Digital',
            ),
            278 => 
            array (
                'id' => 302,
                'id_master_jurusan' => 8,
                'id_master_kategori' => 4,
                'nama_mapel' => 'Dasar-dasar Kreativitas',
            ),
            279 => 
            array (
                'id' => 303,
                'id_master_jurusan' => 8,
                'id_master_kategori' => 4,
                'nama_mapel' => 'Tinjauan Seni',
            ),
            280 => 
            array (
                'id' => 304,
                'id_master_jurusan' => 8,
                'id_master_kategori' => 5,
                'nama_mapel' => 'Gambar',
            ),
            281 => 
            array (
                'id' => 305,
                'id_master_jurusan' => 8,
                'id_master_kategori' => 5,
                'nama_mapel' => 'Dasar-dasar Seni Rupa',
            ),
            282 => 
            array (
                'id' => 306,
                'id_master_jurusan' => 8,
                'id_master_kategori' => 5,
                'nama_mapel' => 'Sketsa',
            ),
            283 => 
            array (
                'id' => 307,
                'id_master_jurusan' => 8,
                'id_master_kategori' => 7,
                'nama_mapel' => 'Produk Kreatif dan Kewirausahaan',
            ),
            284 => 
            array (
                'id' => 308,
                'id_master_jurusan' => 8,
                'id_master_kategori' => 7,
                'nama_mapel' => 'Fotografi',
            ),
            285 => 
            array (
                'id' => 309,
                'id_master_jurusan' => 8,
                'id_master_kategori' => 7,
                'nama_mapel' => 'Komputer Grafis',
            ),
            286 => 
            array (
                'id' => 310,
                'id_master_jurusan' => 8,
                'id_master_kategori' => 7,
                'nama_mapel' => 'Videografi',
            ),
            287 => 
            array (
                'id' => 311,
                'id_master_jurusan' => 8,
                'id_master_kategori' => 7,
                'nama_mapel' => 'Desain Publikasi',
            ),
        ));
        
        
    }
}
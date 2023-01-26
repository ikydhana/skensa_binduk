<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CmsMenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cms_menus')->delete();
        
        \DB::table('cms_menus')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Data Master Siswa',
                'type' => 'Route',
                'path' => 'AdminMasterSiswaControllerGetIndex',
                'color' => NULL,
                'icon' => 'fa fa-book',
                'parent_id' => 7,
                'is_active' => 1,
                'is_dashboard' => 0,
                'id_cms_privileges' => 1,
                'sorting' => 4,
                'created_at' => '2023-01-24 00:37:50',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Data Master Sekolah',
                'type' => 'Route',
                'path' => 'AdminMasterSekolahControllerGetIndex',
                'color' => NULL,
                'icon' => 'fa fa-book',
                'parent_id' => 7,
                'is_active' => 1,
                'is_dashboard' => 0,
                'id_cms_privileges' => 1,
                'sorting' => 5,
                'created_at' => '2023-01-24 00:56:04',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Data Master Jurusan',
                'type' => 'Route',
                'path' => 'AdminMasterJurusanControllerGetIndex',
                'color' => NULL,
                'icon' => 'fa fa-book',
                'parent_id' => 7,
                'is_active' => 1,
                'is_dashboard' => 0,
                'id_cms_privileges' => 1,
                'sorting' => 1,
                'created_at' => '2023-01-25 00:55:43',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Data Master Mata Pelajaran',
                'type' => 'Route',
                'path' => 'AdminMasterMapelControllerGetIndex',
                'color' => NULL,
                'icon' => 'fa fa-book',
                'parent_id' => 7,
                'is_active' => 1,
                'is_dashboard' => 0,
                'id_cms_privileges' => 1,
                'sorting' => 3,
                'created_at' => '2023-01-25 01:16:39',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Data Master Kategori',
                'type' => 'Route',
                'path' => 'AdminMasterKategoriControllerGetIndex',
                'color' => NULL,
                'icon' => 'fa fa-book',
                'parent_id' => 7,
                'is_active' => 1,
                'is_dashboard' => 0,
                'id_cms_privileges' => 1,
                'sorting' => 2,
                'created_at' => '2023-01-25 01:19:46',
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 7,
                'name' => 'Master',
                'type' => 'Route',
                'path' => '#',
                'color' => 'normal',
                'icon' => 'fa fa-link',
                'parent_id' => 0,
                'is_active' => 1,
                'is_dashboard' => 0,
                'id_cms_privileges' => 1,
                'sorting' => 1,
                'created_at' => '2023-01-26 05:53:22',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}
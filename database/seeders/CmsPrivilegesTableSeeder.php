<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CmsPrivilegesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cms_privileges')->delete();
        
        \DB::table('cms_privileges')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Operator Aplikasi',
                'is_superadmin' => 1,
                'theme_color' => 'skin-blue',
                'created_at' => '2023-01-24 00:14:13',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}
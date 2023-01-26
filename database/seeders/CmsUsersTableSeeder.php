<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CmsUsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cms_users')->delete();
        
        \DB::table('cms_users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Super Admin',
                'photo' => NULL,
                'email' => 'admin@crudbooster.com',
                'password' => '$2y$10$knf7MqYoII7zmKx1QNeqxuvv8F/6Zykdhaup1tyYpNJM0hwCFFmcC',
                'id_cms_privileges' => 1,
                'created_at' => '2023-01-24 00:14:13',
                'updated_at' => NULL,
                'status' => 'Active',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Muhammad Rifky Wardana',
                'photo' => 'uploads/1/2023-01/dm_67.jpg',
                'email' => 'rwardana998@gmail.com',
                'password' => '$2y$10$51T7mrQm0hIyE5U7VziUzeuLzSPdbepqK0FfcCK4dEcbRkYr5uuRe',
                'id_cms_privileges' => 1,
                'created_at' => '2023-01-24 00:17:46',
                'updated_at' => NULL,
                'status' => NULL,
            ),
        ));
        
        
    }
}
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        $this->call(CmsDashboardTableSeeder::class);
        $this->call(CmsMenusTableSeeder::class);
        $this->call(CmsMenusPrivilegesTableSeeder::class);
        $this->call(CmsModulsTableSeeder::class);
        $this->call(CmsPrivilegesTableSeeder::class);
        $this->call(CmsPrivilegesRolesTableSeeder::class);
        $this->call(CmsSettingsTableSeeder::class);
        $this->call(CmsUsersTableSeeder::class);
        $this->call(MasterJurusanTableSeeder::class);
        $this->call(MasterKategoriTableSeeder::class);
        $this->call(MasterMapelTableSeeder::class);
        $this->call(MasterSiswaTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}

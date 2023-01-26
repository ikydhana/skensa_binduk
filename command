<!-- Membuat Seeder -->
php artisan iseed cms_dashboard,cms_menus,cms_menus_privileges,cms_moduls,cms_privileges,cms_privileges_roles,cms_settings,cms_cms_users,master_jurusan,master_kategori,master_mapel,master_siswa,users --force
<!-- Menggunakan Seeder -->
php artisan migrate:refresh --seed
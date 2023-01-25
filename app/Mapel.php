<?php
 
namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class Siswa extends Model
{
    protected $table = "master_mapel";
 
    protected $fillable = ['id_master_jurusan','id_master_kategori','nama_mapel'];
}
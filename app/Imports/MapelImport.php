<?php

namespace App\Imports;

use App\Models\Mapel;
use Maatwebsite\Excel\Concerns\ToModel;

class MapelImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Mapel([
            'id_master_jurusan' => $row[0],
            'id_master_kategori' => $row[1], 
            'nama_mapel' => $row[2], 
        ]);
    }
}

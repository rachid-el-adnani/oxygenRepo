<?php

namespace App\Imports;

use App\Post;
use Maatwebsite\Excel\Concerns\ToModel;

class PostsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Post([
            'zi'        => $row[0],
            'siteId'    => $row[1],
            'gsmId'     => $row[2],
            'topoCont'  => $row[3],
            'plannRedr' => $row[4],
            'Country'   => $row[5],
            'dateReal'  => $row[6],
            'semReal'   => $row[7],
            'statuts'   => $row[8],
        ]);
    }
}

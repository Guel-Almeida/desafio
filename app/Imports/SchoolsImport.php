<?php

namespace App\Imports;

use App\Models\School;
use Maatwebsite\Excel\Concerns\ToModel;

class SchoolsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        if($row[0]!=null or !empty($row[0])){
            return new School(
                        [
                        'name'=>$row[0],
                        'email'=>$row[1],
                        'numberOfRooms'=>$row[2],
                        'province'=>$row[3]
                    ]);
        }

    }
}

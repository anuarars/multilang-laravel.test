<?php

namespace App\Imports;

use App\Models\News;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;

class NewsImport implements ToModel
{
    use Importable;
    /**
    * @param Collection $collection
    */
    public function model(array $row)
    {
        return new News([
            'link' => $row[0],
        ]);
    }
}

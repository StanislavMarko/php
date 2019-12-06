<?php

namespace App\Exports;

use App\Project;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class ProjectsExport implements FromCollection ,WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Project::all();
    }


    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            'id',
            'title',
            'description',
            'created_at',
            'updated_at',
        ];
    }
}

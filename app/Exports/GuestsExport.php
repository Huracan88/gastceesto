<?php

namespace App\Exports;

use App\Models\Guest;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;

class GuestsExport implements FromCollection, ShouldAutoSize, WithHeadings
{
    public function headings(): array
    {
        return [
            ['Nómina', 'Unidad','Zona','Empleado','Nombre','Antiguedad','Estado'],
        ];
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Guest::select('group','unit','zone','employee','name','years','status')->get();
    }
}

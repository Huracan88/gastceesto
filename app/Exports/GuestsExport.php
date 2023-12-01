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
            ['Nómina','Número' ,'Unidad','Zona','Empleado','Nombre','Antiguedad','Estado','Hora registro'],
        ];
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Guest::select('group','number','unit','zone','employee','name','years','status','registered_at')
                ->orderBy('status','desc')
                ->orderBy('years','desc')
                ->orderBy('registered_at','asc')
                ->orderBy('unit','asc')
                ->orderBy('name','asc')
                ->get();
    }
}

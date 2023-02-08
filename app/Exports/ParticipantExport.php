<?php

namespace App\Exports;

use App\Models\Participant;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class ParticipantExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Participant::all();
        
    }

    public function headings(): array {
        return [
            'NO',
            'NAME',
            'EMAIL',
            'COMPETITION',
            'POSITION',
            'PLACE',
            'CREATED_AT',
            'UPDATED_AT'
        ];
    }
}

<?php

namespace App\Exports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;

class AccountExport implements FromCollection, WithHeadings, ShouldAutoSize
{
    protected $data;

    /**
     * Write code on Method\
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Write code on Method
     */
    public function collection(): Collection
    {
        return collect($this->data);
    }

    /**
     * Write code on Method
     */
    public function headings() :array
    {
        return [];
    }
}

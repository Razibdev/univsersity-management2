<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use DB;

class Teacher_Export implements WithHeadings, FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $teachers = DB::table('teachers')->select(
            'first_name', 'last_name', 'gender', 'email', 'phone', 'status'
        )->get();
      return  $teachers;
    }

    public function headings() : array{
        return [
            'First Name',
            'Last Name',
            'Gender',
            'Email',
            'Phone',
            'Status'
        ];
    }
}

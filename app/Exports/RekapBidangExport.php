<?php

namespace App\Exports;


use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Support\Facades\DB;

class RekapBidangExport implements FromView
{

    public function __construct($search)
    {
        $this->search = $search;
    }
    
    public function view(): View
    {
        $datas1 = DB::select('SELECT
            SUM(poin11 + poin12 + poin13 + poin14 + poin15 + poin16 + poin17 + poin18) AS jum1,
            SUM(poin21 + poin22 + poin23 + poin24 + poin25 + poin26 + poin27 + poin28) AS jum2,
            SUM(poin31 + poin32 + poin33 + poin34 + poin35 + poin36 + poin37 + poin38) AS jum3,
            SUM(poin41 + poin42 + poin43 + poin44 + poin45 + poin46 + poin47 + poin48) AS jum4,
            
            SUM(poin11 + poin12 + poin13 + poin14 + poin15 + poin16 + poin17 + poin18 + 
            poin21 + poin22 + poin23 + poin24 + poin25 + poin26 + poin27 + poin28 + 
            poin31 + poin32 + poin33 + poin34 + poin35 + poin36 + poin37 + poin38 + 
            poin41 + poin42 + poin43 + poin44 + poin45 + poin46 + poin47 + poin48) AS total
        FROM
            `data_laporan`
        WHERE MONTH(data_laporan.tanggal) = :search
        GROUP BY MONTH(data_laporan.tanggal)
        ',
        ['search'=>$this->search] );

        return view('exports.rb', [
            'datas1' => $datas1
        ]);
    }
}

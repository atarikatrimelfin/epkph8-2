<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Support\Facades\DB;

class RekapExport implements FromView
{

    public function __construct($search)
    {
        $this->search = $search;
    }

    public function view():View
    {

        $search = $this->search != '' ? $this->search : '01';
        $month = '_____'.$search.'%';

        $datas1 = DB::table('data_laporan')
                ->selectRaw("users.nama, users.id, users.wilayah, users.jabatan, data_laporan.id, 
                (select sum(poin11+poin12+poin13+poin14+poin15+poin16+poin17+poin18+poin21+poin22+poin23+poin24+poin25+poin26+poin27+poin28+poin31+poin32+poin33+poin34+poin35+poin36+poin37+poin38+poin41+poin42+poin43+poin44+poin45+poin46+poin47+poin48) 
                from data_laporan
                where MONTH(tanggal) = $search and tanggal like '________01%' and id=users.id) AS tgl01,
                (select sum(poin11+poin12+poin13+poin14+poin15+poin16+poin17+poin18+poin21+poin22+poin23+poin24+poin25+poin26+poin27+poin28+poin31+poin32+poin33+poin34+poin35+poin36+poin37+poin38+poin41+poin42+poin43+poin44+poin45+poin46+poin47+poin48) 
                from data_laporan
                where MONTH(tanggal) = $search and tanggal like '________02%' and id=users.id) AS tgl02,
                (select sum(poin11+poin12+poin13+poin14+poin15+poin16+poin17+poin18+poin21+poin22+poin23+poin24+poin25+poin26+poin27+poin28+poin31+poin32+poin33+poin34+poin35+poin36+poin37+poin38+poin41+poin42+poin43+poin44+poin45+poin46+poin47+poin48) 
                from data_laporan
                where MONTH(tanggal) = $search and tanggal like '________03%' and id=users.id) AS tgl03,
                (select sum(poin11+poin12+poin13+poin14+poin15+poin16+poin17+poin18+poin21+poin22+poin23+poin24+poin25+poin26+poin27+poin28+poin31+poin32+poin33+poin34+poin35+poin36+poin37+poin38+poin41+poin42+poin43+poin44+poin45+poin46+poin47+poin48) 
                from data_laporan
                where MONTH(tanggal) = $search and tanggal like '________04%' and id=users.id) AS tgl04,
                (select sum(poin11+poin12+poin13+poin14+poin15+poin16+poin17+poin18+poin21+poin22+poin23+poin24+poin25+poin26+poin27+poin28+poin31+poin32+poin33+poin34+poin35+poin36+poin37+poin38+poin41+poin42+poin43+poin44+poin45+poin46+poin47+poin48) 
                from data_laporan
                where MONTH(tanggal) = $search and tanggal like '________05%' and id=users.id) AS tgl05,
                (select sum(poin11+poin12+poin13+poin14+poin15+poin16+poin17+poin18+poin21+poin22+poin23+poin24+poin25+poin26+poin27+poin28+poin31+poin32+poin33+poin34+poin35+poin36+poin37+poin38+poin41+poin42+poin43+poin44+poin45+poin46+poin47+poin48) 
                from data_laporan
                where MONTH(tanggal) = $search and tanggal like '________086%' and id=users.id) AS tgl06,
                (select sum(poin11+poin12+poin13+poin14+poin15+poin16+poin17+poin18+poin21+poin22+poin23+poin24+poin25+poin26+poin27+poin28+poin31+poin32+poin33+poin34+poin35+poin36+poin37+poin38+poin41+poin42+poin43+poin44+poin45+poin46+poin47+poin48) 
                from data_laporan
                where MONTH(tanggal) = $search and tanggal like '________07%' and id=users.id) AS tgl07,
                (select sum(poin11+poin12+poin13+poin14+poin15+poin16+poin17+poin18+poin21+poin22+poin23+poin24+poin25+poin26+poin27+poin28+poin31+poin32+poin33+poin34+poin35+poin36+poin37+poin38+poin41+poin42+poin43+poin44+poin45+poin46+poin47+poin48) 
                from data_laporan
                where MONTH(tanggal) = $search and tanggal like '________08%' and id=users.id) AS tgl08,
                (select sum(poin11+poin12+poin13+poin14+poin15+poin16+poin17+poin18+poin21+poin22+poin23+poin24+poin25+poin26+poin27+poin28+poin31+poin32+poin33+poin34+poin35+poin36+poin37+poin38+poin41+poin42+poin43+poin44+poin45+poin46+poin47+poin48) 
                from data_laporan
                where MONTH(tanggal) = $search and tanggal like '________09%' and id=users.id) AS tgl09,
                (select sum(poin11+poin12+poin13+poin14+poin15+poin16+poin17+poin18+poin21+poin22+poin23+poin24+poin25+poin26+poin27+poin28+poin31+poin32+poin33+poin34+poin35+poin36+poin37+poin38+poin41+poin42+poin43+poin44+poin45+poin46+poin47+poin48) 
                from data_laporan
                where MONTH(tanggal) = $search and tanggal like '________10%' and id=users.id) AS tgl10,
                (select sum(poin11+poin12+poin13+poin14+poin15+poin16+poin17+poin18+poin21+poin22+poin23+poin24+poin25+poin26+poin27+poin28+poin31+poin32+poin33+poin34+poin35+poin36+poin37+poin38+poin41+poin42+poin43+poin44+poin45+poin46+poin47+poin48) 
                from data_laporan
                where MONTH(tanggal) = $search and tanggal like '________11%' and id=users.id) AS tgl11,
                (select sum(poin11+poin12+poin13+poin14+poin15+poin16+poin17+poin18+poin21+poin22+poin23+poin24+poin25+poin26+poin27+poin28+poin31+poin32+poin33+poin34+poin35+poin36+poin37+poin38+poin41+poin42+poin43+poin44+poin45+poin46+poin47+poin48) 
                from data_laporan
                where MONTH(tanggal) = $search and tanggal like '________12%' and id=users.id) AS tgl12,
                (select sum(poin11+poin12+poin13+poin14+poin15+poin16+poin17+poin18+poin21+poin22+poin23+poin24+poin25+poin26+poin27+poin28+poin31+poin32+poin33+poin34+poin35+poin36+poin37+poin38+poin41+poin42+poin43+poin44+poin45+poin46+poin47+poin48) 
                from data_laporan
                where MONTH(tanggal) = $search and tanggal like '________13%' and id=users.id) AS tgl13,
                (select sum(poin11+poin12+poin13+poin14+poin15+poin16+poin17+poin18+poin21+poin22+poin23+poin24+poin25+poin26+poin27+poin28+poin31+poin32+poin33+poin34+poin35+poin36+poin37+poin38+poin41+poin42+poin43+poin44+poin45+poin46+poin47+poin48) 
                from data_laporan
                where MONTH(tanggal) = $search and tanggal like '________14%' and id=users.id) AS tgl14,
                (select sum(poin11+poin12+poin13+poin14+poin15+poin16+poin17+poin18+poin21+poin22+poin23+poin24+poin25+poin26+poin27+poin28+poin31+poin32+poin33+poin34+poin35+poin36+poin37+poin38+poin41+poin42+poin43+poin44+poin45+poin46+poin47+poin48) 
                from data_laporan
                where MONTH(tanggal) = $search and tanggal like '________15%' and id=users.id) AS tgl15,
                (select sum(poin11+poin12+poin13+poin14+poin15+poin16+poin17+poin18+poin21+poin22+poin23+poin24+poin25+poin26+poin27+poin28+poin31+poin32+poin33+poin34+poin35+poin36+poin37+poin38+poin41+poin42+poin43+poin44+poin45+poin46+poin47+poin48) 
                from data_laporan
                where MONTH(tanggal) = $search and tanggal like '________16%' and id=users.id) AS tgl16,
                (select sum(poin11+poin12+poin13+poin14+poin15+poin16+poin17+poin18+poin21+poin22+poin23+poin24+poin25+poin26+poin27+poin28+poin31+poin32+poin33+poin34+poin35+poin36+poin37+poin38+poin41+poin42+poin43+poin44+poin45+poin46+poin47+poin48) 
                from data_laporan
                where MONTH(tanggal) = $search and tanggal like '________17%' and id=users.id) AS tgl17,
                (select sum(poin11+poin12+poin13+poin14+poin15+poin16+poin17+poin18+poin21+poin22+poin23+poin24+poin25+poin26+poin27+poin28+poin31+poin32+poin33+poin34+poin35+poin36+poin37+poin38+poin41+poin42+poin43+poin44+poin45+poin46+poin47+poin48) 
                from data_laporan
                where MONTH(tanggal) = $search and tanggal like '________18%' and id=users.id) AS tgl18,
                (select sum(poin11+poin12+poin13+poin14+poin15+poin16+poin17+poin18+poin21+poin22+poin23+poin24+poin25+poin26+poin27+poin28+poin31+poin32+poin33+poin34+poin35+poin36+poin37+poin38+poin41+poin42+poin43+poin44+poin45+poin46+poin47+poin48) 
                from data_laporan
                where MONTH(tanggal) = $search and tanggal like '________19%' and id=users.id) AS tgl19,
                (select sum(poin11+poin12+poin13+poin14+poin15+poin16+poin17+poin18+poin21+poin22+poin23+poin24+poin25+poin26+poin27+poin28+poin31+poin32+poin33+poin34+poin35+poin36+poin37+poin38+poin41+poin42+poin43+poin44+poin45+poin46+poin47+poin48) 
                from data_laporan
                where MONTH(tanggal) = $search and tanggal like '________20%' and id=users.id) AS tgl20,
                (select sum(poin11+poin12+poin13+poin14+poin15+poin16+poin17+poin18+poin21+poin22+poin23+poin24+poin25+poin26+poin27+poin28+poin31+poin32+poin33+poin34+poin35+poin36+poin37+poin38+poin41+poin42+poin43+poin44+poin45+poin46+poin47+poin48) 
                from data_laporan
                where MONTH(tanggal) = $search and tanggal like '________21%' and id=users.id) AS tgl21,
                (select sum(poin11+poin12+poin13+poin14+poin15+poin16+poin17+poin18+poin21+poin22+poin23+poin24+poin25+poin26+poin27+poin28+poin31+poin32+poin33+poin34+poin35+poin36+poin37+poin38+poin41+poin42+poin43+poin44+poin45+poin46+poin47+poin48) 
                from data_laporan
                where MONTH(tanggal) = $search and tanggal like '________22%' and id=users.id) AS tgl22,
                (select sum(poin11+poin12+poin13+poin14+poin15+poin16+poin17+poin18+poin21+poin22+poin23+poin24+poin25+poin26+poin27+poin28+poin31+poin32+poin33+poin34+poin35+poin36+poin37+poin38+poin41+poin42+poin43+poin44+poin45+poin46+poin47+poin48) 
                from data_laporan
                where MONTH(tanggal) = $search and tanggal like '________23%' and id=users.id) AS tgl23,
                (select sum(poin11+poin12+poin13+poin14+poin15+poin16+poin17+poin18+poin21+poin22+poin23+poin24+poin25+poin26+poin27+poin28+poin31+poin32+poin33+poin34+poin35+poin36+poin37+poin38+poin41+poin42+poin43+poin44+poin45+poin46+poin47+poin48) 
                from data_laporan
                where MONTH(tanggal) = $search and tanggal like '________24%' and id=users.id) AS tgl24,
                (select sum(poin11+poin12+poin13+poin14+poin15+poin16+poin17+poin18+poin21+poin22+poin23+poin24+poin25+poin26+poin27+poin28+poin31+poin32+poin33+poin34+poin35+poin36+poin37+poin38+poin41+poin42+poin43+poin44+poin45+poin46+poin47+poin48) 
                from data_laporan
                where MONTH(tanggal) = $search and tanggal like '________25%' and id=users.id) AS tgl25,
                (select sum(poin11+poin12+poin13+poin14+poin15+poin16+poin17+poin18+poin21+poin22+poin23+poin24+poin25+poin26+poin27+poin28+poin31+poin32+poin33+poin34+poin35+poin36+poin37+poin38+poin41+poin42+poin43+poin44+poin45+poin46+poin47+poin48) 
                from data_laporan
                where MONTH(tanggal) = $search and tanggal like '________26%' and id=users.id) AS tgl26,
                (select sum(poin11+poin12+poin13+poin14+poin15+poin16+poin17+poin18+poin21+poin22+poin23+poin24+poin25+poin26+poin27+poin28+poin31+poin32+poin33+poin34+poin35+poin36+poin37+poin38+poin41+poin42+poin43+poin44+poin45+poin46+poin47+poin48) 
                from data_laporan
                where MONTH(tanggal) = $search and tanggal like '________27%' and id=users.id) AS tgl27,
                (select sum(poin11+poin12+poin13+poin14+poin15+poin16+poin17+poin18+poin21+poin22+poin23+poin24+poin25+poin26+poin27+poin28+poin31+poin32+poin33+poin34+poin35+poin36+poin37+poin38+poin41+poin42+poin43+poin44+poin45+poin46+poin47+poin48) 
                from data_laporan
                where MONTH(tanggal) = $search and tanggal like '________28%' and id=users.id) AS tgl28,
                (select sum(poin11+poin12+poin13+poin14+poin15+poin16+poin17+poin18+poin21+poin22+poin23+poin24+poin25+poin26+poin27+poin28+poin31+poin32+poin33+poin34+poin35+poin36+poin37+poin38+poin41+poin42+poin43+poin44+poin45+poin46+poin47+poin48) 
                from data_laporan
                where MONTH(tanggal) = $search and tanggal like '________29%' and id=users.id) AS tgl29,
                (select sum(poin11+poin12+poin13+poin14+poin15+poin16+poin17+poin18+poin21+poin22+poin23+poin24+poin25+poin26+poin27+poin28+poin31+poin32+poin33+poin34+poin35+poin36+poin37+poin38+poin41+poin42+poin43+poin44+poin45+poin46+poin47+poin48) 
                from data_laporan
                where MONTH(tanggal) = $search and tanggal like '________30%' and id=users.id) AS tgl30,
                (select sum(poin11+poin12+poin13+poin14+poin15+poin16+poin17+poin18+poin21+poin22+poin23+poin24+poin25+poin26+poin27+poin28+poin31+poin32+poin33+poin34+poin35+poin36+poin37+poin38+poin41+poin42+poin43+poin44+poin45+poin46+poin47+poin48) 
                from data_laporan
                where MONTH(tanggal) = $search and tanggal like '________31%' and id=users.id) AS tgl31")
                ->leftjoin('users', 'users.id', '=', 'data_laporan.id') 
                ->where('data_laporan.tanggal', 'LIKE', $month)
                ->groupBy('data_laporan.id', 'users.nama', 'users.id', 'users.wilayah', 'users.jabatan')
                ->get();

                return view('exports.r', [
                    'datas1' => $datas1
                ]);
    }
}

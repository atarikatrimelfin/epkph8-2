<table class="table table-bordered">
    <thead>
        <tr>
            <th rowspan="3">No.</th>
            <th rowspan="3">Nama</th>
            <th rowspan="3">Jabatan</th>
            <th colspan="31">POIN EVIDEN</th>
        </tr>
        
        <tr>
            <th colspan="31">Tanggal 1 s.d. 31</th>
        </tr>
        <tr>
            <th>1</th>
            <th>2</th>
            <th>3</th>
            <th>4</th>
            <th>5</th>
            <th>6</th>
            <th>7</th>
            <th>8</th>


            <th>9</th>
            <th>10</th>
            <th>11</th>
            <th>12</th>
            <th>13</th>
            <th>14</th>
            <th>15</th>
            <th>16</th>


            <th>17</th>
            <th>18</th>
            <th>19</th>
            <th>20</th>
            <th>21</th>
            <th>22</th>
            <th>23</th>
            <th>24</th>


            <th>25</th>
            <th>26</th>
            <th>27</th>
            <th>28</th>
            <th>29</th>
            <th>30</th>
            <th>31</th>
        </tr>
    </thead>
    <tbody>

        @php
            $tgl1jum = 0;
            $tgl2jum = 0;
            $tgl3jum = 0;
            $tgl4jum = 0;
            $tgl5jum = 0;
            $tgl6jum = 0;
            $tgl7jum = 0;
            $tgl8jum = 0;
            $tgl9jum = 0;
            $tgl10jum = 0;
            $tgl11jum = 0;
            $tgl12jum = 0;
            $tgl13jum = 0;
            $tgl14jum = 0;
            $tgl15jum = 0;
            $tgl16jum = 0;
            $tgl17jum = 0;
            $tgl18jum = 0;
            $tgl19jum = 0;
            $tgl20jum = 0;
            $tgl21jum = 0;
            $tgl22jum = 0;
            $tgl23jum = 0;
            $tgl24jum = 0;
            $tgl25jum = 0;
            $tgl26jum = 0;
            $tgl27jum = 0;
            $tgl28jum = 0;
            $tgl29jum = 0;
            $tgl30jum = 0;
            $tgl31jum = 0;
        @endphp

        @foreach ($datas1 as $no => $data1)
            <tr>
                <th scope="row">{{ ++$no }}</th>

                <td>{{ $data1->nama }}</td>
                <td>{{ $data1->jabatan }}</td>

                <td>{{ $data1->tgl01 }}</td>
                <td>{{ $data1->tgl02 }}</td>
                <td>{{ $data1->tgl03 }}</td>
                <td>{{ $data1->tgl04 }}</td>
                <td>{{ $data1->tgl05 }}</td>
                <td>{{ $data1->tgl06 }}</td>
                <td>{{ $data1->tgl07 }}</td>
                <td>{{ $data1->tgl08 }}</td>


                <td>{{ $data1->tgl09 }}</td>
                <td>{{ $data1->tgl10 }}</td>
                <td>{{ $data1->tgl11 }}</td>
                <td>{{ $data1->tgl12 }}</td>
                <td>{{ $data1->tgl13 }}</td>
                <td>{{ $data1->tgl14 }}</td>
                <td>{{ $data1->tgl15 }}</td>
                <td>{{ $data1->tgl16 }}</td>


                <td>{{ $data1->tgl17 }}</td>
                <td>{{ $data1->tgl18 }}</td>
                <td>{{ $data1->tgl19 }}</td>
                <td>{{ $data1->tgl20 }}</td>
                <td>{{ $data1->tgl21 }}</td>
                <td>{{ $data1->tgl22 }}</td>
                <td>{{ $data1->tgl23 }}</td>
                <td>{{ $data1->tgl24 }}</td>


                <td>{{ $data1->tgl25 }}</td>
                <td>{{ $data1->tgl26 }}</td>
                <td>{{ $data1->tgl27 }}</td>
                <td>{{ $data1->tgl28 }}</td>
                <td>{{ $data1->tgl29 }}</td>
                <td>{{ $data1->tgl30 }}</td>
                <td>{{ $data1->tgl31 }}</td>

                @php
                $tgl1jum += $data1->tgl01;
                $tgl2jum += $data1->tgl02;
                $tgl3jum += $data1->tgl03;
                $tgl4jum += $data1->tgl04;
                $tgl5jum += $data1->tgl05;
                $tgl6jum += $data1->tgl06;
                $tgl7jum += $data1->tgl07;
                $tgl8jum += $data1->tgl08;
                $tgl9jum += $data1->tgl09;
                $tgl10jum += $data1->tgl10;
                $tgl11jum += $data1->tgl11;
                $tgl12jum += $data1->tgl12;
                $tgl13jum += $data1->tgl13;
                $tgl14jum += $data1->tgl14;
                $tgl15jum += $data1->tgl15;
                $tgl16jum += $data1->tgl16;
                $tgl17jum += $data1->tgl17;
                $tgl18jum += $data1->tgl18;
                $tgl19jum += $data1->tgl19;
                $tgl20jum += $data1->tgl20;
                $tgl21jum += $data1->tgl21;
                $tgl22jum += $data1->tgl22;
                $tgl23jum += $data1->tgl23;
                $tgl24jum += $data1->tgl24;
                $tgl25jum += $data1->tgl25;
                $tgl26jum += $data1->tgl26;
                $tgl27jum += $data1->tgl27;
                $tgl28jum += $data1->tgl28;
                $tgl29jum += $data1->tgl29;
                $tgl30jum += $data1->tgl30;
                $tgl31jum += $data1->tgl31;
            @endphp
            </tr>
        @endforeach
    </tbody>
    <tr>
        <th colspan=3>JUMLAH</th>
        <th>{{$tgl1jum}}</th>
        <th>{{$tgl2jum}}</th>
        <th>{{$tgl3jum}}</th>
        <th>{{$tgl4jum}}</th>
        <th>{{$tgl5jum}}</th>
        <th>{{$tgl6jum}}</th>
        <th>{{$tgl7jum}}</th>
        <th>{{$tgl8jum}}</th>
        <th>{{$tgl9jum}}</th>
        <th>{{$tgl10jum}}</th>
        <th>{{$tgl11jum}}</th>
        <th>{{$tgl12jum}}</th>
        <th>{{$tgl13jum}}</th>
        <th>{{$tgl14jum}}</th>
        <th>{{$tgl15jum}}</th>
        <th>{{$tgl16jum}}</th>
        <th>{{$tgl17jum}}</th>
        <th>{{$tgl18jum}}</th>
        <th>{{$tgl19jum}}</th>
        <th>{{$tgl20jum}}</th>
        <th>{{$tgl21jum}}</th>
        <th>{{$tgl22jum}}</th>
        <th>{{$tgl23jum}}</th>
        <th>{{$tgl24jum}}</th>
        <th>{{$tgl25jum}}</th>
        <th>{{$tgl26jum}}</th>
        <th>{{$tgl27jum}}</th>
        <th>{{$tgl28jum}}</th>
        <th>{{$tgl29jum}}</th>
        <th>{{$tgl30jum}}</th>
        <th>{{$tgl31jum}}</th>
    </tr>
</table>
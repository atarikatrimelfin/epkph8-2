<table class="table table-bordered text-center">
    <thead>
        <tr>
            <th>No.</th>
            <th>Bidang</th>
            <th>Jumlah Point</th>
            <th>Keterangan</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($datas1 as $data1)
            <tr>
                <td>1.</td>
                <td>Tanaman / Pemeliharaan / Persemaian</td>
                <td>{{ $data1->jum1 }}</td>
                <td></td>
            </tr>
            <tr>
                <td>2.</td>
                <td>Keamanan / Patroli</td>
                <td>{{ $data1->jum2 }}</td>
                <td></td>
            </tr>
            <tr>
                <td>3.</td>
                <td>Sosialisasi / Rapat / Apel</td>
                <td>{{ $data1->jum3 }}</td>
                <td></td>
            </tr>
            <tr>
                <td>4.</td>
                <td>Produksi / Agroforestry / Wisata</td>
                <td>{{ $data1->jum4 }}</td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td>Total</td>
                <td>{{ $data1->total }}</td>
                <td></td>
            </tr>
        @endforeach
    </tbody>
</table>
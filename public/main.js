// User
$(document).ready(function () {
    var groupColumn = 2;
    var table = $('#user').DataTable({
        scrollY: 600,
        scrollX: true,
        scrollCollapse: true,
        columnDefs: [{ visible: false, targets: groupColumn },
        { orderable: false, targets: 5 }],
        order: [[groupColumn, 'asc']],
        displayLength: 25,
        drawCallback: function (settings) {
            var api = this.api();
            var rows = api.rows({ page: 'current' }).nodes();
            var last = null;

            api
                .column(groupColumn, { page: 'current' })
                .data()
                .each(function (group, i) {
                    if (last !== group) {
                        $(rows)
                            .eq(i)
                            .before('<tr class="group"><td colspan="5">' + group + '</td></tr>');

                        last = group;
                    }
                });
        },
    });

    // Order by the grouping
    $('#user').on('click', 'tr.group', function () {
        var currentOrder = table.order()[0];
        if (currentOrder[0] === groupColumn && currentOrder[1] === 'asc') {
            table.order([groupColumn, 'desc']).draw();
        } else {
            table.order([groupColumn, 'asc']).draw();
        }
    });
});

// Rekap Harian
$(document).ready(function () {
    var groupColumn = 2;
    var table = $('#harian').DataTable({
        dom: "<'row'<'col-sm-12 col-md-6 carih'l ><'col-sm-12 col-md-6'f>>" +
            "<'row'<'col-sm-12'tr>>" +
            "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
        scrollY: 600,
        scrollX: true,
        scrollCollapse: true,
        paging: false,
        // searching: false,
        columnDefs: [{ visible: false, targets: groupColumn },
        { orderable: false, targets: [4, 5, 6, 7, 8, 9, 10, 11, 13, 14, 15, 16, 17, 18, 19, 20, 22, 23, 24, 25, 26, 27, 28, 29, 31, 32, 33, 34, 35, 36, 37, 38] }],
        // { visible: false, targets: -1, }],
        order: [[groupColumn, 'asc']],
        // displayLength: 25,
        drawCallback: function (settings) {
            var api = this.api();
            var rows = api.rows({ page: 'current' }).nodes();
            var last = null;

            api
                .column(groupColumn, { page: 'current' })
                .data()
                .each(function (group, i) {
                    if (last !== group) {
                        $(rows)
                            .eq(i)
                            .before('<tr class="group"><td colspan="39">' + group + '</td></tr>');

                        last = group;
                    }
                });
        },
    });

    $('.carih').append(`
        <form>
            <div class="input-group">
                <input type="date" class="form-control" name="search" placeholder="search"
                    aria-label="search" aria-describedby="button-addon2">
                 <button class="btn btn-outline-dark" type="submit" id="button-addon2">Cari</button>
            </div>
        </form>
    `);

    // Order by the grouping
    $('#harian').on('click', 'tr.group', function () {
        var currentOrder = table.order()[0];
        if (currentOrder[0] === groupColumn && currentOrder[1] === 'asc') {
            table.order([groupColumn, 'desc']).draw();
        } else {
            table.order([groupColumn, 'asc']).draw();
        }
    });
});

{/* <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div> */}

// Data Eviden Poin
$(document).ready(function () {
    $('#evpo').DataTable({
        scrollY: 600,
        scrollX: true,
        scrollCollapse: true,
        columnDefs: [{ orderable: false, targets: [1, 2, 3, 4, 5, 6, 7, 8, 10, 11, 12, 13, 14, 15, 16, 17, 19, 20, 21, 22, 23, 24, 25, 26, 28, 29, 30, 31, 32, 33, 34, 35, 37, 38] }],
        displayLength: 25,
    });
});

// Rekap Bidang 1
$(document).ready(function () {
    $('#bidang1').DataTable({
        dom: "<'row'<'col-sm-10 col-md-6 caribd1'l ><'col-sm-10 col-md-6'f>>" +
            "<'row'<'col-sm-12'tr>>" +
            "<'row'<'col-sm-10 col-md-5'i><'col-sm-10 col-md-7'p>>",
        scrollY: 600,
        scrollX: true,
        scrollCollapse: true,
        // displayLength: 25,
        paging: false,
        columnDefs: [{ orderable: false, targets: [3, 4, 5, 6, 7, 8, 9, 10, 12, 13, 14, 15, 16, 17, 18, 19, 21, 22, 23, 24, 25, 26, 27, 28, 30, 31, 32, 33, 34, 35, 36, 37] }],
    });

    $('.caribd1').append(`
    <form>
    <div class="input-group mt-2 mb-4">
        <select name="search" type="number" class="form-control" placeholder="search" aria-label="search"
            aria-describedby="button-addon2">
            <option>Pilih Bulan</option>
            <option value="01">Januari</option>
            <option value="02">Febuari</option>
            <option value="03">Maret</option>
            <option value="04">April</option>
            <option value="05">Mei</option>
            <option value="06">Juni</option>
            <option value="07">Juli</option>
            <option value="08">Agustus</option>
            <option value="09">September</option>
            <option value="10">Oktober</option>
            <option value="11">November</option>
            <option value="12">Desember</option>
        </select>

        <button class="btn btn-outline-dark" type="submit" id="button-addon2">Cari</button>
    </div>
    </form>
    `);
});

// // Rekap Bulanan
// $(document).ready(function () {
//     $('#bulanan').DataTable({
//         dom: "<'row'<'col-sm-10 col-md-6 carib'l ><'col-sm-10 col-md-6'f>>" +
//             "<'row'<'col-sm-12'tr>>" +
//             "<'row'<'col-sm-10 col-md-5'i><'col-sm-10 col-md-7'p>>",
//         scrollY: 600,
//         scrollX: true,
//         scrollCollapse: true,
//         // displayLength: 25,
//         paging: false,
//         // columnDefs: [{ orderable: false, targets: [3, 4, 5, 6, 7, 8, 9, 10, 12, 13, 14, 15, 16, 17, 18, 19, 21, 22, 23, 24, 25, 26, 27, 28, 30, 31, 32, 33, 34, 35, 36, 37] }],
    
//         footerCallback: function (row, data, start, end, display) {
//             var api = this.api();
 
//             // Get the sum of column 1
//             var column1 = api.column(1, {page: 'current'}).data().sum();
            
//             // Get the sum of column 2
//             var column2 = api.column(2, {page: 'current'}).data().sum();
            
//             // Set the content of the table footer for the two columns
//             $(api.column(1).footer()).html('Total Column 1: ' + column1);
//             $(api.column(2).footer()).html('Total Column 2: ' + column2);
//         }
//     });

//     $('.carib').append(`
//     <form>
//     <div class="input-group mt-2 mb-4">
//         <select name="search" type="number" class="form-control" placeholder="search" aria-label="search"
//             aria-describedby="button-addon2">
//             <option>Pilih Bulan</option>
//             <option value="01">Januari</option>
//             <option value="02">Febuari</option>
//             <option value="03">Maret</option>
//             <option value="04">April</option>
//             <option value="05">Mei</option>
//             <option value="06">Juni</option>
//             <option value="07">Juli</option>
//             <option value="08">Agustus</option>
//             <option value="09">September</option>
//             <option value="10">Oktober</option>
//             <option value="11">November</option>
//             <option value="12">Desember</option>
//         </select>

//         <button class="btn btn-outline-dark" type="submit" id="button-addon2">Cari</button>
//     </div>
//     </form>
//     `);
// });
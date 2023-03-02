$(document).ready(function () {
    var groupColumn = 2;
    var table = $('#table').DataTable({
        scrollY: 600,
        scrollX: true,
        scrollCollapse: true,
        columnDefs: [{ visible: false, targets: groupColumn },
                    {orderable: false, targets: 6}],
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
                            .before('<tr class="group"><td colspan="6">' + group + '</td></tr>');
 
                        last = group;
                    }
                });
        },
    });
 
    // Order by the grouping
    $('#table').on('click', 'tr.group', function () {
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
    var table = $('#table2').DataTable({
        dom: "<'row'<'col-sm-12 col-md-6 cari'l ><'col-sm-12 col-md-6'f>>" +
        "<'row'<'col-sm-12'tr>>" +
        "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
        scrollY: 500,
        scrollX: true,
        scrollCollapse: true,
        paging: false,
        // searching: false,
        fixedColumns: true,
        columnDefs: [{ visible: false, targets: groupColumn }, 
            { orderable: false, targets: [4,5,6,7,8,9,10,11,13,14,15,16,17,18,19,20,22,23,24,25,26,27,28,29,31,32,33,34,35,36,37,38] }],
            // { visible: false, targets: -1, }],
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
                            .before('<tr class="group"><td colspan="39">' + group + '</td></tr>');
 
                        last = group;
                    }
                });
        },
    });

    $('.cari').append(`
        <form>
            <div class="input-group mt-2 mb-4">
                <input type="date" class="form-control" name="search" placeholder="search"
                    aria-label="search" aria-describedby="button-addon2">
                <button class="btn btn-primary" type="submit" id="button-addon2">Cari</button>
            </div>
        </form>
    `);
 
    // Order by the grouping
    $('#table2').on('click', 'tr.group', function () {
        var currentOrder = table.order()[0];
        if (currentOrder[0] === groupColumn && currentOrder[1] === 'asc') {
            table.order([groupColumn, 'desc']).draw();
        } else {
            table.order([groupColumn, 'asc']).draw();
        }
    });
});
    <!-- footer -->
    <div class="modal-footer">
        <div class="container text-center">
            <div class="row">
                <p>&copy; 2019 MyMine_Company, Inc.</p>
            </div>
        </div>
    </div>


<script src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- <?php echo base_url(); ?>assets/bootstrap 3.3.6 -->
<script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/dist/js/app.min.js"></script>
<!--data tables-->
<script src="<?php echo base_url(); ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datepicker/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/select2/select2.full.min.js"></script>


<script>

function format_buku ( d ) {
    // `d` is the original data object for the row
    return '<div class="box box-info">'+
    '<div class="box-header with-border">'+
    '<h3 class="box-title">Detail Buku</h3>'+
    '</div>'+
    '<div class="box-body no-padding">'+
    '<table class="table table-striped">'+
                '<tr>'+
                    '<td>ID Buku</td>'+
                    '<td>'+d[2]+'</td>'+
                '</tr>'+
                '<tr>'+
                    '<td>ISBN</td>'+
                    '<td>'+d[3]+'</td>'+
                '</tr>'+
                '<tr>'+
                    '<td>Judul Buku</td>'+
                    '<td>'+d[4]+'</td>'+
                '</tr>'+
                '<tr>'+
                    '<td>Kategori</td>'+
                    '<td>'+d[5]+'</td>'+
                '</tr>'+
                '<tr>'+
                    '<td>Penerbit</td>'+
                    '<td>'+d[6]+'</td>'+
                '</tr>'+
                '<tr>'+
                    '<td>Pengarang</td>'+
                    '<td>'+d[7]+'</td>'+
                '</tr>'+
                '<tr>'+
                    '<td>No Rak</td>'+
                    '<td>'+d[10]+'</td>'+
                '</tr>'+
                '<tr>'+
                    '<td>Tahun Terbit</td>'+
                    '<td>'+d[11]+'</td>'+
                '</tr>'+
                '<tr>'+
                    '<td>Total Stok</td>'+
                    '<td>'+d[12]+'</td>'+
                '</tr>'+
                '<tr>'+
                    '<td>Keterangan</td>'+
                    '<td>'+d[13]+'</td>'+
                '</table>'+
            '</div>'+
    '</div>'+
'</div>';
}

$(document).ready(function() {
    $('#table-buku').DataTable( {
        "columnDefs": [
            {
                "targets": [ 3 ],
                "visible": false,
            },
            {
                "targets": [ 10 ],
                "visible": false
            },
            {
                "targets": [ 11 ],
                "visible": false
            },
            {
                "targets": [ 12 ],
                "visible": false
            },

        ]
    } );

        var table = $('#table-buku').DataTable();
        $('#table-buku tbody').on('click', 'td.details-control', function () {
        var tr = $(this).closest('tr');
        var row = table.row( tr );

        if ( row.child.isShown() ) {
// This row is already open - close it
row.child.hide();
tr.removeClass('shown');
}
        else {
            // Open this row
            row.child( format_buku(row.data()) ).show();
            tr.addClass('shown');
        }
    } );
    } );

$(document).ready(function() {

        $('#table-penerbit').DataTable();
        
    } );

    $('#confirm-delete').on('show.bs.modal', function(e) {
            $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
            
            $('.debug-url').html('URL Hapus: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
        });

    $('.date-own').datepicker({
        minViewMode: 2,
        format: 'yyyy'
        });
    
$(document).ready(function() {
    $(".js-example-basic-single").select2();
});
</script>

</body>
</html>
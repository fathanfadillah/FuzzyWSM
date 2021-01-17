{{-- // bobot --}}
<script src="text/javascript">
        var table = $('#table_id').dataTable({
            "language": {
                "sProcessing":   "Sedang memproses...",
                "sLengthMenu":   "Tampilkan _MENU_ entri",
                "sZeroRecords":  "Tidak ditemukan data yang sesuai",
                "sInfo":         "Menampilkan _START_ sampai _END_ dari _TOTAL_ entri",
                "sInfoEmpty":    "Menampilkan 0 sampai 0 dari 0 entri",
                "sInfoFiltered": "(disaring dari _MAX_ entri keseluruhan)",
                "sInfoPostFix":  "",
                "sSearch":       "Cari:",
                "sUrl":          "",
                "oPaginate": {
                    "sFirst":    "Pertama",
                    "sPrevious": "Sebelumnya",
                    "sNext":     "Selanjutnya",
                    "sLast":     "Terakhir"
                },
                // "decimal": ",",
                // "thousands": "."
            },
            processing: true,
            serverSide: true,
            responsive: true,

            dom: 'Bfrtip',
            ajax: {
                url: "{{route('profile.bobot_api')}}",
                type: 'POST'
            },
            buttons: [
                'copy',
                'excel',
                'csv',
                'pdf',
                'print',
            ],
            columns: [
                {
                    data: 'bobot_ram',
                    name: 'bobot_ram'
                },
                {
                    data: 'bobot_memory_internal',
                    name: 'bobot_memory_internal'
                },
                {
                    data: 'bobot_resolusi_layar',
                    name: 'bobot_resolusi_layar'
                },
                {
                    data: 'bobot_berat',
                    name: 'bobot_berat'
                },
                {
                    data: 'bobot_baterai',
                    name: 'bobot_baterai'
                },
                {
                    data: 'bobot_harga',
                    name: 'bobot_harga'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false,
                    align: 'center',
                    className: 'text-center'
                }
            ]
    });
    
    function add_bobot() {
        save_method = "add";
        $('#form_bobot').trigger('reset_bobot');
        $('#formTitle_bobot').html('Klik Icon Edit pada Tabel kolom Action');
        $('input[name=_method]').val('POST');
        $('#txtAction_bobot').html();
        // $('#preview').attr({
        //     'src': '-',
        //     'alt': ''
        // });
        // $('#result').attr({
        //     'src': '-',
        //     'alt': ''
        // });
        // $('#changeText').html('Browse Image');
        $('#reset_bobot').hide();
        $('#action_bobot').hide();
        $("#form-bobot").hide();
        // $('#reset').focus();
    }

    add_bobot();
    $('#form_bobot').on('submit', function(e) {
        if ($(this)[0].checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
        } else {
            $('#alert_bobot').html('');
            url = "{{ route('profile.'.'update_bobot', ':id') }}".replace(':id', $('#id_bobot').val());
            $.ajax({
                url: url,
                type: (save_method == 'add') ? 'POST' : 'POST',
                data: new FormData(($(this)[0])),
                contentType: false,
                processData: false,
                success: function(data) {
                    console.log(data);
                    $('#alert_bobot').html(
                        "<div role='alert' class='alert alert-success alert-dismissible'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button><strong>Success!</strong> " +
                        data.message + "</div>");
                    table.api().ajax.reload();
                    add();
                },
                error: function(data) {
                    err = '';
                    respon = data.responseJSON;
                    if (respon.errors) {
                        $.each(respon.errors, function(index, value) {
                            err = err + "<li>" + value + "</li>";
                        });
                    }
                    $('#alert_bobot').html(
                        "<div role='alert' class='alert alert-danger alert-dismissible'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button><strong>Error!</strong> " +
                        respon.message + "<ol class='pl-3 m-0'>" + err + "</ol></div>");
                        add();
                }
            });
            return false;
        }
        $(this).addClass('was-validated');
    });

    function edit_bobot(id) {
        $("#form-bobot").show();
        save_method = 'edit';
        var id = id;
        $('#alert_bobot').html('');
        $('#form_bobot').trigger('reset');
        $('#formTitle_bobot').html(
            "Edit Data <a href='#' onclick='add_bobot()' class='btn btn-outline-danger btn-xs pull-right ml-2'>Batal</a>");
        $('#txtAction_bobot').html(" Perubahan");
        // $('#formTitle_bobot').css("text-align","left");
        $("#action_bobot").show();
        $('#reset_bobot').hide();
        // $('#result').attr({
        //     'src': '-',
        //     'alt': ''
        // });
        $('input[name=_method]').val('PATCH');
        $.get("{{ route('profile.'.'edit_bobot', ':id') }}".replace(':id', id), function(data) {
                $('#id_bobot').val(data.id);
                $('#bobot_ram').val(data.bobot_ram);
                $('#bobot_memory_internal').val(data.bobot_memory_internal);
                $('#bobot_resolusi_layar').val(data.bobot_resolusi_layar);
                $('#bobot_baterai').val(data.bobot_baterai);
                $('#bobot_berat').val(data.bobot_berat);
                $('#bobot_harga').val(data.bobot_harga);
            }, "JSON").fail(function() {
            // reload();
            });
    }
</script>
{{-- //bobot --}}
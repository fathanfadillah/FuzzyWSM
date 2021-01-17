{{-- dataTables --}}
@push('style-table')
ini dari style
    <link href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
@endpush
{{-- dataTable --}}

@push('table')
ini dari table
    <div class="row">
        <div class="col-md-9 table-responsive">
            <table id="table_id" class="table text-center">
                <thead class="thead-dark">
                    <tr>
                        <th style="vertical-align:center">no<br></th>
                        <th style="vertical-align:center">nama<br></th>
                        <th width="10" style="vertical-align:center">ram<br>(GB)</th>
                        <th width="10" style="vertical-align:center">memori_<br>internal<br>(GB)</th>
                        <th width="10" style="vertical-align:center">resolusi_layar<br>(panjang x lebar)</th>
                        <th width="10" style="vertical-align:center">berat<br>(Kilogram)</th>
                        <th width="10" style="vertical-align:center">baterai<br>(jam)</th>
                        <th width="10" style="vertical-align:center">harga<br>(Rupiah)</th>
                        <th width="10"></th>
                    </tr>
                </thead>
            </table>
        </div>
        <div class="col-md-3">
            <div id="alert"></div><!-- error massage -->
            <div class="card no-b">
                <div class="card-body">
                    <form class="needs-validation" id="form" method="POST" enctype="multipart/form-data" novalidate>
                        {{ method_field('POST') }}
                        <input type="hidden" id="id" name="id" />
                        <h4 id="formTitle">Tambah Data</h4>
                        <hr>
                        <div class="form-row form-inline">
                            <div class="col-md-12">
                                <div class="form-group m-0">
                                    <label for="nama" class="col-md-3">Nama</label>
                                    <input type="text" name="nama" id="nama" placeholder=""
                                        class="form-control r-0 light s-12 col-md-8 ml-auto" autocomplete="off" required />
                                </div>
                                <hr>
                                <!-- <div class="form-groutoup m-0">
                                    <label for="no_telp" class="col-form-label s-12 col-md-4">No Telp</label>
                                    <input type="text" name="no_telp" id="no_telp" placeholder="" class="form-control r-0 light s-12 col-md-8" autocomplete="off" required/>
                                </div> -->
                                <div class="form-group m-0">
                                    <label for="ram" class="col-md-3">RAM<br>(GB)</label>
                                    <input type="number" step="any" name="ram" id="ram" placeholder="4<=ram<36"
                                        class="form-control r-0 light s-12 col-md-8 ml-auto" autocomplete="off" required 
                                        oninvalid="this.setCustomValidity('4<=ram<36')"
                                        oninput="this.setCustomValidity('')"  />
                                </div>
                                <hr>
                                <div class="form-group m-0">
                                    <label for="memory_internal" class="col-md-3">Memory<br>Internal(GB)</label>
                                    <input type="number" step="any" name="memory_internal" id="memory_internal" placeholder="200=<memori<1400"
                                        class="form-control r-0 light s-12 col-md-8 ml-auto" autocomplete="off" required
                                        oninvalid="this.setCustomValidity('200=<memori<1400')"
                                        oninput="this.setCustomValidity('')" />
                                </div>
                                <hr>
                                <div class="form-group m-0">
                                    {{-- <div class="row"> --}}
                                        <label for="resolusi_layar" class="col-md-3">Resolusi<br>Layar</label>
                                    {{-- </div> --}}
                                    {{-- <div class="row"> --}}
                                        <input type="number" step="any" name="resolusi_layar" id="resolusi_layar" placeholder="1juta<=reoslusi<9juta"
                                        class="form-control r-0 light s-12 col-md-8 ml-auto" autocomplete="off" required 
                                        oninvalid="this.setCustomValidity('1juta<=reoslusi<9juta')"
                                        oninput="this.setCustomValidity('')" />
                                    {{-- </div> --}}
                                </div>
                                <hr>
                                <div class="form-group m-0">
                                    <label for="berat" class="col-md-3">Berat<br>(kg)</label>
                                    <input type="number" step="any" name="berat" id="berat" placeholder="1=<memori<15"
                                        class="form-control r-0 light s-12 col-md-8 ml-auto" autocomplete="off" required 
                                        oninvalid="this.setCustomValidity('1=<memori<15')"
                                        oninput="this.setCustomValidity('')" />
                                </div>
                                <hr>
                                <div class="form-group m-0">
                                    <label for="baterai" class="col-md-3">Baterai<br>(Jam)</label>
                                    <input type="number" step="any" name="baterai" id="baterai" placeholder="1<=jam<15"
                                        class="form-control r-0 light s-12 col-md-8 ml-auto" autocomplete="off" required 
                                        oninvalid="this.setCustomValidity('1<=jam<15')"
                                        oninput="this.setCustomValidity('')" />
                                </div>
                                <hr>
                                <div class="form-group m-0">
                                    <label for="harga" class="col-md-3">Harga<br>(Rupiah)</label>
                                    <input type="number" step="any" name="harga" id="harga" placeholder="5juta<=harga<55juta"
                                        class="form-control r-0 light s-12 col-md-8 ml-auto" autocomplete="off" required 
                                        oninvalid="this.setCustomValidity('5juta<=harga<55juta')"
                                        oninput="this.setCustomValidity('')" />
                                </div>
                                
                                <!-- <div class="form-group m-0">
                                    <label for="alamat_pedagang" class="col-form-label s-12 col-md-4">Alamat</label>
                                    <textarea name="alamat_pedagang" id="alamat_pedagang" placeholder="" class="form-control r-0 light s-12 col-md-8" autocomplete="off" required></textarea>
                                </div> -->
                                <div class="mt-2" style="margin-left: 34%">
                                    <button type="submit" class="btn btn-primary btn-sm" id="action"><i
                                            class="icon-save pr-1"></i>Simpan<span id="txtAction"></span></button>
                                    <a class="btn btn-sm" onclick="add()" id="reset">Reset</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endpush

{{-- // laptop --}}
@push('script-table')
ini dari script
    {{-- import dataTable --}}
        <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.flash.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script scr="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.print.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    {{-- import dataTable --}}

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
                    }
                    // "decimal": ",",
                    // "thousands": "."
            },
            processing: true,
            serverSide: true,
            responsive: true,

            dom: 'Bfrtip',
            ajax: {
                url: "{{route('profile.api')}}",
                type: 'POST'
            },
            buttons: [
                'copy',
                'excel',
                'csv',
                'pdf',
                'print',
            ],
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    orderable: false,
                    searchable: false,
                    align: 'center',
                    className: 'text-center'
                },
                {
                    data: 'nama',
                    name: 'nama'
                },
                {
                    data: 'ram',
                    name: 'ram'
                },
                {
                    data: 'memory_internal',
                    name: 'memory_internal'
                },
                {
                    data: 'resolusi_layar',
                    name: 'resolusi_layar'
                },
                {
                    data: 'berat',
                    name: 'berat'
                },
                {
                    data: 'baterai',
                    name: 'baterai'
                },
                {
                    data: 'harga',
                    name: 'harga'
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

        // });
        // produk
        function add() {
            save_method = "add";
            $('#form').trigger('reset');
            $('#formTitle').html('Tambah Data');
            $('input[name=_method]').val('POST');
            $('#txtAction').html('');
            // $('#preview').attr({
            //     'src': '-',
            //     'alt': ''
            // });
            // $('#result').attr({
            //     'src': '-',
            //     'alt': ''
            // });
            // $('#changeText').html('Browse Image');
            $('#reset').show();
            // $('#reset').focus();
        }

        add();
        $('#form').on('submit', function(e) {
            if ($(this)[0].checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
            } else {
                $('#alert').html('');
                url = (save_method == 'add') ? "{{ route('profile.'.'store') }}" : "{{ route('profile.'.'update', ':id') }}"
                    .replace(':id', $('#id').val());
                $.ajax({
                    url: url,
                    type: (save_method == 'add') ? 'POST' : 'POST',
                    data: new FormData(($(this)[0])),
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        console.log(data);
                        $('#alert').html(
                            "<div role='alert' class='alert alert-success alert-dismissible'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button><strong>Success!</strong> " +data.message + "</div>");
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
                        $('#alert').html(
                            "<div role='alert' class='alert alert-danger alert-dismissible'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button><strong>Error!</strong> " +
                            respon.message + "<ol class='pl-3 m-0'>" + err + "</ol></div>");
                            add();
                    }
                });
                return false;
            }
            $(this).addClass('was-validated');
        });


        // produk
        function remove(id) {
            $.confirm({
                title: '',
                content: 'Apakah Anda yakin akan menghapus data ini ?',
                icon: 'icon icon-question amber-text',
                theme: 'modern',
                closeIcon: true,
                animation: 'scale',
                type: 'red',
                buttons: {
                    ok: {
                        text: "ok!",
                        btnClass: 'btn-primary',
                        keys: ['enter'],
                        action: function() {
                            $.post("{{ route('profile.'.'destroy', ':id') }}".replace(':id', id), {
                                '_method': 'DELETE'
                            }, function(data) {
                                table.api().ajax.reload();
                                if (id == $('#id').val()) add();
                            }, "JSON").fail(function() {
                                reload();
                            });
                        }
                    },
                    cancel: function() {}
                }
            });
        }

        function edit(id) {
            save_method = 'edit';
            var id = id;
            $('#alert').html('');
            $('#form').trigger('reset');
            $('#formTitle').html(
                "Edit Data <a href='#' onclick='add()' class='btn btn-outline-danger btn-xs pull-right ml-2'>Batal</a>");
            $('#txtAction').html(" Perubahan");
            $('#reset').hide();
            // $('#result').attr({
            //     'src': '-',
            //     'alt': ''
            // });
            $('input[name=_method]').val('PATCH');
            $.get("{{ route('profile.'.'edit', ':id') }}".replace(':id', id), function(data) {
                $('#id').val(data.id);
                $('#nama').val(data.nama);
                $('#ram').val(data.ram);
                $('#memory_internal').val(data.memory_internal);
                $('#resolusi_layar').val(data.resolusi_layar);
                $('#baterai').val(data.baterai);
                $('#berat').val(data.berat);
                $('#harga').val(data.harga);
                    }, "JSON").fail(function() {
                reload();
                });
        }
    </script>  
@endpush

{{-- //laptop --}}
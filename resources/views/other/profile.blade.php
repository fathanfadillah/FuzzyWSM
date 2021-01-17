@extends('layout/main')

@section('title','| Product')

@section('style')
    <link href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">

    <style>
        #reset{
            color:#dc3545;
        }
        #reset:hover{
            color:#ffffff;
        }
    </style>
@stop

@section('container')
<div class="container-md py-3">
    <div class="jumbotron py-2">
        <div class="text-center">
            ​
            <!-- <source srcset="..." type="image/svg+xml" /> -->
            <img src="data:image/jpeg;base64,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"
                class="img-fluid img-thumbnail h-25" alt="" width="25%" />

            <h1 class="display-4">WELCOME</h1>
            <!-- <p class="lead">
						This is a simple hero unit, a simple jumbotron-style component for
						calling extra attention to featured content or information.
					</p> -->
        </div>

        <hr class="my-4" />
        <p class="text-center">
            Recomendation System for Laptop Selection using Fuzzy Weigthed Sum Method
        </p>
        <!-- <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a> -->
    </div>
</div>

<div class="container-md ">
    <div class="row">
        <div class="col-md-8 table-responsive">
            <table id="table_id" class="table text-center hover">
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
        <div class="col-md-4 ml-auto">
            <div id="alert"></div><!-- error massage -->
            <div class="card no-b">
                <div class="card-body">
                    <form class="needs-validation" id="form" method="POST" enctype="multipart/form-data" novalidate>
                        {{ method_field('POST') }}
                        <input type="hidden" id="id" name="id" />
                        <h4 id="formTitle">Tambah Data</h4>
                        <h6 class="text-secondary">Masukkan nilai sesuai range yang diberikan</h6>
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
                                    <button type="submit" class="btn btn-outline-success btn-sm" id="action"><i
                                            class="icon-save pr-1"></i>Simpan<span id="txtAction"></span></button>
                                    <a href="#" class="btn btn-outline-danger btn-sm reset" onclick="add()" id="reset">Reset</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- bobot --}}
<div class="container-md my-5">
    <marquee behavior="alternate" direction="left"><h1 class="mt-2">INPUT BOBOT</h1></marquee>
    <div class="row">
        <div class="table-responsive">
            <table id="table_bobot" class="table text-center mx-auto">
                <thead class="thead-dark">
                    <tr>
                        <th width="10" style="vertical-align:center">ram<br>(GB)</th>
                        <th  style="vertical-align:center">memori_<br>internal<br>(GB)</th>
                        <th  style="vertical-align:center">resolusi_layar<br>(panjang x lebar)</th>
                        <th width="10" style="vertical-align:center">berat<br>(Kilogram)</th>
                        <th width="10" style="vertical-align:center">baterai<br>(jam)</th>
                        <th  style="vertical-align:center">harga<br>(Rupiah)</th>
                        <th width="10"></th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
    <div class="row mt-5">
        <div id="alert_bobot"></div><!-- error massage -->
        <div class="card no-b mx-auto">
            <div class="card-body">
                <form class="needs-validation" id="form_bobot" method="POST" enctype="multipart/form-data" novalidate>
                    {{ method_field('POST') }}
                    <input type="hidden" id="id_bobot" name="id" />
                    <h4 id="formTitle_bobot" class="text-center">Tambah Data</h4>
                    <hr>
                    <div class="form-inline" id="form-bobot">
                        {{-- <div class="row mx-auto">
                            <div class="col-sm-2 mx-auto">0 = Sangat Tidak Penting</div>
                            <div class="col-sm-2 mx-auto">0.25 = Kurang Penting</div>
                            <div class="col-sm-2 mx-auto">0.5 = Ragu - Ragu</div>
                            <div class="col-sm-2 mx-auto">0.75 = Penting</div>
                            <div class="col-sm-2 mx-auto">1 = Sangat Penting</div>
                        </div> --}}
                        <div class="row">
                            <!-- <div class="form-group m-0">
                                <label for="no_telp" class="col-form-label s-12 col-md-4">No Telp</label>
                                <input type="text" name="no_telp" id="no_telp" placeholder="" class="form-control r-0 light s-12 col-md-8" autocomplete="off" required/>
                            </div> -->
                            <div class="form-group col-md-4 mx-auto">
                                <label for="ram" class="col-form-label s-12 col-md-4">RAM</label>
                                {{-- <input type="number" step="any" name="bobot_ram" id="bobot_ram" placeholder="ex : 2"
                                    class="form-control r-0 light s-12 col-md-8" autocomplete="off" required /> --}}
                                <select name="bobot_ram" id="bobot_ram" class="form-control r-0 light s-12 col-md-8">
                                    <option value="stp">SANGAT TIDAK PENTING</option>
                                    <option value="tp">TIDAK PENTING</option>
                                    <option value="c">CUKUP</option>
                                    <option value="p">PENTING</option>
                                    <option value="sp">SANGAT PENTING</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4 mx-auto">
                                <label for="memory_internal" class="col-form-label s-12 col-md-4">Memory Internal</label>
                                {{-- <input type="number" step="any" name="bobot_memory_internal" id="bobot_memory_internal" placeholder="ex : 512"
                                    class="form-control r-0 light s-12 col-md-8" autocomplete="off" required /> --}}
                                    <select name="bobot_memory_internal" id="bobot_memory_internal" class="form-control r-0 light s-12 col-md-8">
                                        <option value="stp">SANGAT TIDAK PENTING</option>
                                        <option value="tp">TIDAK PENTING</option>
                                        <option value="c">CUKUP</option>
                                        <option value="p">PENTING</option>
                                        <option value="sp">SANGAT PENTING</option>
                                    </select>
                            </div>
                            <div class="form-group col-md-4 mx-auto">
                                {{-- <div class="row"> --}}
                                    <label for="resolusi_layar" class="col-form-label s-12 col-md-4">Resolusi Layar</label>
                                {{-- </div> --}}
                                {{-- <div class="row"> --}}
                                    {{-- <input type="number" step="any" name="bobot_resolusi_layar" id="bobot_resolusi_layar" placeholder="panjang x lebar"
                                    class="form-control r-0 light s-12 col-md-8" autocomplete="off" required /> --}}
                                    <select name="bobot_resolusi_layar" id="bobot_resolusi_layar" class="form-control r-0 light s-12 col-md-8">
                                        <option value="stp">SANGAT TIDAK PENTING</option>
                                        <option value="tp">TIDAK PENTING</option>
                                        <option value="c">CUKUP</option>
                                        <option value="p">PENTING</option>
                                        <option value="sp">SANGAT PENTING</option>
                                    </select>
                                {{-- </div> --}}
                            </div>
                            <div class="form-group col-md-4 mx-auto">
                                <label for="berat" class="col-form-label s-12 col-md-4">Berat</label>
                                {{-- <input type="number" step="any" name="bobot_berat" id="bobot_berat" placeholder="ex : 7"
                                    class="form-control r-0 light s-12 col-md-8" autocomplete="off" required /> --}}
                                    <select name="bobot_berat" id="bobot_berat" class="form-control r-0 light s-12 col-md-8">
                                        <option value="sp">SANGAT TIDAK PENTING</option>
                                        <option value="p">TIDAK PENTING</option>
                                        <option value="c">CUKUP</option>
                                        <option value="tp">PENTING</option>
                                        <option value="stp">SANGAT PENTING</option>       
                                    </select>
                            </div>
                            <div class="form-group col-md-4 mx-auto">
                                <label for="baterai" class="col-form-label s-12 col-md-4">Baterai</label>
                                {{-- <input type="number" step="any" name="bobot_baterai" id="bobot_baterai" placeholder="life battery, ex : 7"
                                    class="form-control r-0 light s-12 col-md-8" autocomplete="off" required /> --}}
                                    <select name="bobot_baterai" id="bobot_baterai" class="form-control r-0 light s-12 col-md-8">
                                        <option value="stp">SANGAT TIDAK PENTING</option>
                                        <option value="tp">TIDAK PENTING</option>
                                        <option value="c">CUKUP</option>
                                        <option value="p">PENTING</option>
                                        <option value="sp">SANGAT PENTING</option>
                                    </select>
                            </div>
                            <div class="form-group col-md-4 mx-auto">
                                <label for="harga" class="col-form-label s-12 col-md-4">Harga</label>
                                {{-- <input type="number" step="any" name="bobot_harga" id="bobot_harga" placeholder="ex : 1404536"
                                    class="form-control r-0 light s-12 col-md-8" autocomplete="off" required /> --}}
                                    <select name="bobot_harga" id="bobot_harga" class="form-control r-0 light s-12 col-md-8">
                                        <option value="sp">SANGAT TIDAK PENTING</option>
                                        <option value="p">TIDAK PENTING</option>
                                        <option value="c">CUKUP</option>
                                        <option value="tp">PENTING</option>
                                        <option value="stp">SANGAT PENTING</option>    
                                    </select>
                            </div>
                            
                            <!-- <div class="form-group m-0">
                                <label for="alamat_pedagang" class="col-form-label s-12 col-md-4">Alamat</label>
                                <textarea name="alamat_pedagang" id="alamat_pedagang" placeholder="" class="form-control r-0 light s-12 col-md-8" autocomplete="off" required></textarea>
                            </div> -->
                        </div>
                        <br><br><br>
                        <div class="form-row mx-auto col-md-8">
                            <button type="submit" class="col-md-4 btn btn-outline-success w-50 mx-auto" id="action_bobot"><i
                                    class="icon-save mr-2"></i>Simpan<span id="txtAction_bobot"></span></button>
                            <a class="col-md-4 btn btn-danger w-50 text-light mx-auto" onclick="add_bobot()" id="reset_bobot">Reset</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <center class="mt-5">
        <a class="rekomendasi-btn font-weight-bold" href="{{url('/rekomendasi')}}">LIHAT REKOMENDASI
            <i class="icon-arrow-right ml-2"></i></a>
    </center>
</div>

{{-- bobot --}}
{{-- @include('other.bobot') --}}

@stop

@section('script')
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>

<script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.flash.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

<script scr="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>

<script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.js"></script>

<script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.print.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>

<script type="text/javascript">
$(document).ready( function(){
    $("nav").hide();
    $("#action_bobot").hide();
    $("#reset_bobot").hide();
    $("#form-bobot").hide();
});
    // $(document).ready(function() {
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
            "scrollY": true,
            "scrollX": true,

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

    // bobot
    var table_bobot = $('#table_bobot').dataTable({
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
                    table_bobot.api().ajax.reload();
                    add_bobot();
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
                        add_bobot();
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
    //bobot
</script>
@stop


{{-- @stack('script') --}}
{{-- ^ punya bobot --}}


{{-- // $(document).ready(function() {
//     $('#table_id').DataTable({});
// });










add_bobot();
$('#form_bobot').on('submit', function(e) {
    if ($(this)[0].checkValidity() === false) {
        event.preventDefault();
        event.stopPropagation();
    } else {
        $('#alert').html('');
        url = (save_method == 'add_bobot') ? "{{ route('profile.'.'update_bobot', ':id') }}"
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
// bobot

 --}}

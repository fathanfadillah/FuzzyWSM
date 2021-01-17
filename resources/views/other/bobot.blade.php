<div class="container-md my-5">
    <div class="row">
        <div class="table-responsive">
            <table id="table_bobot" class="table text-center mx-auto">
                <thead class="thead-dark">
                    <tr>
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
    </div>
    <div class="row">
        <div id="alert"></div><!-- error massage -->
        <div class="card no-b mx-auto">
            <div class="card-body">
                <form class="needs-validation" id="form" method="POST" enctype="multipart/form-data" novalidate>
                    {{ method_field('POST') }}
                    <input type="hidden" id="id" name="id" />
                    <h4 id="formTitle">Tambah Data</h4>
                    <hr>
                    <div class="form-inline">
                        <div class="row">
                            <!-- <div class="form-group m-0">
                                <label for="no_telp" class="col-form-label s-12 col-md-4">No Telp</label>
                                <input type="text" name="no_telp" id="no_telp" placeholder="" class="form-control r-0 light s-12 col-md-8" autocomplete="off" required/>
                            </div> -->
                            <div class="form-group col-md-4 mx-auto">
                                <label for="ram" class="col-form-label s-12 col-md-4">RAM(GB)</label>
                                <input type="number" name="ram" id="ram" placeholder="ex : 2"
                                    class="form-control r-0 light s-12 col-md-8" autocomplete="off" required />
                            </div>
                            <div class="form-group col-md-4 mx-auto">
                                <label for="memory_internal" class="col-form-label s-12 col-md-4">Memory Internal(GB)</label>
                                <input type="number" name="memory_internal" id="memory_internal" placeholder="ex : 512"
                                    class="form-control r-0 light s-12 col-md-8" autocomplete="off" required />
                            </div>
                            <div class="form-group col-md-4 mx-auto">
                                {{-- <div class="row"> --}}
                                    <label for="resolusi_layar" class="col-form-label s-12 col-md-4">Resolusi Layar</label>
                                {{-- </div> --}}
                                {{-- <div class="row"> --}}
                                    <input type="number" name="resolusi_layar" id="resolusi_layar" placeholder="panjang x lebar"
                                    class="form-control r-0 light s-12 col-md-8" autocomplete="off" required />
                                {{-- </div> --}}
                            </div>
                            <div class="form-group col-md-4 mx-auto">
                                <label for="berat" class="col-form-label s-12 col-md-4">Berat(kg)</label>
                                <input type="number" name="berat" id="berat" placeholder="ex : 7"
                                    class="form-control r-0 light s-12 col-md-8" autocomplete="off" required />
                            </div>
                            <div class="form-group col-md-4 mx-auto">
                                <label for="baterai" class="col-form-label s-12 col-md-4">Baterai(Jam)</label>
                                <input type="number" name="baterai" id="baterai" placeholder="life battery, ex : 7"
                                    class="form-control r-0 light s-12 col-md-8" autocomplete="off" required />
                            </div>
                            <div class="form-group col-md-4 mx-auto">
                                <label for="harga" class="col-form-label s-12 col-md-4">Harga(Rupiah)</label>
                                <input type="number" name="harga" id="harga" placeholder="ex : 1404536"
                                    class="form-control r-0 light s-12 col-md-8" autocomplete="off" required />
                            </div>
                            
                            <!-- <div class="form-group m-0">
                                <label for="alamat_pedagang" class="col-form-label s-12 col-md-4">Alamat</label>
                                <textarea name="alamat_pedagang" id="alamat_pedagang" placeholder="" class="form-control r-0 light s-12 col-md-8" autocomplete="off" required></textarea>
                            </div> -->
                        </div>
                        <br><br><br>
                        <div class="form-row mx-auto col-md-8">
                            <button type="submit" class="col-md-4 btn btn-success w-50 mx-auto" id="action"><i
                                    class="icon-save"></i>Simpan<span id="txtAction"></span></button>
                            <a class="col-md-4 btn btn-danger w-50 text-light mx-auto" onclick="add()" id="reset">Reset</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@push('script')
<script type="text/javascript">
    var table = $('#table_bobot').dataTable({
    "language": {
        "sProcessing": "جاري التحميل...",
        "sLengthMenu": "أظهر مُدخلات _MENU_",
        "sZeroRecords": "لم يُعثر على أية سجلات",
        "sInfo": "إظهار _START_ إلى _END_ من أصل _TOTAL_ مُدخل",
        "sInfoEmpty": "يعرض 0 إلى 0 من أصل 0 سجلّ",
        "sInfoFiltered": "(منتقاة من مجموع _MAX_ مُدخل)",
        "sInfoPostFix": "",
        "sSearch": "ابحث:",
        "sUrl": "",
        "decimal": ",",
        "thousands": ".",
        "oPaginate": {
            "sFirst": "الأول",
            "sPrevious": "السابق",
            "sNext": "التالي",
            "sLast": "الأخير"
        }
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
            name: 'nama',
            orderable: false,
            searchable: false
        },
        {
            orderable: false,
            searchable: false,
            data: 'ram',
            name: 'ram'
        },
        {
            orderable: false,
            searchable: false,
            data: 'memory_internal',
            name: 'memory_internal'
        },
        {
            orderable: false,
            searchable: false,
            data: 'resolusi_layar',
            name: 'resolusi_layar'
        },
        {
            orderable: false,
            searchable: false,
            data: 'berat',
            name: 'berat'
        },
        {
            orderable: false,
            searchable: false,
            data: 'baterai',
            name: 'baterai'
        },
        {
            orderable: false,
            searchable: false,
            data: 'harga',
            name: 'harga'
        },
        {
            orderable: false,
            searchable: false,
            data: 'action',
            name: 'action',
            align: 'center',
            className: 'text-center'
        }
    ]
});
</script>

@endpush
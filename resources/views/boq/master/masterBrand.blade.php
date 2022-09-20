@extends('layout.masterLayout')

@section('content-data')
            <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
                <h2 class="text-lg font-medium mr-auto">
                    Master Brand
                </h2>
                <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
                    <div class="text-center">
                        <!-- BEGIN: Large Modal Toggle -->
                        <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#large-modal-size-import" class="btn btn-success mr-1 mb-2 text-white">
                            <i data-lucide="database" class="w-4 h-4 mr-2"></i> Import Brand
                        </a>
                        <a href="{{ url('/export-brand')}}" class="btn btn-pending mr-1 mb-2 text-white">
                            <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export Brand
                        </a>
                        <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#large-modal-size-preview_add" class="btn btn-primary mr-1 mb-2">
                            <i data-lucide="plus" class="w-4 h-4 mr-2"></i> Add Brand
                        </a>
                        <!-- END: Large Modal Toggle -->
                    </div>

                </div>
            </div>
            <!-- BEGIN: HTML Table Data -->
            <div class="intro-y box p-5 mt-5">
                @if (session("success"))
                <div class="alert alert-primary-soft show flex items-center mb-2" role="alert">
                        {{ session('success') }}
                    <button type="button" class="btn-close text-white" data-tw-dismiss="alert" aria-label="Close">
                        <i data-lucide="x" class="w-4 h-4"></i>
                    </button>
                </div>
                @endif
                <div class="flex flex-col sm:flex-row sm:items-end xl:items-start">
                </div>
                <div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
                    <table class="table table-hover table-auto sm:mt-2" id="example">
                        <thead>
                            <tr>
                                <th scope="col" style="text-align: center;">ID</th>
                                <th scope="col">Brand Name</th>
                                <th scope="col">Status</th>
                                <th scope="col" style="text-align: center;">Active</th>
                            </tr>
                            <tr>
                                <th scope="col" class="filterhead" style="text-align: center;">ID</th>
                                <th scope="col" class="filterhead">Brand Name</th>
                                <th scope="col" class="filterhead">Status</th>
                                <th scope="col" class="filterhead" style="text-align: center;"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($brands as $key => $brd)
                            <tr>
                                <td class="text-center">{{ $key + 1 }}</td>
                                <td>{{ $brd->brand_name }}</td>
                                <td>
                                    @if ($brd->is_active == "1")
                                        ON
                                    @else
                                        OFF
                                    @endif
                                </td>
                                <td class="text-center">
                                    <!-- BEGIN: Large Modal Toggle -->
                                    <button class="btn btn-secondary mr-2 mb-2" onclick="edit_modal({{$brd->id}})" data-tw-toggle="modal"
                                        data-tw-target="#large-modal-size-preview_edit"> <i data-lucide="edit-2" class="w-4 h-4 mr-2"></i> Edit</button>

                                    <a href="{{ url('/masterBrand/changeStatus', $brd->id) }}" class="btn btn-dark mr-2 mb-2"> <i data-lucide="power" class="w-4 h-4 mr-2"></i> On/Off</a>
                                    {{-- <a href="{{ url('/masterBrand/softdelete', $brd->id) }}" class="btn btn-dark gap-w"> Delete </a> --}}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- BEGIN: Large Modal Content -->
                <div id="large-modal-size-preview_add" class="modal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h2 class="font-medium text-base mr-auto">Add Brand</h2>
                            </div> <!-- END: Modal Header -->
                            <!-- BEGIN: Modal Body -->
                            <form action="{{ url('/masterBrand/add') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
                                    {{-- <div class="col-span-12 sm:col-span-6 input-form mt-3">
                                        <input type="text" class="form-control mb-2 chk_code" name="code" placeholder="Please add a Code..." required>
                                        <p class="text-danger" id="comment"></p>
                                    </div> --}}
                                    <div class="col-span-12 sm:col-span-12 input-form mt-3">
                                        <input type="text" class="form-control mb-2 chk_name" name="brand_name" placeholder="Please add a Brand..." required>
                                        <p class="text-danger" id="comment2"></p>
                                    </div>
                                </div>
                                <!-- BEGIN: Modal Footer -->
                                <div class="modal-footer">
                                    <button type="button" data-tw-dismiss="modal"
                                        class="btn btn-outline-secondary w-20 mr-1">ยกเลิก</button>
                                    <button type="submit" class="btn btn-primary w-20" id="btn_save">บันทึก</button>
                                </div> <!-- END: Modal Footer -->
                            </form>
                        </div>
                    </div>
                </div>
                <!-- END: Large Modal Content -->

                <!-- BEGIN: Large Modal Content -->
                <div id="large-modal-size-preview_edit" class="modal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h2 class="font-medium text-base mr-auto">Edit Brand</h2>
                            </div> <!-- END: Modal Header -->
                            <!-- BEGIN: Modal Body -->
                            <form action="{{ url('/masterBrand/update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
                                    {{-- <div class="col-span-12 sm:col-span-6 input-form mt-3">
                                        <input type="text" class="form-control mb-2 chk_code" name="code" id="code" required>
                                        <p class="text-danger" id="edit_comment"></p>
                                    </div> --}}
                                    <div class="col-span-12 sm:col-span-12 input-form mt-3">
                                        <input type="text" class="form-control mb-2 chk_name" name="brand_name" id="brand_name" required>
                                        <p class="text-danger" id="edit_comment2"></p>
                                    </div>
                                    <input type="hidden" name="id" id="get_id">
                                </div>
                                <!-- BEGIN: Modal Footer -->
                                <div class="modal-footer">
                                    <button type="button" data-tw-dismiss="modal"
                                        class="btn btn-outline-secondary w-20 mr-1">ยกเลิก</button>
                                    <button type="submit" class="btn btn-primary w-20" id="btn_save_edit">บันทึก</button>
                                </div> <!-- END: Modal Footer -->
                            </form>
                        </div>
                    </div>
                </div>
                <!-- END: Large Modal Content -->

                <!-- BEGIN: Large Modal Content -->
                <div id="large-modal-size-import" class="modal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h2 class="font-medium text-base mr-auto">Import Brand</h2>
                            </div> <!-- END: Modal Header -->
                            <!-- BEGIN: Modal Body -->
                            <form action="{{url('/import-brand')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body grid grid-cols-12 gap-4 gap-y-3">

                                        <div class="col-span-12 sm:col-span-4 input-form mt-3">
                                            <input name="file" type="file" class="form-control"/>
                                        </div>
                                </div>
                                <!-- BEGIN: Modal Footer -->
                                <div class="modal-footer">
                                    <button type="button" data-tw-dismiss="modal"
                                        class="btn btn-outline-secondary w-20 mr-1">ยกเลิก</button>
                                    <button type="submit" class="btn btn-primary w-20">บันทึก</button>
                                </div> <!-- END: Modal Footer -->
                            </form>
                        </div>
                    </div>
                </div>
                <!-- END: Large Modal Content -->
            </div>

<script type="text/javascript">
    jQuery(document).ready(function() {
     var table = jQuery('#example').DataTable({
         "bLengthChange": true,
         "iDisplayLength": 10,
         "ordering": false,
	   });

       jQuery(".filterhead").not(":eq(3)").each( function ( i ) {
        var select = jQuery('<select class="form-control-sm w-full"><option value="">All</option></select>')
            .appendTo( jQuery(this).empty() )
            .on( 'change', function () {
               var term = $(this).val();
                table.column( i ).search(term, false, false ).draw();
            } );
 	      table.column( i ).data().unique().each( function ( d, j ) {
            	select.append( '<option value="'+d+'">'+d+'</option>' )
        } );
		} );
    });

    //edit main
    function edit_modal(id){
            // $('#edit_comment').text('');
            $('#edit_comment2').text('');
            document.getElementById('btn_save_edit').disabled = false;
        jQuery.ajax({
            type:   "GET",
            url:    "{!! url('masterBrand/edit/"+id+"') !!}",
            datatype:   "JSON",
            async:  false,
            success: function(data) {
                $('#get_id').val(data.dataEdit.id);
                // $('#code').val(data.dataEdit.code);
                $('#brand_name').val(data.dataEdit.brand_name);
                $('#update_by').val(data.dataEdit.update_by);
                jQuery('#Delete').children().remove().end();

            }
        });
    }

        //เช็คข้อมูลซ้ำ
        jQuery(document).ready(function() {

        });

    //     $('.chk_code').on('keyup', function() {
    //         var datakey = $(this).val();
    //         // $('#comment').text('');
    //         $('#edit_comment').text('');
    //         document.getElementById('btn_save').disabled = false;
    //         document.getElementById('btn_save_edit').disabled = false;
    //     jQuery.ajax({
    //         type:   "GET",
    //         url:    "{!! url('masterBrand/chk/"+datakey+"') !!}",
    //         datatype:   "JSON",
    //         async:  false,
    //         success: function(data) {
    //             // $('#chk_code').val(data.dataChk.code);
    //             jQuery.each(data.dataChk, function(key, value){
    //                 if (value.code == datakey) {
    //                     // $('#comment').text("'" + value.code + "' มีอยูในระบบแล้ว !");
    //                     $('#edit_comment').text("'" + value.code + "' มีอยูในระบบแล้ว !");
    //                     document.getElementById('btn_save').disabled = true;
    //                     document.getElementById('btn_save_edit').disabled = true;
    //                 }
    //             });

    //         },
    //     });
    // });

    $('.chk_name').on('keyup', function() {
            var datakey = $(this).val();
            // console.log(datakey.toUpperCase());
            $('#comment2').text('');
            $('#edit_comment2').text('');
            document.getElementById('btn_save').disabled = false;
            document.getElementById('btn_save_edit').disabled = false;
        jQuery.ajax({
            type:   "GET",
            url:    "{!! url('masterBrand/chk/"+datakey+"') !!}",
            datatype:   "JSON",
            async:  false,
            success: function(data) {
                // $('#chk_code').val(data.dataChk.code);
                jQuery.each(data.dataChk, function(key, value){
                    if (value.brand_name.toUpperCase() == datakey.toUpperCase()) {
                        $('#comment2').text("'" + value.brand_name + "' มีอยูในระบบแล้ว !");
                        $('#edit_comment2').text("'" + value.brand_name + "' มีอยูในระบบแล้ว !");
                        document.getElementById('btn_save').disabled = true;
                        document.getElementById('btn_save_edit').disabled = true;
                    }
                });

            },
        });
    });

</script>
<!-- END: JS Assets-->
@endsection

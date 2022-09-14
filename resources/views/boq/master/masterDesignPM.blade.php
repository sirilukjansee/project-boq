@extends('layout.masterLayout')

@section('content-data')
            <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
                <h2 class="text-lg font-medium mr-auto">
                    Master Designer/PM
                </h2>
                <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
                    <div class="text-center">
                        <!-- BEGIN: Large Modal Toggle -->
                        <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#large-modal-size-preview_add" class="btn btn-primary mr-1 mb-2"><i data-lucide="plus" class="w-4 h-4 mr-2"></i> Add Designer/PM </a>
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
                                <th scope="col">Name</th>
                                <th scope="col">E-mail</th>
                                <th scope="col">Telephone</th>
                                <th scope="col">Status</th>
                                <th scope="col" style="text-align: center;">Active</th>
                            </tr>
                            <tr>
                                <th scope="col" class="filterhead">ID</th>
                                <th scope="col" class="filterhead">Name</th>
                                <th scope="col" class="filterhead">E-mail</th>
                                <th scope="col" class="filterhead">Telephone</th>
                                <th scope="col" class="filterhead">Status</th>
                                <th scope="col" class="filterhead"></th>
                            </tr>

                        </thead>
                        <tbody>
                            @foreach ($design_and_pms as $key => $dp)
                            <tr>
                                <td class="text-center">{{ $key + 1 }}</td>
                                <td>{{ $dp->name }}</td>
                                <td>{{ $dp->email }}</td>
                                <td class="text-center">{{ $dp->tel }}</td>
                                <td>
                                    @if ($dp->is_active == "1")
                                        ON
                                    @else
                                        OFF
                                    @endif
                                </td>
                                <td class="text-center">
                                    <!-- BEGIN: Large Modal Toggle -->
                                    <button class="btn btn-secondary mr-2 mb-2" onclick="edit_modal({{$dp->id}})" data-tw-toggle="modal"
                                        data-tw-target="#large-modal-size-preview_edit"> <i data-lucide="edit-2" class="w-4 h-4 mr-2"></i> Edit</button>

                                    <a href="{{ url('/masterDesignPM/changeStatus', $dp->id) }}" class="btn btn-dark mr-2 mb-2"> <i data-lucide="power" class="w-4 h-4 mr-2"></i>On/Off</a>
                                    {{-- <a href="{{ url('/masterDesignPM/softdelete', $dp->id) }}" class="btn btn-dark gap-w"> Delete </a> --}}
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
                                <h2 class="font-medium text-base mr-auto">Add Designer/PM</h2>
                            </div> <!-- END: Modal Header -->
                            <!-- BEGIN: Modal Body -->
                            <form action="{{ url('/masterDesignPM/add') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
                                    <div class="col-span-12 sm:col-span-12 input-form mt-3">
                                        <input type="text" class="form-control mb-2" name="name" placeholder="Please add a Designer..." required>
                                    </div>
                                    <div class="col-span-12 sm:col-span-6 input-form mt-3">
                                        <input type="email" class="form-control mb-2" name="email" placeholder="Please add a Email..." required>
                                    </div>
                                    <div class="col-span-12 sm:col-span-6 input-form mt-3">
                                        <input type="text" class="form-control mb-2" name="tel" placeholder="Please add a Telephone..." required>
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

                <!-- BEGIN: Large Modal Content -->
                <div id="large-modal-size-preview_edit" class="modal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h2 class="font-medium text-base mr-auto">Edit Designer/PM</h2>
                            </div> <!-- END: Modal Header -->
                            <!-- BEGIN: Modal Body -->
                            <form action="{{ url('/masterDesignPM/update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
                                    <div class="col-span-12 sm:col-span-12 input-form mt-3">
                                        <input type="text" class="form-control mb-2" name="name" id="name" required>
                                    </div>
                                    <div class="col-span-12 sm:col-span-6 input-form mt-3">
                                        <input type="email" class="form-control mb-2" name="email" id="email" required>
                                    </div>
                                    <div class="col-span-12 sm:col-span-6 input-form mt-3">
                                        <input type="text" class="form-control mb-2" name="tel" id="tel" required>
                                    </div>
                                    <input type="hidden" name="id" id="get_id">
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

       jQuery(".filterhead").not(":eq(5)").each( function ( i ) {
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
        console.log(id);
        jQuery.ajax({
            type:   "GET",
            url:    "{!! url('masterDesignPM/edit/"+id+"') !!}",
            datatype:   "JSON",
            async:  false,
            success: function(data) {
                $('#get_id').val(data.dataEdit.id);
                $('#name').val(data.dataEdit.name);
                $('#email').val(data.dataEdit.email);
                $('#tel').val(data.dataEdit.tel);
                $('#update_by').val(data.dataEdit.update_by);
                jQuery('#Delete').children().remove().end();

            }
        });
    }
</script>
<!-- END: JS Assets-->
@endsection

@extends('layout.masterLayout')

@section('content-data')
<div class="intro-y flex flex-col sm:flex-row items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        Master Data
    </h2>
    <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
        <div class="text-center">
            <!-- BEGIN: Large Modal Toggle -->
            <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#large-modal-size-preview_add"
                class="btn btn-primary mr-1 mb-2"><i data-lucide="plus" class="w-4 h-4 mr-2"></i> Add Master </a>
            <!-- END: Large Modal Toggle -->
        </div>
    </div>
</div>
<!-- BEGIN: HTML Table Data -->
<div class="intro-y box p-5 mt-5">
    @if (session('success'))
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
        <table class="table table-hover table-auto sm:mt-2 allWork" id="emp-table">
            <thead>
                <tr>
                    <th scope="col" class="text-center" col-index = 1>ID
                        <select name="" class="form-control form-control-sm table-filter" onchange="filter_rows()">
                            <option value="all">All</option>
                        </select>
                    </th>
                    <th scope="col" col-index = 2>งานหลัก
                        <select name="" class="form-control form-control-sm table-filter" onchange="filter_rows()">
                            <option value="all">All</option>
                        </select>
                    </th>
                    <th scope="col" col-index = 3>Status
                        <select name="" class="form-control form-control-sm table-filter" onchange="filter_rows()">
                            <option value="all">All</option>
                        </select>
                    </th>
                    <th scope="col" align="center">Active</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($catagories as $key => $cat)
                    <tr>
                        <td class="text-center">{{ $key + 1 }}</td>
                        <td>{{ $cat->name }}</td>
                        <td>
                            @if ($cat->is_active == '1')
                                Active
                            @else
                                Inactive
                            @endif
                        </td>
                        <td class="text-center">
                            <a href="{{ url('sub_masterBoq', $cat->id) }}" class="btn btn-primary mr-2 mb-2"> <i
                                    data-lucide="list" class="w-4 h-4 mr-2"></i> Detail</a>
                            <!-- BEGIN: Large Modal Toggle -->
                            <button class="btn btn-secondary mr-2 mb-2" onclick="edit_modal({{ $cat->id }})"
                                data-tw-toggle="modal" data-tw-target="#large-modal-size-preview_edit"> <i
                                    data-lucide="edit-2" class="w-4 h-4 mr-2"></i> Edit</button>

                            <a href="{{ url('/masterBoq/changeStatus', $cat->id) }}" class="btn btn-dark mr-2 mb-2"> <i
                                    data-lucide="power" class="w-4 h-4 mr-2"></i> On/Off</a>
                            {{-- <a href="{{ url('/master/softdelete', $cat->id) }}" class="btn btn-dark gap-w"> Delete </a> --}}
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
                    <h2 class="font-medium text-base mr-auto">Add Job</h2>
                </div> <!-- END: Modal Header -->
                <!-- BEGIN: Modal Body -->
                <form action="{{ url('/masterBoq/add') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
                        <div class="col-span-12 sm:col-span-12 input-form mt-3">
                            <input type="text" class="form-control mb-2" name="name"
                                placeholder="Please add a job..." required>
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
                    <h2 class="font-medium text-base mr-auto">Edit Job</h2>
                </div> <!-- END: Modal Header -->
                <!-- BEGIN: Modal Body -->
                <form action="{{ url('/masterBoq/update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
                        <div class="col-span-12 sm:col-span-12 input-form mt-3">
                            <input type="text" class="form-control mb-2" name="name" id="name" required>
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
<!-- END: HTML Table Data -->

<script type="text/javascript">
    window.onload = () => {
        // console.log(document.querySelector("#emp-table > tbody > tr:nth-child(1) > td:nth-child(2) ").innerHTML);
    };

    getUniqueValuesFromColumn()

    //show data-table
    jQuery(document).ready(function () {
        jQuery('.allWork').DataTable({
            "ordering": false
        });
    });

    //edit main
    function edit_modal(id) {
        console.log(id);
        jQuery.ajax({
            type: "GET",
            url: "{!! url('master/edit/"+id+"') !!}",
            datatype: "JSON",
            async: false,
            success: function(data) {
                $('#get_id').val(data.dataEdit.id);
                $('#name').val(data.dataEdit.name);
                $('#update_by').val(data.dataEdit.update_by);
                jQuery('#Delete').children().remove().end();

            }
        });
    }
</script>
<!-- END: JS Assets-->

@endsection

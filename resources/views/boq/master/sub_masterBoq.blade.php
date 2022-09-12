@extends('layout.masterLayout')

@section('content-data')

            <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
                <h2 class="text-lg font-medium mr-auto">
                    {{-- Master Data > {{ $catagories->name }} --}}
                    <nav aria-label="breadcrumb" class="-intro-x h-full mr-auto">
                        <ol class="breadcrumb breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('masterBoq') }}">Master Data</a></li>
                            <li class="breadcrumb-item active"><a>{{ $catagories->name }}</a></li>
                        </ol>
                    </nav>
                </h2>
                <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
                    <!-- BEGIN: Large Modal Toggle -->
                    <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#large-modal-size-preview_add_sub" class="btn btn-primary mr-1 mb-2"><i data-lucide="plus" class="w-4 h-4 mr-2"></i> Add Sub </a>
                    <!-- END: Large Modal Toggle -->
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
                <div class="flex flex-col sm:flex-row sm:items-end xl:items-start mb-5"></div>
                <div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
                    <table class="table table-hover table-auto sm:mt-2 allWork" id="emp-table">
                        <thead>
                            <tr>
                                <th scope="col" col-index = 1>Code
                                    <select name="" class="form-control form-control-sm table-filter" onchange="filter_rows()">
                                        <option value="all">All</option>
                                    </select>
                                </th>
                                <th scope="col" col-index = 2>งานย่อย
                                    <select name="" class="form-control form-control-sm table-filter" onchange="filter_rows()">
                                        <option value="all">All</option>
                                    </select>
                                </th>
                                <th scope="col" col-index = 3>Brand
                                    <select name="" class="form-control form-control-sm table-filter" onchange="filter_rows()">
                                        <option value="all">All</option>
                                    </select>
                                </th>
                                <th scope="col" col-index = 4>Status
                                    <select name="" class="form-control form-control-sm table-filter" onchange="filter_rows()">
                                        <option value="all">All</option>
                                    </select>
                                </th>
                                <th scope="col" align="center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($catagories3 as $key => $cat)
                            <tr class="intro-x">
                                @php
                                    $brand = explode(',', $cat->brand_id);
                                @endphp
                                <td>{{ $cat->code }}</td>
                                <td>{{ $cat->name }}</td>
                                <td>
                                @foreach ($brand as $keyb => $b)
                                    @php
                                        $b_name = App\Models\Brand::where('id', $b)->first();
                                    @endphp
                                        @if ($b_name)
                                            @if (count($brand) > $keyb + 1)
                                                {{ $b_name->brand_name }}, <br>
                                            @else
                                                {{ $b_name->brand_name }}
                                            @endif
                                        @endif
                                @endforeach
                                </td>
                                <td>
                                    @if ($cat->is_active == "1")
                                        Active
                                    @else
                                        Inactive
                                    @endif
                                </td>
                                <td class="text-center">
                                    <!-- BEGIN: Large Modal Toggle -->
                                    <button class="btn btn-secondary mr-2 mb-2" onclick="edit_modal_sub({{$cat->id}})" data-tw-toggle="modal"
                                        data-tw-target="#large-modal-size-preview_edit_sub"> <i data-lucide="edit-2" class="w-4 h-4 mr-2"></i> Edit</button>
                                    <!-- END: Large Modal Toggle -->
                                    <a href="{{ url('/sub_masterBoq/changeStatus', $cat->id) }}" class="btn btn-dark mr-2 mb-2"> <i data-lucide="power" class="w-4 h-4 mr-2"></i> On/Off</a>
                                    {{-- x<a href="{{ url('/sub_masterBoq/softdelete', $cat->id) }}" class="btn btn-pending gap-w"><i data-lucide="activity" class="w-4 h-4 mr-2"></i></a> --}}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- BEGIN: Large Modal Content -->
            <div id="large-modal-size-preview_add_sub" class="modal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2 class="font-medium text-base mr-auto">Add Detail</h2>
                        </div> <!-- END: Modal Header -->
                        <!-- BEGIN: Modal Body -->
                        <form action="{{ url('/sub_masterBoq/add_sub') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" class="form-control" name="catagory_id" value="{{$catagories->id}}">
                            <div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
                                <div class="col-span-12 sm:col-span-12 input-form mt-3">
                                    <input type="text" class="form-control" name="name" placeholder="{{ $catagories->name }}" disabled>
                                </div>
                                <div class="col-span-12 sm:col-span-4">
                                    <input type="text" class="form-control" name="code1" minlength="2" maxlength="2" placeholder="Ex: GG" required>
                                </div>
                                <div class="col-span-12 sm:col-span-4">
                                    <input type="text" class="form-control" name="code2" minlength="3" maxlength="3" placeholder="Ex: 001" required>
                                </div>
                                <div class="col-span-12 sm:col-span-4">
                                    <input type="text" class="form-control" name="code3" minlength="2" maxlength="2" placeholder="- -">
                                </div>
                                <div class="col-span-12 sm:col-span-12">
                                    <input type="text" class="form-control" name="name" placeholder="Name">
                                </div>
                                <div class="col-span-12 sm:col-span-12 input-form">
                                    <select id="" class="form-control select_brand" name="brand_id[]" multiple placeholder="Select Brand" required>
                                        @foreach ($data_brand as $value)
                                            <option value="{{ $value->id }}">{{ $value->brand_name }}</option>
                                        @endforeach
                                    </select>
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
            <div id="large-modal-size-preview_edit_sub" class="modal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2 class="font-medium text-base mr-auto">Edit Detail</h2>
                        </div> <!-- END: Modal Header -->
                        <!-- BEGIN: Modal Body -->
                        <form action="{{ url('/sub_masterBoq/update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
                                <div class="col-span-12 sm:col-span-12 input-form mt-3">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="{{ $catagories->name }}" disabled>
                                </div>
                                <div class="col-span-12 sm:col-span-4">
                                    <input type="text" class="form-control" id="get_code1" name="code1" minlength="2" maxlength="2" required>
                                </div>
                                <div class="col-span-12 sm:col-span-4">
                                    <input type="text" class="form-control" id="get_code2" name="code2" minlength="3" maxlength="3" required>
                                </div>
                                <div class="col-span-12 sm:col-span-4">
                                    <input type="text" class="form-control" id="get_code3" placeholder="- -" name="code3" minlength="2" maxlength="2">
                                </div>
                                <div class="col-span-12 sm:col-span-12">
                                    <input type="text" class="form-control" id="sub_name" name="name">
                                </div>
                                <div class="col-span-12 sm:col-span-12 input-form">
                                    <select id="get_brand_edit" class="form-control select_brand" name="brand_id[]" multiple placeholder="Select Brand" required>
                                        {{-- @foreach ($data_brand as $value)
                                            <option value="{{ $value->id }}">{{ $value->brand_name }}</option>
                                        @endforeach --}}
                                    </select>
                                </div>
                                <input type="hidden" name="id" id="id">
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


<!-- BEGIN: JS Assets-->
<script>
    window.onload = () => {
        // console.log(document.querySelector("#emp-table > tbody > tr:nth-child(1) > td:nth-child(2) ").innerHTML);
    };

    getUniqueValuesFromColumn()

    jQuery(document).ready(function() {
        jQuery(".select_brand").select2({
            multiple: true,
            placeholder: 'Select Brand'
        });

    });

    jQuery(document).ready(function () {
        jQuery('.allWork').DataTable({
            "ordering": false
        });
    });

    //edit sub
    function edit_modal_sub(id){
        // console.log(id);
        var x = document.getElementById("get_brand_edit");
        var option = document.createElement("option");
        jQuery.ajax({
            type:   "GET",
            url:    "{!! url('sub_masterBoq/edit/"+id+"') !!}",
            datatype:   "JSON",
            async:  false,
            success: function(data) {
                $('#id').val(data.dataEdit.id);
                var text = data.dataEdit.code;
                var result1 = text.substring(0, 2);
                var result2 = text.substring(2, 5);
                var result3 = text.substring(5, 7);
                $('#get_code1').val(result1);
                $('#get_code2').val(result2);
                if (result3 != '') {
                    $('#get_code3').val(result3);
                }

                $('#sub_name').val(data.dataEdit.name);
                $('#update_by').val(data.dataEdit.update_by);
                jQuery('#Delete').children().remove().end();
                jQuery('#get_brand_edit').children().remove().end();
                // console.log(data.dataBrand);

                if (data.dataEdit.brand_id) {
                    let rows_tags = data.dataEdit.brand_id.split(",");
                    jQuery.each(rows_tags, function(tkey, tvalue){
                    jQuery.each(data.dataBrand, function(key, value){
                        if(value.id == rows_tags[tkey]){
                            $('#get_brand_edit').append('<option value='+value.id+' selected>'+value.brand_name+'</option>');
                        }else{
                            $('#get_brand_edit').append('<option value='+value.id+'>'+value.brand_name+'</option>');
                        }
                    });
                });
                }else{
                    jQuery.each(data.dataBrand, function(key, value){
                        $('#get_brand_edit').append('<option value='+value.id+'>'+value.brand_name+'</option>');
                    });
                }


            }
        });
    }
</script>
<!-- END: JS Assets-->
@endsection

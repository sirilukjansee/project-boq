<!DOCTYPE html>
<!--
Template Name: Icewall - HTML Admin Dashboard Template
Author: Left4code
Website: http://www.left4code.com/
Contact: muhammadrizki@left4code.com
Purchase: https://themeforest.net/user/left4code/portfolio
Renew Support: https://themeforest.net/user/left4code/portfolio
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en" class="light">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Icewall admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Icewall Admin Template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="LEFT4CODE">
        <title>Boq - </title>
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

        <link href="{{ asset('select2/select2.min.css') }}" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="{{ asset('dist/css/app.css') }}">
        <!-- END: CSS Assets-->
    </head>
    <!-- END: Head -->
    <body class="main">
        <!-- BEGIN: Mobile Menu -->
        <div class="mobile-menu md:hidden">
            <div class="mobile-menu-bar">
                <a href="{{ url('index') }}" class="flex mr-auto">
                    <span class="text-white text-lg ml-3"><i data-lucide="box"></i></span>
                </a>
                <a href="javascript:;" id="mobile-menu-toggler"> <i data-lucide="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
            </div>
            <ul class="border-t border-white/[0.08] py-5 hidden">
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-lucide="home"></i> </div>
                        <div class="menu__title"> Dashboard <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="index.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Overview 1 </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-dashboard-overview-2.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Overview 2 </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-dashboard-overview-3.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Overview 3 </div>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- END: Mobile Menu -->
        <!-- BEGIN: Top Bar -->
        <div class="top-bar-boxed h-[70px] z-[51] relative border-b border-white/[0.08] -mt-7 md:-mt-5 -mx-3 sm:-mx-8 px-3 sm:px-8 md:pt-0 mb-12">
            <div class="h-full flex items-center">
                <!-- BEGIN: Logo -->
                <a href="{{ url('index') }}" class="-intro-x hidden md:flex">
                    <img alt="Midone - HTML Admin Template" class="w-6" src="../dist/images/logo.svg">
                    <span class="text-white text-lg ml-3">Test</span>
                </a>
                <!-- END: Logo -->
                <!-- BEGIN: Breadcrumb -->
                <nav aria-label="breadcrumb" class="-intro-x h-full mr-auto">
                    <ol class="breadcrumb breadcrumb-light">
                        <li class="breadcrumb-item active" aria-current="page">Project</li>
                    </ol>
                </nav>
                <!-- END: Breadcrumb -->
                <!-- BEGIN: Account Menu -->
                <div class="intro-x dropdown w-8 h-8">
                    <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in scale-110" role="button" aria-expanded="false" data-tw-toggle="dropdown">
                        <img alt="Midone - HTML Admin Template" src="../dist/images/profile-8.jpg">
                    </div>
                    <div class="dropdown-menu w-56">
                        <ul class="dropdown-content bg-primary/80 before:block before:absolute before:bg-black before:inset-0 before:rounded-md before:z-[-1] text-white">
                            <li class="p-2">
                                <div class="font-medium">Nicolas Cage</div>
                            </li>
                            <li>
                                <hr class="dropdown-divider border-white/[0.08]">
                            </li>
                            <li>
                                <a href="{{ url('adminBoq') }}" class="dropdown-item hover:bg-white/5"> <i data-lucide="user" class="w-4 h-4 mr-2"></i> Profile </a>
                            </li>
                            <li>
                                <a href="" class="dropdown-item hover:bg-white/5"> <i data-lucide="lock" class="w-4 h-4 mr-2"></i> Reset Password </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider border-white/[0.08]">
                            </li>
                            <li>
                                <a href="" class="dropdown-item hover:bg-white/5"> <i data-lucide="toggle-right" class="w-4 h-4 mr-2"></i> Logout </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- END: Account Menu -->
            </div>
        </div>
        <!-- END: Top Bar -->
        <!-- BEGIN: Top Menu -->
        <nav class="top-nav">
            <ul>
                <li>
                    <a href="{{ url('index')}}" class="top-menu">
                        <div class="top-menu__icon"> <i data-lucide="file-text"></i> </div>
                        <div class="top-menu__title"> Project  <i data-lucide="chevron-down" class="top-menu__sub-icon"></i></div>
                    </a>
                </li>
                <li>
                    <a href="{{ url('masterBoq')}}" class="top-menu top-menu--active">
                        <div class="top-menu__icon"> <i data-lucide="clipboard"></i> </div>
                        <div class="top-menu__title"> Master <i data-lucide="chevron-down" class="top-menu__sub-icon"></i> </div>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- END: Top Menu -->
        <!-- BEGIN: Content -->
        <div class="wrapper wrapper--top-nav">
            <div class="wrapper-box">
                <!-- BEGIN: Content -->
                <div class="content">
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
                        <!-- BEGIN: Large Modal Content -->
                        <div id="large-modal-size-preview_add_sub" class="modal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <a data-tw-dismiss="modal" href="javascript:;">
                                        <i data-lucide="x" class="w-8 h-8 text-slate-400"></i>
                                    </a>
                                    <div class="modal-body p-10">
                                        <div class="mb-4">
                                            เพิ่มงานย่อย
                                        </div>
                                        <form action="{{url('/sub_masterBoq/add_sub')}}" method="post">
                                            @csrf
                                            <div class="form-group mb-4">
                                                <input type="hidden" class="form-control mb-2" name="catagory_id" value="{{$catagories->id}}" readonly>
                                                <input type="text" class="form-control mb-2" name="name" placeholder="{{ $catagories->name }}" disabled>
                                                <input type="text" class="form-control mb-2" name="code" placeholder="Ex: GG001" required>
                                                <input type="text" class="form-control mb-2" name="name" placeholder="ชื่องานย่อย">
                                                <select id="" class="tom-select" name="brand_id[]" multiple placeholder="Select a state..." autocomplete="off" required>
                                                    @foreach ($data_brand as $value)
                                                        <option value="{{ $value->id }}">{{ $value->brand_name }}</option>
                                                    @endforeach
                                                </select>
                                                <input type="hidden" class="form-control mb-2" name="create_by" value="admin" >
                                                <input type="hidden" class="form-control mb-2" name="update_by" value="admin" >
                                                <input type="hidden" class="form-control mb-2" name="is_active" value="1" >
                                            </div>

                                            <input type="submit" value="Save" class="btn btn-primary">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Large Modal Content -->
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
                            <table class="table table-hover table-auto sm:mt-2" id="allWork">
                                <thead>
                                  <tr>
                                    <th scope="col">Code</th>
                                    <th scope="col">งานย่อย</th>
                                    <th scope="col">Brand</th>
                                    <th scope="col"></th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach ($catagories3 as $key => $cat)
                                    <tr>
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
                                        <td class="text-center">
                                            <!-- BEGIN: Large Modal Toggle -->
                                            <a href="javascript:;" onclick="edit_modal_sub({{$cat->id}})" data-tw-toggle="modal" data-tw-target="#large-modal-size-preview_edit_sub" class="btn btn-secondary mr-1 mb-2"> Edit </a>
                                            <!-- END: Large Modal Toggle -->
                                            <a href="{{ url('/sub_masterBoq/softdelete', $cat->id) }}" class="btn btn-dark gap-w"> Delete </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- BEGIN: Large Modal Content -->
                    <div id="large-modal-size-preview_edit_sub" class="modal" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <a data-tw-dismiss="modal" href="javascript:;">
                                    <i data-lucide="x" class="w-8 h-8 text-slate-400"></i>
                                </a>
                                <div class="modal-body p-10">
                                    <div class="mb-4">
                                        แก้ไขงานย่อย
                                    </div>
                                    <form action="{{ url('/sub_masterBoq/update') }}" method="post">
                                        @csrf
                                        <div class="form-group mb-4">
                                            <input type="hidden" name="id" id="id">
                                            <input type="hidden" class="form-control mb-2" name="catagory_id" id="cat_id" value="{{$catagories->id}}">
                                            <input type="text" class="form-control mb-2" name="name" id="name" placeholder="{{$catagories->name}}" disabled>
                                            <input type="text" class="form-control mb-2" name="code" id="get_code" required>
                                            <input type="text" class="form-control mb-2" name="name" id="sub_name" placeholder="ชื่องานย่อย" value="">
                                            <select id="get_brand_edit" name="brand_id[]" class="form-control test" style="z-index: -1 !important;">
                                            </select>

                                            <input type="hidden" class="form-control mb-2" name="update_by" id="update_by" value="admin" >
                                        </div>

                                        <input type="submit" value="Save Edit" class="btn btn-primary">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Large Modal Content -->

                    <!-- END: HTML Table Data -->
                </div>
                <!-- END: Content -->
            </div>

<<<<<<< HEAD
=======
            {{-- <select class="js-example-basic-multiple" name="states[]" multiple="multiple">
                <option value="AL">Alabama</option>
                <option value="WY">Wyoming</option>
              </select> --}}

>>>>>>> 08327c17d02a8ce352e995c79839a241268efa51
        </div>
        <!-- END: Content -->

        <!-- BEGIN: JS Assets-->
        <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=["your-google-map-api"]&libraries=places"></script>
        <script src="../dist/js/app.js"></script>
        <script>
            jQuery("#test").select2({
                multiple: true
            });

            jQuery(document).ready(function() {
            jQuery(".test").select2({
                multiple: true
            });
            jQuery('.select2-selection').on('click', function (){
                // alert()
                if (jQuery('.test').hasClass("select2-hidden-accessible")) {
                // alert()
                jQuery('select2-dropdown').css('z-index', '9000000');
            }
            })

        });

            jQuery(document).ready(function () {
                jQuery('#allWork').DataTable();
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
                        // $('#get_brand').val(data.dataEdit.brand_id);
                        $('#get_code').val(data.dataEdit.code);
                        $('#sub_name').val(data.dataEdit.name);
                        $('#update_by').val(data.dataEdit.update_by);
                        jQuery('#Delete').children().remove().end();
                        jQuery('#get_brand_edit').children().remove().end();
                        // console.log(data.dataBrand);
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

                    }
                });
            }
        </script>
        <!-- END: JS Assets-->
    </body>
</html>

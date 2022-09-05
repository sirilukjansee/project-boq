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

        <link href="{{ asset('select2/select2.min.css') }}" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="{{ asset('dist/css/_app.css') }}">
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
                    <img alt="Midone - HTML Admin Template" class="w-6" src="dist/images/logo.svg">
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
                        <img alt="Midone - HTML Admin Template" src="dist/images/profile-8.jpg">
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
                    <ul class="">
                        <li>
                            <a href="{{ url('/masterTaskName') }}" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="plus"></i> </div>
                                <div class="top-menu__title"> Master Task Name </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/masterTaskType') }}" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="plus"></i> </div>
                                <div class="top-menu__title"> Master Task Type </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/masterDesignPM') }}" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="plus"></i> </div>
                                <div class="top-menu__title"> Master Designer_PM </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/masterLocation') }}" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="plus"></i> </div>
                                <div class="top-menu__title"> Master Location </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/masterBrand') }}" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="plus"></i> </div>
                                <div class="top-menu__title"> Master Brand </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/masterUnit') }}" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="plus"></i> </div>
                                <div class="top-menu__title"> Master Unit </div>
                            </a>
                        </li>
                    </ul>
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
                            Master Data
                        </h2>
                        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
                            <div class="text-center">
                                <!-- BEGIN: Large Modal Toggle -->
                                <a href="javascript:;" data-tw-toggle="modal" onclick="edit_modal_sub(19)" data-tw-target="#large-modal-size-preview_add" class="btn btn-primary mr-1 mb-2"><i data-lucide="plus" class="w-4 h-4 mr-2"></i> Add Master </a>
                                <!-- END: Large Modal Toggle -->
                            </div>

                            <div class="intro-y box p-5 mt-5">
                                <div class="col-span-12 col-md-4">
                                    {{-- <select id="test" name="states" class="form-control w-full">
                                        <option value="AL">Alabama</option>
                                        <option value="WY">Wyoming</option>
                                      </select> --}}
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- BEGIN: HTML Table Data -->

                    <!-- END: HTML Table Data -->
                </div>
                <!-- END: Content -->
            </div>
        </div>
        <!-- END: Content -->



        <div id="large-modal-size-preview_add" class="modal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="font-medium text-base mr-auto">เพิ่มข้อมูลบริษัท</h2>
                    </div> <!-- END: Modal Header -->
                    <!-- BEGIN: Modal Body -->
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
                            <div class="col-span-12 sm:col-span-6"> <label for="modal-form-3"
                                class="form-label">อีเมลบริษัท</label>
                            <input id="" type="email" name="email" class="form-control" placeholder="example@gmail.com">
                        </div>
                            <div class="col-span-12 sm:col-span-12 mt-3"> <label for="validation-form-4"
                                    class="form-label">รูปภาพ</label>
                                    {{-- <div id="get_brand_edit2"></div> --}}
                                    <select id="get_brand_edit" name="states" class="form-control test" style="z-index: -1 !important;">
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

        <!-- BEGIN: JS Assets-->
        {{-- <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=["your-google-map-api"]&libraries=places"></script> --}}
        <script src="{{ asset ('dist/js/app.js') }}"></script>

        <script>

            //edit sub
            function edit_modal_sub(id){
                jQuery.ajax({
                    type:   "GET",
                    url:    "{!! url('sub_masterBoq/edit/"+19+"') !!}",
                    datatype:   "JSON",
                    async:  false,
                    success: function(data) {

                        $('#id').val(data.dataEdit.id);
                        // $('#get_brand').val(data.dataEdit.brand_id);
                        $('#get_code').val(data.dataEdit.code);
                        $('#sub_name').val(data.dataEdit.name);
                        $('#update_by').val(data.dataEdit.update_by);
                        // $('#cc').text("123");
                        jQuery('#Delete').children().remove().end();
                        // jQuery('#get_brand').children().remove().end();
                        // console.log(data.dataBrand);
                        // $('#get_brand_edit2').append('<select id="get_brand_edit" name="states" class="form-control test" style="z-index: 9999;"></select>');
                        let rows_tags = data.dataEdit.brand_id.split(",");
                        jQuery.each(rows_tags, function(tkey, tvalue){
                            jQuery.each(data.dataBrand, function(key, value){
                                if(value.id == rows_tags[tkey]){
                                    $('#get_brand_edit').append('<option value='+value.id+' selected>'+value.brand_name+'</option>');
                                }
                                else{
                                    $('#get_brand_edit').append('<option value='+value.id+'>'+value.brand_name+'</option>');
                                }
                            });
                        });

                    }
                });
            }

            jQuery(document).ready(function() {
            jQuery(".test").select2({
                multiple: true
            });
            // jQuery('.select2-selection').on('click', function (){
            //     // alert()
            //     if (jQuery('.test').hasClass("select2-hidden-accessible")) {
            //     // alert()
            //     jQuery('select2-dropdown').css('z-index', '9000000');
            // }
            // })

        });
        </script>


    </body>
</html>

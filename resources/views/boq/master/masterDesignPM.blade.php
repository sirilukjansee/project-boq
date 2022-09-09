<!DOCTYPE html>
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
                            <a href="{{ url('/masterBoq') }}" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="plus"></i> </div>
                                <div class="top-menu__title"> Master Data </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/masterTaskName') }}" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="plus"></i> </div>
                                <div class="top-menu__title"> Master Task Name </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/masterTaskName') }}" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="plus"></i> </div>
                                <div class="top-menu__title"> Master Task Type </div>
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
                        <li>
                            <a href="{{ url('/masterVender') }}" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="plus"></i> </div>
                                <div class="top-menu__title"> Master Vender </div>
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
                            <table class="table table-hover table-auto sm:mt-2" id="allWork">
                                <thead>
                                  <tr>
                                    <th scope="col" class="text-center">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">E-mail</th>
                                    <th scope="col" class="text-center">Telephone</th>
                                    <th scope="col">Status</th>
                                    <th scope="col" align="center">Active</th>
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
                                                Active
                                            @else
                                                Inactive
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <!-- BEGIN: Large Modal Toggle -->
                                            <button class="btn btn-secondary mr-2 mb-2" onclick="edit_modal({{$dp->id}})" data-tw-toggle="modal"
                                                data-tw-target="#large-modal-size-preview_edit"> <i data-lucide="edit-2" class="w-4 h-4 mr-2"></i> Edit</button>

                                            <a href="{{ url('/masterDesignPM/changeStatus', $dp->id) }}" class="btn btn-dark mr-2 mb-2"> <i data-lucide="power" class="w-4 h-4 mr-2"></i> On/Off</a>
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
                    <!-- END: HTML Table Data -->
                </div>
                <!-- END: Content -->
            </div>
        </div>
        <!-- END: Content -->

        <!-- BEGIN: JS Assets-->
        <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=["your-google-map-api"]&libraries=places"></script>
        <script src="dist/js/app.js"></script>
        <script type="text/javascript">
            //show data-table
            jQuery(document).ready(function () {
                jQuery('#allWork').DataTable();
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
    </body>
</html>

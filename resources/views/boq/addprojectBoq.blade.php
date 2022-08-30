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
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="{{ asset('dist/css/app.css') }}" />
        <link href="https://cdn.jsdelivr.net/npm/tom-select@2.1.0/dist/css/tom-select.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/tom-select@2.1.0/dist/js/tom-select.complete.min.js"></script>
        <!-- END: CSS Assets-->
    </head>
    <!-- END: Head -->
    <body class="main">
        <!-- BEGIN: Mobile Menu -->
        <div class="mobile-menu md:hidden">
            <div class="mobile-menu-bar">
                <a href="{{ url('index') }}" class="flex mr-auto">
                    <img alt="Midone - HTML Admin Template" class="w-6" src="dist/images/logo.svg">
                </a>
                <a href="javascript:;" id="mobile-menu-toggler"> <i data-lucide="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
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
        </div>
        <!-- END: Mobile Menu -->
        <!-- BEGIN: Top Bar -->
        <div class="top-bar-boxed h-[70px] z-[51] relative border-b border-white/[0.08] -mt-7 md:-mt-5 -mx-3 sm:-mx-8 px-3 sm:px-8 md:pt-0 mb-12">
            <div class="h-full flex items-center">
                <!-- BEGIN: Logo -->
                <a href="{{ url("index") }}" class="-intro-x hidden md:flex">
                    <img alt="Midone - HTML Admin Template" class="w-6" src="dist/images/logo.svg">
                    <span class="text-white text-lg ml-3">Test</span>
                </a>
                <!-- END: Logo -->
                <!-- BEGIN: Breadcrumb -->
                <nav aria-label="breadcrumb" class="-intro-x h-full mr-auto">
                    <ol class="breadcrumb breadcrumb-light">
                        <li class="breadcrumb-item"><a href="{{ url('index') }}">Porject</a></li>
                        <li class="breadcrumb-item active" aria-current="page">addProject</li>
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
                                <div class="text-xs text-white/60 mt-0.5 dark:text-slate-500">Software Engineer</div>
                            </li>
                            <li>
                                <hr class="dropdown-divider border-white/[0.08]">
                            </li>
                            <li>
                                <a href="" class="dropdown-item hover:bg-white/5"> <i data-lucide="user" class="w-4 h-4 mr-2"></i> Profile </a>
                            </li>
                            <li>
                                <a href="" class="dropdown-item hover:bg-white/5"> <i data-lucide="edit" class="w-4 h-4 mr-2"></i> Add Account </a>
                            </li>
                            <li>
                                <a href="" class="dropdown-item hover:bg-white/5"> <i data-lucide="lock" class="w-4 h-4 mr-2"></i> Reset Password </a>
                            </li>
                            <li>
                                <a href="" class="dropdown-item hover:bg-white/5"> <i data-lucide="help-circle" class="w-4 h-4 mr-2"></i> Help </a>
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
                    <a href="javascript:;.html" class="top-menu top-menu--active">
                        <div class="top-menu__icon"> <i data-lucide="file-text"></i> </div>
                        <div class="top-menu__title"> Project <i data-lucide="chevron-down" class="top-menu__sub-icon"></i> </div>
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
                        <h2 class="text-lg font-medium mr-auto mb-2">
                            Create Project
                        </h2>
                    </div>
                    <!-- BEGIN: Validation Form -->
                    <div class="intro-y box p-5 mt-3">
                        <form action="{{ url('/addprojectBoq/add') }}" method="post" >
                            @csrf
                            <div class="grid grid-cols-2 gap-2">
                                <div class="input-form mt-3">
                                    <label for="validation-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                        Brand
                                    </label>
                                    {{-- <input id="validation-form-1" type="text" name="brand" class="form-control" required> --}}
                                    <select id="select-beast-empty" name="brand" data-placeholder="Select a person..."  autocomplete="off" class="form-control w-full">
                                        @foreach ($project1 as $pro1)
                                        <option value="{{$pro1->brand_name}}">{{$pro1->brand_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="input-form mt-3">
                                    <label for="validation-form-2" class="form-label w-full flex flex-col sm:flex-row">
                                        Location
                                    </label>
                                    {{-- <input id="validation-form-2" type="text" name="location" class="form-control" required> --}}
                                    <select id="select-beast-empty1" name="location" data-placeholder="Select a person..."  autocomplete="off" class="form-control w-full">
                                        @foreach ($project2 as $pro2)
                                        <option value="{{$pro2->location_name}}">{{$pro2->location_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="grid grid-cols-8 gap-2">
                                <div class="col-span-12 xl:col-span-2 mt-3">
                                    <div class="input-form mt-2 xl:mt-0">
                                        <label for="validation-form-3" class="form-label w-full flex flex-col sm:flex-row">
                                            Area
                                        </label>
                                        <input id="validation-form-3" type="text" name="area" class="form-control" required>
                                        <div class="form-help">ขนาด และ หน่วย</div>
                                    </div>
                                </div>
                                <div class="col-span-12 xl:col-span-2 mt-3">
                                    <div class="input-form mt-2 xl:mt-0">
                                        <label for="validation-form-4" class="form-label w-full flex flex-col sm:flex-row">
                                            IO number
                                        </label>
                                        <input id="validation-form-4" type="text" name="io" class="form-control">
                                    </div>
                                </div>
                                <div class="col-span-12 xl:col-span-2 mt-3">
                                    <div class="input-form mt-2 xl:mt-0">
                                        <label for="validation-form-5" class="form-label w-full flex flex-col sm:flex-row">
                                            Task Type
                                        </label>
                                        {{-- <input id="validation-form-5" type="text" name="task" class="form-control" required> --}}
                                        <select id="select-beast-empty2" name="task" data-placeholder="Select a person..."  autocomplete="off" class="form-control w-full">
                                            @foreach ($project3 as $pro3)
                                            <option value="{{$pro3->task_type_name}}">{{$pro3->task_type_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-span-12 xl:col-span-2 mt-3">
                                    <div class="input-form mt-2 xl:mt-0">
                                        <label for="validation-form-5" class="form-label w-full flex flex-col sm:flex-row">
                                            Task Name
                                        </label>
                                        {{-- <input id="validation-form-5" type="text" name="task_n" class="form-control" required> --}}
                                        <select id="select-beast-empty3" name="task_n" data-placeholder="Select a person..."  autocomplete="off" class="form-control w-full">
                                            @foreach ($project4 as $pro4)
                                            <option value="{{$pro4->task_name}}">{{$pro4->task_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-8 gap-2">
                                <div class="col-span-12 xl:col-span-2 mt-3">
                                    <div class="input-form mt-2 xl:mt-0">
                                        <label for="validation-form-6" class="form-label w-full sm:flex-row">
                                            Start Date
                                        </label>
                                        <input id="validation-form-6" type="date" name="startDate" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-span-12 xl:col-span-2 mt-3">
                                    <div class="input-form mt-2 xl:mt-0">
                                        <label for="validation-form-7" class="form-label w-full sm:flex-row">
                                            On hand Date
                                        </label>
                                        <input id="validation-form-7" type="date" name="finishDate" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-span-12 xl:col-span-2 mt-3">
                                    <div class="input-form mt-2 xl:mt-0">
                                        <label for="validation-form-10" class="form-label w-full sm:flex-row">
                                            All Date
                                        </label>
                                        <input id="validation-form-10" type="text" name="alldate" class="form-control" readonly>
                                    </div>
                                </div>
                                <div class="col-span-12 xl:col-span-2 mt-3">
                                    <div class="input-form mt-2 xl:mt-0">
                                        <label for="validation-form-11" class="form-label w-full sm:flex-row">
                                            Open Date
                                        </label>
                                        <input id="validation-form-11" type="date" name="openDate" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-2">
                                <div class="input-form mt-3">
                                    <label for="validation-form-8" class="form-label w-full flex flex-col sm:flex-row">
                                        Designer Name
                                    </label>
                                    {{-- <input id="validation-form-8" type="text" name="ds_name" class="form-control" required> --}}
                                    <select id="select-beast-empty4" name="ds_name" data-placeholder="Select a person..."  autocomplete="off" class="form-control w-full">
                                        @foreach ($project5 as $pro5)
                                        <option value="{{$pro5->name}}">{{$pro5->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                {{-- <div class="input-form mt-3">
                                    <label for="validation-form-9" class="form-label w-full flex flex-col sm:flex-row">
                                        Project Manager
                                    </label>
                                    <input id="validation-form-9" type="text" name="pm_name" class="form-control" required>
                                </div> --}}
                            </div>
                            <input type="submit" value="Save" class="btn btn-primary mt-5">
                            <a href="{{ url("index") }}" class="btn btn-secondary mt-5">Back</a>
                        </form>
                    </div>
                    <!-- END: Validation Form -->
                    <!-- BEGIN: Success Notification Content -->
                    <div id="success-notification-content" class="toastify-content hidden flex">
                        <i class="text-success" data-lucide="check-circle"></i>
                        <div class="ml-4 mr-4">
                            <div class="font-medium">Registration success!</div>
                            <div class="text-slate-500 mt-1">
                                Please check your e-mail for further info!
                            </div>
                        </div>
                    </div>
                    <!-- END: Success Notification Content -->
                    <!-- BEGIN: Failed Notification Content -->
                    <div id="failed-notification-content" class="toastify-content hidden flex">
                        <i class="text-danger" data-lucide="x-circle"></i>
                        <div class="ml-4 mr-4">
                            <div class="font-medium">Registration failed!</div>
                            <div class="text-slate-500 mt-1">
                                Please check the fileld form.
                            </div>
                        </div>
                    </div>
                    <!-- END: Failed Notification Content -->
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
            //calculate date
            $('#validation-form-7').on('change', function() {

                let strdate = $('#validation-form-6').val();
                var findate = $(this).val();
                var date1 = new Date(strdate);
                var date2 = new Date(findate);


                var diffTime = date2.getTime() - date1.getTime();
                var diffDay = diffTime / (1000 * 3600 * 24);
                console.log(diffDay);
                $('#validation-form-10').val(diffDay);


            });

            //
            new TomSelect("#select-beast-empty",{
                allowEmptyOption: true,
                create: true
            });
            //
            new TomSelect("#select-beast-empty1",{
                allowEmptyOption: true,
                create: true
            });
            //
            new TomSelect("#select-beast-empty2",{
                allowEmptyOption: true,
                create: true
            });
            //
            new TomSelect("#select-beast-empty3",{
                allowEmptyOption: true,
                create: true
            });
            //
            new TomSelect("#select-beast-empty4",{
                allowEmptyOption: true,
                create: true
            });
        </script>
        <!-- END: JS Assets-->
    </body>
</html>
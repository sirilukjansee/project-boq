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
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="{{ asset('dist/css/app.css') }}" />
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
                <a href="{{ url("index") }}" class="-intro-x hidden md:flex">
                    <img alt="Midone - HTML Admin Template" class="w-6" src="dist/images/logo.svg">
                    <span class="text-white text-lg ml-3">Test</span> 
                </a>
                <!-- END: Logo -->
                <!-- BEGIN: Breadcrumb -->
                <nav aria-label="breadcrumb" class="-intro-x h-full mr-auto">
                    <ol class="breadcrumb breadcrumb-light">
                        <li class="breadcrumb-item"><a href="#">Application</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
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
                        <div class="top-menu__icon"> <i data-lucide="plust"></i> </div>
                        <div class="top-menu__title"> เพิ่มงาน <i data-lucide="chevron-down" class="top-menu__sub-icon"></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="{{ url("addformBoq") }}" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="plus"></i> </div>
                                <div class="top-menu__title"> เพิ่มงานหลัก </div>
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
                        <h2 class="text-lg font-medium mr-auto mb-4">
                            Create BOQ
                        </h2>
                    </div>            
                    <!-- BEGIN: Validation Form -->
                    <form action="" class="validate-form">
                        <div class="input-form mt-3">
                            <label for="validation-form-2" class="form-label w-full flex flex-col sm:flex-row">
                                งานหลัก 
                            </label>
                            <select name="main" id="" class="tom-select w-full" required>
                                <option value="1">งานโครงสร้าง</option>
                                <option value="2">งานสถาปัตย์</option>
                                <option value="3">งานระบบ</option>
                            </select>
                            <!--<input id="validation-form-2" type="text" name="" class="form-control" placeholder="" required>-->
                        </div>
                        <div class="intro-y overflow-auto input-form mt-3">
                            <label for="validation-form-2" class="form-label w-full flex flex-col sm:flex-row">
                                งานย่อย 
                            </label>
                            <div class="grid grid-cols-3 gap-2 mt-3">
                                <input type="text" class="form-control col-span-1" placeholder="" aria-label="default input inline 1" required>
                                <input type="number" class="form-control col-span-1" placeholder="จำนวน" aria-label="default input inline 2" required>
                                <select name="หน่วยนับ" id="unit">
                                    <option value="unit">หน่วย</option>
                                    <option value="square meter">ตร.ม</option>
                                    <option value="cubic meter">ลบ.ม</option>
                                    <option value="kg">กก.</option>
                                    <option value="ton">ตัน</option>
                                </select>
                            </div>
                        </div>
                        <div class="input-form mt-3">
                            <label for="validation-form-5" class="form-label w-full flex flex-col sm:flex-row">
                                หมายเหตุ
                            </label>
                            <input id="validation-form-5" type="text" name="other" class="form-control" placeholder="ถ้ามี">
                        </div>
                        <input type="submit" value="บันทึก" class="btn btn-primary">
                        <a href="{{ url("addformBoq") }}" class="btn btn-secondary mt-5">ย้อนกลับ</a>
                    </form>
                    <div class="intro-y overflow-auto lg:overflow-visible pt-6 sm:mt-0">
                        <div class="pb-4">
                            <table class="table sm:mt-2">
                                <th>
                                    <a class="text-lg"> งานโครงสร้าง </a>
                                </th>
                            </table>
                        </div>
                        <table class="table table-hover sm:mt-2">
                            <thead class="table-light">
                                <tr>
                                    <th class="whitespace-nowrap">รายการ</th>
                                    <th class="whitespace-nowrap">งานหลัก</th>
                                    <th class="text-center whitespace-nowrap">จำนวน</th>
                                    <th class="text-center whitespace-nowrap">หน่วย</th>
                                    <th class="text-center whitespace-nowrap"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="intro-x">
                                    <td class="w-40 text-center table-report__action">
                                        <div class="flex">
                                            <h3>1</h3>
                                        </div>
                                    </td>
                                    <td>
                                        <a class="font-medium whitespace-nowrap"> คอนกรีต </a> 
                                    </td>
                                    <td class="text-center">
                                        <a class="font-medium whitespace-nowrap"> 100 </a> 
                                    </td>
                                    <td class="text-center">
                                        <a class="font-medium whitespace-nowrap"> ลบ.ม. </a> 
                                    </td>
                                    <td class="table-report__action">
                                        <div class="btn-group text-center flex justify-center">
                                            <a href="" class="btn btn-outline-secondary w-full sm:w-auto mr-2" aria-expanded="false"> <i data-lucide="rotate-ccw" class="w-4 h-4 mr-2"></i> แก้ไข </a>
                                            <a href="{{ url('addminorBoq')}}" class="btn btn-outline-secondary w-full sm:w-auto mr-2" aria-expanded="false"> <i data-lucide="x" class="w-4 h-4 mr-2"></i> ลบ </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="intro-x">
                                    <td class="w-40 text-center table-report__action">
                                        <div class="flex">
                                            <h3>2</h3>
                                        </div>
                                    </td>
                                    <td>
                                        <a class="font-medium whitespace-nowrap"> เหล็กเส้น </a> 
                                    </td>
                                    <td class="text-center">
                                        <a class="font-medium whitespace-nowrap"> 100 </a> 
                                    </td>
                                    <td class="text-center">
                                        <a class="font-medium whitespace-nowrap"> ตร.ม. </a> 
                                    </td>
                                    <td class="table-report__action">
                                        <div class="btn-group text-center flex justify-center">
                                            <a href="" class="btn btn-outline-secondary w-full sm:w-auto mr-2" aria-expanded="false"> <i data-lucide="rotate-ccw" class="w-4 h-4 mr-2"></i> แก้ไข </a>
                                            <a href="{{ url('addminorBoq')}}" class="btn btn-outline-secondary w-full sm:w-auto mr-2" aria-expanded="false"> <i data-lucide="x" class="w-4 h-4 mr-2"></i> ลบ </a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
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
        <!-- END: JS Assets-->
    </body>
</html>
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/tom-select@2.1.0/dist/css/tom-select.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/tom-select@2.1.0/dist/js/tom-select.complete.min.js"></script>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="{{ asset('dist/css/_app.css') }}" />
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
                        <li class="breadcrumb-item"><a href="{{ url('index') }}">Project</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('allBoq') }}">allBoq</a></li>
                        <li class="breadcrumb-item active" aria-current="page">addBoq</li>
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
                        <div class="top-menu__icon"> <i data-lucide="plus"></i> </div>
                        <div class="top-menu__title"> BOQ <i data-lucide="chevron-down" class="top-menu__sub-icon"></i> </div>
                    </a>
                    {{-- <ul class="">
                        <li>
                            <a href="{{ url('addminorBoq') }}" class="top-menu">
                                <div class="top-menu__icon"> <i data-lucide="plus"></i> </div>
                                <div class="top-menu__title"> เพิ่มงานย่อย </div>
                            </a>
                        </li>
                    </ul> --}}
                </li>
            </ul>
        </nav>
        <!-- END: Top Menu -->
        <!-- BEGIN: Content -->
        <div class="wrapper wrapper--top-nav">
            <div class="wrapper-box">
                <!-- BEGIN: Content -->
                <div class="content">
                    <div class="intro-y flex sm:flex-row items-center mt-3">
                        <h2 class="text-lg font-medium mr-auto">
                            Create BOQ
                        </h2>
                        {{-- <div class="text-center">
                            <!-- BEGIN: Super Large Modal Toggle -->
                            <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#superlarge-modal-size-preview1" class="btn btn-primary mr-1 mb-2">Upload Master</a>
                            <!-- END: Super Large Modal Toggle -->
                        </div> --}}
                        {{-- <div id="superlarge-modal-size-preview1" class="modal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-body p-10 text-center">
                                        <form data-single="true" action="/file-upload" class="dropzone">
                                            <div class="fallback">
                                                <input name="file" type="file" />
                                            </div>
                                            <div class="dz-message" data-dz-message>
                                                <div class="text-lg font-medium">Drop files here or click to upload.</div>
                                                <div class="text-slate-500">
                                                    This is just a demo dropzone. Selected files are <span class="font-medium">not</span> actually uploaded.
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <!-- END: Super Large Modal Content -->

                        <div class="text-center">
                            <!-- BEGIN: Super Large Modal Toggle -->
                            <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#superlarge-modal-size-preview" class="btn btn-primary mr-1 mb-2">เลือก Template</a>
                            <!-- END: Super Large Modal Toggle -->
                        </div>
                        <!-- BEGIN: Super Large Modal Content -->
                        <div id="superlarge-modal-size-preview" class="modal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-body p-10 text-center">
                                        <table class="table">
                                            <thead>
                                              <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">ชื่อโครงการ</th>
                                                <th scope="col">สถามที่</th>
                                                <th scope="col">ขนาด</th>
                                                <th scope="col"></th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <th scope="row">1</th>
                                                <td>Master 1</td>
                                                <td>Central Pinklao</td>
                                                <td>159 ตร.ม</td>
                                                <td class="text-center"><a href="#" class="btn btn-primary">เลือก</a></td>
                                              </tr>
                                              <tr>
                                                <th scope="row">2</th>
                                                <td>Master 2</td>
                                                <td>Central Pinklao</td>
                                                <td>99 ตร.ม</td>
                                                <td class="text-center"><a href="#" class="btn btn-primary">เลือก</a></td>
                                              </tr>
                                              <tr>
                                                <th scope="row">3</th>
                                                <td>Master 3</td>
                                                <td>Central Pinklao</td>
                                                <td>109 ตร.ม</td>
                                                <td class="text-center"><a href="#" class="btn btn-primary">เลือก</a></td>
                                              </tr>
                                            </tbody>
                                          </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Super Large Modal Content -->
                    </div>
                    <!-- BEGIN: Validation Form -->
                        <div class="group_wrapper" id="main1">
                            <form action="" class="validate-form" method="POST">
                                <div id="addmain" class="input-form mt-3">
                                    @foreach ($catagories as $cat)
                                    <input type="text" class="w-full" value="{{$cat->id}}. {{$cat->name}}" class="" style="background-color: rgb(170, 204, 236);" readonly >
                                    <div class="intro-y overflow-auto input-form mt-3 ml-2">
                                        <label for="validation-form-2" class="form-label w-full flex flex-col sm:flex-row">
                                            งานย่อย
                                        </label>
                                        <div id="addsub" class="flex flex-row gap-2 mb-2">
                                            <input id="checkbox-switch-1" class="form-check-input" type="checkbox" name="test">
                                            <select name="" id="" class="form-control w-24">
                                                <option value="unit">G2000A</option>
                                                <option value="unit">G2000A</option>
                                                <option value="square meter">G2000B</option>
                                                <option value="cubic meter">G2000C</option>
                                                <option value="a">G2000D</option>
                                            </select>
                                            <select name="" id="" class="w-full" required>
                                                @foreach ($cat->catagory_sub as $cat_s)
                                                <option value="{{$cat_s->name}}">{{$cat_s->name}}</option>
                                                @endforeach
                                            </select>
                                            <input type="number" class="form-control w-16" placeholder="จำนวน" aria-label="default input inline 2" required>
                                            <select name="" id="" class="form-control w-24">
                                                @foreach ($catagories2 as $cat2)
                                                <option value="{{$cat2->unit_name}}">{{$cat2->unit_name}}</option>
                                                @endforeach
                                            </select>
                                            <input type="text" placeholder="หมายเหตุ" aria-label="default input inline 2" class="w-full">
                                            <input type="button" value="ลบ" class="btn btn-secondary" id="delSubBtn">
                                        </div>
                                        <div id="newRowsub"></div>
                                    </div>
                                    <div class="grid grid-cols-3 mb-3">
                                        <div class="col-span-2">
                                            <input type="button" value="ลบงานย่อยที่เลือก" class="btn btn-secondary" id="checkDel" />
                                        </div>
                                        <div class="flex justify-end gap-2">
                                            <input type="button" value="เพิ่มงานย่อย" class="btn btn-primary" id="btnAddsub" />
                                            <input type="button" value="ลบงานหลัก" class="btn btn-secondary" id="delMain">
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </form>
                        </div>
                    <input type="submit" value="บันทึก" class="btn btn-primary">
                    <a href="{{ url('allBoq') }}" class="btn btn-secondary mt-5">ย้อนกลับ</a>
                    <!-- END: Validation Form -->
                </div>
                <!-- END: Content -->
            </div>
        </div>

        <!-- END: Content -->
        <!-- BEGIN: JS Assets-->
        <script src="dist/js/app.js"></script>
        <script type="text/javascript">

            // remove subwork w/ btn
            jQuery(document).on('click', "#delSubBtn", function(){
                jQuery(this).closest('#addsub').remove();
            });


            // remove mainwork w/ btn
            jQuery(document).on('click', "#delMain", function(){
                jQuery(this).closest('#main1').remove();
            });


            // remove subwork w/ checkbox
            $("#checkDel").on('click', function() {
            var checked = jQuery('input:checkbox:checked').map(function () {
                return this.value;
            }).get();
            jQuery('input:checkbox:checked').parents('#addsub').remove();
            });


            // btn add subwork
            $("#btnAddsub").on('click', function(){
                var html = '';
                html += '<div id="addsub" class="flex flex-row gap-2 mb-2">';
                html += '<input id="checkbox-switch-1" class="form-check-input" type="checkbox" value="" name="test">';
                html += '<select name="field_code[]" id="" class="form-control w-24"><option value="unit">G2000A</option><option value="square meter">G2000B</option>';
                html += '<option value="cubic meter">G2000C</option><option value="a">G2000D</option></select>';
                html += '<select name="field_namesub[]" id="" class="w-full" required>';
                html += '@foreach ($catagories1 as $cat)<option value="{{ $cat->id }}">{{ $cat->name }}</option>@endforeach';
                html += '</select>';
                html += '<input type="number" class="form-control w-16" placeholder="จำนวน" aria-label="default input inline 2" required>';
                html += '<select name="field_unit[]" id="" class="form-control w-24">';
                html += '<option value="unit">หน่วย</option><option value="square meter">ตร.ม</option><option value="cubic meter">ลบ.ม</option><option value="a">งาน</option>';
                html += '</select>';
                html += '<input type="text" placeholder="หมายเหตุ" aria-label="default input inline 2" class="w-full">';
                html += '<input type="button" value="ลบ" class="btn btn-secondary" id="delSubBtn">';
                html += '</div>';

                $('#newRowsub').append(html);
            });

        </script>
        <!-- END: JS Assets-->
    </body>
</html>

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

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="{{ asset('dist/css/app.css') }}" />
        <!-- END: CSS Assets-->
        <style>
            thead input {
        width: 100%;
    }
        </style>
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
        <div class="content">
            <div class="intro-y mt-3">
                <table id="example" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                        <tr>
                            <th class="filterhead">Name</th>
                            <th class="filterhead">Position</th>
                            <th class="filterhead">Office</th>
                            <th class="filterhead">Age</th>
                            <th class="filterhead">Start date</th>
                            <th class="filterhead"></th>
                        </tr>

                    </thead>
                    <tbody>
                        <tr>
                            <td>Brielle Williamson</td>
                            <td>Integration Specialist</td>
                            <td>New York</td>
                            <td>61</td>
                            <td>2012-12-02</td>
                            <td>$372,000</td>
                        </tr>
                        <tr>
                            <td>Brielle Williamson</td>
                            <td>Integration Specialist</td>
                            <td>New York</td>
                            <td>61</td>
                            <td>2012-12-02</td>
                            <td>$372,000</td>
                        </tr>
                        <tr>
                            <td>Herrod Chandler</td>
                            <td>Sales Assistant</td>
                            <td>San Francisco</td>
                            <td>59</td>
                            <td>2012-08-06</td>
                            <td>$137,500</td>
                        </tr>
                        <tr>
                            <td>Rhona Davidson</td>
                            <td>Integration Specialist</td>
                            <td>Tokyo</td>
                            <td>55</td>
                            <td>2010-10-14</td>
                            <td>$327,900</td>
                        </tr>
                        <tr>
                            <td>Colleen Hurst</td>
                            <td>Javascript Developer</td>
                            <td>San Francisco</td>
                            <td>39</td>
                            <td>2009-09-15</td>
                            <td>$205,500</td>
                        </tr>
                    </tbody>
                </table>
        </div>
        <!-- END: Content -->
        <script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <script src="{{ asset('dist/js/app.js')}}"></script>

        <script type="text/javascript">
        jQuery(document).ready(function() {
     var table = jQuery('#example').DataTable({
         "bLengthChange": false,
         "iDisplayLength": 15,
         "ordering": false,
	   });

       jQuery(".filterhead").not(":eq(5)").each( function ( i ) {
        var select = jQuery('<select><option value=""></option></select>')
            .appendTo( jQuery(this).empty() )
            .on( 'change', function () {
               var term = $(this).val();
                table.column( i ).search(term, false, false ).draw();
            } );
 	      table.column( i ).data().unique().sort().each( function ( d, j ) {
            	select.append( '<option value="'+d+'">'+d+'</option>' )
        } );
		} );
} );
        </script>


    </body>
</html>

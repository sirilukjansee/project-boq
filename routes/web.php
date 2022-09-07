<?php

use App\catagory;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BoqController;
use App\Http\Controllers\FormboqController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\DesignerPMController;
use App\Http\Controllers\TaskNameController;
use App\Http\Controllers\TaskTypeController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\VenderController;
// use App\Http\Controllers\ExcelController;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/allBoq', function () {
    return view('boq.allBoq');
});
Route::get('/loginBoq', function () {
    return view('boq.loginBoq');
});
Route::get('/checkBoq', function () {
    return view('boq.checkBoq');
});
// Route::get('/addminorBoq', function () {
//     return view('boq.formBoq.addminorBoq');
// });
Route::get('/adminBoq', function () {
    return view('boq.adminBoq');
});
Route::get('/addUser', function () {
    return view('boq.formBoq.addUser');
});

Route::get('test-select', function () {
    return view('boq.master.test-select');
});

//master
Route::get('/masterBoq', [MasterController::class, 'index'])->name('masterBoq');
Route::get('/sub_masterBoq/{id}', [MasterController::class, 'index_sub'])->name('sub_masterBoq');

//master task_name
Route::get('/masterTaskName', [TaskNameController::class, 'index'])->name('masterTaskName');
Route::post('/masterTaskName/add', [TaskNameController::class, 'store'])->name('add_masterTaskName');
Route::get('/masterTaskName/edit/{id}', [TaskNameController::class, 'edit'])->name('/masterTaskName/edit/{id}');
Route::post('/masterTaskName/update', [TaskNameController::class, 'update']);
// Route::get('/masterTaskName/softdelete/{id}',[TaskNameController::class,'softdelete']);
Route::get('/masterTaskName/changeStatus/{id}',[TaskNameController::class,'changeStatus']);

//master task_type
Route::get('/masterTaskType', [TaskTypeController::class, 'index'])->name('masterTaskType');
Route::post('/masterTaskType/add', [TaskTypeController::class, 'store'])->name('add_masterTaskType');
Route::get('/masterTaskType/edit/{id}', [TaskTypeController::class, 'edit'])->name('/masterTaskType/edit/{id}');
Route::post('/masterTaskType/update', [TaskTypeController::class, 'update']);
// Route::get('/masterTaskType/softdelete/{id}',[TaskTypeController::class,'softdelete']);
Route::get('/masterTaskType/changeStatus/{id}',[TaskTypeController::class,'changeStatus']);

//master design_pm
Route::get('/masterDesignPM', [DesignerPMController::class, 'index'])->name('masterDesignPM');
Route::post('/masterDesignPM/add', [DesignerPMController::class, 'store'])->name('add_masterDesignPM');
Route::get('/masterDesignPM/edit/{id}', [DesignerPMController::class, 'edit'])->name('/masterDesignPM/edit/{id}');
Route::post('/masterDesignPM/update', [DesignerPMController::class, 'update']);
// Route::get('/masterDesignPM/softdelete/{id}',[DesignerPMController::class,'softdelete']);
Route::get('/masterDesignPM/changeStatus/{id}',[DesignerPMController::class,'changeStatus']);

//master brand
Route::get('/masterBrand', [BrandController::class, 'index'])->name('masterBrand');
Route::post('/masterBrand/add', [BrandController::class, 'store'])->name('add_masterBrand');
Route::get('/masterBrand/edit/{id}', [BrandController::class, 'edit'])->name('/masterBrand/edit/{id}');
Route::post('/masterBrand/update', [BrandController::class, 'update']);
// Route::get('/masterBrand/softdelete/{id}',[BrandController::class,'softdelete']);
Route::get('/masterBrand/changeStatus/{id}',[BrandController::class,'changeStatus']);

//master location
Route::get('/masterLocation', [LocationController::class, 'index'])->name('masterLocation');
Route::post('/masterLocation/add', [LocationController::class, 'store'])->name('add_masterLocation');
Route::get('/masterLocation/edit/{id}', [LocationController::class, 'edit'])->name('/masterLocation/edit/{id}');
Route::post('/masterLocation/update', [LocationController::class, 'update']);
// Route::get('/masterLocation/softdelete/{id}',[LocationController::class,'softdelete']);
Route::get('/masterLocation/changeStatus/{id}',[LocationController::class,'changeStatus']);

//master unit
Route::get('/masterUnit', [UnitController::class, 'index'])->name('masterUnit');
Route::post('/masterUnit/add', [UnitController::class, 'store'])->name('add_masterUnit');
Route::get('/masterUnit/edit/{id}', [UnitController::class, 'edit'])->name('/masterUnit/edit/{id}');
Route::post('/masterUnit/update', [UnitController::class, 'update']);
// Route::get('/masterUnit/softdelete/{id}',[UnitController::class,'softdelete']);
Route::get('/masterUnit/changeStatus/{id}',[UnitController::class,'changeStatus']);

//master vender
Route::get('/masterVender', [VenderController::class, 'index'])->name('masterVender');
Route::post('/masterVender/add', [VenderController::class, 'store'])->name('add_masterVender');
Route::get('/masterVender/edit/{id}', [VenderController::class, 'edit'])->name('/masterVender/edit/{id}');
Route::post('/masterVender/update', [VenderController::class, 'update']);
// Route::get('/masterVender/softdelete/{id}',[VenderController::class,'softdelete']);
Route::get('/masterVender/changeStatus/{id}',[VenderController::class,'changeStatus']);


//main
Route::post('/masterBoq/add', [MasterController::class, 'store'])->name('add_masterBoq');
Route::get('/master/edit/{id}', [MasterController::class, 'edit'])->name('/master/edit/{id}');
Route::post('/masterBoq/update', [MasterController::class, 'update']);
// Route::get('/master/softdelete/{id}',[MasterController::class,'softdelete']);
Route::get('/masterBoq/changeStatus/{id}',[MasterController::class, 'changeStatus']);

//sub
Route::post('/sub_masterBoq/add_sub', [MasterController::class, 'store_sub'])->name('add_sub_masterBoq');
Route::get('/sub_masterBoq/edit/{id}', [MasterController::class, 'edit_sub'])->name('/sub_masterBoq/edit/{id}');
Route::post('/sub_masterBoq/update', [MasterController::class, 'update_sub']);
// Route::get('/sub_masterBoq/softdelete/{id}',[MasterController::class,'softdelete_sub']);
Route::get('/sub_masterBoq/changeStatus/{id}',[MasterController::class,'changeStatus_sub']);


//project
Route::get('/index', [ProjectController::class, 'index'])->name('index');
Route::get('/addprojectBoq', [ProjectController::class, 'create'])->name('addprojectBoq');
Route::post('/addprojectBoq/add', [ProjectController::class, 'store'])->name('/addprojectBoq/add');

//BOQ
Route::get('/allBoq/{id}', [BoqController::class, 'index'])->name('allBoq');
Route::post('/addBoq/add', [BoqController::class, 'store'])->name('add_Boq');

Route::get('/createformBoq/{id}', [FormboqController::class, 'index'])->name('createformboq');
Route::get('/addformBoq/select-catagory', [FormboqController::class, 'select_catagory']);

Route::get('projects/export/', [BoqController::class, 'export']);


// Route::get('/addminorBoq', [ExcelController::class, 'index']);
// Route::get('/addminorBoq/export', [ExcelController::class, 'ExportExcel']);



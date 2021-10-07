<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EduController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FamilyController;
use App\Http\Controllers\DataThpController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\JobGradeController;
use App\Http\Controllers\JobTitleController;
use App\Http\Controllers\JobFamilyController;
use App\Http\Controllers\SubStatusController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\CashBenefitController;
use App\Http\Controllers\CityRecuiteController;
use App\Http\Controllers\CompanyHomeController;
use App\Http\Controllers\CompanyHostController;
use App\Http\Controllers\JobFunctionController;
use App\Http\Controllers\BandPositionController;
use App\Http\Controllers\WorkLocationController;
use App\Http\Controllers\ServiceHistoryController;
use App\Http\Controllers\StatusEmployeeController;
use App\Http\Controllers\TrainingHistoryController;
use App\Http\Controllers\OfficeFacilitiesController;
use App\Http\Controllers\AssignmentHistoryController;
use App\Http\Controllers\InsuranceFacilityController;
use App\Http\Controllers\OtherCompetenciesController;
use App\Http\Controllers\AchievementHistoryController;
use App\Http\Controllers\CompetenceCoreValueController;
use App\Http\Controllers\SkillsAndProfessionController;
use App\Http\Controllers\CompetenceFanctionalController;
use App\Http\Controllers\CompetenceLeadershipController;
use App\Http\Controllers\EducationalBackgroundController;
use App\Http\Controllers\export\UserExportController;
use App\Http\Controllers\export\UserImportController;
use App\Http\Controllers\PerformanceAppraisalHistoryController;
use App\Http\Controllers\User\DataKeluargaController;
use App\Http\Controllers\User\MyProfileController;
use App\Http\Controllers\User\RiwayatPendidikanController;

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


Auth::routes();
// Route::get('locked', [LoginController::class, 'locked'])->middleware('auth')->name('login.locked');
// Route::post('locked', [LoginController::class, 'unlock'])->middleware('auth')->name('login.unlock');
Route::get('/', [HomeController::class, 'index'])->middleware('auth')->name('home');
Route::prefix('export')->middleware('permission:export users')->group(function () {
    Route::prefix('employee')->group(function () {
        Route::get('export', [UserExportController::class, 'all_users'])->name('export.employee.all');
        Route::post('import', [UserImportController::class, 'store'])->name('import.employee.all');
    });
});
Route::prefix('users')->group(function () {
    Route::prefix('riwayat_pendidikan')->middleware('auth')->group(function () {
        Route::get('', [RiwayatPendidikanController::class, 'index'])->name('users.pendidikan.create');
        Route::post('', [RiwayatPendidikanController::class, 'store'])->name('users.pendidikan.store');
        Route::get('{educationalBackground}/edit', [RiwayatPendidikanController::class, 'edit'])->name('users.pendidikan.edit');
        Route::put('{educationalBackground}', [RiwayatPendidikanController::class, 'update'])->name('users.pendidikan.update');
        Route::delete('{educationalBackground}', [RiwayatPendidikanController::class, 'destroy'])->name('users.pendidikan.destroy');
    });
    Route::prefix('data_keluarga')->middleware('auth')->group(function () {
        Route::get('', [DataKeluargaController::class, 'index'])->name('users.keluarga.create');
        Route::post('', [DataKeluargaController::class, 'store'])->name('users.keluarga.store');
        Route::get('{family}/edit', [DataKeluargaController::class, 'edit'])->name('users.keluarga.edit');
        Route::put('{family}', [DataKeluargaController::class, 'update'])->name('users.keluarga.update');
        Route::delete('{family}', [DataKeluargaController::class, 'destroy'])->name('users.keluarga.destroy');
    });
    Route::prefix('profile')->middleware('auth')->group(function () {
        Route::get('', [MyProfileController::class, 'index'])->name('profile');
        Route::post('', [MyProfileController::class, 'update'])->name('profile.update');
        Route::post('/change_password', [MyProfileController::class, 'change_password'])->name('profile.change_password');
    });
});

Route::prefix('/')
    ->middleware('auth')
    ->group(function () {

        Route::middleware('role:super-admin')->group(function () {
            Route::resource('roles', RoleController::class);
            Route::resource('permissions', PermissionController::class);
        });

        Route::middleware('permission:HRIS')->group(function () {
            Route::resource('families', FamilyController::class);
            Route::resource('city-recuites', CityRecuiteController::class);
            Route::resource('profiles', ProfileController::class);
            Route::resource('company-hosts', CompanyHostController::class);
            Route::resource('job-titles', JobTitleController::class);
            Route::resource('company-homes', CompanyHomeController::class);
            Route::resource('service-histories', ServiceHistoryController::class);
            Route::resource('band-positions', BandPositionController::class);
            Route::resource('job-grades', JobGradeController::class);
            Route::resource('job-families', JobFamilyController::class);
            Route::resource('job-functions', JobFunctionController::class);
            Route::resource('status-employees', StatusEmployeeController::class);
            Route::resource('units', UnitController::class);
            Route::resource('edus', EduController::class);
            Route::resource('divisions', DivisionController::class);
            Route::resource('sub-statuses', SubStatusController::class);
            Route::resource('work-locations', WorkLocationController::class);
            Route::resource(
                'assignment-histories',
                AssignmentHistoryController::class
            );
            Route::resource(
                'educational-backgrounds',
                EducationalBackgroundController::class
            );
            Route::resource(
                'performance-appraisal-histories',
                PerformanceAppraisalHistoryController::class
            );
            Route::resource(
                'achievement-histories',
                AchievementHistoryController::class
            );
            Route::resource('users', UserController::class);
            Route::resource(
                'competence-fanctionals',
                CompetenceFanctionalController::class
            );
            Route::get('all-other-competencies', [
                OtherCompetenciesController::class,
                'index',
            ])->name('all-other-competencies.index');
            Route::post('all-other-competencies', [
                OtherCompetenciesController::class,
                'store',
            ])->name('all-other-competencies.store');
            Route::get('all-other-competencies/create', [
                OtherCompetenciesController::class,
                'create',
            ])->name('all-other-competencies.create');
            Route::get('all-other-competencies/{otherCompetencies}', [
                OtherCompetenciesController::class,
                'show',
            ])->name('all-other-competencies.show');
            Route::get('all-other-competencies/{otherCompetencies}/edit', [
                OtherCompetenciesController::class,
                'edit',
            ])->name('all-other-competencies.edit');
            Route::put('all-other-competencies/{otherCompetencies}', [
                OtherCompetenciesController::class,
                'update',
            ])->name('all-other-competencies.update');
            Route::delete('all-other-competencies/{otherCompetencies}', [
                OtherCompetenciesController::class,
                'destroy',
            ])->name('all-other-competencies.destroy');

            Route::resource(
                'competence-core-values',
                CompetenceCoreValueController::class
            );
            Route::resource(
                'competence-leaderships',
                CompetenceLeadershipController::class
            );
            Route::resource('training-histories', TrainingHistoryController::class);
            Route::resource(
                'skills-and-professions',
                SkillsAndProfessionController::class
            );
            Route::resource('data-thps', DataThpController::class);

            Route::resource(
                'insurance-facilities',
                InsuranceFacilityController::class
            );
            Route::resource('cash-benefits', CashBenefitController::class);

            Route::get('all-office-facilities', [
                OfficeFacilitiesController::class,
                'index',
            ])->name('all-office-facilities.index');
            Route::post('all-office-facilities', [
                OfficeFacilitiesController::class,
                'store',
            ])->name('all-office-facilities.store');
            Route::get('all-office-facilities/create', [
                OfficeFacilitiesController::class,
                'create',
            ])->name('all-office-facilities.create');
            Route::get('all-office-facilities/{officeFacilities}', [
                OfficeFacilitiesController::class,
                'show',
            ])->name('all-office-facilities.show');
            Route::get('all-office-facilities/{officeFacilities}/edit', [
                OfficeFacilitiesController::class,
                'edit',
            ])->name('all-office-facilities.edit');
            Route::put('all-office-facilities/{officeFacilities}', [
                OfficeFacilitiesController::class,
                'update',
            ])->name('all-office-facilities.update');
            Route::delete('all-office-facilities/{officeFacilities}', [
                OfficeFacilitiesController::class,
                'destroy',
            ])->name('all-office-facilities.destroy');
        });
    });

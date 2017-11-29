<?php

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

Route::get('/','WellcomeController@index');
Route::get('/about-us','WellcomeController@about');
Route::get('/image-gallery','WellcomeController@photoGallery');

Route::get('/contact-us','WellcomeController@contactInfo');
Route::post('/contact','WellcomeController@saveContactInfo');
Route::get('/manage-contact','WellcomeController@manageContactInfo');
Route::get('/delete-contact/{id}','WellcomeController@deleteContactInfo');

Route::get('/project','WellcomeController@projectInfo');
Route::get('/commercial-project','WellcomeController@commercialProjectInfo');
Route::get('/residentail-project','WellcomeController@residentailProjectInfo');

Route::get('/land-owner','WellcomeController@landOwnerInfo');
Route::post('/owner','WellcomeController@savelandOwnerInfo');
Route::get('/manage-land-owner','WellcomeController@managelandOwnerInfo');
Route::get('/delete-land-owner/{id}','WellcomeController@deletelandOwnerInfoo');

Route::get('/details-project/{id}','WellcomeController@details');
//Route::get('/project', 'WellcomeController@search');


//For admin Panel

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/add-project-type','ProjectTypeController@index');
Route::post('/create-project-type','ProjectTypeController@createProjectType');
Route::get('/manage-project-type','ProjectTypeController@manageProjectType');
Route::get('/unpulished-project-type/{id}','ProjectTypeController@statusUnpublished');
Route::get('/pulished-project-type/{id}','ProjectTypeController@statusPublished');
Route::get('/edit-project-type/{id}', 'ProjectTypeController@editProjectType');
Route::post('/update-project-type', 'ProjectTypeController@updateProjectType');
Route::get('/delete-project-type/{id}', 'ProjectTypeController@deleteTypeInfo');

Route::get('/add-project-status','ProjectStatusController@index');
Route::post('/new-project-status','ProjectStatusController@createProjectStatus');
Route::get('/manage-project-status','ProjectStatusController@mamnageProjectStatus');
Route::get('/unpulished-project-status/{id}','ProjectStatusController@statusUnpublished');
Route::get('/pulished-project-status/{id}','ProjectStatusController@statusPublished');
Route::get('/edit-project-status/{id}', 'ProjectStatusController@editProjectStatus');
Route::post('/update-project-status', 'ProjectStatusController@updateProjectStatus');
Route::get('/delete-project-status/{id}', 'ProjectStatusController@deleteStatusInfo');

Route::get('/add-district','DistrictController@index');
Route::post('/new-district','DistrictController@createDistrict');
Route::get('/manage-district','DistrictController@manageDistrict');
Route::get('/unpulished-district/{id}','DistrictController@statusUnpublished');
Route::get('/pulished-district/{id}','DistrictController@statusPublished');
Route::get('/edit-district/{id}', 'DistrictController@editDistrict');
Route::post('/update-district', 'DistrictController@updateDistrict');
Route::get('/delete-district/{id}', 'DistrictController@deleteDistrict');

Route::group(['middleware'=>'ProjectMiddleware'], function () {
Route::get('/add-area','AreaController@index');
Route::post('/new-area','AreaController@saveArea');
Route::get('/manage-area','AreaController@manageArea');
Route::get('/unpulished-area/{id}','AreaController@statusUnpublished');
Route::get('/pulished-area/{id}','AreaController@statusPublished');
Route::get('/edit-area/{id}', 'AreaController@editArea');
Route::post('/update-area', 'AreaController@updateArea');
Route::get('/delete-area/{id}', 'AreaController@deleteArea');
});

Route::get('/add-project','ProjectController@index');
Route::post('/new-project','ProjectController@createProjectInfo');
Route::get('/manage-project','ProjectController@manageProjectInfo');
Route::get('/unpulished-project/{id}','ProjectController@statusUnpublished');
Route::get('/pulished-project/{id}','ProjectController@statusPublished');
Route::get('/edit-project/{id}', 'ProjectController@editProjectInfo');
Route::post('/update-project', 'ProjectController@updateProjectInfo');
Route::get('/view-project/{id}', 'ProjectController@viewProjectById');
Route::get('/delete-project/{id}', 'ProjectController@deleteProjectInfo');

//Route::get('add-project/ajax/{id}','ProjectController@myformAjax');


Route::get('/add-slider','SliderController@index');
Route::post('/new-slider','SliderController@createSliderInfo');
Route::get('/manage-slider','SliderController@manageSliderInfo');
Route::get('/delete-slider/{id}', 'SliderController@deleteSliderInfo');

Route::get('/add-gallery','GalleryController@index');
Route::post('/new-gallery','GalleryController@createGalleryInfo');
Route::get('/manage-gallery','GalleryController@manageGalleryInfo');
Route::get('/delete-gallery/{id}', 'GalleryController@deleteGalleryInfo');




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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/', 'MainController@index')->name('home');
//  Route::get('/add-product', 'MainController@addProduct')->name('addProduct');
// Route::get('/add-vendor', 'MainController@addVendor')->name('addVendor');
//  Route::get('/add-category', 'MainController@addCategory')->name('addCategory');

Route::get('/', 'Auth\LoginController@showLoginForm')->name('admin.login');
Route::post('admin-login', 'Auth\LoginController@login')->name('adminLoginPost');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

 Route::get('/dashboard','Admin\MainController@index')->name('homePage')->middleware('auth');
 Route::get('/add-user','Admin\MainController@addUser')->name('addUser')->middleware('auth');
 Route::post('/add-user','Admin\MainController@addUserPost')->name('addUserPost')->middleware('auth');

Route::get('/vendor-list','Vendor\VendorCotroller@vendorList')->name('vendorList')->middleware('auth');

Route::get('/add-vendor','Vendor\VendorCotroller@addVendor')->name('addVendor')->middleware('auth');

Route::get('/contact-list','Admin\MainController@contactList')->name('contactList')->middleware('auth');

Route::get('/view-product','Product\ProductController@viewProduct')->name('viewProduct')->middleware('auth');

Route::get('/add-product','Product\ProductController@addProduct')->name('addProduct')->middleware('auth');

Route::get('/add-category','Admin\MainController@addCategory')->name('addCategory')->middleware('auth');
Route::get('/view-category','Admin\MainController@viewCategory')->name('viewCategory')->middleware('auth');

//////////////////////////////////////////

Route::get('/projects','Admin\ProjectsController@projectsShow')->name('projects')->middleware('auth');
Route::get('/projects/create','Admin\ProjectsController@projectsCreate')->name('project.create')->middleware('auth');
Route::post('/store/projects','Admin\ProjectsController@storeProjects')->name('store.projects');
Route::get('/projects/{id}/edit', 'Admin\ProjectsController@Editprojects');
Route::post('/projects/{id}/update', 'Admin\ProjectsController@Updateprojects');
Route::get('/projects/{id}/delete', 'Admin\ProjectsController@Deleteprojects');
Route::get('/projects/export', 'Admin\ProjectsController@export');


Route::get('/locations','Admin\SitesController@locationsShow')->name('locations')->middleware('auth');
Route::get('/locations/create','Admin\SitesController@locationsCreate')->name('locations.create')->middleware('auth');
Route::post('/store/locations','Admin\SitesController@storeLocations')->name('store.locations');
Route::get('/locations/{id}/edit', 'Admin\SitesController@Editlocations');
Route::post('/locations/{id}/update', 'Admin\SitesController@Updatelocations');
Route::get('/locations/{id}/delete', 'Admin\SitesController@Deletelocations');
Route::get('/locations/export', 'Admin\SitesController@export');

Route::get('/warehouses','Admin\WarehousesController@warehousesShow')->name('warehouses')->middleware('auth');
Route::get('/warehouses/create','Admin\WarehousesController@warehousesCreate')->name('warehouses.create')->middleware('auth');
Route::post('/store/warehouses','Admin\WarehousesController@storeWarehouses')->name('store.warehouse');

Route::get('/maincategories','Admin\MainCategoriesController@mainCategoriesShow')->name('maincategories')->middleware('auth');
Route::get('/maincategories/create','Admin\MainCategoriesController@maincategoriesCreate')->name('maincategory.create')->middleware('auth');
Route::post('/store/maincategories','Admin\MainCategoriesController@storeMaincategories')->name('store.maincategory');
Route::get('/maincategories/{id}/edit', 'Admin\MainCategoriesController@Editmaincategories');
Route::post('/maincategories/{id}/update', 'Admin\MainCategoriesController@Updatemaincategories');
Route::get('/maincategories/{id}/delete', 'Admin\MainCategoriesController@Deletecategories');
Route::get('/maincategories/export', 'Admin\MainCategoriesController@export');

Route::get('/categories','Admin\MainCategoriesController@categoriesShow')->name('categories')->middleware('auth');
Route::get('/categories/create','Admin\MainCategoriesController@categoriesCreate')->name('subcategory.create')->middleware('auth');

Route::get('/states','Admin\StatesController@statesShow')->name('states')->middleware('auth');
Route::get('/states/create','Admin\StatesController@statesCreate')->name('states.create')->middleware('auth');
Route::post('/store/states','Admin\StatesController@storeStates')->name('store.states');
Route::get('/states/{id}/edit', 'Admin\StatesController@Editstates');
Route::post('/states/{id}/update', 'Admin\StatesController@Updatestates');
Route::get('/states/{id}/delete', 'Admin\StatesController@Deletestates');
Route::get('/states/export', 'Admin\StatesController@export');

Route::get('/brands','Admin\BrandsController@brandsShow')->name('brands')->middleware('auth');
Route::get('/brands/create','Admin\BrandsController@brandsCreate')->name('brands.create')->middleware('auth');
Route::post('/store/brands','Admin\BrandsController@storeBrands')->name('store.brands');
Route::get('/brands/{id}/edit', 'Admin\BrandsController@Editbrands');
Route::post('/brands/{id}/update', 'Admin\BrandsController@Updatebrands');
Route::get('/brands/{id}/delete', 'Admin\BrandsController@Deletebrands');
Route::get('/brands/export', 'Admin\BrandsController@export');


/////////////////////////////////////////

Route::get('/stocklist','Admin\MainController@stockList')->name('stocklist')->middleware('auth');
Route::get('/manage-stock-choice','Admin\MainController@manageStockChoice')->name('manageStockChoice')->middleware('auth');
Route::get('/admin-lte','Admin\MainController@adminLte')->name('adminLte')->middleware('auth');
Route::get('/manage-stock','Admin\MainController@adminLteManageStock')->name('adminLteManageStock')->middleware('auth');
Route::get('/action-item','Admin\MainController@actionItem')->name('actionItem')->middleware('auth');
Route::get('/transfer','Admin\MainController@transferAtoB')->name('transferAtoB')->middleware('auth');
Route::get('/create-user','Admin\MainController@createUser')->name('createUser')->middleware('auth');

Route::get('/toolkit-view','Admin\MainController@toolKitView')->name('toolKitView')->middleware('auth');
Route::get('/tools','Admin\MainController@toolShow')->name('tools')->middleware('auth');
Route::get('/create-new-tool','Admin\MainController@createNewTool')->name('createNewTool')->middleware('auth');
Route::post('/create-tool-post','Admin\MainController@createToolPost')->name('createToolPost')->middleware('auth');
Route::get('/edit-tool/{id}','Admin\MainController@editTool')->name('editTool')->middleware('auth');
Route::get('/edit-tool-post/{id}','Admin\MainController@editToolPost')->name('editToolPost')->middleware('auth');
Route::post('/create-tool-csv','Admin\MainController@createToolCsv')->name('createToolCsv')->middleware('auth');
Route::get('/create-new-toolkit','Admin\MainController@createNewToolkit')->name('createNewToolkit')->middleware('auth');
Route::post('/create-toolkit-post','Admin\MainController@createToolkitPost')->name('createToolkitPost')->middleware('auth');
Route::get('/stock-in','Admin\MainController@stockIn')->name('stockIn')->middleware('auth');
Route::post('/stock-in-post','Admin\MainController@stockInPost')->name('stockInPost')->middleware('auth');
Route::get('/stock-out','Admin\MainController@stockOut')->name('stockOut')->middleware('auth');
Route::get('/transferTool','Admin\MainController@transfer')->name('transfer')->middleware('auth');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

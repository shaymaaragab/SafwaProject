<?php
// ****************** Back End ********************
$locale = \Request::segment( 1 );

//Auth::routes();
// Authentication Routes...
Route::get( 'login', 'Auth\LoginController@showLoginForm' )->name( 'login' );
Route::post( 'login', 'Auth\LoginController@login' );
Route::post( 'logout', 'Auth\LoginController@logout' )->name( 'logout' );

//// Registration Routes...
//Route::get( 'register', 'Auth\RegisterController@showRegistrationForm' )->name( 'register' );
//Route::post( 'register', 'Auth\RegisterController@register' );

// Password Reset Routes...
Route::get( 'password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm' )->name( 'password.request' );
Route::post( 'password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail' )->name( 'password.email' );
Route::get( 'password/reset/{token}', 'Auth\ResetPasswordController@showResetForm' )->name( 'password.reset' );
Route::post( 'password/reset', 'Auth\ResetPasswordController@reset' );
Route::group( [ 'prefix' => 'admin', 'middleware' => [ 'auth' ] ], function () {
	//change password
	Route::get( '/profile', 'backend\\LogoutController@profile' )->name( 'profile' );
	Route::get( '/order', 'backend\\LogoutController@order' )->name( 'order' );

	Route::post( '/changepassword', 'backend\\LogoutController@changepassword' )->name( 'changepassword' );

	// ******************* user management **************
	Route::get( '/signout', 'backend\\LogoutController@signout' )->name( 'signout' );

	// Partners Routes
	Route::get( '/partner', 'backend\\PartnerController@index' )->name( 'PartnerIndex' );
	Route::get( '/partner/add', 'backend\\PartnerController@add' )->name( 'AddPartner' );
	Route::post( '/partner/create', 'backend\\PartnerController@create' )->name( 'CreatePartner' );
	Route::get( '/partner/edit/{id}', 'backend\\PartnerController@edit' )->name( 'EditPartner' );
	Route::put( '/partner/update/{id}', 'backend\\PartnerController@update' )->name( 'UpdatePartner' );
	Route::get( '/partner/delete/{id}', 'backend\\PartnerController@delete' )->name( 'DeletePartner' );


	// User Routes
	Route::get( '/user', 'backend\\UserController@index' )->name( 'UserIndex' );
	Route::get( '/', 'backend\\UserController@index' )->name( 'UserIndex' );
	Route::get( '/user/add', 'backend\\UserController@add' )->name( 'AddUser' );
	Route::post( '/user/create', 'backend\\UserController@create' )->name( 'CreateUser' );
	Route::get( '/user/edit/{id}', 'backend\\UserController@edit' )->name( 'EditUser' );
	Route::get( '/user/restpass/{id}', 'backend\\UserController@restpassword' )->name( 'RestUserPass' );
	Route::put( '/user/update/{id}', 'backend\\UserController@update' )->name( 'UpdateUser' );
	Route::get( '/user/delete/{id}', 'backend\\UserController@delete' )->name( 'DeleteUser' );

	// Manufacturers Routes
	Route::get( '/manufacturer', 'backend\\ManufacturerController@index' )->name( 'ManufacturerIndex' );
	Route::get( '/manufacturer/add', 'backend\\ManufacturerController@add' )->name( 'AddManufacturer' );
	Route::post( '/manufacturer/create', 'backend\\ManufacturerController@create' )->name( 'CreateManufacturer' );
	Route::get( '/manufacturer/edit/{id}', 'backend\\ManufacturerController@edit' )->name( 'EditManufacturer' );
	Route::put( '/manufacturer/update/{id}', 'backend\\ManufacturerController@update' )->name( 'UpdateManufacturer' );
	Route::get( '/manufacturer/delete/{id}', 'backend\\ManufacturerController@delete' )->name( 'DeleteManufacturer' );
	Route::get( '/manufacturer/{id}/details', 'backend\\ManufacturerController@view' )->name( 'ViewManufacturer' );


	// Teams Routes
	Route::get( '/teams', 'backend\\TeamsController@index' )->name( 'TeamsIndex' );
	Route::get( '/teams/add', 'backend\\TeamsController@add' )->name( 'AddTeams' );
	Route::post( '/teams/create', 'backend\\TeamsController@create' )->name( 'CreateTeams' );
	Route::get( '/teams/edit/{id}', 'backend\\TeamsController@edit' )->name( 'EditTeams' );
	Route::put( '/teams/update/{id}', 'backend\\TeamsController@update' )->name( 'UpdateTeams' );
	Route::get( '/teams/delete/{id}', 'backend\\TeamsController@delete' )->name( 'DeleteTeams' );


	// Aboutus Routes
	Route::get( '/aboutus', 'backend\\AboutusController@index' )->name( 'AboutusIndex' );
	Route::get( '/aboutus/add', 'backend\\AboutusController@add' )->name( 'AddAboutus' );
	Route::post( '/aboutus/create', 'backend\\AboutusController@create' )->name( 'CreateAboutus' );
	Route::get( '/aboutus/edit/{id}', 'backend\\AboutusController@edit' )->name( 'EditAboutus' );
	Route::put( '/aboutus/update/{id}', 'backend\\AboutusController@update' )->name( 'UpdateAboutus' );
	Route::get( '/aboutus/delete/{id}', 'backend\\AboutusController@delete' )->name( 'DeleteAboutus' );
	Route::get( '/aboutus/{id}/details', 'backend\\AboutusController@view' )->name( 'ViewAboutus' );

	// Service Routes
	Route::get( '/service', 'backend\\ServiceController@index' )->name( 'ServiceIndex' );
	Route::get( '/service/add', 'backend\\ServiceController@add' )->name( 'AddService' );
	Route::post( '/service/create', 'backend\\ServiceController@create' )->name( 'CreateService' );
	Route::get( '/service/edit/{id}', 'backend\\ServiceController@edit' )->name( 'EditService' );
	Route::put( '/service/update/{id}', 'backend\\ServiceController@update' )->name( 'UpdateService' );
	Route::get( '/service/delete/{id}', 'backend\\ServiceController@delete' )->name( 'DeleteService' );
	Route::get( '/service/{id}/details', 'backend\\ServiceController@view' )->name( 'ViewService' );


	// Contact Routes
	Route::get( '/contact', 'backend\\ContactController@index' )->name( 'ContactIndex' );
	Route::get( '/contact/add', 'backend\\ContactController@add' )->name( 'AddContact' );
	Route::post( '/contact/create', 'backend\\ContactController@create' )->name( 'CreateContact' );
	Route::get( '/contact/edit/{id}', 'backend\\ContactController@edit' )->name( 'EditContact' );
	Route::put( '/contact/update/{id}', 'backend\\ContactController@update' )->name( 'UpdateContact' );
	Route::get( '/contact/delete/{id}', 'backend\\ContactController@delete' )->name( 'DeleteContact' );

	Route::get( '/exportContactus', 'backend\\ContactusController@ExportContactus' )->name( 'ExportContacts' );



	// Accessory Routes
	Route::get( '/product/{pro_id}/accessory/', 'backend\\AccessoryController@index' )->name( 'AccessoryIndex' );
	Route::get( '/product/{pro_id}/addAccessory', 'backend\\AccessoryController@add' )->name( 'AddAccessory' );
	Route::post( '/accessory/create', 'backend\\AccessoryController@create' )->name( 'CreateAccessory' );
	Route::get( '/accessory/{pro_id}/edit', 'backend\\AccessoryController@edit' )->name( 'EditAccessory' );
	Route::put( '/accessory/update/{id}', 'backend\\AccessoryController@update' )->name( 'UpdateAccessory' );
	Route::get( '/accessory/delete/{id}', 'backend\\AccessoryController@delete' )->name( 'DeleteAccessory' );


	// Album Routes
	Route::get( '/album', 'backend\\AlbumController@index' )->name( 'AlbumIndex' );
	Route::get( '/album/add', 'backend\\AlbumController@add' )->name( 'AddAlbum' );
	Route::post( '/album/create', 'backend\\AlbumController@create' )->name( 'CreateAlbum' );
	Route::get( '/album/edit/{id}', 'backend\\AlbumController@edit' )->name( 'EditAlbum' );
	Route::put( '/album/update/{id}', 'backend\\AlbumController@update' )->name( 'UpdateAlbum' );
	Route::get( '/album/delete/{id}', 'backend\\AlbumController@delete' )->name( 'DeleteAlbum' );


	// Blog Routes
	Route::get( '/blog', 'backend\\BlogController@index' )->name( 'BlogIndex' );
	Route::get( '/blog/add', 'backend\\BlogController@add' )->name( 'AddBlog' );
	Route::post( '/blog/create', 'backend\\BlogController@create' )->name( 'CreateBlog' );
	Route::get( '/blog/edit/{id}', 'backend\\BlogController@edit' )->name( 'EditBlog' );
	Route::put( '/blog/update/{id}', 'backend\\BlogController@update' )->name( 'UpdateBlog' );
	Route::get( '/blog/delete/{id}', 'backend\\BlogController@delete' )->name( 'DeleteBlog' );
	Route::get( '/blog/{id}/details', 'backend\\BlogController@view' )->name( 'ViewBlog' );

// Job Routes
	Route::get( '/job', 'backend\\JobController@index' )->name( 'JobIndex' );
	Route::get( '/job/add', 'backend\\JobController@add' )->name( 'AddJob' );
	Route::post( '/job/create', 'backend\\JobController@create' )->name( 'CreateJob' );
	Route::get( '/job/edit/{id}', 'backend\\JobController@edit' )->name( 'EditJob' );
	Route::put( '/job/update/{id}', 'backend\\JobController@update' )->name( 'UpdateJob' );
	Route::get( '/job/delete/{id}', 'backend\\JobController@delete' )->name( 'DeleteJob' );
	Route::get( '/job/{id}/details', 'backend\\JobController@view' )->name( 'ViewJob' );


	// Job_category Routes
	Route::get( '/job_category', 'backend\\JobCategoryController@index' )->name( 'Job_categoryIndex' );
	Route::get( '/job_category/add', 'backend\\JobCategoryController@add' )->name( 'AddJobCategory' );
	Route::post( '/job_category/create', 'backend\\JobCategoryController@create' )->name( 'CreateJobCategory' );
	Route::get( '/jobcategory/edit/{id}', 'backend\\JobCategoryController@edit' )->name( 'EditJobCategory' );
	Route::put( '/jobcategory/update/{id}', 'backend\\JobCategoryController@update' )->name( 'UpdateJobCategory' );
	Route::get( '/jobcategory/delete/{id}', 'backend\\JobCategoryController@delete' )->name( 'DeleteJobCategory' );

	// Applicant Routes
	Route::get( '/applicant', 'backend\\ApplicantController@index' )->name( 'ApplicantIndex' );
	Route::get( '/applicant/delete/{id}', 'backend\\ApplicantController@delete' )->name( 'ApplicantDelete' );

	// Media Routes
	Route::get( '/media', 'backend\\MediaController@index' )->name( 'MediaIndex' );
	Route::get( '/media/add', 'backend\\MediaController@add' )->name( 'AddMedia' );
	Route::post( '/media/create', 'backend\\MediaController@create' )->name( 'CreateMedia' );
	Route::get( '/media/edit/{id}', 'backend\\MediaController@edit' )->name( 'EditMedia' );
	Route::put( '/media/update/{id}', 'backend\\MediaController@update' )->name( 'UpdateMedia' );
	Route::get( '/media/delete/{id}', 'backend\\MediaController@delete' )->name( 'DeleteMedia' );

	// Slider Routes
	Route::get( '/slider', 'backend\\SliderController@index' )->name( 'SliderIndex' );
	Route::get( '/slider/add', 'backend\\SliderController@add' )->name( 'AddSlider' );
	Route::post( '/slider/create', 'backend\\SliderController@create' )->name( 'CreateSlider' );
	Route::get( '/slider/edit/{id}', 'backend\\SliderController@edit' )->name( 'EditSlider' );
	Route::put( '/slider/update/{id}', 'backend\\SliderController@update' )->name( 'UpdateSlider' );
	Route::get( '/slider/delete/{id}', 'backend\\SliderController@delete' )->name( 'DeleteSlider' );


	// Product Routes
	Route::get( '/product', 'backend\\ProductController@index' )->name( 'ProductIndex' );
	Route::get( '/product/add', 'backend\\ProductController@add' )->name( 'AddProduct' );
	Route::post( '/product/create', 'backend\\ProductController@create' )->name( 'CreateProduct' );
	Route::get( '/product/edit/{id}', 'backend\\ProductController@edit' )->name( 'EditProduct' );
	Route::put( '/product/update/{id}', 'backend\\ProductController@update' )->name( 'UpdateProduct' );
	Route::get( '/product/delete/{id}', 'backend\\ProductController@delete' )->name( 'DeleteProduct' );
	Route::get( '/product/{id}/details', 'backend\\ProductController@view' )->name( 'ViewProduct' );

	Route::get( 'images/products/{id}', 'backend\\ProductController@images' )->name( 'images.products' );
	Route::get( 'imagesview/products/{id}', 'backend\\ProductController@images_view' )->name( 'images.view' );


	Route::post( 'upload', [ 'as' => 'upload-post', 'uses' => 'backend\\ImageController@postUpload' ] );
	Route::get( 'images/productsdelete/{id}', [
		'as'   => 'uploadremove',
		'uses' => 'backend\\ImageController@deleteUpload'
	] );


	// Productimageimage Routes
	Route::get( '/productimage', 'backend\\ProductimageController@index' )->name( 'ProductimageIndex' );
	Route::get( '/productimage/add', 'backend\\ProductimageController@add' )->name( 'AddProductimage' );
	Route::post( '/productimage/create', 'backend\\ProductimageController@create' )->name( 'CreateProductimage' );
	Route::get( '/productimage/edit/{id}', 'backend\\ProductimageController@edit' )->name( 'EditProductimage' );
	Route::put( '/productimage/update/{id}', 'backend\\ProductimageController@update' )->name( 'UpdateProductimage' );
	Route::get( '/productimage/delete/{id}', 'backend\\ProductimageController@delete' )->name( 'DeleteProductimage' );

	// product category

	Route::get( '/productcategory/{id}', 'backend\\ProductcategoryController@index' )->name( 'ProductcategoryIndex' );

	Route::post( '/getOrderLimit', 'backend\\ProductcategoryController@getOrderLimit' )->name( 'getOrderLimit' );


	Route::get( '/productcategory/{parentId}/add', 'backend\\ProductcategoryController@add' )->name( 'AddProductcategory' );

	Route::post( '/productcategory/create', 'backend\\ProductcategoryController@create' )->name( 'CreateProductcategory' );

	Route::get( '/productcategory/edit/{id}', 'backend\\ProductcategoryController@edit' )->name( 'EditProductcategory' );
	Route::put( '/productcategory/update/{id}', 'backend\\ProductcategoryController@update' )->name( 'UpdateProductcategory' );
	Route::get( '/productcategory/delete/{id}', 'backend\\ProductcategoryController@delete' )->name( 'DeleteProductcategory' );


	// Currency Routes
	Route::get( '/currency', 'backend\\CurrencyController@index' )->name( 'CurrencyIndex' );
	Route::get( '/currency/add', 'backend\\CurrencyController@add' )->name( 'AddCurrency' );
	Route::post( '/currency/create', 'backend\\CurrencyController@create' )->name( 'CreateCurrency' );
	Route::get( '/currency/edit/{id}', 'backend\\CurrencyController@edit' )->name( 'EditCurrency' );
	Route::put( '/currency/update/{id}', 'backend\\CurrencyController@update' )->name( 'UpdateCurrency' );
	Route::get( '/currency/delete/{id}', 'backend\\CurrencyController@delete' )->name( 'DeleteCurrency' );

	// Productdocument Routes

	Route::get( '/product/{pro_id}/documents', 'backend\\ProductdocController@index' )->name( 'ProductdocIndex' );

	Route::get( '/product/{pro_id}/documents/add', 'backend\\ProductdocController@add' )->name( 'AddProductdoc' );

	Route::post( '/product/{pro_id}/documents/create', 'backend\\ProductdocController@create' )->name( 'CreateProductdoc' );

	Route::get( '/product/documents/{id}/edit', 'backend\\ProductdocController@edit' )->name( 'EditProductdoc' );

	Route::put( '/product/documents/{id}/update', 'backend\\ProductdocController@update' )->name( 'UpdateProductdoc' );

	Route::get( '/product/documents/{id}/delete', 'backend\\ProductdocController@delete' )->name( 'DeleteProductdoc' );


	// Cityument Routes
	Route::get( '/city', 'backend\\CityController@index' )->name( 'CityIndex' );
	Route::get( '/city/add', 'backend\\CityController@add' )->name( 'AddCity' );
	Route::post( '/city/create', 'backend\\CityController@create' )->name( 'CreateCity' );
	Route::get( '/city/edit/{id}', 'backend\\CityController@edit' )->name( 'EditCity' );
	Route::put( '/city/update/{id}', 'backend\\CityController@update' )->name( 'UpdateCity' );
	Route::get( '/city/delete/{id}', 'backend\\CityController@delete' )->name( 'DeleteCity' );

	// Event Routes
	Route::get( '/event', 'backend\\EventController@index' )->name( 'EventIndexes' );
	Route::get( '/event/add', 'backend\\EventController@add' )->name( 'AddEvent' );
	Route::post( '/event/create', 'backend\\EventController@create' )->name( 'CreateEvent' );
	Route::get( '/event/edit/{id}', 'backend\\EventController@edit' )->name( 'EditEvent' );
	Route::put( '/event/update/{id}', 'backend\\EventController@update' )->name( 'UpdateEvent' );
	Route::get( '/event/delete/{id}', 'backend\\EventController@delete' )->name( 'DeleteEvent' );
	Route::get( '/event/{id}/details', 'backend\\EventController@view' )->name( 'ViewEvent' );


// Eventcategory Routes
	Route::get( '/eventcategory', 'backend\\EventcategoryController@index' )->name( 'EventcategoryIndex' );
	Route::get( '/eventcategory/add', 'backend\\EventcategoryController@add' )->name( 'AddEventCat' );
	Route::post( '/eventcategory/create', 'backend\\EventcategoryController@create' )->name( 'CreateEventCat' );
	Route::get( '/eventcategory/edit/{id}', 'backend\\EventcategoryController@edit' )->name( 'EditEventCat' );
	Route::put( '/eventcategory/update/{id}', 'backend\\EventcategoryController@update' )->name( 'UpdateEventCat' );
	Route::get( '/eventcategory/delete/{id}', 'backend\\EventcategoryController@delete' )->name( 'DeleteEventCat' );

// Branch Routes
	Route::get( '/branch', 'backend\\BranchController@index' )->name( 'BranchIndex' );
	Route::get( '/branch/add', 'backend\\BranchController@add' )->name( 'AddBranch' );
	Route::post( '/branch/create', 'backend\\BranchController@create' )->name( 'CreateBranch' );
	Route::get( '/branch/edit/{id}', 'backend\\BranchController@edit' )->name( 'EditBranch' );
	Route::put( '/branch/update/{id}', 'backend\\BranchController@update' )->name( 'UpdateBranch' );
	Route::get( '/branch/delete/{id}', 'backend\\BranchController@delete' )->name( 'DeleteBranch' );

	// contactus  Routes
	Route::get( '/contactusadmin', 'backend\\ContactusController@index' )->name( 'contactusadmin' );
	Route::get( '/contactus/view/{id}', 'backend\\ContactusController@view' )->name( 'contactus.view' );
	Route::get( '/contactus/delete/{id}', 'backend\\ContactusController@delete' )->name( 'contactus.delete' );

	//ajax request
	Route::post( '/job/ajax', 'backend\\JobController@toggle' )->name( 'job.ajax' );


} );


// ****************** Front End ********************


// ****************** Front End ********************
Route::get( '/', function () {
	return redirect()->route( 'IndexEn' );
} );
Route::get( '/en', function () {
	return view( 'frontend.en.index' );
} )->name( 'IndexEn' );
Route::get( '/ar', function () {
	return view( 'frontend.ar.index' );
} )->name( 'IndexAr' );


Route::group( [ 'prefix' => $locale ], function () {
// home page English
	Route::get( '/home', 'frontend\\HomeController@index' )->name( 'Home' );
// career pages
	Route::get( '/career', 'frontend\\CareerController@index' )->name( 'Career' );
	Route::post( '/career/create', 'frontend\\CareerController@store' )->name( 'CreateCareer' );
	Route::get( '/career/{id}', 'frontend\\CareerController@view' )->name( 'Careerinner' );
//blog
	Route::get( '/blogs', 'frontend\\BlogController@index' )->name( 'Blog' );
	Route::get( '/blogs/{id}', 'frontend\\BlogController@view' )->name( 'Bloginner' );
// contact us page
	Route::get( '/contactus', 'frontend\\ContactusController@index' )->name( 'Contactus' );
// manufacturer
	Route::get( '/manufacturerf', 'frontend\\ManufacturerController@index' )->name( 'Manufacturer' );
	Route::get( '/manufacturer/{manf_id}/{cat_id}', 'frontend\\ManufacturerController@showManft' )->name( 'Manufacturerinner' );


// healthcare
	Route::get( '/healthcare', 'frontend\\HealthcareController@index' )->name( 'Healthcare' );
	Route::get( '/search', function(){
       $locale = \Request::segment( 1 );
		return View('frontend.'.$locale.'.search');
	});

    //autoclinic
	Route::get( '/autoclinic', 'frontend\\AutoclinicController@index' )->name( 'Autoclinic' );
	Route::get( '/autoclinicProducts/{cat_id}', 'frontend\\AutoclinicProductsController@index' )->name( 'AutoclinicProduct' );
    Route::get( '/autoclinicProductinner/{pro_id}', 'frontend\\AutoclinicProductsController@productinner' )->name( 'AutoclinicProductinner' );



// products
	Route::get( '/product/{cat_id}', 'frontend\\ProductController@index' )->name( 'Product' );

	Route::get( '/productinner/{pro_id}', 'frontend\\ProductController@productinner' )->name( 'productinner' );
	Route::get( '/tree', 'frontend\\HealthcareController@tree' )->name( 'tree' );
	Route::post( '/contactus/add', 'frontend\\HealthcareController@addcontactus' )->name( 'contactus.add' );

	Route::get( '/aboutusf', 'frontend\\AboutusController@mobilityAboutus' )->name( 'Aboutus' );

	Route::post( '/home/sendContactus', 'frontend\\AboutusController@homemobilityContactus' )->name( 'HomeMobilityContactus' );

	Route::post( '/search', 'frontend\\SearchController@index' )->name( 'Search' );

	Route::get( '/eventf', 'frontend\\EventController@index' )->name( 'Event' );
	Route::get( '/Eventf/{id}', 'frontend\\EventController@innerevent' )->name( 'Eventinner' );
	Route::get( '/mediaf', 'frontend\\MediaController@index' )->name( 'Media' );
	Route::get( '/mediaGallery/{id}', 'frontend\\MediaGalleryController@index' )->name( 'MediaGallery' );
} );
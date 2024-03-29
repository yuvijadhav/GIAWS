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

// if (env('APP_ENV') === 'production') {
//     URL::forceSchema('https');
// }

Route::get('pay', function () {
    return view('payment.pay');
});


Route::post('payAction', function () {
    return view('payment.pay-action');
});

Route::get('payReturn', "ReportController@getAxisPayReturn");
Route::get('migratereport/{offset}', 'RndController@insertDataFunction');
Route::post('pa1', function () {
    return view('report.PHP_VPC_3Party_Order_DO');
});
Route::get('/', 'PublicController@getHome');
Route::post('postPayment', 'ReportController@postPayment');
Route::post('paymentGateway', 'ReportController@paymentGateway');
Route::get('/checkout', 'PublicController@checkout');
Route::get('/checkoutebs', 'PublicController@checkoutEBS');
Route::get('/ebs1', 'PublicController@getebs');
Route::post('/ebs2', 'PublicController@postebs');
Route::get('/home', 'PublicController@getHome');
Route::get('/about-us', 'PublicController@getAboutus');
Route::get('/help.htm', 'PublicController@getFaq');
Route::get('/contact', 'PublicController@getContact');
Route::post('/contact', 'PublicController@postContact');
Route::post('quote', 'PublicController@postQuote');
Route::get('/about-us', 'PublicController@getabout');
Route::get('/faq', 'PublicController@getFaq');
//Route::get('thank-you', function () {
//    return 'Hello World';
//});
Route::get('clearseesion', 'PublicController@clearSession');
//Route::get('thank-you', 'PublicController@getThankyou');
Route::get('thank-you', 'ReportController@getThankyou');
Route::get('/terms-and-condition', 'PublicController@getTermsAndCondition');
Route::get('/return-policy', 'PublicController@getReturnPolicy');
Route::get('/privacy-policy', 'PublicController@getPrivacyPolicy');
Route::get('/disclaimer', 'PublicController@getDisclaimer');
Route::get('/how-to-order', 'PublicController@getHowtoOrder');
Route::get('/delivery', 'PublicController@getDelivery');
Route::get('/sitemap', 'PublicController@getSitemap');
Route::get('formats-and-delivery', 'PublicController@getFormatnDelivery');
Route::get('/services', 'PublicController@getServices');
Route::post('/newsletter', 'PublicController@postNewsletter');
Route::post('reports', 'PublicController@postReports');
Route::get('/categories/{url}', 'PublicController@getCategory');
Route::get('header', 'PublicController@getHeader');
Route::get('payment-methods', 'PublicController@getPaymentMethods');
//Public Article
Route::get('/press-release', 'PublicController@getArticles');
Route::get('/articleData', 'PublicController@getArticlesData');

//Public News
Route::get('/blogs', 'PublicController@getNews');
Route::get('/newsData', 'PublicController@getNewsData');

//Public Reports
Route::get('categoryReports', 'PublicController@getCategoryReports');
Route::get('/reports', 'PublicController@getReports');
Route::get('/reportsData', 'PublicController@getReportsData');

//Euquiry Report
Route::post('/addEnquiryReport', 'PublicController@postAddEnquiryReport');
Route::post('addEnquiry', 'PublicController@postAddEnquiry');
Route::get('relatedReports', 'PublicController@getRelatedReports');

//Details Page
Route::get('blog/{url}', 'PublicController@getNewsDetails');
Route::get('press-release/{url}', 'PublicController@getArticleDetails');
//Route::get('categoryDetails','PublicController@getCategoryDetails');
//Public Categories
Route::get('/categories', 'PublicController@getCategories');
Route::get('/categoryData', 'PublicController@getCategoryData');
Route::get('categoryMenu', 'PublicController@getCategorMenu');

//sidebar
Route::get('publicSidebar', 'PublicController@publicSidebar');


Route::get('/paymentSuccess', 'PublicController@getPaymentSuccess');
Route::post('/paymentSuccess', 'PublicController@postPaymentSuccess');
Route::get('/cancelPayment', 'PublicController@getCancelPayment');
Route::post('/cancelPayment', 'PublicController@postCancelPayment');

Route::get('sitemap_reports1', 'PublicController@siteMapReport');
Route::get('sitemap_press_release1', 'PublicController@siteMapPressRelease');
Route::get('sitemap_blogs1', 'PublicController@siteMapBlog');


Auth::routes();
Route::group(['middleware' => ['web']], function() {
//    Route::get('thank-you', 'ReportController@getThankyou');
    //Sub Category used as category
    Route::get('addCategory', ['middleware' => 'auth', 'uses' => 'SubCategoryController@getAddSubCategory']);
    Route::post('addCategory', ['middleware' => 'auth', 'uses' => 'SubCategoryController@postAddSubCategoty']);
    Route::get('editCategory', ['middleware' => 'auth', 'uses' => 'SubCategoryController@getEditSubCategory']);
    Route::post('editCategory', ['middleware' => 'auth', 'uses' => 'SubCategoryController@postEditSubCategory']);
    Route::get('allCategories', ['middleware' => 'auth', 'uses' => 'SubCategoryController@getAllSubCategories']);
    Route::get('deleteCategory', ['middleware' => 'auth', 'uses' => 'SubCategoryController@getDeleteSubCategories']);

    //ajax call
    Route::get('getCategory', ['middleware' => 'auth', 'uses' => 'CategoryController@getCategory']);
    Route::get('getSubCategory', ['middleware' => 'auth', 'uses' => 'SubCategoryController@getSubCategory']);

    Route::get('getNews', ['middleware' => 'auth', 'uses' => 'NewsController@getNews']);

    //publisher
    Route::get('addPublisher', ['middleware' => 'auth', 'uses' => 'PublisherController@getAddPublisher']);
    Route::post('addPublisher', ['middleware' => 'auth', 'uses' => 'PublisherController@postAddPublisher']);
    Route::get('allPublishers', ['middleware' => 'auth', 'uses' => 'PublisherController@getAllPublishers']);
    Route::get('allPublishersData', ['middleware' => 'auth', 'uses' => 'PublisherController@getAllPublishersData']);
    Route::get('editPublisher', ['middleware' => 'auth', 'uses' => 'PublisherController@getEditPublisher']);
    Route::post('editPublisher', ['middleware' => 'auth', 'uses' => 'PublisherController@postEditPublisher']);
    Route::get('deletePublisher', ['middleware' => 'auth', 'uses' => 'PublisherController@getDeletePublisher']);

    //News use as a Blog 
    Route::get('addBlog', ['middleware' => 'auth', 'uses' => 'NewsController@getAddNews']);
    Route::post('addBlog', ['middleware' => 'auth', 'uses' => 'NewsController@postAddNews']);
    Route::get('allBlogs', ['middleware' => 'auth', 'uses' => 'NewsController@getAllNews']);
    Route::get('editBlog', ['middleware' => 'auth', 'uses' => 'NewsController@getEditNews']);
    Route::post('editBlog', ['middleware' => 'auth', 'uses' => 'NewsController@postEditNews']);
    Route::get('deleteBlog', ['middleware' => 'auth', 'uses' => 'NewsController@getDeleteNews']);

    //Articles used as a Press Release
    Route::get('addPressRelease', ['middleware' => 'auth', 'uses' => 'ArticlesController@getAddArticle']);
    Route::post('addPressRelease', ['middleware' => 'auth', 'uses' => 'ArticlesController@postAddArticle']);
    Route::get('allPressReleases', ['middleware' => 'auth', 'uses' => 'ArticlesController@getAllArticles']);
    Route::get('editPressRelease', ['middleware' => 'auth', 'uses' => 'ArticlesController@getEditArticle']);
    Route::post('editPressRelease', ['middleware' => 'auth', 'uses' => 'ArticlesController@postEditArticle']);
    Route::get('articlesData', ['middleware' => 'auth', 'uses' => 'ArticlesController@getArticlesData']);
    Route::get('deletePressRelease', ['middleware' => 'auth', 'uses' => 'ArticlesController@getDeleteArticle']);

    //Reports
    Route::get('addReport', ['middleware' => 'auth', 'uses' => 'ReportController@getAddReport']);
    Route::post('addReport', ['middleware' => 'auth', 'uses' => 'ReportController@postAddReport']);
    Route::get('allReports', ['middleware' => 'auth', 'uses' => 'ReportController@getAllReports']);
    Route::get('allReportsData', ['middleware' => 'auth', 'uses' => 'ReportController@getAllReportData']);
    Route::post('allReports', ['middleware' => 'auth', 'uses' => 'ReportController@getAllReports']);
    Route::get('editReport', ['middleware' => 'auth', 'uses' => 'ReportController@getEditReport']);
    Route::post('editReport', ['middleware' => 'auth', 'uses' => 'ReportController@postEditReport']);
    Route::get('deleteReport', ['middleware' => 'auth', 'uses' => 'ReportController@getDeleteReport']);

    //File
    Route::get('uploadFile', ['middleware' => 'auth', 'uses' => 'ReportController@getUploadFile']);
    Route::post('uploadFile', ['middleware' => 'auth', 'uses' => 'ReportController@postUploadFile']);

    //Payment
    Route::get('success', ['middleware' => 'auth', 'uses' => 'ReportController@getSuccess']);
    Route::get('failure', ['middleware' => 'auth', 'uses' => 'ReportController@getFailure']);

    //Region
    Route::get('addRegion', ['middleware' => 'auth', 'uses' => 'RegionController@getAddRegion']);
    Route::post('addRegion', ['middleware' => 'auth', 'uses' => 'RegionController@postAddRegion']);
    Route::get('allRegions', ['middleware' => 'auth', 'uses' => 'RegionController@getAllRegions']);
    Route::get('allRegionsData', ['middleware' => 'auth', 'uses' => 'RegionController@getAllRegionsData']);
    Route::get('editRegion', ['middleware' => 'auth', 'uses' => 'RegionController@getEditRegion']);
    Route::post('editRegion', ['middleware' => 'auth', 'uses' => 'RegionController@postEditRegion']);
    Route::get('deleteRegion', ['middleware' => 'auth', 'uses' => 'RegionController@getDeleteRegion']);
});
Route::get('/{url}', 'PublicController@getReportDetails');


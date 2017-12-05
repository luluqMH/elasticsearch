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

Route::get('/', function () {
    return redirect()->to('/api-es/index.html');
});

/**
 * @api {get} /mctgr/{keyword} List Mctgr
 *
 * @apiGroup Search Get
 * @apiVersion 0.0.1
 *
 * @apiDescription {keyword} type string, not empty parameter {keywords} to search document
 * @apiSampleRequest /mctgr/samsung?terms={"lctgr_no":["359"]}
 */
Route::get('/mctgr/{keyword}', 'ApiGetController@Mctgr');

/**
 * @api {get} /sctgr/{keywords} List Sctgr
 *
 * @apiGroup Search Get
 * @apiVersion 0.0.1
 *
 * @apiDescription {keywords} type string, not empty parameter {keywords} to search document
 * @apiSampleRequest /sctgr/samsung?terms={"mctgr_no":["363","5047"]}
 */
Route::get('/sctgr/{keyword}', 'ApiGetController@Sctgr');

/**
 * @api {get} /lctgr/{keywords} List Lctgr
 *
 * @apiGroup Search Get
 * @apiVersion 0.0.1
 *
 * @apiDescription {keywords} type string, not empty parameter {keywords} to search document
 * @apiSampleRequest /lctgr/iphone
 */
Route::get('/lctgr/{keywords}', 'ApiGetController@Lctgr');


/**
 * @api {get} /miss/{keywords} Miss Spell
 *
 * @apiGroup Search Get
 * @apiVersion 0.0.1
 *
 * @apiDescription {keywords} type string, not empty parameter {keywords} to search document
 * @apiSampleRequest /miss/samsun
 */
Route::get('/miss/{keywords}', 'ApiGetController@missSpell');

/**
 * @api {get} /brand/{keywords} List Brand
 *
 * @apiGroup Search Get
 * @apiVersion 0.0.1
 *
 * @apiDescription {keywords} type string, not empty parameter {keywords} to search document
 * @apiSampleRequest /brand/samsung
 */
Route::get('/brand/{keywords}', 'ApiGetController@ListBrand');

/**
 * @api {get} /search/{keywords} Search
 *
 * @apiGroup Search Get
 * @apiVersion 0.0.1
 *
 * @apiDescription {keywords} type string, not empty parameter {keywords} to search document
 * @apiSampleRequest /search/samsung?sort={"pop_score":{"order":"desc"},"sel_prc":{"order":"asc"}}&&terms={"lctgr_nm.keyword":["Mobile Phone / Smartwatch","Handphone Android"],"mctgr_nm.keyword":["Mobile Phone","Mobile Phone / Smartwatch"],"sctgr_nm.keyword":["Handphone Android"]}&&range={"sel_prc":{"gte":"500000","lte":"1000000"},"buy_satisfy":{"gte":"0","lte":"100"}}&&filter={"free_shipping_yn.keyword":["Y"],"app_cdt_free_yn.keyword":["Y"]}&&page=0&&limit=10&&should={"brand_nm.keyword":["xiaomi","asus"],"brand_cd.keyword":["20007"]}
 */
Route::get('/search/{keywords}', 'ApiGetController@search');

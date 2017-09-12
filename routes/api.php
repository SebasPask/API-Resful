<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});


Route::resource('buyers','Buyer\BuyerController',['only'=>['index','show']]);
/*
 * Buyers
 */

Route::resource('categories','Category\CategoryController',['except'=>['create','edit']]);
/*
 * Category
 */

Route::resource('products','Product\ProductController',['only'=>['index','show']]);
/*
 * Products
 */

Route::resource('transaction','Transaction\TransactionController',['only'=>['index','show']]);
/*
 * Transactions
 */

Route::resource('sellers','Seller\SellerController',['only'=>['index','show']]);
/*
 * Sellers
 */

Route::resource('users','Users\UsersController',['except'=>['create','edit']]);
/*
 * Users
 */

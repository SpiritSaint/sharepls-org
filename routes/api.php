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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResources([
    'categories' => 'CategoryController',
    'comments' => 'CommentController',
    'images' => 'ImageController',
    'locations' => 'LocationController',
    'pages' => 'PageController',
    'petitions' => 'PetitionController',
    'ratings' => 'RatingController',
    'reports' => 'ReportController',
    'resources' => 'ResourceController',
    'roles' => 'RoleController',
    'usages' => 'UsageController',
    'verdicts' => 'VerdictsController',
]);

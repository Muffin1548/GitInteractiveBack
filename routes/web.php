<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
//    $user = \App\Models\User::where("_id", "62762a79c5b1677aaf02207")->get()->first();
//    \App\Models\Branch::create(["author" => $user, "commits" => ["zxc", "vbn"]]);
//    $branch = \App\Models\Branch::where("author", $user)->get();
    $branch = \App\Models\Branch::where("_id", "62763088c5b1677aaf022086")->get()->first();
    $user = \App\Models\User::where("branch._id", $branch->_id)->get()->first();
    return new \Illuminate\Http\JsonResponse($user);
});

Route::get("/get_branches", function (Request $request) {
    $user = \App\Models\User::where("_id", $request->query("user"))->get()->first();
    $branches = \App\Models\Branch::where("author", $user)->get();
    return new \Illuminate\Http\JsonResponse($branches);
});

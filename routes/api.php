<?php

use App\Http\Controllers\AgentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post("/addNo", [AgentController::class,"addNoTime"]); // add with no timeStamp
Route::post("/addDefault", [AgentController::class,"addDefault"]); // add with default values

Route::get("/all", [AgentController::class,"all"]); // get all
Route::get("/view/{id}", [AgentController::class,"find"]); // get specific with id
Route::post("/first", [AgentController::class,"getFirst"]); // get first free
Route::get("/load", [AgentController::class,"load"]); // load huge datsets

Route::post("/limit", [AgentController::class,"limit"]); // load huge datsets
Route::post("/firstOr", [AgentController::class,"firstOr"]);

Route::post("/destroy",[AgentController::class,"destroy"]);
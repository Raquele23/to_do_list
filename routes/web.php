<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoListController;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/todo-lists", [TodoListController::class, "index"])->name("index");
Route::get("/todo-lists/create", [TodoListController::class, "create"])->name("create");
Route::post("/todo-lists", [TodoListController::class, "store"])->name("store");
Route::get("/todo-lists/{id}/edit", [TodoListController::class, "edit"])->name("edit");
Route::put("/todo-lists/{id}", [TodoListController::class, "update"])->name("update");
Route::delete("/todo-lists/{id}", [TodoListController::class, "destroy"])->name("destroy");

// Route::resource("/todo-lists",TodoListController::class);
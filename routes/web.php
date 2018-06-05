<?php



//Route::get("model","ModelController@start")->name('model');

Route::get("/model","ModelController@views")->name('model');

Route::get("/edit/{id}","ModelController@edit")->name('edit');

Route::post("/update","ModelController@update")->name('update');

Route::get("/delete/{id}","ModelController@delete")->name('delete');
//Route::get("/add","ModelController@add")->name('add');

Route::post("/addpost","ModelController@addpost")->name('addpost');


//Route::get("/home","")->name('home');


Route::get('/add', function () {
    return view('add');
});
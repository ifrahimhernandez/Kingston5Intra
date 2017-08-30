<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/




Route::group(['middleware' => 'guest'], function () {
//not autenticated user have access to these links

    Route::get('/',[ 
    
    'uses' => 'UserController@index',
    'as'   => 'login',
    
    ]);
    
    Route::post('/login',[ 
        
        'uses' => 'UserController@login',
        'as'   => 'check_login',
        
    ]);
    
});
 
Route::group(['middleware' => 'auth'], function () {
    //not autenticated user have access to these links

    Route::get('/logout',[ 
        
        'uses' => 'UserController@logout',
        'as'   => 'logout',
        
    ]);
                     
    Route::get('/crew_management',[ 
    
        'uses' => 'CrewController@index',
        'as'   => 'crew_management',
    
    ]);
    
     Route::post('/add_crew',[ 
    
        'uses' => 'CrewController@add',
        'as'   => 'crew_add',
    
    ]);
    
     Route::post('/update_crew',[ 
    
        'uses' => 'CrewController@update',
        'as'   => 'crew_update',
    
    ]);
     Route::post('/select_data',[ 
    
        'uses' => 'CrewController@selectData',
        'as'   => 'crew_select',
    
    ]);
    
     Route::get('delete/{data}',[ 
    
        'uses' => 'CrewController@deleteData',
        'as'   => 'delete_data',
    
    ]);   

     Route::get('download/{filename}',[ 
    
        'uses' => 'CrewController@downloadFile',
        'as'   => 'downloadFile',
    
    ]);       
});


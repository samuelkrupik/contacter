<?php

use Illuminate\Support\Facades\Route;
use SamuelKrupik\Contacter\Http\Controllers\ContacterController;

Route::group( ['middleware' => ['web']], function() {
    Route::get( config( 'contacter.route_name' ), [ContacterController::class, 'show'] )
        ->name( 'contacter.show' );

    Route::post( config( 'contacter.route_name' ), [ContacterController::class, 'store'] )
        ->name( 'contacter.store' );
} );

<?php

namespace Bebe\Students;

use Illuminate\Support\Facades\Route;

use bebe\students\http\controllers\StudentController;

Route::group(['prefix' => 'api/v1'], function () {
    Route::post('student/create', [StudentController::class, 'create']);
});

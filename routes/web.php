<?php

Auth::routes();

Route::get('/', 'UserController@login');

Route::middleware(['auth'])->group(function () {
//    Route::get('/home', function () {return view('home.index'); })->name('home');
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/module/{id}', 'HomeController@module')->name('module');


    Route::prefix('user')->group(function () {
        Route::get('/', 'UserController@index')->name('user.index');
        Route::get('/create', 'UserController@create')->name('user.create');
        Route::post('/create', 'UserController@store')->name('user.store');
        //Route::get('/{id}', 'UserController@show')->name('user.show');
        Route::get('/{id}/edit/', 'UserController@edit')->name('user.edit');
        Route::put('/{id}/edit/', 'UserController@update')->name('user.update');
        Route::delete('/{id}', 'UserController@destroy')->name('user.destroy');

        Route::get('/profile', 'UserController@profile')->name('user.profile');
        Route::get('/profile-edit', 'UserController@profileEdit')->name('user.profile_edit');
        Route::put('/profile-edit', 'UserController@profileUpdate')->name('user.profile_edit');

    });

    Route::prefix('program')->group(function () {
        Route::get('/', 'ProgramController@index')->name('program.index')->middleware('admin');
        Route::get('/create', 'ProgramController@create')->name('program.create');
        Route::post('/create', 'ProgramController@store')->name('program.store');
        Route::get('/{id}', 'ProgramController@show')->name('program.show');
        Route::get('/{id}/edit/', 'ProgramController@edit')->name('program.edit');
        Route::put('/{id}/edit/', 'ProgramController@update')->name('program.update');
        Route::delete('/{id}', 'ProgramController@destroy')->name('program.destroy');
    });

    Route::prefix('thematic')->group(function () {
        Route::get('/', 'ThematicController@index')->name('thematic.index');
        Route::get('/create', 'ThematicController@create')->name('thematic.create');
        Route::post('/create', 'ThematicController@store')->name('thematic.store');
        Route::get('/{id}', 'ThematicController@show')->name('thematic.show');
        Route::get('/{id}/edit/', 'ThematicController@edit')->name('thematic.edit');
        Route::put('/{id}/edit/', 'ThematicController@update')->name('thematic.update');
        Route::delete('/{id}', 'ThematicController@destroy')->name('thematic.destroy');
    });

    Route::prefix('donor')->group(function () {
        Route::get('/', 'DonorController@index')->name('donor.index');
        Route::get('/create', 'DonorController@create')->name('donor.create');
        Route::post('/create', 'DonorController@store')->name('donor.store');
        Route::get('/{id}', 'DonorController@show')->name('donor.show');
        Route::get('/{id}/edit/', 'DonorController@edit')->name('donor.edit');
        Route::put('/{id}/edit/', 'DonorController@update')->name('donor.update');
        Route::delete('/{id}', 'DonorController@destroy')->name('donor.destroy');
    });

    Route::prefix('support')->group(function () {
        Route::get('/', 'SupportController@index')->name('support.index');
        Route::get('/create', 'SupportController@create')->name('support.create');
        Route::post('/create', 'SupportController@store')->name('support.store');
        Route::get('/{id}', 'SupportController@show')->name('support.show');
        Route::get('/{id}/edit/', 'SupportController@edit')->name('support.edit');
        Route::put('/{id}/edit/', 'SupportController@update')->name('support.update');
        Route::delete('/{id}', 'SupportController@destroy')->name('support.destroy');
    });

    Route::prefix('document-type')->group(function () {
        Route::get('/', 'DocumentTypeController@index')->name('document-type.index');
        Route::get('/create', 'DocumentTypeController@create')->name('document-type.create');
        Route::post('/create', 'DocumentTypeController@store')->name('document-type.store');
        Route::get('/{id}', 'DocumentTypeController@show')->name('document-type.show');
        Route::get('/{id}/edit/', 'DocumentTypeController@edit')->name('document-type.edit');
        Route::put('/{id}/edit/', 'DocumentTypeController@update')->name('document-type.update');
        Route::delete('/{id}', 'DocumentTypeController@destroy')->name('document-type.destroy');

    });
//    Route::get('all-type-document', 'ReportController@all_type_document');

    Route::get('/search', 'SearchController@index')->name('search.index');

    Route::prefix('archive')->group(function () {

        Route::get('/study', 'StudyArchiveController@index')->name('archive.study.index');
        Route::get('/study/create', 'StudyArchiveController@create')->name('archive.study.create');
        Route::post('/study/upload-file', 'StudyArchiveController@uploadFiles')->name('archive.study.upload-file');
        Route::post('/study/create', 'StudyArchiveController@store')->name('archive.study.store');
        Route::get('/study/{id}', 'StudyArchiveController@show')->name('archive.study.show');
        Route::post('/study/{id}', 'StudyArchiveController@operation')->name('archive.study.operation');
        Route::get('/study/{id}/edit/', 'StudyArchiveController@edit')->name('archive.study.edit');
        Route::put('/study/{id}/edit/', 'StudyArchiveController@update')->name('archive.study.update');
        Route::get('/study/{id}/version/', 'StudyArchiveController@version')->name('archive.study.version');
        Route::put('/study/{id}/version/', 'StudyArchiveController@versionStore')->name('archive.study.versionStore');
        Route::delete('/study/{id}', 'StudyArchiveController@destroy')->name('archive.study.destroy');

        Route::get('/document', 'DocumentArchiveController@index')->name('archive.document.index');
        Route::get('/document/create', 'DocumentArchiveController@create')->name('archive.document.create');
        Route::post('/document/upload-file', 'DocumentArchiveController@uploadFiles')->name('archive.document.upload-file');
        Route::post('/document/create', 'DocumentArchiveController@store')->name('archive.document.store');
        Route::get('/document/{id}', 'DocumentArchiveController@show')->name('archive.document.show');
        Route::get('/document/{id}/edit/', 'DocumentArchiveController@edit')->name('archive.document.edit');
        Route::put('/document/{id}/edit/', 'DocumentArchiveController@update')->name('archive.document.update');
        Route::delete('/document/{id}', 'DocumentArchiveController@destroy')->name('archive.document.destroy');

        Route::get('/learning-action', 'LearningActionArchiveController@index')->name('archive.learning-action.index');
        Route::get('/learning-action/create', 'LearningActionArchiveController@create')->name('archive.learning-action.create');
        Route::post('/learning-action/upload-file', 'LearningActionArchiveController@uploadFiles')->name('archive.learning-action.upload-file');
        Route::post('/learning-action/create', 'LearningActionArchiveController@store')->name('archive.learning-action.store');
        Route::get('/learning-action/{id}', 'LearningActionArchiveController@show')->name('archive.learning-action.show');
        Route::get('/learning-action/{id}/edit/', 'LearningActionArchiveController@edit')->name('archive.learning-action.edit');
        Route::put('/learning-action/{id}/edit/', 'LearningActionArchiveController@update')->name('archive.learning-action.update');
        Route::delete('/learning-action/{id}', 'LearningActionArchiveController@destroy')->name('archive.learning-action.destroy');

    });


    Route::prefix('report')->group(function () {
        Route::get('/monitoring-studies/brac/recent-year', 'ReportController@monitoringStudiesBracRecentYear')->name('report.monitoring-studies.brac.recent-year');
        Route::get('/monitoring-studies/brac/thematic-area-name', 'ReportController@monitoringStudiesBracThematicAreaName')->name('report.monitoring-studies.brac.thematic-area-name');

        Route::get('/monitoring-studies/development-programs/program-list', 'ReportController@monitoringStudiesDevelopmentProgramsProgramList')->name('report.monitoring-studies.development-programs.program-list');
        Route::get('/monitoring-studies/development-programs/cross-program-list', 'ReportController@monitoringStudiesDevelopmentProgramsCrossProgramList')->name('report.monitoring-studies.development-programs.cross-program-list');
        Route::get('/monitoring-studies/development-programs/development-program', 'ReportController@monitoringStudiesDevelopmentProgramsDevelopmentProgram')->name('report.monitoring-studies.development-programs.development-program');
        Route::get('/monitoring-studies/development-programs/cross-program-name', 'ReportController@monitoringStudiesDevelopmentProgramsCrossProgramName')->name('report.monitoring-studies.development-programs.cross-program-name');

        Route::get('/monitoring-studies/support-function/recent-year-report',  'ReportController@monitoringStudiesSupportFunctionRecentYearReport')->name('report.monitoring-studies.support-function.recent-year-report');
        Route::get('/monitoring-studies/support-function/cross-function-list', 'ReportController@monitoringStudiesSupportFunctionCrossFunctionList')->name('report.monitoring-studies.support-function.cross-function-list');
        Route::get('/monitoring-studies/support-function/support-function-name',  'ReportController@monitoringStudiesSupportFunctionSupportFunctionName')->name('report.monitoring-studies.support-function.support-function-name');
        Route::get('/monitoring-studies/support-function/support-function-list',  'ReportController@monitoringStudiesSupportFunctionSupportFunctionList')->name('report.monitoring-studies.support-function.support-function-list');
        Route::get('/monitoring-studies/support-function/cross-function-name',  'ReportController@monitoringStudiesSupportFunctionCrossFunctionName')->name('report.monitoring-studies.support-function.cross-function-name');

        Route::get('/documents/document-type', 'ReportController@documentsDocumentType')->name('report.documents.document-type');
        Route::get('/documents/document-program-list', 'ReportController@documentsDocumentProgramList')->name('report.documents.document-program-list');
        Route::get('/documents/document-program-name', 'ReportController@documentsDocumentProgramName')->name('report.documents.document-program-name');
        Route::get('/documents/document-type-name', 'ReportController@documentsDocumentDocumentTypeName')->name('report.documents.document-type-name');

        Route::get('/learning-actions/program-type', 'ReportController@learningActionsProgramType')->name('report.learning-actions.program-type');
        Route::get('/learning-actions/program-list', 'ReportController@learningActionsProgramList')->name('report.learning-actions.program-list');
        Route::get('/learning-actions/recent-year', 'ReportController@learningActionsRecentYear')->name('report.learning-actions.recent-year');

        Route::get('/all-type-document', 'ReportController@all_type_document')->name('report.all_type_document');


    });


    Route::prefix('notifications')->group(function () {
        Route::get('/new-archives', 'NotificationController@newArchives')->name('notifications.newArchives');
    });



/***************************Module 2 start*****************************/
    Route::prefix('module-2')->group(function () {
        Route::prefix('framework-establishment')->group(function () {
            Route::get('/', 'FrameworkEstablishmentController@index')->name('framework-establishment.index');
            Route::get('/create', 'FrameworkEstablishmentController@create')->name('framework-establishment.create');
            Route::post('/create', 'FrameworkEstablishmentController@store')->name('framework-establishment.store');
            Route::get('/{id}', 'FrameworkEstablishmentController@show')->name('framework-establishment.show');
            Route::get('/{id}/edit/', 'FrameworkEstablishmentController@edit')->name('framework-establishment.edit');
            Route::put('/{id}/edit/', 'FrameworkEstablishmentController@update')->name('framework-establishment.update');
            Route::delete('/{id}', 'FrameworkEstablishmentController@destroy')->name('framework-establishment.destroy');
        });

        Route::prefix('relevant-sdg-establishment')->group(function () {
            Route::get('/', 'RelevantSdgEstablishmentController@index')->name('relevant-sdg-establishment.index');
            Route::get('/create', 'RelevantSdgEstablishmentController@create')->name('relevant-sdg-establishment.create');
            Route::post('/create', 'RelevantSdgEstablishmentController@store')->name('relevant-sdg-establishment.store');
            Route::get('/{id}', 'RelevantSdgEstablishmentController@show')->name('relevant-sdg-establishment.show');
            Route::get('/{id}/edit/', 'RelevantSdgEstablishmentController@edit')->name('relevant-sdg-establishment.edit');
            Route::put('/{id}/edit/', 'RelevantSdgEstablishmentController@update')->name('relevant-sdg-establishment.update');
            Route::delete('/{id}', 'RelevantSdgEstablishmentController@destroy')->name('relevant-sdg-establishment.destroy');
        });

        Route::prefix('indicator-registration')->group(function () {
            Route::get('/', 'IndicatorRegistrationController@index')->name('indicator-registration.index');
            Route::get('/create', 'IndicatorRegistrationController@create')->name('indicator-registration.create');
            Route::post('/create', 'IndicatorRegistrationController@store')->name('indicator-registration.store');
            Route::get('/{id}', 'IndicatorRegistrationController@show')->name('indicator-registration.show');
            Route::get('/{id}/edit/', 'IndicatorRegistrationController@edit')->name('indicator-registration.edit');
            Route::post('/{id}/edit/', 'IndicatorRegistrationController@update')->name('indicator-registration.update');
            Route::delete('/{id}', 'IndicatorRegistrationController@destroy')->name('indicator-registration.destroy');
            Route::post('/upload-file', 'IndicatorRegistrationController@uploadFiles')->name('indicator-registration..upload-file');
        });

        Route::prefix('result-entry')->group(function () {
            Route::get('/', 'ResultEntryController@index')->name('result-entry.index');
            Route::get('/create', 'ResultEntryController@create')->name('result-entry.create');
            Route::post('/create', 'ResultEntryController@store')->name('result-entry.store');
            Route::get('/{id}', 'ResultEntryController@show')->name('result-entry.show');
            Route::get('/{id}/edit/', 'ResultEntryController@edit')->name('result-entry.edit');
            Route::put('/{id}/edit/', 'ResultEntryController@update')->name('result-entry.update');
            Route::delete('/{id}', 'ResultEntryController@destroy')->name('result-entry.destroy');
            Route::post('statement', 'ResultEntryController@statement')->name('statement');
            Route::post('getProgram', 'ResultEntryController@getProgram')->name('getProgram');
        });

         Route::prefix('reports')->group(function () {
           Route::get('/sdg-report', 'SdgReportController@index')->name('sdg-report.index');
           Route::get('/spa-report', 'SpaReportController@index')->name('spa-report.index');
           Route::get('/excel-report', 'ExcelReportController@index')->name('excel-report.index');
           Route::post('/excel-report', 'ExcelReportController@downlaod');
        });

    });
    Route::post('program-chart-data', 'HomeController@program_chart_data')->name('program-chart-data');
    /***************************Module 2 End*****************************/

});

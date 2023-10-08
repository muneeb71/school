<?php

Auth::routes();

//Route::get('/test', 'TestController@index')->name('test');
Route::get('/privacy-policy', 'HomeController@privacy_policy')->name('privacy_policy');
Route::get('/terms-of-use', 'HomeController@terms_of_use')->name('terms_of_use');


Route::group(['middleware' => 'auth'], function () {

    Route::get('/', 'HomeController@dashboard')->name('home');
    Route::get('/home', 'HomeController@dashboard')->name('home');
    Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');

    Route::group(['prefix' => 'my_account'], function () {
        Route::get('/', 'MyAccountController@edit_profile')->name('my_account');
        Route::put('/', 'MyAccountController@update_profile')->name('my_account.update');
        Route::put('/change_password', 'MyAccountController@change_pass')->name('my_account.change_pass');
    });

    /*************** Support Team *****************/
    Route::group(['namespace' => 'SupportTeam',], function () {

        /*************** Students *****************/
        Route::group(['prefix' => 'applicants'], function () {
            Route::get('percentage/change', 'StudentRecordController@updatePercent');
            Route::get('merit_list/options', 'StudentRecordController@meritListOptions')->name('applicants.meritList.options');
            Route::post('merit_list/generate', 'StudentRecordController@meritListGenerate')->name('applicants.meritList.generate');
            Route::get('merit_list/groupOptions', 'StudentRecordController@meritListGroupOptions')->name('applicants.meritListGroup.options');
            Route::post('merit_list/groupGenerate', 'StudentRecordController@meritListGroupGenerate')->name('applicants.meritListGroup.generate');
            Route::post('merit_list/fee', 'StudentRecordController@feeChallanGenerate')->name('applicants.meritList.fee');
            Route::get('list', 'StudentRecordController@showApplicant')->name('applicants.list');
            Route::get('list/show/{id}', 'StudentRecordController@showSingleApplicant')->name('applicants.list.show');
            Route::get('list/edit/{id}', 'StudentRecordController@showEditApplicant')->name('applicants.list.showEdit');
            Route::post('list/edit', 'StudentRecordController@editApplicant')->name('applicants.list.edit');
            Route::delete('list/delete/{id}', 'StudentRecordController@removeApplicant')->name('applicants.list.delete');
            Route::get('totalApplicants', 'StudentRecordController@totalApplicants')->name('applicants.totalApplicants');
            Route::get('admitApplicant', 'StudentRecordController@admitApplicant')->name('applicants.admitApplicant');
            Route::get('challanOptions', 'StudentRecordController@getFeeChallan')->name('applicants.getChallan');
        });
        Route::group(['prefix' => 'students'], function () {
            Route::get('reset_pass/{st_id}', 'StudentRecordController@reset_pass')->name('st.reset_pass');
            Route::get('graduated', 'StudentRecordController@graduated')->name('students.graduated');
            Route::put('not_graduated/{id}', 'StudentRecordController@not_graduated')->name('st.not_graduated');
            Route::post('updateStudent', 'StudentRecordController@updateStudent')->name('students.updateStudent');
            Route::get('list/{class_id}', 'StudentRecordController@listByClass')->name('students.list')->middleware('teamSAT');
            Route::get('totalAdmissions', 'StudentRecordController@totalAdmissions')->name('students.totalAdmissions');
            Route::get('byAge', 'StudentRecordController@studentsByAge')->name('students.byAge');
            Route::get('readmitStudent', 'StudentRecordController@readmitStudent')->name('students.readmitStudent');
            Route::get('section_wise_list', 'StudentRecordController@sectionList')->name('students.section_list');
            Route::post('section_wise_list', 'StudentRecordController@sectionListGenerate')->name('students.section_list.generate');
            Route::post('class_wise_list', 'StudentRecordController@classListGenerate')->name('students.class_list.generate');
            Route::post('combination_wise_list', 'StudentRecordController@combinationListGenerate')->name('students.combination_list.generate');
            Route::post('group_wise_list', 'StudentRecordController@groupListGenerate')->name('students.group_list.generate');
            Route::get('attendance_report/options', 'StudentRecordController@attendanceReportOptions')->name('students.attendance.report.options');
            Route::post('attendance_report_show', 'StudentRecordController@generateAttendanceReport')->name('students.attendance.report.generate');
            
            Route::get('attendance_report/month', 'StudentRecordController@monthlyAttendanceReportOptions')->name('students.attendance.monthly.report.options');
            Route::post('attendance_report_month_show', 'StudentRecordController@generateMonthlyAttendanceReport')->name('students.attendance.monthly.report.generate');
            
            Route::get('Change_combination', 'StudentRecordController@showChangeCombination')->name('students.change_combination');
            Route::post('Change_group', 'StudentRecordController@changeGroup')->name('students.changeGroup');
            Route::get('Allot_sections', 'StudentRecordController@showAllotSections')->name('students.show_allot_sections');
            Route::post('Allot_sections', 'StudentRecordController@allotSections')->name('students.allot_sections');
            Route::post('remove_sections', 'StudentRecordController@removeSections')->name('students.remove_sections');

             Route::get('makeHash', 'UserController@makeHash')->name('students.make_hash');
            
            
            // merit list
            
            Route::post('admit', 'StudentRecordController@admitStudent')->name('students.admit');

            // add applicant
            Route::get('addApplicant', 'StudentRecordController@addApplicant')->name('students.addApplicant');
            
            Route::post('Roll_No', 'StudentRecordController@generate_roll_no_slip')->name('students.generateRollNoSlip');
            
            Route::post('readmit', 'StudentRecordController@readmitStudentController')->name('students.readmit');
            /* Promotions */
            Route::post('promote_selector', 'PromotionController@selector')->name('students.promote_selector');
            Route::get('promotion/manage', 'PromotionController@manage')->name('students.promotion_manage');
            Route::delete('promotion/reset/{pid}', 'PromotionController@reset')->name('students.promotion_reset');
            Route::delete('promotion/reset_all', 'PromotionController@reset_all')->name('students.promotion_reset_all');
            Route::get('promotion/{fc?}/{fs?}/{tc?}/{ts?}', 'PromotionController@promotion')->name('students.promotion');
            Route::post('promote/{fc}/{fs}/{tc}/{ts}', 'PromotionController@promote')->name('students.promote');
            
            Route::get('Attendance', 'StudentRecordController@attendanceOptions')->name('students.attendance');
            Route::get('Attendance/show/options', 'StudentRecordController@viewAttendanceOptions')->name('students.attendance.view.options');
            Route::post('Attendance_show/list', 'StudentRecordController@showAttendanceList')->name('students.showAttendance.list');
            Route::post('Attendance_show', 'StudentRecordController@showAttendance')->name('students.showAttendance');
            Route::post('Attendance_save', 'StudentRecordController@saveAttendance')->name('students.saveAttendance');
            Route::get('Attendance/update/options', 'StudentRecordController@updateAttendanceOptions')->name('students.attendance.update.options');
            Route::post('Attendance_update/list', 'StudentRecordController@updateAttendanceList')->name('students.updateAttendance.list');
            Route::post('Attendance_update', 'StudentRecordController@updateAttendance')->name('students.updateAttendance');

        
        
        });
        /*************** Users *****************/
        Route::group(['prefix' => 'users'], function () {
            Route::get('reset_pass/{id}', 'UserController@reset_pass')->name('users.reset_pass');
        });

        /*************** TimeTables *****************/
        Route::group(['prefix' => 'timetables'], function () {
            Route::get('/', 'TimeTableController@index')->name('tt.index');

            Route::group(['middleware' => 'teamSA'], function () {
                Route::post('/', 'TimeTableController@store')->name('tt.store');
                Route::put('/{tt}', 'TimeTableController@update')->name('tt.update');
                Route::delete('/{tt}', 'TimeTableController@delete')->name('tt.delete');
            });

            /*************** TimeTable Records *****************/
            Route::group(['prefix' => 'records'], function () {

                Route::group(['middleware' => 'teamSA'], function () {
                    Route::get('manage/{ttr}', 'TimeTableController@manage')->name('ttr.manage');
                    Route::post('/', 'TimeTableController@store_record')->name('ttr.store');
                    Route::get('edit/{ttr}', 'TimeTableController@edit_record')->name('ttr.edit');
                    Route::put('/{ttr}', 'TimeTableController@update_record')->name('ttr.update');
                });

                Route::get('show/{ttr}', 'TimeTableController@show_record')->name('ttr.show');
                Route::get('print/{ttr}', 'TimeTableController@print_record')->name('ttr.print');
                Route::delete('/{ttr}', 'TimeTableController@delete_record')->name('ttr.destroy');
            });

            /*************** Time Slots *****************/
            Route::group(['prefix' => 'time_slots', 'middleware' => 'teamSA'], function () {
                Route::post('/', 'TimeTableController@store_time_slot')->name('ts.store');
                Route::post('/use/{ttr}', 'TimeTableController@use_time_slot')->name('ts.use');
                Route::get('edit/{ts}', 'TimeTableController@edit_time_slot')->name('ts.edit');
                Route::delete('/{ts}', 'TimeTableController@delete_time_slot')->name('ts.destroy');
                Route::put('/{ts}', 'TimeTableController@update_time_slot')->name('ts.update');
            });
        });

        /*************** Payments *****************/
        Route::group(['prefix' => 'payments'], function () {

            Route::get('manage/{class_id?}', 'PaymentController@manage')->name('payments.manage');
            Route::get('invoice/{id}/{year?}', 'PaymentController@invoice')->name('payments.invoice');
            Route::get('receipts/{id}', 'PaymentController@receipts')->name('payments.receipts');
            Route::get('pdf_receipts/{id}', 'PaymentController@pdf_receipts')->name('payments.pdf_receipts');
            Route::post('select_year', 'PaymentController@select_year')->name('payments.select_year');
            Route::post('select_class', 'PaymentController@select_class')->name('payments.select_class');
            Route::delete('reset_record/{id}', 'PaymentController@reset_record')->name('payments.reset_record');
            Route::post('pay_now/{id}', 'PaymentController@pay_now')->name('payments.pay_now');
            Route::post('save_fees', 'PaymentController@fees_records')->name('payments.fees_records');

            // challan
            Route::get('showOccasional', 'PaymentController@showOccasionalFee')->name('payments.showOptions');
            Route::post('create_particulars', 'PaymentController@create_occasional_particulars')->name('payments.occasional.particulars');
            Route::post('create_special_particulars', 'PaymentController@create_special_particulars')->name('payments.special.particulars');
            Route::post('show_particulars', 'PaymentController@show_occasional_particulars')->name('payments.show.particulars');
            Route::post('create_challan', 'PaymentController@generateOccasionalChallan')->name('payments.occasional.challan');
            Route::post('create_special_challan', 'PaymentController@generateSpecialChallan')->name('payments.special.challan');
            
            Route::post('particulars/show', 'PaymentController@show_fees_particulars')->name('fees.particulars.show');
            Route::post('particulars/edit', 'PaymentController@edit_fees_particulars')->name('fees.particulars.edit');
            Route::post('particulars/delete', 'PaymentController@delete_fees_particulars')->name('fees.particulars.delete');
        });

        /*************** Pins *****************/
        Route::group(['prefix' => 'pins'], function () {
            Route::get('create', 'PinController@create')->name('pins.create');
            Route::get('/', 'PinController@index')->name('pins.index');
            Route::post('/', 'PinController@store')->name('pins.store');
            Route::get('enter/{id}', 'PinController@enter_pin')->name('pins.enter');
            Route::post('verify/{id}', 'PinController@verify')->name('pins.verify');
            Route::delete('/', 'PinController@destroy')->name('pins.destroy');
        });

        /*************** Marks *****************/
        Route::group(['prefix' => 'marks'], function () {

            // FOR teamSA
            Route::group(['middleware' => 'teamSA'], function () {
                Route::get('batch_fix', 'MarkController@batch_fix')->name('marks.batch_fix');
                Route::put('batch_update', 'MarkController@batch_update')->name('marks.batch_update');
                Route::get('tabulation/{exam?}/{class?}/{sec_id?}', 'MarkController@tabulation')->name('marks.tabulation');
                Route::post('tabulation', 'MarkController@tabulation_select')->name('marks.tabulation_select');
                Route::get('tabulation/print/{exam}/{class}/{sec_id}', 'MarkController@print_tabulation')->name('marks.print_tabulation');
            });

            // FOR teamSAT
            Route::group(['middleware' => 'teamSAT'], function () {
                Route::get('/', 'MarkController@index')->name('marks.index');
                Route::get('manage/{exam}/{class}/{section}/{subject}', 'MarkController@manage')->name('marks.manage');
                Route::put('update/{exam}/{class}/{section}/{subject}', 'MarkController@update')->name('marks.update');
                Route::put('comment_update/{exr_id}', 'MarkController@comment_update')->name('marks.comment_update');
                Route::put('skills_update/{skill}/{exr_id}', 'MarkController@skills_update')->name('marks.skills_update');
                Route::post('selector', 'MarkController@selector')->name('marks.selector');
                Route::get('bulk/{class?}/{section?}', 'MarkController@bulk')->name('marks.bulk');
                Route::post('bulk', 'MarkController@bulk_select')->name('marks.bulk_select');
            });

            Route::get('select_year/{id}', 'MarkController@year_selector')->name('marks.year_selector');
            Route::post('select_year/{id}', 'MarkController@year_selected')->name('marks.year_select');
            Route::get('show/{id}/{year}', 'MarkController@show')->name('marks.show');
            Route::get('print/{id}/{exam_id}/{year}', 'MarkController@print_view')->name('marks.print');
        });

        Route::resource('students', 'StudentRecordController');
        Route::resource('users', 'UserController');
        Route::resource('classes', 'MyClassController');
        Route::resource('sections', 'SectionController');
        Route::resource('subjects', 'SubjectController');
        Route::resource('grades', 'GradeController');
        Route::resource('exams', 'ExamController');
        Route::resource('dorms', 'DormController');
        Route::resource('payments', 'PaymentController');
        Route::post('fees/create_particulars', 'PaymentController@create_particular')->name('fees.particulars.create');
    });

    /************************ AJAX ****************************/
    Route::group(['prefix' => 'ajax'], function () {
        Route::get('get_lga/{state_id}', 'AjaxController@get_lga')->name('get_lga');
        Route::get('get_class_sections/{class_id}', 'AjaxController@get_class_sections')->name('get_class_sections');
        Route::get('get_class_subjects/{class_id}', 'AjaxController@get_class_subjects')->name('get_class_subjects');
    });
});

/************************ SUPER ADMIN ****************************/
Route::group(['namespace' => 'SuperAdmin', 'middleware' => 'super_admin', 'prefix' => 'super_admin'], function () {

    Route::get('/settings', 'SettingController@index')->name('settings');
    Route::put('/settings', 'SettingController@update')->name('settings.update');
});

/************************ PARENT ****************************/
Route::group(['namespace' => 'MyParent', 'middleware' => 'my_parent',], function () {

    Route::get('/my_children', 'MyController@children')->name('my_children');
});


Route::post('applicants/create', 'ApplicantController@addApplicant')->name('marks.selector');
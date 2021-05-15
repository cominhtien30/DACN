<?php
use Illuminate\Support\Facades\Storage;
use App\ImageUpload;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\ve;


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
    //user
    ///login facebook,google
    Route::get('/login/{social}', 'Auth\LoginController@redirectToProvider');
    Route::get('/login/{social}/callback', 'Auth\LoginController@handleProviderCallback');
    //login google
   // Route::get('/login/{social}', 'Auth\LoginController@redirectToProvider')->name('logingoogle');
  // Route::get('/login/{social}/callback', 'Auth\LoginController@handleProviderCallback');

    //--------------------------------------------USER------------------------------------//
 //Trang chu
Route::get('/','HomeController@index')->name('index');

//------------------------------------------PHIM-------------------------------------------//

Route::get('/phimdangchieu','phimController@phim_dang_chieu')->name('dangchieu');
//api 
Route::get('/phimhot','apimoviesController@index');
Route::get('/chitietphimhot/{id}','apimoviesController@detail');
// chi tiet phim
Route::get('/phim/{id}','phimController@chitietphim')->name('chitietphim');
Route::get('/cmt_phim','phimController@comment_user')->name('cmt_user');

//--------------------------------------------------DATVE--------------------------------------//
// date_interval_create_from_date_string
Route::group(['middleware' => 'CheckUser'], function () {
   
        Route::get('/datve/{id}','datveController@datve')->name('datvexemphim');
        Route::get('/datvetest','ajaxController@insert_ghe')->name('datvetest');
        Route::get('/datcombo','datveController@getcombo')->name('datcombo');
       
        Route::get('/user-list-ghe','ajaxController@list_ghe')->name('ajax_add_ghe');
        
        Route::get('/user-dat-combo','ajaxController@dat_combo')->name('ajax_dat_combo');
        Route::get('/thanhtoan','datveController@thanhtoan')->name('thanhtoan');
        Route::get('/thanhtoanvnpay','datveController@create')->name('vnpay');
        Route::get('/test','datveController@test')->name('test');
        Route::get('/thanhcong','datveController@success')->name('thanhcong');
        Route::get('/get-lich-chieu/{id}','ajaxController@GetNgay');


        Route::get('/get-info-user','ajaxController@info_user');
        Route::get('/check-ghe','ajaxController@CheckGhe')->name('check_ghe');
     
        
    
});
Route::get('payment', 'PayPalController@payment')->name('payment');
Route::get('cancel', 'PayPalController@cancel')->name('payment.cancel');
Route::get('payment/success', 'PayPalController@success')->name('payment.success');

Route::get('get', function () {
    
    return  Cart::count();
});
/////
//--------------------------------------ACCOUNT USER-----------------------------------//
Route::get('/dangnhap','userController@getLogin')->name('user_login');
// Route::get('/verify',function(){
//         return view('user.veryemail');
// });

Route::get('/verify','EmailController@verify_email')->name('verify');
Route::get('/check-verify','EmailController@check_verify')->name('check-verify');
Route::post('/profile','userController@login');

Route::get('/profile','userController@profile')->name('profile');
Route::get('logout_user', function () {
        Auth::logout();
        Session::flush();
        Cart::destroy();
        return redirect()->route('index');
});
Route::get('/changepass',function(){
        return view('user.changepass');
    });
Route::get('/sendmail','EmailController@sendEmail')->name('sendcode');
Route::get('/update-change-pass','EmailController@changepass')->name('changepass');
Route::get('/dangky','userController@dangkythanhvien')->name('dangky');
Route::get('/dangkys','userController@dangky')->name('ajax_dangky');

Route::get('/auth/redirect/{provider}', 'SocialController@redirect');
Route::get('/callback/{provider}', 'SocialController@callback');
//---------------------------------------//-------------------------------------------//


//------------------------------------ login admin----------------------------------///

Route::get('/admin','adminController@Index')->name('login');
Route::post('/admin-dashboard','adminController@Login')->name('admin-login');
Route::get('/admin-dashboard','adminController@Dashboard')->middleware('checklogin');
Route::get('/logout', 'adminController@Logout');



//------------------------------------ Rạp -----------------------------------///

Route::group(['middleware' => 'checklogin'], function () {
    
        Route::get('/admin-list-rap','rapController@admin_list_rap')->name('admin-list-rap');
        Route::get('/admin-add-rap',function(){
              return view('admin.add-rap');
        });
        Route::post('/admin-add-rap','rapController@admin_add_rap')->name('admin-add-rap');
        Route::get('/admin-delete-rap/{id}','rapController@admin_delete_rap')->name('admin-delete-rap');
        Route::get('/admin-edit-rap/{id}','rapController@admin_detail_rap')->name('admin-detail-rap');
        Route::post('/admin-update-rap/{id}','rapController@admin_update_rap')->name('admin-update-rap');

});


//------------------------------------ Phòng -----------------------------------///

Route::group(['middleware' => 'checklogin'], function () {
   
        Route::get('/admin-add-room','roomController@admin_list_rap_dropdown')->name('admin-room-add');
        Route::post('/admin-add-room','roomController@admin_add_room')->name('admin-add-room');
       
        //Route::get('/admin-list-room','roomController@admin_list_room')->name('admin-list-room');
        Route::get('/admin-list-room','roomController@admin_list_rap_tag')->name('admin-list-room');
        Route::get('/admin-delete-room/{id}','roomController@admin_delete_room')->name('admin-delete-room');
        Route::get('/admin-detail-room/{id}','roomController@admin_detail_room')->name('admin-detail-room') ;
        Route::post('/admin-update-room/{id}','roomController@admin_update_room')->name('admin-update-room') ;
    
});
//------------------------------------ Phim -----------------------------------///

Route::group(['middleware' => 'checklogin'], function () {
   
        Route::get('/admin-list-phim','phimController@admin_list_phim')->name('admin-list-phim') ;
        Route::get('/admin-list-phimonline','apimoviesController@list_phim')->name('admin-list-phimonline') ;
        Route::get('/admin-add-phim',function(){
            return view('admin.add-phim');
        }) ;
        Route::get('/admin-add-phim-online','apimoviesController@insert_phim')->name('admin-add-phim-online');
        Route::post('/admin-add-phim','phimController@admin_add_phim')->name('admin-add-phim');
        Route::get('/admin-delete-phim/{id}','phimController@admin_delete_phim')->name('admin-delete-phim');
        Route::get('/admin-detail-phim/{id}','phimController@admin_detail_phim')->name('admin-detail-phim');
        Route::post('/admin-update-phim/{id}','phimController@admin_update_phim')->name('admin-update-phim');
    
});


//------------------------------------ quản lý User -----------------------------------///
Route::group(['middleware' => 'checklogin'], function () {
   
    Route::get('/admin-list-user','adminController@admin_list_user')->name('admin-list-user') ;
    Route::post('/update-name-user/{id}','adminController@admin_update_name_user')->name('admin-update-name-user');
    Route::post('/update-level-user/{id}','adminController@admin_update_level_user')->name('admin-update-level-user');
    Route::get('/delete-user/{id}','adminController@admin_delete_user')->name('admin-delete-user');
    Route::get('/resetpass-user/{id}','adminController@admin_resetpass')->name('admin-resetpass');
    Route::post('/add-user','adminController@admin_add_user')->name('admin-add-user');
});

//------------------------------------ Ghế -----------------------------------///
Route::group(['middleware' => 'checklogin'], function () {
   
    Route::get('/admin-list-ghe','rapController@list_rap_dropdow') ;
   
});
//------------------------------------Lịch---------------------------------///
Route::group(['middleware' => 'checklogin'], function () {
   
        Route::get('/admin-list-lich','lichchieuController@admin_list_lich')->name('admin-list-lich') ;
        Route::get('/delete-lich/{id}','lichchieuController@admin_delete_lich')->name('admin-delete-lich');
        Route::get('/detail-lich/{id}','lichchieuController@admin_detail_lich')->name('admin-detail-lich');
        Route::post('/detail-lich/{id}','lichchieuController@admin_edit_lich')->name('admin-edit-lich');
        Route::get('/add-lich','lichchieuController@admin_add_lich')->name('admin-add-lich');
        Route::post('/admin-add-lich/{id}','lichchieuController@admin_insert_lich');

    
});
//-----------------------------------Thức Ăn-------------------------------------------------
Route::group(['middleware' => 'checklogin'], function () {
   
       // Route::get('/admin-list-lich','lichchieuController@admin_list_lich')->name('admin-list-lich') ;
        Route::get('/admin-list-thucan','thucanController@admin_list_thucan')->name('admin-list-thucan') ;
        Route::get('/admin-add-thucan','thucanController@admin_add_thucan')->name('admin-add-thucan');
        Route::post('/admin-add-thucan','thucanController@admin_insert_thucan')->name('admin-insert-thucan');
        Route::get('/admin-delete-thucan/{id}','thucanController@admin_delete_thucan')->name('admin-delete-thucan');
        Route::get('/admin-detail-thucan/{id}','thucanController@admin_detail_thucan')->name('admin-detail-thucan');
        Route::post('/admin-detail-thucan/{id}','thucanController@admin_update_thucan')->name('admin-edit-thucan');
    
});
//-----------------------------------ajax-----------------------------------///
Route::prefix('ajax')->group(function () {
   
        Route::get('/admin-list-room','ajaxController@admin_get_rom_by_id_rap')->name('find-admin-list-room');
        Route::get('/admin-list-room-ghe','ajaxController@admin_get_rom_by_id_rap_dropdown')->name('admin-list-room-ghe');
        Route::get('/admin-list-ghe','ajaxController@admin_get_seat_by_id_room')->name('admin-list-ghe');
        Route::get('/admin-find-lich-by-rap','ajaxController@admin_find_lich_by_rap')->name('admin-find-lich-by-rap');
        Route::get('/admin-find-lich-by-room','ajaxController@admin_find_lich_by_room')->name('admin-find-lich-by-room');
        Route::get('/admin-get-form-bugsg','ajaxController@get_form_bugsg')->name('admin-get-form-bugsg');
        Route::get('/admin-find-phim','ajaxController@admin_find_phim')->name('admin-find-phim');

        Route::POST('/admin-load-image','ajaxController@admin_load_image')->name('admin-load-image');
        Route::GET('/admin-load-image','ajaxController@admin_load_image');
        Route::get('/get-lich-chieu/{id}','ajaxController@GetNgay');
        Route::get('/get-info-user','ajaxController@info_user');
        Route::get('/user-list-ghe','ajaxController@list_ghe')->name('ajax_add_ghe');
        Route::get('/get-lich-chieu/{id}','ajaxController@GetNgay');


        Route::get('/get-info-user','ajaxController@info_user');
        Route::get('/user-list-ghe','ajaxController@list_ghe')->name('ajax_add_ghe');
        Route::get('/user-dat-combo','ajaxController@dat_combo')->name('ajax_dat_combo');
       
});


Route::get('test','apimoviesController@get_video');




// Route::get('test',function(){
//  return view('user.veryemail');
// //  Schema::table('users', function($table) {
// //         $table->enum('verify',array(0,1));
// //     });
// //     echo 'thành công';
//  });
// //add phòng
Route::get('qr-code', function () {
        return QrCode::size(500)->generate('Welcome to kerneldev.com!');
    });

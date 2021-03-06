<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});



Route::get('/cdvv',function(){
    //return view('cdv');
    //return 'cdv';

    return view('cdvv', ['name' => 'Anna', 'surname' => 'Kowalska']);
});


Route::get('/pages/{x}', function ($x) {
   
    $pages = [
        'about' => 'Strona cdv',
        'contact' => 'Poznan, ul.Laravelova 17',
        'home' => 'Strona domova'
    ];

    return $pages[$x];
});

Route::get('/address/{city?}', function (String $city="brak dannych") {
    echo "Miasto: $city";
});

Route::get('/address/{city?}/{street?}', function (String $city="brak dannych",String $street="-") {
    echo <<<ADDRESS
    Miasto : $city<br>
    Ulica : $street
    <hr>
ADDRESS;
});

Route::get('/address/{city?}/{street?}/{zipCode?}', function (String $city="brak dannych",String $street="-",int $zipCode=null) {


    $zipCode = substr($zipCode,0,2).'-'.substr($zipCode,2,3);
    echo <<<ADDRESS
    Kod pocztowy : $zipCode <br>
    Miasto : $city<br>
    Ulica : $street
    <hr>
ADDRESS;
}) -> name('address');

Route::redirect('/adres/{city?}/{street?}/{zipCode?}','/address/{city?}/{street?}/{zipCode?}');


Route::prefix('admin')->group(function(){
    Route::get('/home/{name}',function (String $name){
        echo "Witaj $name na stronie administracyjniej";
    });
    
    Route::get('users',function(){
        echo "<h3>Uzytkownicy systemu</h3>";
    });
    
});
Route::redirect('/admin/{name}','/admin/home/{name}');



Route::get('/user/{name}/{age?}',function (String $name,int $age = null){
    echo "<h3>Dane</h3>";
})->where(['name' => '[A-Za-z]+', 'age' => '[0-9]+']);

Route::get('/city',function (){
    return view('city',['name' => 'Anna','surname' => 'Nowak', 'city' => 'Poznan']);
});

Route::get('/table',function (){

    $car = [
        ['mark' => 'Ferrari','model' => 'F430','color' => 'red'],
        ['mark' => 'Fiat','model' => '126p','color' => 'white'],
        ['mark' => 'Porsche','model' => 'Panamera','color' => 'black']
    ];

    return view('table',['car' => $car]);
});

Route::get('blade',function (){
    return view('szablon');
});
use App\Http\Controllers\CdvSite;
Route::get('/site', [CdvSite::class, 'index']);
Route::get('/site/{cdvsite}', [CdvSite::class, 'index']);

use App\Http\Controllers\PageController;
Route::get('/drives', [PageController::class, 'show']);
Route::get('/drives/{dysk}', [PageController::class, 'show']);

Route::get('/userform',function (){
    return view('userform');
});

Route::view('/userform','userform');
use App\Http\Controllers\UserController;
Route::post('/usercontroller', [UserController::class, 'account']);

///new userform//
Route::get('/newuserform', function(){
    return view ('newuserform');
});

Route::view('/loginform', 'loginform');

use App\Http\Controllers\loginUserController;
Route::post('/newUserController', [loginUserController::class, 'account']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Api
Route::get('data', [App\Http\Controllers\Data::class, 'list']);

//middleware
Route::get('json', function(){
    echo 'isJson';
})->middleware('isJson');

Route::view('login', 'login');

Route::post('login', [App\Http\Controllers\Login::class, 'index']);

Route::view('profile', 'profile');


Route::view('kursywalut','kursywalut');

Route::get('kursywalut', [App\Http\Controllers\kursywalut::class, 'list'])->name('list');

Route::view('kalkulatorwalut','kalkulatorwalut');

Route::post('kalkulatorwalut',[App\Http\Controllers\kalkulatorwalut::class,'index']);

Route::view('profile', 'profile');

Route::get('profile/{lang}', function ($lang) {
    
    App::setLocale($lang);
    return view('profile');

});

Route::get('/cdv', [App\Http\Controllers\cdv::class, 'show']);

Route::view('form', 'form');

Route::get('/send', function(){
    $details = [
        'title' => 'CDV - email',
        'body' => 'Wiadomosc testowa',
    ];

    \Mail::to('ukuksa@edu.cdv.pl')->send(new \App\Mail\TestMail($details));
    echo 'Wiadomosc wyslana pomyslnie';
});
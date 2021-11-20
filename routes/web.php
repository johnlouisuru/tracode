<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
//assorted imports
use App\Http\controllers\PagesController;
use App\Http\controllers\PhptabController;
use App\Http\Controllers\JavatabController;
use App\Http\Controllers\CtabController;
use App\Http\Controllers\PhpShowIndex;
use App\Http\Controllers\JavaShowInfo;
use App\Http\Controllers\CsharpShowInfo;
use App\Http\Controllers\PhpGuestShow;
use App\Http\Controllers\JavaGuestShow;
use App\Http\Controllers\CsharpGuestShow;
use App\Http\Controllers\UserInfo;
use App\Http\Controllers\UserProfileEdit;
use App\Http\Controllers\UserMailing;
// for the guest user
use App\Http\Controllers\JavaGuestAdvance;
use App\Http\Controllers\JavaRegisAdvance;
use App\Http\Controllers\CsharpGuestAdvance;
use App\Http\Controllers\CsharpRegisAdvance;
use App\Http\Controllers\PhpRegisAdvance;
use App\Http\Controllers\PhpGuestAdvance;
use App\Http\Controllers\AdminAdvanceJava;
use App\Http\Controllers\AdminAdvancePhp;
use App\Http\Controllers\AdminCsharp;

//for quiz content edit
use App\Http\Controllers\ControllerPhpquiz;
use App\Http\Controllers\ControllerJavaquiz;
use App\Http\Controllers\ControllerCsharpquiz;
use App\Http\Controllers\PhpInsQuiz;

use App\Http\Controllers\QuizScore\phpquiztry1update;
use App\Http\Controllers\QuizScore\phpquiztry2update;
use App\Http\Controllers\QuizScore\phpquiztry3update;
use App\Http\Controllers\QuizScore\phpquiztry4update;
use App\Http\Controllers\QuizScore\phpquiztry5update;

use App\Http\Controllers\QuizScore\javaquiztry1update;
use App\Http\Controllers\QuizScore\javaquiztry2update;
use App\Http\Controllers\QuizScore\javaquiztry3update;
use App\Http\Controllers\QuizScore\javaquiztry4update;
use App\Http\Controllers\QuizScore\javaquiztry5update;

//for scoring
use App\Http\Controllers\PhpScoringController;
use App\Http\Controllers\PhpScoringControllerinter;
use App\Http\Controllers\PhpScoringControlleradvance;
use App\Http\Controllers\JavaScoringController;
use App\Http\Controllers\JavaScoringControllerinter;
use App\Http\Controllers\JavaScoringControlleradvance;
use App\Http\Controllers\CsharpScoringController;
use App\Http\Controllers\CsharpScoringControllerinter;
use App\Http\Controllers\CsharpScoringControlleradva;

//for requirement scoring
use App\Http\Controllers\LevelRequirementController;


use App\Mail\TestMail;
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
    return view('main.homepage');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth','verified'])->name('dashboard'); 

require __DIR__.'/auth.php';

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/dashboard');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::get('/profile', function () {
    // Only verified users may access this route...
})->middleware('verified');


Route::group(['middleware'=>'auth'],function(){
    
    Route::get('/admin','App\Http\controllers\PagesController@admin');
    Route::resource('/userprofile', 'App\Http\Controllers\UserProfileEdit');
    Route::get('ProfileEditing',[\App\Http\Controllers\PagesController::class, 'EditProfile'])->name('ProfileEditing.ProfileEdit');
    
    Route::get('phpfunction',[\App\Http\Controllers\PagesController::class, 'phpintro'])->name('phpfunction.phpintro');
    Route::get('phpbasictry',[\App\Http\Controllers\PagesController::class, 'phpb'])->name('phpbasictry.phpbasic');
    Route::get('phpintermediatetry',[\App\Http\Controllers\PagesController::class, 'phpinter'])->name('phpintermediatetry.phpintermediate');
    Route::get('phpadvancetry',[\App\Http\Controllers\PagesController::class, 'phpadva'])->name('phpadvancetry.phpadvance');

    Route::get('javaintroguesttry',[\App\Http\Controllers\PagesController::class, 'javareg'])->name('javaintroguesttry.javaintroguest');
    Route::get('javabasictry',[\App\Http\Controllers\PagesController::class, 'javaregbasic'])->name('javabasictry.javabasic');
    Route::get('javaintermediatetry',[\App\Http\Controllers\PagesController::class, 'javaregintermediate'])->name('javaintermediatetry.javaintermediate');
    Route::get('javaadvancetry',[\App\Http\Controllers\PagesController::class, 'javaregadvance'])->name('javaadvancetry.javaadvance');

    Route::get('csharpintrotry',[\App\Http\Controllers\PagesController::class, 'csharpregintro'])->name('csharpintrotry.csharpintro');
    Route::get('csharpbasictry',[\App\Http\Controllers\PagesController::class, 'csharpregbasic'])->name('csharpbasictry.csharpbasic');
    Route::get('csharpintermediatetry',[\App\Http\Controllers\PagesController::class, 'csharpregintermediate'])->name('csharpintermediatetry.csharpintermediate');
    Route::get('csharpadvancetry',[\App\Http\Controllers\PagesController::class, 'csharpregadvance'])->name('csharpadvancetry.csharpadvance');

    Route::get('phpquiztry1',[\App\Http\Controllers\PagesController::class, 'phpquizs1'])->name('phpquiztry1.phpquiz1');
    Route::get('phpquiztry2',[\App\Http\Controllers\PagesController::class, 'phpquizs2'])->name('phpquiztry2.phpquiz2');
    Route::get('phpquiztry3',[\App\Http\Controllers\PagesController::class, 'phpquizs3'])->name('phpquiztry3.phpquiz3');
    Route::get('phpquiztry4',[\App\Http\Controllers\PagesController::class, 'phpquizs4'])->name('phpquiztry4.phpquiz4');
    Route::get('phpquiztry5',[\App\Http\Controllers\PagesController::class, 'phpquizs5'])->name('phpquiztry5.phpquiz5');

    Route::get('javaquiztry1',[\App\Http\Controllers\PagesController::class, 'javaquizs1'])->name('javaquiztry1.javaquiz1');
    Route::get('javaquiztry2',[\App\Http\Controllers\PagesController::class, 'javaquizs2'])->name('javaquiztry2.javaquiz2');
    Route::get('javaquiztry3',[\App\Http\Controllers\PagesController::class, 'javaquizs3'])->name('javaquiztry3.javaquiz3');
    Route::get('javaquiztry4',[\App\Http\Controllers\PagesController::class, 'javaquizs4'])->name('javaquiztry4.javaquiz4');
    Route::get('javaquiztry5',[\App\Http\Controllers\PagesController::class, 'javaquizs5'])->name('javaquiztry5.javaquiz5');

    Route::get('csharpquiztry1',[\App\Http\Controllers\PagesController::class, 'csharpquizs1'])->name('csharpquiztry1.csharpquiz1');
    Route::get('csharpquiztry2',[\App\Http\Controllers\PagesController::class, 'csharpquizs2'])->name('csharpquiztry2.csharpquiz2');
    Route::get('csharpquiztry3',[\App\Http\Controllers\PagesController::class, 'csharpquizs3'])->name('csharpquiztry3.csharpquiz3');
    Route::get('csharpquiztry4',[\App\Http\Controllers\PagesController::class, 'csharpquizs4'])->name('csharpquiztry4.csharpquiz4');
    Route::get('csharpquiztry5',[\App\Http\Controllers\PagesController::class, 'csharpquizs5'])->name('csharpquiztry5.csharpquiz5');


    Route::resource('/phpquiztry1update', 'App\Http\Controllers\QuizScore\phpquiztry1update');
    Route::resource('/phpquiztry2update', 'App\Http\Controllers\QuizScore\phpquiztry2update');
    Route::resource('/phpquiztry3update', 'App\Http\Controllers\QuizScore\phpquiztry3update');
    Route::resource('/phpquiztry4update', 'App\Http\Controllers\QuizScore\phpquiztry4update');
    Route::resource('/phpquiztry5update', 'App\Http\Controllers\QuizScore\phpquiztry5update');
    Route::resource('/javaquiztry1update', 'App\Http\Controllers\QuizScore\javaquiztry1update');
    Route::resource('/javaquiztry2update', 'App\Http\Controllers\QuizScore\javaquiztry2update');
    Route::resource('/javaquiztry3update', 'App\Http\Controllers\QuizScore\javaquiztry3update');
    Route::resource('/javaquiztry4update', 'App\Http\Controllers\QuizScore\javaquiztry4update');
    Route::resource('/javaquiztry5update', 'App\Http\Controllers\QuizScore\javaquiztry5update');
    Route::resource('/csharpquiztry1update', 'App\Http\Controllers\QuizScore\csharpquiztry1update');
    Route::resource('/csharpquiztry2update', 'App\Http\Controllers\QuizScore\csharpquiztry2update');
    Route::resource('/csharpquiztry3update', 'App\Http\Controllers\QuizScore\csharpquiztry3update');
    Route::resource('/csharpquiztry4update', 'App\Http\Controllers\QuizScore\csharpquiztry4update');
    Route::resource('/csharpquiztry5update', 'App\Http\Controllers\QuizScore\csharpquiztry5update');



    //Quiz resources

    Route::resource('/phpquizresource', 'App\Http\Controllers\ControllerPhpquiz');
    Route::resource('/javaquizresource', 'App\Http\Controllers\ControllerJavaquiz');
    Route::resource('/csharpquizresource', 'App\Http\Controllers\ControllerCsharpquiz');
    
    Route::resource('/phpquizget', 'App\Http\Controllers\Quizzesphp');
    Route::resource('/phpquizgetinter', 'App\Http\Controllers\Quizzesphpinter');
    Route::resource('/phpquizgetadva', 'App\Http\Controllers\Quizzesphpadva');

    Route::resource('/javaquizget', 'App\Http\Controllers\Quizzesjava');
    Route::resource('/javaquizgetinter', 'App\Http\Controllers\Quizzesjavainter');
    Route::resource('/javaquizgetadva', 'App\Http\Controllers\Quizzesjavaadva');

    Route::resource('/csharpquizget', 'App\Http\Controllers\Quizzescsharp');
    Route::resource('/csharpquizgetinter', 'App\Http\Controllers\Quizzescsharpinter');
    Route::resource('/csharpquizgetadva', 'App\Http\Controllers\Quizzescsharpadva');



    //Quiz content
    Route::get('/phpquizgame', 'App\Http\Controllers\PagesController@phpgquiz');
    Route::get('/phpquizcreate', 'App\Http\Controllers\PagesController@phpgquizcreate');
    Route::get('/phpquizbasics','App\Http\controllers\PagesController@phpquizbasic');
    Route::get('/phpquizinter','App\Http\controllers\PagesController@phpquizintermed');
    Route::get('/phpquizadva','App\Http\controllers\PagesController@phpquizadvanced');

    Route::get('/javaquizgame','App\Http\Controllers\PagesController@javagquiz');
    Route::get('/javaquizcreate', 'App\Http\Controllers\PagesController@javaquizcreate');
    Route::get('/javaquizbasics','App\Http\controllers\PagesController@javaquizbasic');
    Route::get('/javaquizinter','App\Http\controllers\PagesController@javaquizintermed');
    Route::get('/javaquizadva','App\Http\controllers\PagesController@javaquizadvanced');

    Route::get('/csharpquizgame','App\Http\Controllers\PagesController@csharpgquiz');
    Route::get('/csharpquizcreate', 'App\Http\Controllers\PagesController@csharpgquizcreate');
    Route::get('/csharpquizbasics','App\Http\controllers\PagesController@csharpquizbasic');
    Route::get('/csharpquizinter','App\Http\controllers\PagesController@csharpquizintermed');
    Route::get('/csharpquizadva','App\Http\controllers\PagesController@csharpquizadvanced');


    //Difficulty Selection
    Route::get('difficultylevel',[\App\Http\Controllers\PagesController::class, 'phpquizdif'])->name('difficultylevel.phpdifficulty');
    Route::get('phpquizbasicdifficult',[\App\Http\Controllers\PagesController::class, 'phpquizbas'])->name('difficultylevel.phpdquizbasic');
    Route::get('phpquizinterdifficult',[\App\Http\Controllers\PagesController::class, 'phpquizinter'])->name('difficultylevel.phpdquizinter');
    Route::get('phpquizadvadifficult',[\App\Http\Controllers\PagesController::class, 'phpquizadva'])->name('difficultylevel.phpdquizadvance');


    Route::get('difficultyleveljava',[\App\Http\Controllers\PagesController::class, 'javaquizdif'])->name('difficultyleveljava.javadifficulty');
    Route::get('javaquizbasicdifficult',[\App\Http\Controllers\PagesController::class, 'javaquizbas'])->name('difficultyleveljava.javadquizbasic');
    Route::get('javaquizinterdifficult',[\App\Http\Controllers\PagesController::class, 'javaquizinter'])->name('difficultyleveljava.javadquizinter');
    Route::get('javaquizadvadifficult',[\App\Http\Controllers\PagesController::class, 'javaquizadva'])->name('difficultyleveljava.javadquizadvance');


    Route::get('difficultylevelcsharp',[\App\Http\Controllers\PagesController::class, 'csharpquizdif'])->name('difficultylevelcsharp.csharpdifficulty');
    Route::get('csharpquizbasicdifficult',[\App\Http\Controllers\PagesController::class, 'csharpquizbas'])->name('difficultylevelcsharp.csharpquizbasic');
    Route::get('csharpquizinterdifficult',[\App\Http\Controllers\PagesController::class, 'csharpquizinter'])->name('difficultylevelcsharp.csharpquizinter');
    Route::get('csharpquizadvadifficult',[\App\Http\Controllers\PagesController::class, 'csharpquizadva'])->name('difficultylevelcsharp.csharpquizadva');
    //Scoring resource

    Route::resource('/phpscoring', 'App\Http\Controllers\PhpScoringController');
    Route::resource('/phpscoringinter', 'App\Http\Controllers\PhpScoringControllerinter');
    Route::resource('/phpscoringadva', 'App\Http\Controllers\PhpScoringControlleradvance');
    Route::resource('/userscoring', 'App\Http\Controllers\UserScoring');
    Route::resource('/phpinsquiz', 'App\Http\Controllers\PhpInsQuiz');


    Route::resource('/javascoring', 'App\Http\Controllers\JavaScoringController');
    Route::resource('/javascoringinter', 'App\Http\Controllers\JavaScoringControllerinter');
    Route::resource('/javascoringadva', 'App\Http\Controllers\JavaScoringControlleradva');

    Route::resource('/csharpscoring', 'App\Http\Controllers\CsharpScoringController');
    Route::resource('/csharpscoringinter', 'App\Http\Controllers\CsharpScoringControllerinter');
    Route::resource('/csharpscoringadva', 'App\Http\Controllers\CsharpScoringControlleradva');


    //insertingquiz
    Route::get('/insertquiz','App\Http\controllers\PagesController@phpquizins');
    Route::get('/insertquizinter','App\Http\controllers\PagesController@phpquizinsinter');
    Route::get('/insertquizadva','App\Http\controllers\PagesController@phpquizinsadva');


    Route::get('/javainsertquiz','App\Http\controllers\PagesController@javaquizins');
    Route::get('/javainsertquizinter','App\Http\controllers\PagesController@javaquizinsinter');
    Route::get('/javainsertquizadva','App\Http\controllers\PagesController@javaquizinsadva');

    Route::get('/insertquizcsharp','App\Http\controllers\PagesController@csharpquizins');
    Route::get('/insertquizcsharpinter','App\Http\controllers\PagesController@csharpquizinsinter');
    Route::get('/insertquizcsharpadva','App\Http\controllers\PagesController@csharpquizinsadva');


    Route::get('/quiz','App\Http\Controllers\QuizController@index');
    Route::get('/quiz/php/{id}','App\Http\Controllers\QuizController@php_specific_quiz');


    //Required Score
    Route::get('/phpquizcreaterequired', 'App\Http\Controllers\PagesController@phpgquizcreate');
    Route::get('/phpquizrequire', 'App\Http\Controllers\PagesController@requiredscorephp');
    Route::resource('/reqscores', 'App\Http\Controllers\LevelRequirementController');
    Route::get('/phpquizreqviews', 'App\Http\Controllers\PagesController@phpquizreqview');
   

});


Route::get('/phpbasic','App\Http\controllers\PagesController@basicphp');
Route::get('/phpbasic','App\Http\controllers\PagesController@basicphp');
Route::get('/showphptry','App\Http\controllers\PhptabController@showphp');
Route::get('/guest','App\Http\controllers\PagesController@guest');
Route::get('/about','App\Http\controllers\PagesController@about');

Route::get('/createphp','App\Http\controllers\PagesController@createp');
Route::get('/createjava','App\Http\controllers\PagesController@createj');
Route::get('/createcsharp','App\Http\controllers\PagesController@createc');

Route::get('/phpdiff','App\Http\controllers\PagesController@phpdiff');
Route::get('/cdiff','App\Http\controllers\PagesController@cdiff');
Route::get('/javadiff','App\Http\controllers\PagesController@javadiff');
Route::get('/phpintermediate','App\Http\controllers\PagesController@intermediatephp');
Route::get('/phpadvance','App\Http\controllers\PagesController@advancephp');
Route::get('/javaadvancedata','App\Http\controllers\PagesController@advancejava');
Route::get('/javabasicdata','App\Http\controllers\PagesController@basicjava');
Route::get('/javaintermediatedata','App\Http\controllers\PagesController@intermediatejava');
Route::get('/cbasic','App\Http\controllers\PagesController@basicc');
Route::get('/cintermediate','App\Http\controllers\PagesController@intermediatec');
Route::get('/cadvance','App\Http\controllers\PagesController@advancec');

Route::resource('/postphp', 'App\Http\Controllers\PhptabController');
Route::resource('/phpbasictrylang', 'App\Http\Controllers\PhpShowIndex');
Route::resource('/javabasicresource', 'App\Http\Controllers\JavaShowInfo');
Route::resource('/javapost', 'App\Http\Controllers\JavatabController');
Route::resource('/csharpresource', 'App\Http\Controllers\CsharpShowInfo');
Route::resource('/phpshowguest', 'App\Http\Controllers\PhpGuestShow');
Route::resource('/javaguest', 'App\Http\Controllers\JavaGuestShow');
Route::resource('/csharpguest', 'App\Http\Controllers\CsharpGuestShow');
Route::resource('/cpost', 'App\Http\Controllers\CtabController');
Route::resource('/userinfos', 'App\Http\Controllers\UserInfo');
Route::resource('/usermailings', 'App\Http\Controllers\UserMailing');

Route::resource('/javaguestadvance', 'App\Http\Controllers\JavaGuestAdvance');
Route::resource('/javaregisadvance', 'App\Http\Controllers\JavaRegisAdvance');
Route::resource('/csharpguestadvance', 'App\Http\Controllers\CsharpGuestAdvance');
Route::resource('/csharpregisadvance', 'App\Http\Controllers\CsharpRegisAdvance');
Route::resource('/phpguestadvance', 'App\Http\Controllers\PhpGuestAdvance');
Route::resource('/phpregisadvance', 'App\Http\Controllers\PhpRegisAdvance');
Route::resource('/adminadvancejava', 'App\Http\Controllers\AdminAdvanceJava');
Route::resource('/adminadvancecsharp', 'App\Http\Controllers\AdminCsharp');
Route::resource('/adminadvancephp', 'App\Http\Controllers\AdminAdvancePhp');

Route::get('/phpbasic2','App\Http\controllers\PagesController@phpbasic');
Route::get('/phpintermediate2','App\Http\controllers\PagesController@phpintermediate');
Route::get('/phpadvance2','App\Http\controllers\PagesController@phpadvance');
Route::get('/phpvariable','App\Http\controllers\PagesController@phpvariable');
Route::get('/phpcomment','App\Http\controllers\PagesController@phpcomment');
Route::get('/phpconstruct','App\Http\controllers\PagesController@phpconstruct');
Route::get('/phpdestruct','App\Http\controllers\PagesController@phpdestruct');
Route::get('/phpconnection','App\Http\controllers\PagesController@phpconnection');
Route::get('/phpinserting','App\Http\controllers\PagesController@phpinserting');
Route::get('/javabasic','App\Http\controllers\PagesController@javabasic');
Route::get('/javaint','App\Http\controllers\PagesController@javaint');
Route::get('/javafloat','App\Http\controllers\PagesController@javafloat');
Route::get('/javachar','App\Http\controllers\PagesController@javachar');
Route::get('/javabool','App\Http\controllers\PagesController@javabool');
Route::get('/javaintermediate','App\Http\controllers\PagesController@javaintermediate');
Route::get('/javaadvance','App\Http\controllers\PagesController@javaadvance');
Route::get('/phpintroguest','App\Http\controllers\PagesController@phpintroguest');
Route::get('/javaintro','App\Http\controllers\PagesController@javaintro');
Route::get('/cintro','App\Http\controllers\PagesController@cintro');
Route::get('/profile','App\Http\controllers\PagesController@profile');
Route::get('/cwriteline','App\Http\controllers\PagesController@cwriteline');
Route::get('/cvariable','App\Http\controllers\PagesController@cvariable');
Route::get('/cdata','App\Http\controllers\PagesController@cdata');
Route::get('/cuserinput','App\Http\controllers\PagesController@cuserinput');
Route::get('/cnumberinput','App\Http\controllers\PagesController@cnumberinput');
Route::get('/cinheritance','App\Http\controllers\PagesController@cinheritance');
Route::get('/carray','App\Http\controllers\PagesController@carray');
Route::get('/csql','App\Http\controllers\PagesController@csql');
Route::get('/cquiz','App\Http\controllers\PagesController@cquiz');
Route::get('/javaquiz','App\Http\controllers\PagesController@javaquiz');
Route::get('/phpquiz','App\Http\controllers\PagesController@phpquiz');
Route::get('/phpquiz2','App\Http\controllers\PagesController@phpquiz2');
Route::get('/javaquiz2','App\Http\controllers\PagesController@javaquiz2');
Route::get('/javaquiz3','App\Http\controllers\PagesController@javaquiz3');
Route::get('/javaquiz4','App\Http\controllers\PagesController@javaquiz4');
Route::get('/javaquiz5','App\Http\controllers\PagesController@javaquiz5');
Route::get('/cquiz2','App\Http\controllers\PagesController@cquiz2');
Route::get('/cquiz3','App\Http\controllers\PagesController@cquiz3');
Route::get('/cquiz4','App\Http\controllers\PagesController@cquiz4');
Route::get('/cquiz5','App\Http\controllers\PagesController@cquiz5');
Route::get('/phpquiz3','App\Http\controllers\PagesController@phpquiz3');
Route::get('/phpquiz4','App\Http\controllers\PagesController@phpquiz4');
Route::get('/phpquiz5','App\Http\controllers\PagesController@phpquiz5');
Route::get('/phpintro2','App\Http\controllers\PagesController@phpintro2');
Route::get('/phpintro3','App\Http\controllers\PagesController@phpintro3');
Route::get('/cintro2','App\Http\controllers\PagesController@cintro2');
Route::get('/cintro3','App\Http\controllers\PagesController@cintro3');
Route::get('/javaintro2','App\Http\controllers\PagesController@javaintro2');
Route::get('/javaintro3','App\Http\controllers\PagesController@javaintro3');
Route::get('/javaarray','App\Http\controllers\PagesController@javaarray');
Route::get('/javaconditional','App\Http\controllers\PagesController@javaconditional');
Route::get('/javaOOP','App\Http\controllers\PagesController@javaOOP');
Route::get('/javacreatefile','App\Http\controllers\PagesController@javacreatefile');
Route::get('/adminadmin','App\Http\controllers\PagesController@adminadmin');
Route::get('/signup','App\Http\controllers\PagesController@signup');
Route::get('/homepage','App\Http\controllers\PagesController@homepage');
Route::get('/languages','App\Http\controllers\PagesController@languages');
Route::get('/phpbasicguest','App\Http\controllers\PagesController@phpbasicguest');
Route::get('/phpinterguest','App\Http\controllers\PagesController@phpshowguestinter');
Route::get('/phpadvaguest','App\Http\controllers\PagesController@phpshowguestadva');
Route::get('/javabasicguest','App\Http\controllers\PagesController@javaguestbasic');
Route::get('/javainterguest','App\Http\controllers\PagesController@javaguestinter');
Route::get('/javaadvaguest','App\Http\controllers\PagesController@javaguestadva');
Route::get('/csharpbasicguest','App\Http\controllers\PagesController@csharpbasicguest');
Route::get('/csharpinterguest','App\Http\controllers\PagesController@csharpinterguest');
Route::get('/csharpadvaguest','App\Http\controllers\PagesController@csharadvaguest');

 Route::get('/email',function(){

    Mail::to('loligaming.solito@gmail.com')->send(new TestMail());
    return new TestMail();
}); 
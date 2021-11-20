<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\javatab;
use App\Models\phptab;
use App\Models\csharp;
use App\Models\UserInfo;
use App\Models\phpquiz;
use App\Models\scoring;
use App\Models\reqscore;
use App\Models\javaquiz;
use App\Models\javascoring;
use App\Models\csharpscoring;
use App\Models\csharpquiz;
use App\Models\UserProfileEdit;
use App\Http\controllers\PagesController;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class PagesController extends Controller
{ 
    
    public function createp(){
    return view('admin.createphp');
    }
    public function createj(){
        return view('admin.createjava');
        }
        public function createc(){
            return view('admin.createc');
            }
    public function guest(){
        return view('main.homepage');
    }

    public function UserInfo(){
        return view('admin.userinfo');
    }

    public function admin(){
        return view('admin.admin');
    }
    public function phpdiff(){
        return view('admin.phpdiff');
    }
    public function cdiff(){
        return view('admin.cdiff');
    }
    public function javadiff(){
        return view('admin.javadiff');
    }

    public function about(){
        return view('main.about');
    }
    public function phpintro(){
        $phptabs = phptab::where('category', 'Basic')->get();
        return view('phpfunction.phpintro')->with('phptabs',$phptabs);
    }
    public function basicphp(){
        $phptabs = phptab::where('category','Basic')->get();
        return view('difficulty.phpbasic')->with('phptabs',$phptabs);
    }

    public function phpbasic(){
        $phptabs = phptab::where('category', 'Basic')->get();
        return view ('phpcodes.basic')->with('phptabs', $phptabs);
    }
    public function phpbasicguest(){
        $phptabs = phptab::where('category', 'Basic')->get();
        return view('phpguestbasictry.phpguestbasic')->with('phptabs',$phptabs);
        
    }
    public function phpshowguest(){
        $phptabs = phptab::where('category', 'Basic')->get();
        return view('phpguestbasictry.phpshowguest')->with('phptabs',$phptabs);
    }
    public function phpshowguestinter(){
        $phptabs = phptab::where('category', 'Intermediate')->get();
        return view('phpguestbasictry.phpguestintermediate')->with('phptabs',$phptabs);
    }
    public function phpshowguestadva(){
        $phptabs = phptab::where('category', 'Advance')->get();
        return view('phpguestbasictry.phpguestadvance')->with('phptabs',$phptabs);
    }
    
    public function intermediatephp(){
        $phptabs = phptab::where('category','Intermediate')->get();
        return view('difficulty.phpintermediate')->with('phptabs',$phptabs);
    }
    public function advancephp(){
        $phptabs = phptab::where('category','Advance')->get();
        return view('difficulty.phpadvance')->with('phptabs',$phptabs);
    }
    public function basicjava(){
        $javatabs = javatab::where('category','Basic')->get();
        return view('difficulty.javabasic')->with('javatabs',$javatabs);
    }
    public function intermediatejava(){
        $javatabs = javatab::where('category','Intermediate')->get();
        return view('difficulty.javaintermediate')->with('javatabs',$javatabs);
    }
    public function advancejava(){
        $javatabs = javatab::where('category','Advance')->get();
        return view('difficulty.javaadvance')->with('javatabs',$javatabs);
    }
    public function advancec(){
        $csharps = csharp::where('category','Advance')->get();
        return view('difficulty.cadvance')->with('csharps',$csharps);
    }
    public function basicc(){
        $csharps = csharp::where('category','Basic')->get();
        return view('difficulty.cbasic')->with('csharps',$csharps);
    }
    public function intermediatec(){
        $csharps = csharp::where('category','Intermediate')->get();
        return view('difficulty.cintermediate')->with('csharps',$csharps);
    }

    public function phpb(){
        $phptabs = phptab::where('category', 'Basic')->get();
        return view('phpbasictry.phpbasic')->with('phptabs',$phptabs);
    }

    public function phpinter(){
        $phptabs = phptab::where('category', 'Intermediate')->get();
        return view('phpintermediatetry.phpintermediate')->with('phptabs',$phptabs);
    }
    public function phpadva(){
        $phptabs = phptab::where('category', 'Advance')->get();
        return view('phpadvancetry.phpadvance')->with('phptabs',$phptabs);
    }

 


    public function javareg(){
        $javatabs = javatab::where('category','Basic')->get();
        return view('javaintroguesttry.javaintroguest')->with('javatabs',$javatabs);
    }
    public function javaregbasic(){
        $javatabs = javatab::where('category','Basic')->get();
        return view('javabasictry.javabasic')->with('javatabs',$javatabs);
    }
    public function javaregintermediate(){
        $javatabs = javatab::where('category','Intermediate')->get();
        return view('javaintermediatetry.javaintermediate')->with('javatabs',$javatabs);
    }
    public function javaregadvance(){
        $javatabs = javatab::where('category','Advance')->get();
        return view('javaadvancetry.javaadvance')->with('javatabs',$javatabs);
    }
    public function javaguestbasic(){
        $javatabs = javatab::where('category','Basic')->get();
        return view('javaguestlang.javabasicguest')->with('javatabs',$javatabs);
    }
    public function javaguestinter(){
        $javatabs = javatab::where('category','Intermediate')->get();
        return view('javaguestlang.javainterguest')->with('javatabs',$javatabs);
    }
    public function javaguestadva(){
        $javatabs = javatab::where('category','Advance')->get();
        return view('javaguestlang.javaadvanceguest')->with('javatabs',$javatabs);
    }

    public function csharpregintro(){
        $csharps = csharp::where('category','Basic')->get();
        return view('csharpintrotry.csharpintro')->with('csharps',$csharps);
    }
    public function csharpregbasic(){
        $csharps = csharp::where('category','Basic')->get();
        return view('csharpbasictry.csharpbasic')->with('csharps',$csharps);
    }
    public function csharpregintermediate(){
        $csharps = csharp::where('category','Intermediate')->get();
        return view('csharpintermediatetry.csharpintermediate')->with('csharps',$csharps);
    }

    public function csharpregadvance(){
        $csharps = csharp::where('category','Advance')->get();
        return view('csharpadvancetry.csharpadvance')->with('csharps',$csharps);
    }
    public function csharpbasicguest(){
        $csharps = csharp::where('category','Basic')->get();
        return view('csharpguestlang.csharpguestbasic')->with('csharps',$csharps);
    }
    public function csharpinterguest(){
        $csharps = csharp::where('category','Intermediate')->get();
        return view('csharpguestlang.csharpguestinter')->with('csharps',$csharps);
    }
    public function csharadvaguest(){
        $csharps = csharp::where('category','Advance')->get();
        return view('csharpguestlang.csharpguestadva')->with('csharps',$csharps);
    }


    // For Quiz function

    public function phpquizbasic(Request $request){
        $phpquizs = phpquiz::where('category','Basic')->get();
      
        return view('phpquizgame.phpquizbasic')->with('phpquizs',$phpquizs);
    }


    //for insert quiz function
    public function phpquizins(Request $request){
        return view('difficultylevel.phpquizstartins')->with('id',$request->id);
    }
    public function phpquizinsinter(Request $request){
        return view('difficultylevel.phpquizstartinsinter')->with('id',$request->id);
    }
    public function phpquizinsadva(Request $request){
        return view('difficultylevel.phpquizstartinsadva')->with('id',$request->id);
    }

    public function javaquizins(Request $request){
        return view('difficultyleveljava.javaquizstartins')->with('id',$request->id);
    }

    public function javaquizinsinter(Request $request){
        return view('difficultyleveljava.javaquizstartinsinter')->with('id',$request->id);
    }

    public function javaquizinsadva(Request $request){
        return view('difficultyleveljava.javaquizstartinsadva')->with('id',$request->id);
    }

    public function csharpquizins(Request $request){
        return view('difficultylevelcsharp.csharpquizstartins')->with('id',$request->id);
    }

    public function csharpquizinsinter(Request $request){
        return view('difficultylevelcsharp.csharpquizstartinsinter')->with('id',$request->id);
    }

    public function csharpquizinsadva(Request $request){
        return view('difficultylevelcsharp.csharpquizstartinsadva')->with('id',$request->id);
    }


    public function phpquizintermed(){
        $phpquizs = phpquiz::where('category','Intermediate')->get();
        return view('phpquizgame.phpquizintermediate')->with('phpquizs',$phpquizs);
    }

    public function phpquizadvanced(){
        $phpquizs = phpquiz::where('category','Advanced')->get();
        return view('phpquizgame.phpquizadvance')->with('phpquizs',$phpquizs);
    }

    public function phpgquiz(){
        return view('admin.phpquiz');
    }

    public function phpgquizcreate(){
        return view('phpquizgame.create');
    }
 

    public function javagquiz(){
        return view('admin.javaquiz');
    }

    public function javaquizcreate(){
        return view('javaquizgame.create');
    }

    public function javaquizbasic(){
        $javaquizs = javaquiz::where('category','Basic')->get();
        return view('javaquizgame.javaquizbasic')->with('javaquizs',$javaquizs);
    }

    public function javaquizintermed(){
        $javaquizs = javaquiz::where('category','Intermediate')->get();
        return view('javaquizgame.javaquizintermediate')->with('javaquizs',$javaquizs);
    }

    public function javaquizadvanced(){
        $javaquizs = javaquiz::where('category','Advanced')->get();
        return view('javaquizgame.javaquizadvance')->with('javaquizs',$javaquizs);
    }


    public function csharpquizbasic(){
        $csharpquizs = csharpquiz::where('category','Basic')->get();
        return view('csharpquizgame.csharpquizbasic')->with('csharpquizs',$csharpquizs);
    }

    public function csharpquizintermed(){
        $csharpquizs = csharpquiz::where('category','Intermediate')->get();
        return view('csharpquizgame.csharpquizintermediate')->with('csharpquizs',$csharpquizs);
    }

    public function csharpquizadvanced(){
        $csharpquizs = csharpquiz::where('category','Advanced')->get();
        return view('csharpquizgame.csharpquizadvance')->with('csharpquizs',$csharpquizs);
    }

    public function csharpgquiz(){
        return view('admin.csharpquiz');
    }

    public function csharpgquizcreate(){
        return view('csharpquizgame.create');
    }
 

  

    // for difficulty level

    public function phpquizdif(){

        $scorbas = scoring::where(['difficulty'=>'Basic', 'iduser' => Auth::user()->id])->count();
        $scorinter = scoring::where(['difficulty'=>'Intermediate','iduser'=>Auth::user()->id])->count();
        $scoradva = scoring::where(['difficulty'=>'Advanced', 'iduser'=>Auth::user()->id])->count();
        $phpquizreq = reqscore::where('Languages','PHP')->first();
        return view('difficultylevel.phpdifficulty')->with(['scorbas'=>$scorbas, 'scorinter'=>$scorinter, 'scoradva'=>$scoradva, 'phpquizreq'=>$phpquizreq]);
       

    }

    public function javaquizdif(){

        $scorbas = javascoring::where(['difficulty'=>'Basic', 'iduser' => Auth::user()->id])->count();
        $scorinter = javascoring::where(['difficulty'=>'Intermediate','iduser'=>Auth::user()->id])->count();
        $scoradva = javascoring::where(['difficulty'=>'Advanced', 'iduser'=>Auth::user()->id])->count();
        $javaquizreq = reqscore::where('Languages','Java')->first();
        return view('difficultyleveljava.javadifficulty')->with(['scorbas'=>$scorbas, 'scorinter'=>$scorinter, 'scoradva'=>$scoradva, 'javaquizreq'=>$javaquizreq]);


    }

    
    public function csharpquizdif(){

        $scorbas = csharpscoring::where(['difficulty'=>'Basic', 'iduser' => Auth::user()->id])->count();
        $scorinter = csharpscoring::where(['difficulty'=>'Intermediate','iduser'=>Auth::user()->id])->count();
        $scoradva = csharpscoring::where(['difficulty'=>'Advanced', 'iduser'=>Auth::user()->id])->count();
        $csharpquizreq = reqscore::where('Languages','Csharp')->first();
        return view('difficultylevelcsharp.csharpdifficulty')->with(['scorbas'=>$scorbas, 'scorinter'=>$scorinter, 'scoradva'=>$scoradva, 'csharpquizreq'=>$csharpquizreq]);


    }
    
    public function phpquizbas(User $user){
       
   // $phpquizs = phpquiz::where('category', 'Basic')->get();
   // $scorings = scoring::where(['difficulty'=>'Basic', 'iduser'=>Auth::user()->id])->first();
   // return view('difficultylevel.phpquizbasic')->with(['phpquizs'=>$phpquizs,'scoring'=>$scorings]);
    // $phpquizs = phpquiz::where('iduser',Auth::user()->id)->where('difficulty','Basic')->get();
   $phpquizs =phpquiz::where('category','Basic')->get();

    return view('difficultylevel.phpquizbasic',compact('phpquizs'));
    }

    public function phpquizinter(Request $request){
        $phpquizs = phpquiz::where('category', 'Intermediate')->get();

        return view('difficultylevel.phpquizinter',compact('phpquizs'));
    }

    public function phpquizadva(Request $request){
        $phpquizs = phpquiz::where('category', 'Advanced')->get();
        return view('difficultylevel.phpquizadvance', compact('phpquizs'));
    }

    public function javaquizbas(Request $request){
        $javaquizs = javaquiz::where('category', 'Basic')->get();
        return view('difficultyleveljava.javaquizbasic', compact('javaquizs'));
    }

    public function javaquizinter(Request $request){
        $javaquizs = javaquiz::where('category', 'Intermediate')->get();
        return view('difficultyleveljava.javaquizinter', compact('javaquizs'));
    }

    public function javaquizadva(Request $request){
        $javaquizs = javaquiz::where('category', 'Advanced')->get();
        return view('difficultyleveljava.javaquizadva', compact('javaquizs'));
    }

    

    public function csharpquizbas(Request $request){
        $csharpquizs = csharpquiz::where('category', 'Basic')->get();
        return view('difficultylevelcsharp.csharpquizbasic', compact('csharpquizs'));
    }

    public function csharpquizinter(Request $request){
        $csharpquizs = csharpquiz::where('category', 'Intermediate')->get();
        return view('difficultylevelcsharp.csharpquizinter', compact('csharpquizs'));
    }

    public function csharpquizadva(Request $request){
        $csharpquizs = csharpquiz::where('category', 'Advanced')->get();
        return view('difficultylevelcsharp.csharpquizadva', compact('csharpquizs'));
    }
    


    // Required Scores

    public function requiredscorephp(){
        return view('adminquizreq.phpquizreq');
    }

    public function phpquizcreatereq(){
        return view('adminquizreq.phpquizreq');
    }

    public function phpquizreqview(){
        $phpquizs = reqscore::all();
        return view('admintoolsreq.index')->with('phpquizs', $phpquizs);
    }




    public function phpintermediate(){
        return view('phpcodes.intermediate');
    }

    public function phpadvance(){
        return view('phpcodes.advance');
    }

    public function phpvariable(){
        return view('phpfunction.variable');
    }
    public function phpcomment(){
        return view('phpfunction.comment');
    }

    public function phpconstruct(){
        return view('phpfunction.construct');
    }
    public function phpdestruct(){
        return view('phpfunction.destruct');
    }
    public function phpconnection(){
        return view('phpfunction.connection');
    }
    public function phpinserting(){
            return view('phpfunction.inserting');
    }
    public function javabasic(){
        return view('javacodes.javabasic');
    }
    public function javaint(){
        return view('javafunction.int');
    }
    public function javaintro(){
        return view('javafunction.javaintro');
    }
    public function javafloat(){
        return view('javafunction.float');
    }
    public function javachar(){
        return view('javafunction.char');
    }
    public function javabool(){
        return view('javafunction.bool');
    }
    public function javaintermediate(){
        return view('javacodes.javaintermediate');
    }
    public function javaadvance(){
        return view('javacodes.javaadvance');
    }
    public function login(){
        return view ('LogIn.login');
    }
    public function adminadmin(){
        return view ('LogIn.adminadmin');
    }
    public function profile(){
        return view('LogIn.profile');
    }

    public function signup(){
        return view('LogIn.signup');
    }

    public function cintro(){
        return view('cfunction.cintro');
    }
    public function cwriteline(){
        return view('cfunction.cwriteline');
    }
    public function cvariable(){
        return view('cfunction.cvariable');
    }
    public function cdata(){
        return view('cfunction.cdata');
    }
    public function cuserinput(){
        return view('cfunction.cuserinput');
    }
    public function cnumberinput(){
        return view('cfunction.cnumberinput');
    }
    public function cinheritance(){
        return view('cfunction.cinheritance');
    }
    public function carray(){
        return view('cfunction.carray');
    }
    public function csql(){
        return view('cfunction.csql');
    }
    public function cquiz(){
        return view('quizzes.cquiz');
    }
    public function javaquiz(){
        return view('quizzes.javaquiz');
    }
    public function phpquiz(){
        return view('quizzes.phpquiz');
    }
    public function phpquiz2(){
        return view('quizzes.phpquiz2');
    }
    public function javaquiz2(){
        return view('quizzes.javaquiz2');
    }
    public function javaquiz3(){
        return view('quizzes.javaquiz3');
    }
    public function javaquiz4(){
        return view('quizzes.javaquiz4');
    }
    public function javaquiz5(){
        return view('quizzes.javaquiz5');
    }
    public function cquiz2(){
        return view('quizzes.cquiz2');
    }
    public function cquiz3(){
        return view('quizzes.cquiz3');
    }
    public function cquiz4(){
        return view('quizzes.cquiz4');
    }
    public function cquiz5(){
        return view('quizzes.cquiz5');
    }
    public function phpquiz5(){
        return view('quizzes.phpquiz5');
    }
    public function phpquiz3(){
        return view('quizzes.phpquiz3');
    }
    public function phpquiz4(){
        return view('quizzes.phpquiz4');
    }
    public function phpintro2(){
        return view('phpfunction.phpintro2');
    }
    public function phpintroguest(){
        return view('phpfunction.phpintroguest');
    }
    public function phpintro3(){
        return view('phpfunction.phpintro3');
    }
    public function cintro2(){
        return view('cfunction.cintro2');
    }
    public function cintro3(){
        return view('cfunction.cintro3');
    }
    public function javaintro2(){
        return view('javafunction.javaintro2');
    }
    public function javaintro3(){
        return view('javafunction.javaintro3');
    }
    public function javaarray(){
        return view('javafunction.javaarray');
    }
    public function javaconditional(){
        return view('javafunction.javaconditional');
    }
    public function javaOOP(){
        return view('javafunction.javaOOP');
    }
    public function javacreatefile(){
        return view('javafunction.javacreatefile');
    }

    public function signup1(){
        return view('main.signup');
    }

    public function homepage(){
        return view('main.homepage');
    }
    public function languages(){
        return view('main.languages');
    }



    public function phpquizs1(){
        return view('phpquiztry1.phpquiz1');
    }
    public function phpquizs2(){
        return view('phpquiztry2.phpquiz2');
    }
    public function phpquizs3(){
        return view('phpquiztry3.phpquiz3');
    }
    public function phpquizs4(){
        return view('phpquiztry4.phpquiz4');
    }
    public function phpquizs5(){
        return view('phpquiztry5.phpquiz5');
    }


    public function javaquizs1(){
        return view('javaquiztry1.javaquiz1');
    }
    public function javaquizs2(){
        return view('javaquiztry2.javaquiz2');
    }
    public function javaquizs3(){
        return view('javaquiztry3.javaquiz3');
    }
    public function javaquizs4(){
        return view('javaquiztry4.javaquiz4');
    }
    public function javaquizs5(){
        return view('javaquiztry5.javaquiz5');
    }


    public function csharpquizs1(){
        return view('csharpquiztry1.csharpquiz1');
    }
    public function csharpquizs2(){
        return view('csharpquiztry2.csharpquiz2');
    }
    public function csharpquizs3(){
        return view('csharpquiztry3.csharpquiz3');
    }
    public function csharpquizs4(){
        return view('csharpquiztry4.csharpquiz4');
    }
    public function csharpquizs5(){
        return view('csharpquiztry5.csharpquiz5');
    }

    public function EditProfile(){
        return view('ProfileEditing.ProfileEdit');
    }

}

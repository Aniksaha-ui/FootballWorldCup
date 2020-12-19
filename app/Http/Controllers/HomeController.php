<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Player;
use App\match;
use App\team;
use App\sta;
use App\group;
use App\User;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

     public function create()
    {
        //


$teams=team::all();
        return view('fontEnd.forms.addplayer',['teams'=>$teams]);
         // return view('fontEnd.forms.addplayer');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

      public function reviews(){
            return view('fontEnd.dashboard.template');
        }

 public function dashboard(){
            return view('fontEnd.dashboard.template');
        }

  public function age(){
            return view('afterlogin.dashboard.rightnavbar');
        } 


  public function addteam(){
            return view('fontEnd.forms.addteam');
        } 

         public function addgoal(){

        $players=Player::all();
        $players1=match::all();
        return view('fontEnd.forms.addgoal',['players'=>$players],['players1'=>$players1]);
        
            //return view('fontEnd.forms.addgoal');
        }


        public function def(){
             $match=match::all();   
         return view('fontEnd.forms.addgoal',['match'=>$match]);
        } 

 public function addsta(){
            return view('fontEnd.forms.addsta');
        } 

 public function addmatch(){
            return view('fontEnd.forms.addmatch');
        } 

         public function addsquard(){
            // return view('fontEnd.forms.addsquard');

        $players=PLayer::all();
        return view('fontEnd.forms.addsquard',['players'=>$players]);



        } 

          public function addpost(){

            $players=User::all();

            return view('fontEnd.forms.addpost',['players'=>$players]);
        } 

         public function addgroup(){
            return view('fontEnd.forms.addgroup');
        } 

         public function teamforaddgroup()
    {
        //
      $players=team::all();
        return view('fontEnd.forms.addgroup',['players'=>$players]);
    }

          public function teamcodeformatch()
    {
        //
      $players=team::all();
 $players1=team::all();
 // $players2=sta::all();

        return view('fontEnd.forms.addmatch',['players'=>$players],['players1'=>$players1]);
                
    }

    public function selectgroupforteam(){

        $players=group::all();
        return view('fontEnd.forms.addteam',['players'=>$players]);

    }


}

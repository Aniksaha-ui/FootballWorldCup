<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;
use App\team;
use DB;

class playerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //


$teams=team::all();
        return view('fontEnd.forms.addplayer',['teams'=>$teams]);
         // return view('fontEnd.forms.addplayer');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
            Player::create($request->all());
//        return "data inserted successfully";

       /* DB::table('players')->insert([
            'p_name'=>$request->p_name,
            'player_position'=>$request->player_position,
            'player_number' =>$request->player_number,
            'status'=>$request->status,
        ]);*/
        
           return redirect('/addsquard');    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */





 public function showactiveplayer()
    {
        //
         $players=DB::table('teams')
        ->join('players','teams.t_code','=','players.t_code')
        ->join('squards','squards.p_id','=','players.id')
        ->where('status','1')
         ->select('players.id','p_name','player_position','player_number','t_name','sq_id')
         ->get();
          // echo "<pre>";
          // print_r($players);}
        return view('fontEnd.showdata1.allactiveplayers',['players'=>$players]);    }






    public function show()
    {
        //
         $players=DB::table('teams')
        ->join('players','teams.t_code','=','players.t_code')
        ->join('squards','squards.p_id','=','players.id')
        //->where('status','1')
         ->select('players.id','p_name','player_position','player_number','t_name','sq_id','status')
         ->get();
          // echo "<pre>";
          // print_r($players);}
        return view('fontEnd.showdata1.allplayers',['players'=>$players]);    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
            $player = new Player;
            //$player->name = $request->p_name;
             $players=Player::where('p_name', $request->p_name )->get();
             // $players=Player::where('p_name', $request->p_name )->count();
             // echo"<table>";
             // echo"<tr>";
             // echo"<th>";
             // echo"player Name";
             // echo"</th>";
             // echo"<th>";
             // echo "count";
             // echo "</th>";
             // echo "<tr>";
             // echo"<tr>";
             // echo"<th>";
             // echo $request->p_name;
             // echo"</th>";
             // echo"<th>";
             // echo $players;
             // echo "</th>";
             // echo "<tr>";
             // echo"</table>";
            return view('fontEnd.showdata.searchedplayer',['players'=>$players]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


 public function argentina(){

$players=DB::table('teams')
        ->join('players','teams.t_code','=','players.t_code')
        ->join('squards','squards.p_id','=','players.id')
        ->where('t_name','$request->t_name')
         ->select('players.id','p_name','player_position','player_number','t_name','sq_id')
         ->get();
         //   echo "<pre>";
         // print_r($players);
        return view('fontEnd.showdata.argentina',['players'=>$players]);

    }


    public function abc()
    {
        //
        
        return view('fontEnd.forms.search'); 


        }

    // public function player_country(){
    //    $players=DB::table('matches')
    //     ->join('stas','stas.id','=','s_id')
    //      ->select('s_name')
    //      ->get();
    //      echo "<pre>";
    //      print_r($players);
    //  }    



    public function player_country(){
       $players=DB::table('teams')
        ->join('players','teams.t_code','=','players.t_code')
         ->select('t_name','p_name')
         ->get();
         //  echo "<pre>";
         // print_r($players);
          return view('fontEnd.showdata.playerdetail',['players'=>$players]);
     }  




     public function showteamsplayer(){
        return view('fontEnd.searchform.showteamsplayer');
     }

    

}

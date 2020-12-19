<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\team;
use App\goal;
use DB;

class teamController extends Controller
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

          team::create($request->all());
        return "data inserted successfully";

       /* DB::table('players')->insert([
            'p_name'=>$request->p_name,
            'player_position'=>$request->player_position,
            'player_number' =>$request->player_number,
            'status'=>$request->status,
        ]);*/
    
            return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
      $players=team::all();
        return view('fontEnd.showdata.teaminformation',['players'=>$players]);
    }

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
    public function update(Request $request, $id)
    {
        //
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


    public function showteamsplayers(){

                return view('fontEnd.searchform.showteamsplayer');

    }

  public function showteamsplayer(Request $request){

           $players=DB::table('teams')
        ->join('players','teams.t_code','=','players.t_code')
        
        ->where('t_name','like','%'.$request->t_name.'%')
         ->select('players.id','p_name','player_position','player_number','t_name')
         ->get();
         //   echo "<pre>";
         // print_r($players);
        return view('fontEnd.showdata.showteamsplayers',['players'=>$players]);

   

    }

    public function showteams(){

        $players=DB::table('teams')
        ->join('groups','teams.g_id','=','groups.id')
         ->select('t_name','t_code','group_name')
        ->get();        
        
        return view('fontEnd.showdata1.teaminformation',['players'=>$players]);

    }



    // public function groupbyplayerform(){
    //     return view('fontEnd.searchform.groupbyplayerform');
    // }


    public function groupbyplayers(){

// $players= goal::groupBy('p_id')->select('p_id', DB::raw('count(*) as total'))->get();

$players = DB::table("goals")
            ->select("p_id","p_name" ,DB::raw('COUNT(*) as total_quantity'))
          ->join('players','goals.p_id','=','players.id')
            ->groupBy("p_id","p_name")

           // ->having("total_quantity","<",DB::raw("items.min_quantity"))
            ->get();
                    return view('fontEnd.showdata1.perplayergoal',['players'=>$players]);

// print_r($players);


//            echo "<pre>";
//          print_r($players);
    }

  




}

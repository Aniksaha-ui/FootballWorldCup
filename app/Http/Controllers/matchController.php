<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\match;
use DB;

class matchController extends Controller
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


          match::create($request->all());
       // return "data inserted successfully";

       /* DB::table('players')->insert([
            'p_name'=>$request->p_name,
            'player_position'=>$request->player_position,
            'player_number' =>$request->player_number,
            'status'=>$request->status,
        ]);*/
            
             return redirect('/addgoal');

            return "data insert successfully";


            // return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

    $players=DB::table('matches')
        ->join('teams','matches.t_code','=','teams.t_code')
       // ->join('stas','matches.s_id','=','stas.s_id')
       
         ->select('t_name','match_id','m_date')
         ->get();
          
$players1=DB::table('matches')
        ->join('teams','matches.t_code1','=','teams.t_code')
      // ->join('stas','matches.s_id','=','stas.s_id')
       
         ->select('t_name','match_id','m_date')
         ->get();
          




           return view('fontEnd.showdata1.fixture',['players'=>$players],['players1'=>$players1]);      



  echo "<pre>";
         print_r($players);
           echo "<pre>";
         print_r($players1);

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
}

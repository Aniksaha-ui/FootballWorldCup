        // return view('fontEnd.showdata1.allactiveplayers',['players'=>$players]);    }
 // $players1=DB::table('matches')
 //        ->join('teams','matches.t_code1','=','teams.t_code')
 //        ->join('stas','matches.s_id','=','stas.s_id')
 //        ->select('t_name','match_id','m_date','s_name')
 //         ->get();




           return view('fontEnd.showdata1.fixture',['players'=>$players],['players1'=>$players1]);      

<?php

namespace App\Http\Controllers\match;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\country;
use App\model\group;
use App\model\match;
class matches extends Controller
{
    
    public function __construct(){
        $this->middleware('auth');
    }

   // show matches // 
    public function index()
    {
        $matches = match::all();
        return view('dash.matches.match', compact('matches'));
    }

   
     
    // Create a match between two countries //
    public function create()
    {
        $teames = country::pluck('name', 'id');
        $groups = group::orderby('name')->pluck('name', 'id');
        return view('dash.matches.match_new', compact('teames', 'groups'));
    }

   
   // save matches //
    public function store(Request $request)
    {   
        
    $new = new match;
    $new->group_id = $request->get('group_id');
    $new->teame1 = $request->get('teame1');
    $new->teame2 = $request->get('teame2');
    $new->points = $request->get('points');
    $new->goals = $request->get('teame1g') + $request->get('teame2g');
    $new->teame1g = $request->get('teame1g');
    $new->teame2g = $request->get('teame2g');
    $new->save(); 
    return redirect('matches');
         
    
    }


    
    public function edit($id)
    {
        $teamedi = country::pluck('name', 'id');
        $matched = match::find($id);
        $grouped = group::pluck('name', 'id');
        return view('dash.matches.match_edit', compact('matched','grouped', 'teamedi'));
    }

  
    public function update(Request $request, $id)
    {
       
        match::find($id)->update($request->all());
        return redirect('matches');
      
    }

    
    public function destroy($id)
    {
        match::find($id)->delete();
        return back();
    }
    
    


}///// end class /////

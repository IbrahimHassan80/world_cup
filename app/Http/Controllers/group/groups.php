<?php

namespace App\Http\Controllers\group;

use Illuminate\Http\Request;
use App\model\group;
use App\model\match;
use App\Http\Controllers\Controller;
use App\http\requests\grouprequest;
class groups extends Controller
{
    
   public function __construct(){
        $this->middleware('auth');
    }

    
    // show group of matches //
    public function index()
    {
        $group = group::orderby('name')->paginate(10);

        return view('dash.groups.groups', compact('group'));
    }

   
   // create group //
    public function create()
    {
        
        return view('dash.groups.groups_new');
    }

    
    public function store(grouprequest $request)
    {
            
            group::create($request->all());
            return redirect('groups');

    }


    public function matchgroup($id){
    $group = group::find($id);
    $match = group::find($id)->matches()->get();
    return view('dash.groups.groupmatch', compact('group', 'match'));
    }


    

    public function edit($id)
    {
       $edit = group::find($id);
        return view('dash.groups.groups_edit', compact('edit'));
    }

   
    public function update(Request $request, $id)
    {
        $groupupdate = group::find($id);
        $groupupdate->update($request->all());
        return redirect('groups');
    }

    
    public function destroy($id)
    {
       // delete group with relatonship matches //
        $group = group::find($id);
        
        $group->matches()->delete();
        
        $group->delete();
        
        return back();
    

    }
}

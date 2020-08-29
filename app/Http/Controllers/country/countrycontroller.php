<?php

namespace App\Http\Controllers\country;
use App\model\country;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class countrycontroller extends Controller
{
   
    public function __construct(){
        $this->middleware('auth');
    }

    
    // show countrys //
    public function index()
    {
        $country = country::paginate(10);
        return view('dash.country.country', compact('country'));
    }

   
    
    // delete /
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'country_code'=>'required'
        ]);
        country::create($request->all());
        return redirect('cup');
    }

   
    public function edit($id)
    {
        $country = country::find($id);
        return view('dash.country.country_edit', compact('country'));
    }

    
    
    public function update(Request $request, $id)
    {
        $country = country::find($id);
        $country->update($request->all());
        return redirect('cup');
    }

    
    
    public function destroy($id)
    {
        $country = country::find($id)->delete();
        return redirect('cup');
    }
}

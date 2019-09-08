<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Resturant;

class ResturantController extends Controller
{
    public function submit(Request $request){
                // validating contact form
            $this->validate($request,[
                'name' => 'required',
                'address' => 'required',
                'contactnumber' => 'required'
            ]);

            $resturant = new Resturant;

            $resturant->name = $request->input('name');
            $resturant->address = $request->input('address');
            $resturant->contactno = $request->input('contactnumber');
            $resturant->extra_info = $request->input('extrainfo');
            $resturant->save();
            return redirect('/')->with('success','Resturant data saved successfully!');


    }

    public function showallresturant(){
        $resturants = Resturant::orderBy('created_at','desc')->paginate(3);
        return view('allresturant')->with('resturants',$resturants);
    }

    public function editresturant($id){
        
        $resturant = Resturant::find($id);
        return view('editresturant')->with('resturant',$resturant);
    }

    public function updateResturant(Request $request){

        $this->validate($request,[
            'name' => 'required',
            'address' => 'required',
            'contactnumber' => 'required'
        ]);
        
        $resturant = Resturant::find($request->input('resturantid'));
        $resturant->name = $request->input('name');
        $resturant->address = $request->input('address');
        $resturant->contactno = $request->input('contactnumber');
        $resturant->extra_info = $request->input('extrainfo');
        $resturant->save();
        return redirect('/')->with('success','Resturant data updated successfully!');

    }

    public function deleteResturant(Request $request){
        $resturant = Resturant::find($request->input('resturantid'));
        $resturant->delete();
        return redirect('/')->with('success','Resturant data deleted successfully!');

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Position;
use App\Models\Country;
use App\Models\State;
use App\Models\City;
use App\Models\Minister;
use DB;

class HomeController extends Controller
{

    public function index()
    {
        return view('finance.index');
    }

    public function about()
    {
        return view('finance.about');
    }

    public function team()
    {
        return view('finance.team');
    }

    public function service()
    {
        return view('finance.service');
    }

    public function contact()
    {
        return view('finance.contact');
    }

    public function directorate()
    {
        return view('finance.directorate');
    }

    public function diary()
    {
        return view('finance.diary');
    }

    public function history()
    {
        return view('finance.inc.history');
    }


    public function redirect()
    {
        $usertype=Auth::user()->usertype;

        if($usertype=='1')
        {
            return view('admin.admin');
        }

        if($usertype>='2')
        {

            return view('admin.region');
        }

        else
        {
            return view('finance.index');
        }
    }


    public function new_member(Request $request)
    {
        $position['positions'] = Position::get(["position_name", "id"]);
        $data['countries'] = Country::get(["name", "id"]);
        return view('admin.new_member', $data , $position);
    }

    public function getStates(Request $request)
    {
        $states = \DB::table('states')
            ->where('country_id', $request->country_id)
            ->get();

        if (count($states) > 0) {
            return response()->json($states);
        }
    }

    public function getCities(Request $request)
    {
        $cities = \DB::table('cities')
            ->where('state_id', $request->state_id)
            ->get();

        if (count($cities) > 0) {
            return response()->json($cities);
        }
    }
    public function getData(Request $request)
    {
        $user = Auth::user();
        $data=new minister;
        $data->created_by=$user->id;
        $data->region=$request->region;
        $data->district=$request->district;
        $data->church=$request->church;
        $data->minister=$request->minister;
        $data->position=$request->position;

        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/photos');
            $image->move($destinationPath, $name);
            $data->image=$name;
        }
        $data->save();
        return redirect()->back()->with('message', 'Minister Added Successfully');
    }

    public function members_list()
    {
        $user = Auth::user();
        $created_by=$user->id;
        $minister = minister::where('created_by', $created_by)->get();
        return view('admin.members_list', compact('minister'));
    }

    public function update_minister($id)
    {

        $minister=minister::find($id);
        $position=position::all();
        $country = Country::get(["name", "id"]);
        return view('admin.update_minister', compact('minister', 'position', 'country'));
    }

    public function update_minister_confirm(Request $request, $id)
    {
        $minister=minister::find($id);
        $minister->region=$request->region;
        $minister->district=$request->district;
        $minister->church=$request->church;
        $minister->minister=$request->minister;

        if ($request->hasFile('image')) {
            $image      = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/photos');
            $image->move($destinationPath, $name);
            $minister->image=$name;
        }


        $minister->save();

        return redirect()->back()->with('message', 'Minister Updated Successfully');
    }

    public function credo()
    {
        $minister=minister::all();
        return view('admin.credo', compact('minister'));
    }

    public function cadi($id)
    {
        $minister = minister::where('id', $id)->first();
        return view('admin.cadi', compact('minister'));
    }

    


}

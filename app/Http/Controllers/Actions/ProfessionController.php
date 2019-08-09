<?php

namespace App\Http\Controllers\Actions;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

use App\Models\Industry;
use App\Models\Profession;
use Session;


class ProfessionController extends Controller
{
    public function index(){
        $professions = Profession::orderBy('created_at', 'desc')->get();
        //dd($professions);
        return view('admin.pages.profession.index', compact('professions'));
    }

    public function create(){
        $industry = Industry::all();
        return view('admin.pages.profession.create', compact('industry'));
    }

    public function store(Request $request){
        
        $request->validate([
            'name' => 'required|unique:professions',
            'industry_id' => 'required'
        ]);
        try {

            $profession = new Profession;
            $profession->slug = md5(uniqid(time()));
            $profession->name = $request->name;
            $profession->industry_id = $request->industry_id;
            $profession->status = 1;
            $profession->save();

            Session::Flash('success', 'Profession Created Successfully');
            return redirect()->route('profession.all');

        } catch (\Exception $e) {
            Session::Flash('error', 'Something went wrong, '.$e->getMessage());
            return redirect()->back();
        }

    }

    public function edit($slug){
        $profession = Profession::where('slug', $slug)->first();
        $industries   = Industry::all();
        return view('admin.pages.profession.edit', compact('profession', 'industries'));
    }

    public function update(Request $request, $slug){
        
        $request->validate([
            'name' => 'required'
        ]);

        try {
            
            $profession = Profession::where('slug', $slug)->first();
            $profession->name = $request->name;
            $profession->industry_id = $request->industry_id;
            $profession->updated_at = NOW();
            $profession->status = $request->status;
            $profession->save();

            Session::Flash('success', 'Profession Updated Successfully.');
            return redirect()->back();

        } catch (\Exception $e) {
            Session::Flash('success', 'Something went wrong, '.$e->getMessage());
            return redirect()->back();
        }
        
    }

    public function delete($slug){
        try {
            
            $profession = Profession::where('slug', $slug)->first();
            $profession->deleted_at = NOW();
            $profession->save();

            Session::Flash('success', 'Profession Deleted Successfully.');
            return redirect()->back();

        } catch (\Exception $e) {
            Session::Flash('success', 'Something went wrong, '.$e->getMessage());
            return redirect()->back();
        }
    }

    public function status($slug, $status){

        try {

            if($status == 1){
                Profession::where('slug', $slug)->update(['status' => 0]);    
            }else{
                Profession::where('slug', $slug)->update(['status' => 1]); 
            }

            Session::Flash('success', 'Profession Status Change Successfully.');
            return redirect()->back();
            
        } catch (Exception $e) {
            Session::Flash('success', 'Something went wrong, '.$e->getMessage());
            return redirect()->back();
        }
    }
}

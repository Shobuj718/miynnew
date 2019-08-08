<?php

namespace App\Http\Controllers\Actions;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Industry;
use Session;

use Illuminate\Support\Facades\Validator;

class IndustryController extends Controller
{
    public function index(){
        $industries = Industry::all();
        return view('admin.pages.industry.index', compact('industries'));
    }

    public function create(){
        return view('admin.pages.industry.create');
    }


    public function store(Request $request){

        $request->validate([
            'name' => 'required|unique:industries'
        ]);

        try {

            $industry = new Industry;
            $industry->slug = md5(uniqid(time()));
            $industry->name = $request->name;
            $industry->status = $request->status;
            $industry->save();

            Session::Flash('success', 'Industry Added Succesfully.');
            return redirect()->route('industry.all');

        } catch (\Exception $e) {
            Session::Flash('Something went wrong, '.$e->getMessage());
            return redirect()->route('industry.all');
        }
        
    }

    public function edit($slug){
        $industry = Industry::where('slug', $slug)->first();
        return view('admin.pages.industry.edit', compact('industry'));
    }

    public function update(Request $request, $slug){

        $request->validate([
            'name' => 'required'
        ]);

        try {

            $industry = Industry::where('slug', $slug)->first();
            $industry->name = $request->name;
            $industry->status = $request->status;
            $industry->updated_at = NOW();
            $industry->save();

            Session::Flash('success', 'Industry Updated Succesfully.');
            return redirect()->route('industry.all');
            
        } catch (\Exception $e) {
            Session::Flash('Something went wrong, '.$e->getMessage());
            return redirect()->back();
        }

    }

    public function active($slug)
    {
        $industry = Industry::where('slug', $slug)->first();
        return view('admin.pages.industry.status_change', compact('industry'));
    }

    public function change_status(Request $request, $slug){

        $industry = Industry::where('slug', $slug)->first();
        $industry->status = $request->status;
        $industry->updated_at = NOW();
        $industry->save();

        Session::Flash('success', 'Industry Status Change Succesfully.');
        return redirect()->route('industry.all');

    }

    public function delete($slug){
        try {

            $industry = Industry::where('slug', $slug)->first();
            $industry->deleted_at = NOW();
            $industry->save();

            Session::Flash('success', 'Industry Deleted Succesfully.');
            return redirect()->route('industry.all');

        } catch (\Exception $e) {
            Session::Flash('Something went wrong, '.$e->getMessage());
            return redirect()->back();
        }
    }
}

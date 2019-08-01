<?php

namespace App\Http\Controllers\Actions;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Service;
use App\Models\Business;

class ServiceController extends Controller
{

    public function client_services(){
        return view('admin.pages.client_services.index');
    }
    public function client_all_services(){
        $user_id = Auth::user()->id;
        $business_data = Business::where('user_id', $user_id)->first();
        $business_id = $business_data->id;
        $service = Service::where('business_id',$business_id)->where('status', 1)->get();
        //dd($service);
        return view('admin.pages.client_services.all_services', compact('service'));
    }
    public function client_services_edit(Request $request){
        $service = Service::where('id', $request->id)->first();
        //dd($data);
        return view('admin.pages.client_services.edit', compact('service'));
    }
    public function client_service_update(Request $request){
        $service = Service::where('id', $request->id)->first();
        //dd($service);

        $service->name = $request->name;
        $service->description = $request->description;
        $service->duration_hours = $request->duration_hours;
        $service->duration_minutes = $request->duration_minutes;
        $service->fee = $request->fee;
        //$service->updated_at = NOW();

        $service->save();

        Session::Flash('success', 'Service edited success');
        return redirect()->back();
    }
    public function client_services_delete(Request $request){
        //dd($request->id);
        $service = Service::where('id', $request->id)->first();
        $service->status = 0;
        $service->save();
        //$service->delete();

         Session::Flash('error', 'Service deleted success');
        return redirect()->back();
    }



    public function save(Request $request){
        $validation = Validator::make($request->all(), [
            'name' => 'required|string',
        ]);


        if($validation->fails()){
            return response()->json([
                'status' => 'error',
                'errors' => $validation->errors()
            ]);
        }

        do{
            $slug = uniqid();
        }while(Service::where('slug', $slug)->count());

        $service = new Service;
        $service->name = $request->name;
        $service->business_id = Auth::user()->business->id;
        $service->slug = $slug;
        $service->category_id = $request->category_id;
        $service->description = $request->description;
        $service->duration_hours = $request->duration_hours;
        $service->duration_minutes = $request->duration_minutes;
        $service->fee = $request->fee*100;
        $service->show_on_booking_form = $request->show_on_booking_form == 'true' ? 1 : 0;

        if($request->hasFile('image')){
            $file = $request->file('image');
            $path = 'images/services/';
            $filename = $slug.uniqid().time().'.'.($file->getClientOriginalExtension());
            $uploadPath = $file->move($path, $filename);
            $service->image = '/'.$uploadPath;
        }

        $service->location = $request->location;
        $service->method = $request->method;
        $service->address = $request->address;
        $service->contact_number = $request->contact_number;
        $service->online_method = $request->online_method;

        $service->save();
        
        return response()->json([
            'status' => 'success',
            'message' => 'Service created successfully!'
        ]);
    }

    public function update(Request $request) {
        $validation = Validator::make($request->all(), [
            'name' => 'required|string',
        ]);


        if($validation->fails()){
            return response()->json([
                'status' => 'error',
                'errors' => $validation->errors()
            ]);
        }

        $service = Service::where('slug', $request->slug)->first();

        $service->name = $request->name;
        $service->business_id = Auth::user()->business->id;
        $service->category_id = $request->category_id;
        $service->description = $request->description;
        $service->duration_hours = $request->duration_hours;
        $service->duration_minutes = $request->duration_minutes;
        $service->fee = $request->fee*100;
        $service->show_on_booking_form = $request->show_on_booking_form == 'true' ? 1 : 0;

        if($request->hasFile('image')){
            $file = $request->file('image');
            $path = 'images/services/';
            $filename = $slug.uniqid().time().'.'.($file->getClientOriginalExtension());
            $uploadPath = $file->move($path, $filename);
            $service->image = '/'.$uploadPath;
        }

        $service->location = $request->location;
        $service->method = $request->method;
        $service->address = $request->address;
        $service->contact_number = $request->contact_number;
        $service->online_method = $request->online_method;

        $service->save();
        
        return response()->json([
            'status' => 'success',
            'message' => 'Service updated successfully!'
        ]);
    }
 
    public function delete(Request $request){
        $service = Service::where('slug', $request->slug)->first();
        $service->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Service deleted successfully.'
        ]);
    }
}

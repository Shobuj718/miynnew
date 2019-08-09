<?php

namespace App\Http\Controllers\Actions;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Service;
use App\Models\Business;
use App\Models\CalendarSettings;


class ServiceController extends Controller
{

    public function client_services(){
        return view('admin.pages.client_services.index');
    }
    public function client_service_add(Request $request){

        $request->validate([
            'name' => 'required|string',
            'fee' => 'required|string',
            'description' => 'required|string',
            'duration_hours' => 'integer|nullable',
            'duration_minutes' => 'integer',
            'image' => 'nullable|mimes:jpg,jpeg,png,svg,gif|max:2048'

        ]);
        try {

            $user_id = Auth::user()->id;
            $business_id = Auth::user()->business_id;
            $category_id = Auth::user()->category_id;
            $calendarSettings = CalendarSettings::where('business_id', Auth::user()->business_id)->first();
            $calendar_setting_id = $calendarSettings->id;

            //dd($request->all());

            $service = new Service;
            $service->slug = md5(uniqid(time()));
            $service->user_id = $user_id;
            $service->business_id = $business_id;
            $service->category_id = $category_id;
            $service->calendar_setting_id = $calendar_setting_id;
            $service->name = $request->name;
            $service->fee = $request->fee;
            $service->description = $request->description;
            $service->duration_hours = $request->duration_hours;
            $service->duration_minutes = $request->duration_minutes;

            if($request->hasFile('image')){
                $file = $request->file('image');
                $path = 'images/services/';
                $filename = md5(uniqid()).time().'.'.($file->getClientOriginalExtension());
                $uploadPath = $file->move($path, $filename);
                $service->image = '/'.$uploadPath;
            }

            $service->save();

            Session::Flash('success', 'Service Added Successfully');

            return redirect()->back();
            
        } catch (\Exception $e) {
            Session::Flash('error', 'Something went wrong: '.$e->getMessage());
            return redirect()->route('client.services.all');
        }

        

        
    }
    public function client_all_services(){
        /*$user_id = Auth::user()->id;
        $business_data = Business::where('user_id', $user_id)->first();
        $business_id = $business_data->id;*/
        $service = Service::where('user_id',Auth::user()->id)->where('status', 0)->get();
        //dd($service);
        return view('admin.pages.client_services.all_services', compact('service'));
    }
    public function client_services_edit(Request $request){
        $service = Service::where('slug', $request->slug)->first();
        //dd($data);
        return view('admin.pages.client_services.edit', compact('service'));
    }
    public function client_service_update(Request $request){
        //dd($request->all());
        $request->validate([
                'name' => 'required|string',
                'fee' => 'required|string',
                'description' => 'required|string',
                'duration_hours' => 'integer|nullable',
                'duration_minutes' => 'integer',
                'image' => 'nullable|mimes:jpg,jpeg,png,svg,gif|max:2048'

            ]);

        try {
            

            $service = Service::where('slug', $request->slug)->first();
            //dd($service);

            $service->name = $request->name;
            $service->description = $request->description;
            $service->duration_hours = $request->duration_hours;
            $service->duration_minutes = $request->duration_minutes;
            $service->fee = $request->fee;
            $service->updated_at = NOW();

            $image_path = public_path().$service->image;

            if($request->hasFile('image')){
                if(file_exists($image_path)){
                    unlink($image_path);
                }
                $file = $request->file('image');
                $path = 'images/services/';
                $filename = md5(uniqid()).time().'.'.($file->getClientOriginalExtension());
                $uploadPath = $file->move($path, $filename);
                $service->image = '/'.$uploadPath;
            }

            $service->save();

            Session::Flash('success', 'Service Updated Successfully');
            return redirect()->back();
        } catch (\Exception $e) {
            Session::Flash('error', 'Something went wrong: '.$e->getMessage());
            return redirect()->back();
        }
    }
    public function client_services_delete(Request $request){
        //dd($request->id);
        $service = Service::where('slug', $request->slug)->first();
        $service->status = 1;
        $service->deleted_at = NOW();
        $service->save();
        //$service->delete();

         Session::Flash('error', 'Service Deleted Successfully');
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

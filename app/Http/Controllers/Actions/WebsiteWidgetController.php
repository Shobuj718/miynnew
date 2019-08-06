<?php

namespace App\Http\Controllers\Actions;

// use App\Models\Business;
use App\Models\WebsiteWidget;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Models\Business;

class WebsiteWidgetController extends Controller 
{
    
    /*$data['slug'] = str_replace(' ', '-', $request->category_name);
    Category::create($data);*/

    public function index(){
        return view('admin.pages.website_widget.index');
    }

    public function add_widget(){
        return view('admin.pages.website_widget.add_widget');
    }

    public function store_widget_actions(Request $request){

        try {
            
            if(WebsiteWidget::where('user_id', Auth::user()->id)->count()) {
                $websiteWidget = WebsiteWidget::where('user_id', Auth::user()->id)->first();  
            } else {
                $websiteWidget = new WebsiteWidget;
                $websiteWidget->user_id = Auth::user()->id;
            }

            $websiteWidget->schedule = $request->schedule;
            $websiteWidget->details = $request->details;
            $websiteWidget->contents = $request->content;
            $websiteWidget->call_us = $request->call_us;

            $websiteWidget->save();

            Session::Flash('success', "Website Widget actions created succesfully");

            return response()->json([
                'status' => 'ok',
                'value'  =>$request->all()
            ]);

        } catch (\Exception $e) {
            Session::Flash('error: Something went wrong !'.$e->getMessage());
        }

        
    }

    public function store_portal_invite(Request $request) {

        /*return response()->json([
            'success' => 'ok',
            'value'  => $request->all()
        ]);*/

        if(WebsiteWidget::where('user_id', Auth::user()->id)->count()) {
            $websiteWidget = WebsiteWidget::where('user_id', Auth::user()->id)->first();    
        } else {
            $websiteWidget = new WebsiteWidget;
            $websiteWidget->user_id = Auth::user()->id;
        }

        $websiteWidget->invitation_lebel = $request->invitation_lebel;
        $websiteWidget->invitation_title = $request->invitation_title;
        $websiteWidget->invitation_text = $request->invitation_text;

        Session::Flash('success', 'Website Widget invitation added successfully');
        $websiteWidget->save();

        return response()->json([
            'success' => 'ok',
            'value'  => $request->all(),
            'websiteWidget' => $websiteWidget
        ]);
    }

    public function getProperties() {
        $websiteWidget = WebsiteWidget::where('user_id', Auth::user()->id)->first();
        return response()->json([
            'status' => 'success',
            'websiteWidget' => $websiteWidget
        ]);
    }

    function getServicesForBusiness(Request $request){
        $business = Business::where('secret_key', $request->key)->with('services')->first();

        return response()->json([
            'status' => 'success',
            'services' => $business->services
        ]);
    }

    function getCategoriesWithServices(Request $request){
        return response()->json([
            'status' => 'success',
            'categories' => Business::where('secret_key', $request->key)->with('categories.services')->first()->categories
        ]);
    }

    function getStaffsForBusiness(Request $request){
        return response()->json([
            'status' => 'success',
            'staffs' => Business::where('secret_key', $request->key)->with('staffs')->first()->staffs
        ]);
    }
}

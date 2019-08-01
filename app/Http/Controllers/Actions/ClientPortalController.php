<?php

namespace App\Http\Controllers\Actions;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClientPortalController extends Controller
{
    public function index(){
    	return view('admin.pages.client_portal.index');
    }
}

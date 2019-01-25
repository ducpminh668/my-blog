<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use Session;

class SettingsController extends Controller
{
    public function __constructor()
    {
        $this->middleware('admin');
    }
    public function index()
    {
        $settings = Setting::first();
        return view('admin.settings.settings')->with('setting', $settings);
    }
    public function update(Request $request)
    {
        $setting = Setting::first();
        $setting->site_name = $request->site_name;
        $setting->address = $request->address;
        $setting->contact_number = $request->contact_number;
        $setting->contact_email = $request->contact_email;
        $setting->save();
        Session::flash('success', 'Setting updated successfully');
        return redirect()->back();
    }
}

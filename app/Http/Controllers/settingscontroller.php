<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\settings;

use Session;

class settingscontroller extends Controller
{
    
//    public function __construct()
//    {
//        $this->middleware('admin');
//    }
//    
    
    public function index(){
        
        return view('settings.settings')->with('settings',settings::first());
        
        
    }
    
    
    public function update(){
        
        
//        dd(request()->all());
        
        
        $this->validate(request(),[
            
           
            'sitename' => 'required',
            'address' => 'required',
            
            'contactemail' => 'required',
            'contactnumber' => 'required',
           
            
        ]);
        
        $settings=settings::first();
        
         $settings->sitename = request()->sitename;
         $settings->contactemail = request()->contactemail;
         $settings->contactnumber = request()->contactnumber;
         $settings->address = request()->address;
        
         $settings->save();
         
         Session::flash('success','settings updated');
        
        
         return redirect()->back();        
        
    }
    
    
}

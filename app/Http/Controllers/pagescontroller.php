<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Auth;
use Session;
use Redirect;
use storage;
use App\Mailfile;




class pagescontroller extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    
    public function index(){
        //passing value in to blade template
        $title='welcome jayasimha';
       //1 type return view('pages.index', compact('title'));
        
        return view('pages.index')->with('title',$title);
        
    }
    
    public function about(){
        
        return view('pages.about');
        
    }
    
    public function getcontact(){
        
        
        return view('pages.contact');
        
    }
    
    
    
    public function postcontact(Request $request){
        
        $this->validate($request,[
            
            'email' => 'required',
            'subject' => 'required',
            'a_file' => 'mimes:jpeg,png,jpg'
            
            
            
        ]);
        
        $data = array(
            
            'email' => $request->email,
            'subject' => $request->subject,
            'a_file' => $request->a_file
            
            
            
            
        );
        
        Mail::send('emails.upload',$data,function($message)use ($data)
        {
            
            $message -> to($data['email']);
            $message -> subject($data['subject']);
            $message -> from('rajujayasimha@gmail.com');
            $message ->attach($data['a_file']->getRealPath(),array(
                
                'as' => 'a_file.' . $data['a_file'] ->getClientOriginalExtension(),
                'mime' => $data['a_file']->getMimeType()
            ));
            
        });
                
        
        session::flash('success','mail sent successfully');
        return Redirect::to('/mail');
        
    }
    
     public function services(){
       
         $data=array(
             
             'title' => 'services',
             'services' => ['webdesign','programming','testing']
             
             );
         
         
        return view('pages.services')->with($data);
        
    }
    
    
    
    
}

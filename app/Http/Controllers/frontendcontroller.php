<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\settings;
use App\Category;
use App\post;
use App\user;


class frontendcontroller extends Controller
{
    
    public function index(){
        
        
        return view('layouts.index')
                                    ->with('title',settings::first()->sitename)        
                                    ->with('categories',Category::take(3)->get())    
                                    ->with('firstpost',post::orderBy('created_at','desc')->first())
                                    ->with('secondpost',post::orderBy('created_at','desc')->skip(1)->take(1)->get()->first())
                                    ->with('thirdpost',post::orderBy('created_at','desc')->skip(2)->take(1)->get()->first())
                                    ->with('six',Category::find(1));
                                     
                                        
    }
    
    
    public function singlepost($slug){
        
        $post=post::where('slug',$slug)->first();
        
        
        $next = post::where('id','>',$post->id)->min('id');
        $prev = post::where('id','<',$post->id)->max('id');
        
        
        
        
        return view('single')->with('post',$post)
                             ->with('title',$post->title)
                             ->with('categories',Category::take(1)->get())
                             ->with('user',user::all())
                             ->with('next',post::find($next))
                             ->with('prev',post::find($prev));
    }
    
    
     public function category($id){
        
        $category=category::find($id);
        
        return view('layouts.category')->with('category',$category)
                               ->with('title',$category->title)
                               ->with('categories',Category::take(3)->get());
                    
         
         
     }
    
    
}

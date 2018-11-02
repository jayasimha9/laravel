<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Post;
use Session;
use App\Category;

//use DB - import if u dont want to use eloquent;




class posstcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
//     public function __construct()
//    {
//        $this->middleware('auth');
//    }
//    
    
    
    
    
    public function index()
    {
       
      //  $posts = Post::orderBy('title','desc')->get();
        
        $posts = Post::all();  //eloquent orm which fetches all the data
        
       // $posts=DB::select('select * from posts');
        
         return view('posts.index')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('posts.create')->with('categories',Category::All());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            
            'title'=>'required|string',
            
            'body'=>'required',
            'image'=>'required',
            'category_id'=>'required'
           
            
            
        ]);
        
        $image = $request->image;
        
        $newimage = time().$image->getClientOriginalName();
        
         $image->move('uploads/posts',$newimage);
        
        $post = new post;
        $post->title = $request->title;
        $post->body = $request->body;
         $post->image = 'uploads/posts/'.$newimage;
         $post->category_id=$request->category_id;
         $post->slug=str_slug($request->title);
         $post->user_id=Auth::id();
         
        $post->save();
        
//        return redirect('/posts')->with('success','post created');
//        
        
        Session::flash('success','your post is created');
         return redirect('/posts');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
     
    
    public function show($id)
    {
        $posts = post::find($id);
        
       //echo "<pre>";
        //print_r($posts);
        exit;
        return view('posts.show')->with('posts',$posts);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $posts = post::find($id);
        
        $posts -> delete();
        
        return redirect() -> back();
        
        
    }
}

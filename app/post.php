<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    
    
//    protected $table = 'jayasimha' - here table name is post we can change it by this command
   
     protected $fillable = [
        'image','category','user_id'
    ];
    
   
     //accessors
     
    public function getImageAttribute($image){
        
        return asset($image);
        
         }
    


    //primary key
    public $primaryKey = 'id';
    
    
    
    //time stamp
    public $timestamps= true ;
    
    
     public function category(){
         
      return  $this->belongsTo('App\Category');
         
     }
     
     public function user(){
     
     
     return  $this->belongsTo('App\user');
     
    
}
}
<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model {

	protected $fillable=['title','description','user_id'];
 protected $table = 'articles';





 public function user(){

 	return $this->belongsTo('App\User');
 }
}

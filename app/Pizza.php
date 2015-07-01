<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model {



    protected $table='pizza';
    protected $fillable=['ime'];






    public function order(){

        return $this->hasMany('App\Order');
    }

}




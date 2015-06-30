<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Size extends Model {

    protected $table='velicine';
    protected $fillable=['ime','cena'];






    public function order(){

        return $this->belongsToMany('App\Order');
    }

}

<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model {

	protected $table='order';
    protected $fillable=['pizza_id','velicina_id','kolicina','napomena','ime','prezime','adresa','telefon','user_id','cena'];






    public function user(){

        return $this->belongsTo('App\User');
    }
    public function size(){

        return $this->belongsTo('App\Size');

    }
    public function pizza(){

        return $this->belongsTo('App\Pizza');
    }

}

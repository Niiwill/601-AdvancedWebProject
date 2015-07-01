<?php 
namespace App\Http\Controllers;
use View;
use App\Http\Requests;
use App\Http\Requests\ArticlesRequest;
use App\Http\Controllers\Controller;
use App\Order;
use Request;
use App\Pizza;


class AdminController extends Controller {

    public $restful= true;



	public function index() {
        
    // $articles= Articles::where('user_id','=','2')->get();  izvlacenje pomocu user_id iz druge tabele
    $orders= Order::orderBy('created_at')->get();
		return View::make('articles.index', compact('orders'));
         

}
    

    public function view($id) {

       $order=Order::find($id);

        $Address = urlencode($order->adresa);
        $request_url = "http://maps.googleapis.com/maps/api/geocode/xml?address=".$Address."";
        $xml = simplexml_load_file($request_url) or die("url not loading");
        $status = $xml->status;
        if ($status=="OK") {
            $Lat = $xml->result->geometry->location->lat;
            $Lng = $xml->result->geometry->location->lng;
}



        return View::make('articles.view',compact('order','Lat','Lng'));
        }


     public function store(Request $request) {




         $type = $request->get('type');
         $tweet = Tweet::find($id);
         if(!$tweet) {
             $tweet = new Tweet;
             $tweet[$type] = 1;
         }
         $tweet->id = $request->get('id');
         $tweet->text = $request->get('text');
         $tweet->increment($type);
         $tweet->save();
         return $request->all();

            

    }
}
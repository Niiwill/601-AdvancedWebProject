<?php namespace App\Http\Controllers;
use App\Http\Requests\OrderRequest;
use App\Order;
use App\User ;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;
use App\Size;

class WelcomeController extends Controller {

    public $restful= true;
	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
       $this->middleware('auth');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */

	public function index()
	{
         $users=Auth::user();


        return view('articles.glavni', compact('users'));
	}




    public function BrojUserPorudzbina()
    {
        $usersId=Auth::user()->id;


//        $porudzbine =Order::get();


        $userPosts= Order::where('user_id', $usersId)->count();




        $iznos= Order::where('user_id', $usersId)->latest('created_at')->take(1)->first();



//        user porudzbine evidencija

//        $usersId2=Auth::user()->id;
//
//
//        $porudzbine2 = DB::table('order');
//
//        $osnovnaPorudzbina= $porudzbine2->where('user_id', $usersId2)->latest('created_at')->take(1)->pluck('created_at');
////
////
////
//        $time = date('H:i:s', strtotime($osnovnaPorudzbina));
////
////        kreirano vreme
//        $date=Carbon::createFromFormat('H:i:s', $time);
//        $vreme= $date->addMinutes(30);
////        $vreme=date('H:i:s', strtotime($vreme));
//
////        vreme posle 30 minuta
//
//         $trenutno= Carbon::now();
//         print gmdate("H:i:s", $trenutno->diffInSeconds($vreme));





        return view('articles.glavni', compact('userPosts','iznos'));

    }



    public function create()
    {

        return view('articles.create');

    }

    public function store(OrderRequest $request) {

        $order = $request->all();
        $order['user_id'] = Auth::id();
        Order::create($order);
        return Redirect::to("/?timer=true");
    }

}

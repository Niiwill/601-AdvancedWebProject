<?php namespace App\Http\Controllers;

use App\Articles;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;

use Illuminate\Support\Facades\View;

class ArticlesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
//         $usersss= Articles::where('user_id','=','2')->get();
        $articles= Articles::get();
        return View::make('articles.index', compact('articles','usersss'));


    }


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('articles.create');

    }

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
public function store(Requests\ArticlesRequest $request) {

    Articles::create(Request::all());
    return redirect('admin/articles');



}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $article=Articles::find($id);

        return View::make('articles.view',compact('article'));

    }

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}

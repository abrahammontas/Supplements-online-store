<?php

class ArticleController extends AdminBaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$article = Article::with('profile')->get();

		View::share('selected_option', 'Ver Artículos');

		return View::make('article.list')
		->with('article',$article);

	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

		$profiles = Profile::all();

		View::share('selected_option', 'Agregar Artículos');
		return View::make('article.add')
		->with('profiles',$profiles);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$validation = Validate::ArticleValidation(Input::all());
		
        if ($validation->fails()){

            return Redirect::to('articulos/create')
            ->withErrors($validation)
            ->withInput();
            
        }else {
			$article = new Article;

			$article->id_profile = Input::get('id_profile');
			$article->content = Input::get('content');
			$article->image = "";

			$article->save();

			mkdir("img/articles/".$article->id, 0700);

			
			$destinationPath = 'img/articles/'.$article->id;
			$filename = $article->id.".".Input::file('image')->getClientOriginalExtension();


				Input::file('image')->move($destinationPath,$filename);

				$article2 = Article::find($article->id);
				$article2->image = 'img/articles/'.$article->id."/".$filename;
				$article2->save();

			return Redirect::to('admin/articulos');
		}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
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
		$article = Article::find($id);
		$profiles = Profile::all();

		return View::make('article.edit')
		->withArticle($article)
		->withProfiles($profiles);
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
		$validation = Validate::ArticleValidation(Input::all());

        if ($validation->fails()){

            return Redirect::to('articulos/create')
            ->withErrors($validation)
            ->withInput();
            
        }else {
			$article = Article::find($id);

		if($article->image != ""){
					unlink($article->image);
		}

			$article->id_profile = Input::get('id_profile');
			$article->content = Input::get('content');

			$destinationPath = 'img/articles/'.$article->id."/";
			$filename = $article->id.".".Input::file('image')->getClientOriginalExtension();


				Input::file('image')->move($destinationPath,$filename);

			$article->image = $destinationPath.$filename;

			$article->save();

			return Redirect::to('admin/articulos');
		}
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

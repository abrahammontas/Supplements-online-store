<?php

class ProfileController extends \AdminBaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$profile = Profile::all();

		View::share('selected_option', 'Ver Perfiles');

		$view = View::make('profile.list')->with('profile',$profile);

		return $view;
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

		View::share('selected_option', 'Agregar Perfiles');
		return View::make('profile.add');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validation = Validate::PerfilValidation(Input::all());

        if ($validation->fails()){

            return Redirect::to('perfiles/create')
            ->withErrors($validation)
            ->withInput();
            
        }else {
			$perfil = new Profile;

			$perfil->name = Input::get('name');
			$perfil->lastname = Input::get('lastname');
			$perfil->occupation = Input::get('occupation');
			$perfil->history = Input::get('history');

			$perfil->save();

			mkdir("img/profiles/".$perfil->id, 0700);

			
			$destinationPath = 'img/profiles/'.$perfil->id;
			$filename = $perfil->id.".".Input::file('image')->getClientOriginalExtension();


				Input::file('image')->move($destinationPath,$filename);

				$profiles = Profile::find($perfil->id);
				$profiles->image = 'img/profiles/'.$perfil->id."/".$filename;
				$profiles->save();

			return Redirect::to('perfiles');
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
		$profile = Profile::find($id);
		return View::make('profile.edit')
		->withProfile($profile);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$validation = Validate::PerfilValidation(Input::all());

        if ($validation->fails()){

            return Redirect::to('perfiles/create')
            ->withErrors($validation)
            ->withInput();
            
        }else {
			$perfil = Profile::find($id);

		if($perfil->image != ""){
					unlink($perfil->image);
		}


			$perfil->name = Input::get('name');
			$perfil->lastname = Input::get('lastname');
			$perfil->occupation = Input::get('occupation');
			$perfil->history = Input::get('history');

			$destinationPath = 'img/profiles/'.$perfil->id."/";
			$filename = $perfil->id.".".Input::file('image')->getClientOriginalExtension();


				Input::file('image')->move($destinationPath,$filename);

			$perfil->image = $destinationPath.$filename;

			$perfil->save();

			return Redirect::to('perfiles');

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

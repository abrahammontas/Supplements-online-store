<?php

class TipoController extends \AdminBaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$tipoproducto = ProductType::all();

		View::share('selected_option', 'Ver Tipo Producto');

		$view = View::make('tipoproducto.list')->with('tipoproducto',$tipoproducto);

		return $view;
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		View::share('selected_option', 'Agregar Tipo Producto');
		return View::make('tipoproducto.add');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{		

		$validation = Validate::TipoproductoValidation(Input::all());

        if ($validation->fails()){

            return Redirect::to('tipoproducto/create')
            ->withErrors($validation)
            ->withInput();
            
        }else {
			$tipoproducto = new ProductType;

			$tipoproducto->type = Input::get('type');

			$tipoproducto->save();

			return Redirect::to('tipoproducto');
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
		$tipoproducto = ProductType::find($id);
		return View::make('tipoproducto.edit')
		->withTipoproducto($tipoproducto);
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
		$validation = Validate::TipoproductoValidation(Input::all());

        if ($validation->fails()){

            return Redirect::to('tipoproducto/create')
            ->withErrors($validation)
            ->withInput();
            
        }else {
			$tipoproducto = ProductType::find($id);

			$tipoproducto->type = Input::get('type');

			$tipoproducto->save();

			return Redirect::to('tipoproducto');

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

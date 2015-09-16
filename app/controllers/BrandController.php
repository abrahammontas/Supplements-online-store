<?php

class BrandController extends \AdminBaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$brand = Brand::all();
		View::share('selected_option', 'Ver Marca');

		return View::make('brand.list')->with('brand',$brand);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$brand = Brand::all();

		View::share('selected_option', 'Agregar Marca');
		return View::make('brand.add')
		->with('brand',$brand);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{		//
		//
		$validation = Validate::BrandValidation(Input::all());

        if ($validation->fails()){

            return Redirect::to('marca/create')
            ->withErrors($validation)
            ->withInput();
            
        }else {
			$brand = new Brand;

			$brand->brand = Input::get('brand');

			$brand->save();

			return Redirect::to('admin/marca');
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
		
		$brand = Brand::find($id);

		return View::make('brand.edit')
		->with('brand',$brand);
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
		$validation = Validate::BrandValidation(Input::all());

        if ($validation->fails()){

            return Redirect::to('marca/create')
            ->withErrors($validation)
            ->withInput();
            
        }else {
			$brand = Brand::find($id);

			$brand->brand = Input::get('brand');

			$brand->save();

			return Redirect::to('admin/marca');
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

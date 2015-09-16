<?php

class BannerController extends AdminBaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$banner = Banner::all();

		View::share('selected_option', 'Ver Banner');

		return View::make('banner.list')
		->with('banner',$banner);

	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//

		$banner = Banner::all();

		View::share('selected_option', 'Agregar Banner');
		return View::make('banner.add')
		->with('banner',$banner);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$validation = Validate::BannerValidation(Input::all());
		
        if ($validation->fails()){

            return Redirect::to('banner/create')
            ->withErrors($validation)
            ->withInput();
            
        }else {
			$banner = new Banner;

			$banner->title = Input::get('title');
			$banner->image = "";

			$banner->save();

			mkdir("img/banners/".$banner->id, 0700);

			
			$destinationPath = 'img/banners/'.$banner->id;
			$filename = $banner->id.".".Input::file('image')->getClientOriginalExtension();


				Input::file('image')->move($destinationPath,$filename);

				$banner2 = Banner::find($banner->id);
				$banner2->image = 'img/banners/'.$banner->id."/".$filename;
				$banner2->save();

			return Redirect::to('admin/banner');
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
		$banner = Banner::find($id);

		return View::make('banner.edit')
		->withBanner($banner);
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
		$validation = Validate::BannerValidation(Input::all());

        if ($validation->fails()){

            return Redirect::to('banner/create')
            ->withErrors($validation)
            ->withInput();
            
        }else {
			$banner = Banner::find($id);

		if($banner->image != ""){
					unlink($banner->image);
		}

			$banner->title = Input::get('title');

			$destinationPath = 'img/banners/'.$banner->id."/";
			$filename = $banner->id.".".Input::file('image')->getClientOriginalExtension();


				Input::file('image')->move($destinationPath,$filename);

			$banner->image = $destinationPath.$filename;

			$banner->save();

			return Redirect::to('admin/banner');
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

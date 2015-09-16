<?php

class DealsController extends \AdminBaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$deal = Deal::all();
		View::share('selected_option', 'Ver Ofertas');

		return View::make('deal.list')->with('deal',$deal);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//

		View::share('selected_option', 'Agregar Ofertas');
		return View::make('deal.add');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$validation = Validate::DealValidation(Input::all());

        if ($validation->fails()){

            return Redirect::to('ofertas/create')
            ->withErrors($validation)
            ->withInput();
            
        }else {
			$deal = new Deal;

			$deal->title = Input::get('title');
			$deal->description = Input::get('description');
			$deal->image = "";
			$deal->from = Input::get('from');
			$deal->to = Input::get('to');
			$deal->price = Input::get('price');

			$deal->save();

			mkdir("img/deals/".$deal->id, 0700);

			
			$destinationPath = 'img/deals/'.$deal->id;
			$filename = $deal->id.".".Input::file('image')->getClientOriginalExtension();


				Input::file('image')->move($destinationPath,$filename);

				$deal2 = Deal::find($deal->id);
				$deal2->image = 'img/deals/'.$deal->id."/".$filename;
				$deal2->save();



			return Redirect::to('ofertas');
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
		$deal = Deal::find($id);
		return View::make('deal.edit')
		->withDeal($deal);
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
		$validation = Validate::DealValidation(Input::all());


        if ($validation->fails()){

            return Redirect::to('ofertas/create')
            ->withErrors($validation)
            ->withInput();
            
        }else {
			$deal = Deal::find($id);

		if($deal->image != ""){
					unlink($deal->image);
		}

			$deal->title = Input::get('title');
			$deal->description = Input::get('description');
			$deal->from = Input::get('from');
			$deal->to = Input::get('to');
			$deal->price = Input::get('price');


			$destinationPath = 'img/deals/'.$deal->id."/";
			$filename = $deal->id.".".Input::file('image')->getClientOriginalExtension();


				Input::file('image')->move($destinationPath,$filename);

			$deal->image = $destinationPath.$filename;

			$deal->save();

			return Redirect::to('ofertas');

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

<?php

class ProductsController extends \AdminBaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$products = Product::with('Type')->with('Brand')->get();

		View::share('selected_option', 'Ver Productos');

		$view = View::make('product.list')->with('products',$products);

		return $view;
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		
		$brand = Brand::all();
		$type = ProductType::all();

		View::share('selected_option', 'Agregar Productos');
		return View::make('product.add')
		->with('brand',$brand)
		->with('type',$type);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
			$validation = Validate::ProductValidation(Input::all());

        if ($validation->fails()){

            return Redirect::to('productos/create')
            ->withErrors($validation)
            ->withInput();
            
        }else {


			$product = new Product;
			$product->id_brand = Input::get('id_brand');
			$product->id_product_type = Input::get('id_product_type');
			$product->name = Input::get('name');
			$product->description = Input::get('description');
			$product->image = "";
			$product->save();

			mkdir("img/products/".$product->id, 0700);

			
			$destinationPath = 'img/products/'.$product->id;
			$filename = $product->id.".".Input::file('image')->getClientOriginalExtension();


				Input::file('image')->move($destinationPath,$filename);

				$product2 = Product::find($product->id);
				$product2->image = 'img/products/'.$product->id."/".$filename;
				$product2->save();

			return Redirect::to('productos');
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
		$product = Product::find($id);
		$type = ProductType::all();
		$brand = Brand::all();

		return View::make('product.edit')
		->withProduct($product)
		->withBrand($brand)
		->withType($type);
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
		$validation = Validate::ProductValidation(Input::all());

        if ($validation->fails()){

            return Redirect::to('productos/create')
            ->withErrors($validation)
            ->withInput();
            
        }else {
			$product = Product::find($id);

		if($product->image != ""){
					unlink($product->image);
		}

			$product->id_brand = Input::get('id_brand');
			$product->id_product_type = Input::get('id_product_type');
			$product->name = Input::get('name');
			$product->description = Input::get('description');


			$destinationPath = 'img/products/'.$product->id."/";
			$filename = $product->id.".".Input::file('image')->getClientOriginalExtension();


				Input::file('image')->move($destinationPath,$filename);

			$product->image = $destinationPath.$filename;

			$product->save();

			return Redirect::to('productos');
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

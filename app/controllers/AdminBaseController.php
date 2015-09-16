<?php

class AdminBaseController extends BaseController {

	private $options = array();
	private $selected_option;

	public $user;
	public $cliente;

	public function __construct()
	{
		// parent::__construct();

		$this->beforeFilter("admin.auth");

		$this->tabs['Admin'] = '#';
		$selected_tab = 'Admin';

		View::share('tabs', $this->tabs);
		View::share('selected_tab', $selected_tab);

		$this->options = array(
			'Productos' => array(
				'Ver Productos' => 'admin/product',
				'Agregar Productos' => 'admin/product/create',
			),
			'Perfiles' => array(
				'Ver Perfiles' => 'admin/perfiles',
				'Agregar Perfiles' => 'admin/perfiles/create',
			),
			'Ofertas' => array(
				'Ver Ofertas' => 'admin/ofertas',
				'Agregar Ofertas' => 'admin/ofertas/create',
			),
			'Artículos' => array(
				'Ver Artículos' => 'admin/articulos',
				'Agregar Artículos' => 'admin/articulos/create',
			),
			'Marca' => array(
				'Ver Marca' => 'admin/marca',
				'Agregar Marca' => 'admin/marca/create',
			),
			'Tipo Producto' => array(
				'Ver Tipo Producto' => 'admin/tipoproducto',
				'Agregar Tipo Producto' => 'admin/tipoproducto/create',
			),
			'Banner' => array(
				'Ver img del Banner' => 'admin/banner',
				'Agregar img al Banner' => 'admin/banner/create',
			)
		);



		$this->selected_option = '';

		View::share('options', $this->options);
		View::share('selected_option', $this->selected_option);
	}

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

}
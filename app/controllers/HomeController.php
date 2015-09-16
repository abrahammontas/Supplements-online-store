<?php

class HomeController extends BaseController
{
    public function Index() {
        //
        $banner = Banner::all();
        return View::make('views/index')
        ->with("banner",$banner);
    }

    public function getNosotros(){
        return 'We are here!';
    }
    
    public function getContacto() {
        return View::make('layouts.contact_form');
    }

    public function getContactoEmail() {
        return View::make('layouts.contact_form2');
    }
    
    public function postContacto() {
        $rules = [
        	'name' => 'required', 
        	'email' => 'required|email', 
        	'message' => 'required'
        ];
        
        $v = Validator::make(Input::all(), $rules);
        
        if ($v->fails()) {
            return Redirect::back()
            		->withInput()
            		->withErrors($v);
        }
        
        $name = Input::get('name');
        $email = Input::get('email');
        $message = Input::get('message');

        // TODO: Send Email
        
        return View::make('layouts.contact_form_thanks');
    }
}

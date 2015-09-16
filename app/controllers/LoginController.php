<?php

/**
 * @author Abraham Montas
 */

use Cartalyst\Sentry\Users\LoginRequiredException as login;
use Cartalyst\Sentry\Users\PasswordRequiredException as password;
use Cartalyst\Sentry\Users\WrongPasswordException as wrong;
use Cartalyst\Sentry\Users\UserNotFoundException as user;
use Cartalyst\Sentry\Users\UserNotActivatedException as activated;
use Cartalyst\Sentry\Throttling\UserSuspendedException as suspended;
use Cartalyst\Sentry\Throttling\UserBannedException as banned;

class LoginController extends BaseController {


    public function getIndex()
    {
        $user = Sentry::getUser();

        if(isset($user->email)){
            return Redirect::to('');
        }

        else{

          $view = View::make('login.login');
          return $view;
      }
  }

    /**
    * Loguea a un usuario a la cuenta del cliente al que pertenece, si los atributos
    * de autenticaci�n presentan algun error se reenvian al view de login con el error.
    * 
    * @return Redirect::to
    */

    public function postLogin(){
        try
        {
            // Set login credentials

            $credentials = array(
                'email'    => Input::get('email'),
                'password' => Input::get('password'),
                );

            // Try to authenticate the user

            $user = Sentry::authenticate($credentials, false);
            
            return Redirect::to('productos');
        }
        
        catch (login $e)
        {
            return Redirect::to('admin/login')
            ->with('sys-error','Debe llenar todos los campos.')
            ->withInput();
        }

        catch (password $e)
        {
            return Redirect::to('admin/login')
            ->with('sys-error','Debe llenar todos los campos.')
            ->withInput();
        }

        catch(wrong $e)
        {
            return Redirect::to('admin/login')
            ->with('sys-error','Clave o Usuario incorrecto, intente de nuevo.')
            ->withInput();
        }

        catch(user $e)
        {
         return Redirect::to('admin/login')
         ->with('sys-error','Usuario no encontrado en nuestro sistema.')
         ->withInput(); 
        }

        catch(activated $e)
        {
            return Redirect::to('admin/login')
            ->with('sys-error','Usuario no esta <b>activado</b>.')
            ->withInput();
        }

        // Solo si el Throllet esta activado

        catch (suspended $e)
        {
            return Redirect::to('admin/login')
            ->with('sys-error','Usuario <b>suspendido</b>.')
            ->withInput(); 
        }
        catch (banned $e)
        {
            return Redirect::to('admin/login')
            ->with('sys-error','Usuario <b>suspendido</b> por tiempo indefinido.')
            ->withInput();
        }
        catch (Exception $e)
        {
            // Maneja las exceptions que no esten previamente
            // TODO: crear exception global
            return Redirect::to('admin/login')
            ->with('sys-error', 'Ups! Algo no salio bien.')
            ->withInput();
        }

    }

    public function getLogout(){

        Sentry::logout();
        return 'Salio';
    }

}
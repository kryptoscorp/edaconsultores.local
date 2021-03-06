<?php

class EdaController extends BaseController {


	

	public function showHome()
	{
		return View::make('home');
	}

	public function showNosotros()
	{
		return View::make('nosotros');
	}

	public function showServicios()
	{
		return View::make('servicios');
	}

	public function showPca()
	{
		return View::make('pca');
	}

	public function showContacto()
	{
		return View::make('contacto');
	}

	public function sendMail()
	{
		$data = Input::all();
		//validate rules and validator
		$rules = array(
			'name' => 'required',
			'email' => 'required|email',
			'message' => 'required|min:25'
		);
		$validator = Validator::make($data,$rules);

		//login
		if ($validator -> fails()) {
			return Redirect::to('contacto') -> withErrors($validator);
		} else {
			//send mail
			Mail::send('emails.contacto', $data, function($message) use ($data) {
				$message->from(Input::get('email'),Input::get('name'));
				$message->to('contacto@ejemplo.com','Admin')->subject('Solicitud de información');				
			});			
			Session::flash('message','Mensaje enviado, pronto nos comunicaremos contigo');
			return Redirect::to('/');
		}
	}

	

}

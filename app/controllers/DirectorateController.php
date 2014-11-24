<?php

class DirectorateController extends \BaseController {

	protected $route = '/directorates';

	public function getIndex(){

		$directorates = Directorates::all();

		$array = array(
			'directorates' => $directorates,
			'route' => $this->route
			);

		return View::make('directorates.index')->with($array);

	}
	public function getCreate(){

		return View::make('directorates.create');

	}
	public function postCreate(){

		if(Input::get('password') === Input::get('password_2')):

			$directorate = new Directorates();
			$directorate->name = Input::get('name');
			$directorate->director_name = Input::get('director_name');
			$directorate->save();

			return Redirect::to('/directorates');

		else:

			$array = array(
				'error' => 'clave_error',
				'directorate' => Input::all()
				);
 
			return View::make('directorates.create')->with($array);

		endif;

	}
	
	public function getEdit( $id = '' ){

   		if( $id != '' ):

			$id = Crypt::decrypt($id);
			$directorate = Directorates::find($id);

			$array = array(
				'directorate' => $directorate,
				'route' => $this->route
				);

			return View::make('directorates.edit')->with($array);

		else:

			return Redirect::to($this->route);

		endif;

	}

	
	public function postEdit( $id = '' ){

   		if( $id != '' ):

			$id = Crypt::decrypt($id);
			$directorate = Directorates::find($id);

			$directorate->name = Input::get('name');
			$directorate->director_name = Input::get('director_name');

			$directorate->save();

			return Redirect::to($this->route);

		else:

			return Redirect::to($this->route);

		endif;

	}

	public function getDelete( $id ){

		if( $id != '' ):
			$id = Crypt::decrypt($id);
			$directorate = Directorates::find($id);

			$array = array(
				'directorate' => $directorate,
				'route' => $this->route
				);	

			return View::make('directorates.delete')->with( $array );

		else:

			return Redirect::to($this->route);
		endif;
	}
   
   public function postDelete($id = '' ){

   		if( $id != '' ):

			$id = Crypt::decrypt($id);
			$directorate = Directorates::destroy($id);

			return Redirect::to($this->route);

		else:

			return Redirect::to($this->route);

		endif;


   }

}
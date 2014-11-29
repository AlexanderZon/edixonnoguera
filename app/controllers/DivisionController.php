<?php

class DivisionController extends \BaseController {

	protected $route = '/divisions';

	public function getIndex(){

		$divisions = Divisions::all();

		$array = array(
			'divisions' => $divisions,
			'route' => $this->route
			);

		return View::make('divisions.index')->with($array);

	}
	public function getCreate(){

		$managements = Managements::all();

		$array = array(
			'route' => $this->route,
			'managements' => $managements
			);

		return View::make('divisions.create')->with( $array );

	}
	public function postCreate(){

			$division = new Divisions();
			$division->name = Input::get('name');
			$division->chief_name = Input::get('chief_name');
			$division->id_management = Input::get('id_management');
			$division->save();

			return Redirect::to('/divisions');

	}
	
	public function getEdit( $id = '' ){

   		if( $id != '' ):

			$id = Crypt::decrypt($id);
			$division = Divisions::find($id);

			$managements = Managements::all();

			$array = array(
				'division' => $division,
				'managements' => $managements,
				'route' => $this->route
				);

			return View::make('divisions.edit')->with($array);

		else:

			return Redirect::to($this->route);

		endif;

	}

	
	public function postEdit( $id = '' ){

   		if( $id != '' ):

			$id = Crypt::decrypt($id);
			$division = Divisions::find($id);

			$division->name = Input::get('name');
			$division->chief_name = Input::get('chief_name');
			$division->id_management = Input::get('id_management');

			$division->save();

			return Redirect::to($this->route);

		else:

			return Redirect::to($this->route);

		endif;

	}

	public function getDelete( $id ){

		if( $id != '' ):
			$id = Crypt::decrypt($id);
			$division = Divisions::find($id);

			$array = array(
				'division' => $division,
				'route' => $this->route
				);	

			return View::make('divisions.delete')->with( $array );

		else:

			return Redirect::to($this->route);
		endif;
	}
   
   public function postDelete($id = '' ){

   		if( $id != '' ):

			$id = Crypt::decrypt($id);
			$division = Divisions::destroy($id);

			return Redirect::to($this->route);

		else:

			return Redirect::to($this->route);

		endif;


   }

}
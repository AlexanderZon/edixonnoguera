<?php

class ManagementController extends \BaseController {

	protected $route = '/managements';

	public function getIndex(){

		$managements = Managements::all();

		$array = array(
			'managements' => $managements,
			'route' => $this->route
			);

		return View::make('managements.index')->with($array);

	}
	public function getCreate(){

		$array = array(
			'route' => $this->route
			);

		return View::make('managements.create')->with( $array );

	}
	public function postCreate(){

		$management = new Managements();
		$management->name = Input::get('name');
		$management->manager_name = Input::get('manager_name');
		$management->save();

		return Redirect::to('/managements');

	}
	
	public function getEdit( $id = '' ){

   		if( $id != '' ):

			$id = Crypt::decrypt($id);
			$management = Managements::find($id);

			$array = array(
				'management' => $management,
				'route' => $this->route
				);

			return View::make('managements.edit')->with($array);

		else:

			return Redirect::to($this->route);

		endif;

	}

	
	public function postEdit( $id = '' ){

   		if( $id != '' ):

			$id = Crypt::decrypt($id);
			$management = Managements::find($id);

			$management->name = Input::get('name');
			$management->manager_name = Input::get('manager_name');

			$management->save();

			return Redirect::to($this->route);

		else:

			return Redirect::to($this->route);

		endif;

	}

	public function getDelete( $id ){

		if( $id != '' ):
			$id = Crypt::decrypt($id);
			$management = Managements::find($id);

			$array = array(
				'management' => $management,
				'route' => $this->route
				);	

			return View::make('managements.delete')->with( $array );

		else:

			return Redirect::to($this->route);
		endif;
	}
   
   public function postDelete($id = '' ){

   		if( $id != '' ):

			$id = Crypt::decrypt($id);
			$management = Managements::destroy($id);

			return Redirect::to($this->route);

		else:

			return Redirect::to($this->route);

		endif;


   }

}
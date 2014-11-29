<?php

class OfficeController extends \BaseController {

	protected $route = '/offices';

	public function getIndex(){

		$offices = Offices::all();

		$array = array(
			'offices' => $offices,
			'route' => $this->route
			);

		return View::make('offices.index')->with($array);

	}
	public function getCreate(){

		$array = array(
			'route' => $this->route
			);

		return View::make('offices.create')->with( $array );

	}
	public function postCreate(){

		$office = new Offices();
		$office->title = Input::get('title');
		$office->save();

		return Redirect::to('/offices');

	}
	
	public function getEdit( $id = '' ){

   		if( $id != '' ):

			$id = Crypt::decrypt($id);
			$office = Offices::find($id);

			$array = array(
				'office' => $office,
				'route' => $this->route
				);

			return View::make('offices.edit')->with($array);

		else:

			return Redirect::to($this->route);

		endif;

	}

	
	public function postEdit( $id = '' ){

   		if( $id != '' ):

			$id = Crypt::decrypt($id);
			$office = Offices::find($id);

			$office->title = Input::get('title');

			$office->save();

			return Redirect::to($this->route);

		else:

			return Redirect::to($this->route);

		endif;

	}

	public function getDelete( $id ){

		if( $id != '' ):
			$id = Crypt::decrypt($id);
			$office = Offices::find($id);

			$array = array(
				'office' => $office,
				'route' => $this->route
				);	

			return View::make('offices.delete')->with( $array );

		else:

			return Redirect::to($this->route);
		endif;
	}
   
   public function postDelete($id = '' ){

   		if( $id != '' ):

			$id = Crypt::decrypt($id);
			$office = Offices::destroy($id);

			return Redirect::to($this->route);

		else:

			return Redirect::to($this->route);

		endif;


   }

}
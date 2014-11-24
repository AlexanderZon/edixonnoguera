<?php

class DepartmentController extends \BaseController {

	protected $route = '/departments';

	public function getIndex(){

		$departments = Departments::all();

		$array = array(
			'departments' => $departments,
			'route' => $this->route
			);

		return View::make('departments.index')->with($array);

	}
	public function getCreate(){

		$directorates = Directorates::all();

		$array = array(
			'route' => $this->route,
			'directorates' => $directorates
			);

		return View::make('departments.create')->with( $array );

	}
	public function postCreate(){

		if(Input::get('password') === Input::get('password_2')):

			$department = new Departments();
			$department->name = Input::get('name');
			$department->chief_name = Input::get('chief_name');
			$department->id_directorate = Input::get('id_directorate');
			$department->save();

			return Redirect::to('/departments');

		else:

			$array = array(
				'error' => 'clave_error',
				'department' => Input::all()
				);
 
			return View::make('departments.create')->with($array);

		endif;

	}
	
	public function getEdit( $id = '' ){

   		if( $id != '' ):

			$id = Crypt::decrypt($id);
			$department = Departments::find($id);

			$directorates = Directorates::all();

			$array = array(
				'department' => $department,
				'directorates' => $directorates,
				'route' => $this->route
				);

			return View::make('departments.edit')->with($array);

		else:

			return Redirect::to($this->route);

		endif;

	}

	
	public function postEdit( $id = '' ){

   		if( $id != '' ):

			$id = Crypt::decrypt($id);
			$department = Departments::find($id);

			$department->name = Input::get('name');
			$department->chief_name = Input::get('chief_name');
			$department->id_directorate = Input::get('id_directorate');

			$department->save();

			return Redirect::to($this->route);

		else:

			return Redirect::to($this->route);

		endif;

	}

	public function getDelete( $id ){

		if( $id != '' ):
			$id = Crypt::decrypt($id);
			$department = Departments::find($id);

			$array = array(
				'department' => $department,
				'route' => $this->route
				);	

			return View::make('departments.delete')->with( $array );

		else:

			return Redirect::to($this->route);
		endif;
	}
   
   public function postDelete($id = '' ){

   		if( $id != '' ):

			$id = Crypt::decrypt($id);
			$department = Departments::destroy($id);

			return Redirect::to($this->route);

		else:

			return Redirect::to($this->route);

		endif;


   }

}
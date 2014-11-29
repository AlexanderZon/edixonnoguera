<?php

class PermissionController extends \BaseController {

	protected $route = '/permissions';

	public function getIndex(){

		$array = array(
			'permissions' => Permissions::all(),
			'route' => $this->route
			);

		return View::make('permissions.index')->with($array);

	}
	public function getCreate(){

		$array = array(
			'date_error' => Session::get('date_error'),
			'employees' => Employees::all(),
			'route' => $this->route
			);

		return View::make('permissions.create')->with( $array );

	}
	public function postCreate(){
	    
	    $interval = date_diff(date_create((Input::get('from'))), date_create((Input::get('to'))));
	    
	    if( intval($interval->format('%r%a')) > 0 ):

			$permission = new Permissions();
			$permission->id_employee = Input::get('id_employee');
			$permission->doc = Input::get('doc');
			$permission->p1p2 = Input::get('p1p2');
			$permission->nac = Input::get('nac');
			$permission->ea = Input::get('ea');
			$permission->fall = Input::get('fall');
			$permission->est = Input::get('est');
			$permission->another = Input::get('another');
			$permission->from = date('Y-m-d', strtotime(Input::get('from')));
			$permission->to = date('Y-m-d', strtotime(Input::get('to')));
			$permission->duration = intval($interval->format('%r%a'));
			$permission->save();

			return Redirect::to('/permissions');

	    else:

	    	return Redirect::to( $this->route . '/create' )->with( array( 'date_error' => true ) );

	    endif;

	}
	
	public function getEdit( $id = '' ){

   		if( $id != '' ):

			$array = array(
				'date_error' => Session::get('date_error'),
				'employees' => Employees::all(),
				'permission' => Permissions::find(Crypt::decrypt($id)),
				'route' => $this->route
				);

			return View::make('permissions.edit')->with($array);

		else:

			return Redirect::to($this->route);

		endif;

	}

	
	public function postEdit( $id = '' ){
	    
	    $interval = date_diff(date_create((Input::get('from'))), date_create((Input::get('to'))));
	    
	    if( intval($interval->format('%r%a')) > 0 ):

			$permission = Permissions::find( Crypt::decrypt( $id ) );
			$permission->id_employee = Input::get('id_employee');
			$permission->doc = Input::get('doc');
			$permission->p1p2 = Input::get('p1p2');
			$permission->nac = Input::get('nac');
			$permission->ea = Input::get('ea');
			$permission->fall = Input::get('fall');
			$permission->est = Input::get('est');
			$permission->another = Input::get('another');
			$permission->from = date('Y-m-d', strtotime(Input::get('from')));
			$permission->to = date('Y-m-d', strtotime(Input::get('to')));
			$permission->duration = intval($interval->format('%r%d'));
			$permission->save();

			return Redirect::to('/permissions');

	    else:

	    	return Redirect::to( $this->route .'/edit' )->with( array( 'date_error' => true ) );

	    endif;

	}

	public function getDelete( $id ){

		if( $id != '' ):

			$array = array(
				'permission' => Permissions::find(Crypt::decrypt($id)),
				'route' => $this->route
				);	

			return View::make('permissions.delete')->with( $array );

		else:

			return Redirect::to($this->route);
		endif;
	}
   
   public function postDelete($id = '' ){

   		if( $id != '' ):

   			Permissions::destroy(Crypt::decrypt($id));

			return Redirect::to( $this->route );

		else:

			return Redirect::to($this->route);

		endif;

   }

   public function postReport(){

   		$permissions = null;

   		switch(Input::get('type')){
   			case 'minor':
   				$permissions = Permissions::minorThreeDays();
   				break;
   			case 'mayor':
   				$permissions = Permissions::mayorThreeDays();
   				break;
   			default:
   				$permissions = Permissions::all();
   				break;
   		}

   		$array = array(
   			'permissions' => $permissions,
   			'route' => $this->route
   			);

   		//return View::make('pdfs.permissions')->with( $array );
   		return PDF::load( View::make('pdfs.permissions')->with( $array ), 'A4', 'landscape')->show();

   }

}
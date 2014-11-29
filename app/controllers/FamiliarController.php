<?php

class FamiliarController extends \BaseController {

	public static $ancestor = '/employees/';

	public static $parent = '/employees/{employee}/familiars';

	public function getIndex( $id ){

		$employee = Employees::find( Crypt::decrypt($id) );

		$array = array(
			'employee' => $employee,
			'familiars' => $employee->familiars,
			'route' => self::parseRoute( $employee->id ),
			'parent' => self::$ancestor,
			);

		return View::make('familiars.index')->with($array);

	}
	public function getCreate( $employee ){

		$array = array(
			'employee' => Employees::find( Crypt::decrypt($employee) ),
			'route' => self::parseRoute( Crypt::decrypt($employee) ),
			'parent' => self::$ancestor,
			);

		return View::make('familiars.create')->with( $array );

	}
	public function postCreate( $employee ){

		$familiar = new Familiars();
		$familiar->name = Input::get('name');
		$familiar->identification_number = Input::get('identification_number');
		$familiar->relationship = Input::get('relationship');
		$familiar->id_employee = Crypt::decrypt( $employee );
		$familiar->born_date = date('Y-m-d', strtotime(Input::get('born_date')));
		$familiar->born_place = Input::get('born_place');
		$familiar->sex = Input::get('sex');
		$familiar->save();

		return Redirect::to( self::parseRoute( Crypt::decrypt($employee) ) );

	}
	
	public function getEdit( $employee, $id = '' ){

   		if( $id != '' ):

			$array = array(
				'employee' => Employees::find( Crypt::decrypt( $employee ) ),
				'familiar' => Familiars::find( Crypt::decrypt( $id ) ),
				'route' => self::parseRoute( Crypt::decrypt( $employee ) ),
				'parent' => self::$ancestor,
				);

			return View::make('familiars.edit')->with($array);

		else:

			return Redirect::to( self::parseRoute( Crypt::decrypt($employee) ) );

		endif;

	}

	
	public function postEdit( $employee, $id = '' ){

   		if( $id != '' ):

			$familiar = Familiars::find(Crypt::decrypt($id));

			$familiar->name = Input::get('name');
			$familiar->identification_number = Input::get('identification_number');
			$familiar->relationship = Input::get('relationship');
			$familiar->id_employee = Crypt::decrypt( $employee );
			$familiar->born_date = date('Y-m-d', strtotime(Input::get('born_date')));
			$familiar->born_place = Input::get('born_place');
			$familiar->sex = Input::get('sex');

			$familiar->save();

			return Redirect::to( self::parseRoute( Crypt::decrypt($employee) ) );

		else:

			return Redirect::to( self::parseRoute( Crypt::decrypt($employee) ) );

		endif;

	}

	public function getDelete( $employee, $id ){

		if( $id != '' ):

			$array = array(
				'employee' => Employees::find( Crypt::decrypt( $employee ) ),
				'familiar' => Familiars::find( Crypt::decrypt( $id ) ),
				'route' => self::parseRoute( Crypt::decrypt($employee) ),
				'parent' => self::$ancestor,
				);	

			return View::make('familiars.delete')->with( $array );

		else:

			return Redirect::to( self::parseRoute( Crypt::decrypt($employee) ) );

		endif;

	}
   
   public function postDelete( $employee, $id = '' ){

   		if( $id != '' ):

			$familiar = Familiars::destroy(Crypt::decrypt($id));

			return Redirect::to( self::parseRoute( Crypt::decrypt($employee) ) );

		else:

			return Redirect::to( self::parseRoute( Crypt::decrypt($employee) ) );

		endif;

   }

	public static function parseRoute( $employee ){

		return str_replace('{employee}', Crypt::encrypt($employee), self::$parent );

	}

}
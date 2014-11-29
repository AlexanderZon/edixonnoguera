<?php

class Permissions extends \Eloquent {

	protected $fillable = [];

	public function employee(){

		return $this->belongsTo('Employees', 'id_employee');

	}

	public static function minorThreeDays(){

		return self::where('duration','<=', '3')->get();

	}

	public static function mayorThreeDays(){

		return self::where('duration','>=', '3')->get();

	}

}
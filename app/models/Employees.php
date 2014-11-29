<?php

class Employees extends \Eloquent {

	protected $fillable = [];

	public function division(){
		return $this->belongsTo('Divisions', 'id_division');
	}

	public function office(){
		return $this->belongsTo('Offices', 'id_office');
	}

	public function familiars(){
		return $this->hasMany('Familiars', 'id_employee');
	}

}
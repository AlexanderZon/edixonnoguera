<?php

class Managements extends \Eloquent {

	protected $fillable = [];

	public function divisions(){
		return $this->hasMany('Divisions', 'id_division');
	}

}
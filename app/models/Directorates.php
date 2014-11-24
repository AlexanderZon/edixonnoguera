<?php

class Directorates extends \Eloquent {

	protected $fillable = [];

	public function departments(){
		return $this->hasMany('Departments', 'id_directorate');
	}
	
}
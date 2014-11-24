<?php

class Departments extends \Eloquent {
	
	protected $fillable = [];

	public function directorate(){
		return $this->belongsTo('Directorates', 'id_directorate');
	}

	public function employees(){
		return $this->hasMany('Employees', 'id_department');
	}

}
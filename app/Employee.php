<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Employee extends Authenticatable {

	protected $fillable = [
		'name','lastname','birthday','nationality','gender',
		'specific_position','position','street','colonia',
		'city','state','zip','phone','aditional_phone',
		'cellphone','section','payroll','contact_email',
		'sgmm','rfc','imss','inactive_date','foreign',
		'identification','id_number','infonavit','psi_exam',
		'fm','no_fm','exp_date','date_carta','date_lexis',
		'marital_status'
	];

	/**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
      'password', 'remember_token',
  ];

}

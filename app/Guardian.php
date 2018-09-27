<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Guardian extends Authenticatable {

	protected $table = 'guardians';
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //
		protected $table = 'contacts';

    /** @var array */
    protected $fillable = ['request_user', 'email', 'camera_year', 'use_camera', 'content'];
}

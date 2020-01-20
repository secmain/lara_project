<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //
		protected $table = 'photos';

    /** @var array */
    protected $fillable = ['event_id', 'image_path', 'settei', 'description'];
}

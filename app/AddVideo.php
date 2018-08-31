<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddVideo extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'addvideo';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['video_name', 'description', 'image', 'video'];
}

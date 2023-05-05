<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'menu_name',
        'page_id',
        'menu_slug',
        'up_menu',
        'menu_status',
    ];
}

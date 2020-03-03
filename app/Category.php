<?php
/**
 * Created by PhpStorm.
 * User: moksleivis
 * Date: 2020-03-03
 * Time: 13:31
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['title'];
}
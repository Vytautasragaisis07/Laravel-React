<?php
/**
 * Created by PhpStorm.
 * User: moksleivis
 * Date: 2020-03-03
 * Time: 14:01
 */

namespace App;


class Product
{
    protected $fillable = ['title', 'description', 'quantity', 'price', 'catid', 'img',  'userid'];
}
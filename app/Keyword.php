<?php


namespace App;

use Illuminate\Database\Eloquent\Model;

class Keyword extends Model
{
    protected  $fillable=['keyword','slug','group_id'];
    protected $primaryKey = 'id';
}

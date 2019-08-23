<?php
/**
 * Created by PhpStorm.
 * User: ian
 * Date: 4/5/2018
 * Time: 11:57 AM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $table = "pages";

    protected $fillable = [
        "name",
        "content",
        "status",
        "description",
    ];

}
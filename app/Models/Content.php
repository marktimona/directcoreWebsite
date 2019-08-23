<?php
/**
 * Created by PhpStorm.
 * User: ian
 * Date: 4/5/2018
 * Time: 12:03 PM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $table = "contents";

    protected $fillable = [
        "pageId",
        "name",
        "content",
        "description",
        "status",
    ];

    public function page(){

        return $this->belongsTo(Page::class, "pageId");
    }

}
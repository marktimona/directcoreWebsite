<?php
/**
 * Created by PhpStorm.
 * User: ian
 * Date: 4/6/2018
 * Time: 11:28 AM
 */

namespace App\Http\Service;


use App\Models\Content;

class ContentManagerService
{

    public function content($pageId, $section){

        $content = Content::where('pageId', $pageId)
            ->where('id', $section)
            ->first();

        if(empty($content)){

            return "NO CONTENT";
        }



        return $content->content;
    }

}
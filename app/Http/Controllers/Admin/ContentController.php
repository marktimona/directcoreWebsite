<?php
/**
 * Created by PhpStorm.
 * User: ian
 * Date: 4/5/2018
 * Time: 12:09 PM
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Content;
use App\Models\Page;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }

    public function pageContents($pageId){

        $contents = Content::where('pageId', $pageId)->get();


        $page = Page::findorfail($pageId);

        return view('admin.content.index', compact('contents', 'page'));
    }

    public function create($pageId){

        return view('admin/content/create', compact('pageId'));
    }

    public function save(Request $request, $pageId){

        Content::create(array_merge($request->all(),['pageId' => $pageId] ));

        return redirect('content/page/'.$pageId);
    }

    public function edit($contentId){

        $content = Content::findorfail($contentId);

        return view('admin/content/edit', compact('content'));
    }

    public function update(Request $request, $id){

        $content = Content::findorfail($id);

        $content->update(array_merge($request->all()));

        return redirect('content/page/'.$content->pageId);
    }

}
<?php
/**
 * Created by PhpStorm.
 * User: ian
 * Date: 4/5/2018
 * Time: 12:08 PM
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }

    public function create(){

        return view('admin.page.create');
    }

    public function save(Request $request){


        Page::create(array_merge($request->all()));

        return redirect("home");
    }

    public function edit($id){

        $page = Page::findorfail($id);

        return view('admin.page.edit', compact('page'));
    }

    public function update(Request $request, $id){

        $page= Page::findorfail($id);

        $page->update(array_merge($request->all()));

        return redirect('home');
    }
}
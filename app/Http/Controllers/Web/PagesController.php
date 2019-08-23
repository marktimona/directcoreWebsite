<?php
/**
 * Created by PhpStorm.
 * User: ian
 * Date: 4/6/2018
 * Time: 11:32 AM
 */

namespace app\Http\Controllers\Web;


use App\Http\Controllers\Controller;
use App\Http\Service\ContentManagerService;

class PagesController extends Controller
{
    public function homepage(){

        $content = new ContentManagerService();

        return view('welcome', compact('content'));
    }

    public function about(){

        $content = new ContentManagerService();

        return view('pages.about', compact('content'));
    }
 public function hardware(){
        return view ('pages.solutions.hardware');
    }
     public function internet(){
        return view ('pages.solutions.internet');
    }
//    PRODUCT SECTION START
    public function product(){

        $content = new ContentManagerService();

        return view('pages.products', compact('content'));
    }

    public function alana(){

        $content = new ContentManagerService();

        return view('pages.product.alana', compact('content'));
    }

    public function netAfrika(){


        $content = new ContentManagerService();

        return view('pages.product.netAfrica', compact('content'));
    }

    public function pesatel(){

        $content = new ContentManagerService();

        return view('pages.product.pesatel', compact('content'));
    }

    public function ultraciti(){

        $content = new ContentManagerService();

        return view('pages.product.ultracity', compact('content'));
    }

// END

    public function solution(){

        $content = new ContentManagerService();

        return view('pages.solutions', compact('content'));
    }


//    SOLUTION SECTION START


    public function mobileVas(){

        $content = new ContentManagerService();

        return view('pages.solutions.mobileVas', compact('content'));
    }

    public function networking(){

        $content = new ContentManagerService();

        return view('pages.solutions.networking', compact('content'));
    }

    public function security(){

        $content = new ContentManagerService();

        return view('pages.solutions.security', compact('content'));
    }

    public function software(){

        $content = new ContentManagerService();

        return view('pages.solutions.software', compact('content'));
    }




    public function contact(){

        $content = new ContentManagerService();

        return view('pages.contact', compact('content'));
    }


    public function terms(){

          return view('pages.solutions.terms');
    }
}
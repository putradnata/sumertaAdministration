<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\WebsiteContent;

class WebsiteController extends Controller
{
    public function index(){
        $getContent = WebsiteContent::first();
        // $getContent = DB::table('website_contents')
        //                 ->first();

        // $parsedContent = (object) $getContent;

        return view('website.index',[
            'content' => $getContent
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\NewsModel;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function getMessage(){
        return "get message function";
    }


    public function getDynamicPage(Request  $request){
        echo $request->get("pagename");

        $page = new NewsModel();
        $page->countTextSymbols($request->get(""));

        return view("news", [
           "page_content" => $request->get(getNews())
        ]);
    }
}

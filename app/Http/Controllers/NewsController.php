<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function getNewsFromTempates(News $news)
    {

        $data = $news->all();
        return $data;

    }

    public function addNews(Request $request, News $news)
    {



    }
}

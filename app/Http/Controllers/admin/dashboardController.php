<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\contact;
use App\Models\post;
use Illuminate\Http\Request;
use function Symfony\Component\String\s;

class dashboardController extends Controller
{
    public function  index(Request $request)
    {
        $statistics=[
            'musics' => count(post::where('type','music')->get()),
            'poems' => count(post::where('type','poem')->get()),
            'texts' => count(post::where('type','text')->get()),
            'posts' => count(post::all()),
            'hotMusic'=>post::where('type' , 'music')->orderBy('visit','desc')->limit(4)->get(),
            'hotPosts'=>post::where('type' ,'!=', 'music')->orderBy('visit','desc')->limit(4)->get(),
        ];
//dd($statistics);
//        dd(verta(contact::all()[4]->created_at)->diffMinutes());
//        dd(now());
        return view('back.dashboard.index',compact('statistics'));
    }
}

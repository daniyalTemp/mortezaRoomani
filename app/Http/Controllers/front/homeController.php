<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\contact;
use App\Models\post;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(Request $request)
    {
        $musics = post::where('type', 'music')->orderBy('updated_at', 'desc')->limit(4)->get();
        $texts = post::where('type', '!=', 'music')->orderBy('updated_at', 'desc')->limit(4)->get();

        return view('Front.welcome', compact( 'texts', 'musics'));
    }

    public function contactMe(Request $request)
    {


        $this->validate($request,
            [
                'fullName' => 'required',
                'msg' => 'required',
            ]
            , [
                'fullName.required' => 'وارد کردن نام  الزامی است',
                'msg.required' => 'وارد کردن پیام الزامی است',
            ]

        );
        contact::create([
            'name' => $request->fullName,
            'title' => $request->subject ? $request->subject : 'بدون موضوع',
            'phone' => $request->phone ? $request->phone : 'بدون تلفن همراه',
            'text' => $request->msg,
        ]);

        return redirect()->route('index')->with(['success'=>'پیام شما ارسال شد ']);
    }
}

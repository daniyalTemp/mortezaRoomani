<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\post;
use Illuminate\Http\Request;

class postController extends Controller
{
    public function list(Request $request)
    {
        $posts= post::all();
        return view('back.post.list',compact('posts'));

    }

    public function add(Request $request)
    {
        return view('back.post.form');
    }

    public function edit(Request $request, int $id)
    {
        $post = post::find($id);
        return view('back.post.form', compact('post'));


    }

    public function delete(Request $request, int $id)
    {

        post::destroy([$id]);
        return redirect()->route('dashboard.post.list');



    }

    public function addSave(Request $request, int $id)
    {

//        dd($request->all());


//        dd(str_replace('/' , '-' , $request->birthday));
//        dd(Verta::parseFormat('Y/m/d', $request->birthday)->toCarbon()->format('Y.m.d'));
//        if ($request->has('birthday')) {
//            $date = Verta::parseFormat('Y/m/d', $request->birthday)->toCarbon()->format('Y.m.d');
//        } else {
//            $date = null;
//        }
        if ($id == -1) {
            $post = post::create([

                'text' => $request->text ? $request->text : null,
                'title' => $request->title ? $request->title : null,
                'type' => $request->type ? $request->type : 'text',
                'visit' => 0,
                'pic' => $request->pic ? $request->pic : '',
                'links' => $request->file ? $request->file : '',
            ]);
        } else {
            $post = post::find($id);
            $post->text = $request->text;
//            $post->lastName = $request->lastName;
            $post->title = $request->title;
            $post->pic = $request->pic ? $request->pic : $post->pic;
            $post->links = $request->file ? $request->file : $post->links;
            $post->type = $request->type;
            $post->save();
        }
        if ($request->files->count() > 0) {
            if ($request->has('pic')) {
                $post->pic = $request->file('pic')->getClientOriginalName();
                $post->save();
                $request->file('pic')->move(storage_path('app/public/post/' . $post->id . '/'), $request->file('pic')->getClientOriginalName());
            }
            if ($request->has('file')) {
                $post->links = $request->file('file')->getClientOriginalName();
                $post->save();
                $request->file('file')->move(storage_path('app/public/post/' . $post->id . '/'), $request->file('file')->getClientOriginalName());
            }
        }

        return redirect()->route('dashboard.post.list');

    }
}

<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\post;
use Illuminate\Http\Request;

class postController extends Controller
{
    public function show(Request $request, int $id)
    {
        $post = post::find($id);
        if ($post->type != 'music') {
            $post->visit++;
            $post->save();
        }
        return view('front.post.show', compact('post'));
    }

    public function download(Request $request, int $id)
    {

        $post = post::find($id);
        $post->visit++;
        $post->save();
        return redirect(asset('storage/post/' . $post->id . '/' . $post->links));

    }
}

<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\config;
use Illuminate\Http\Request;

class configController extends Controller
{
    public function show(Request $request)
    {
        $config = config::all();
        if (count($config) == 0)
            $config = config::create([]);
        else {
            $config = $config[0];
        }
        return view('back.config.form', compact('config'));

    }


    public function save(Request $request)
    {
//        dd($request->all());

        $config = config::all()[0];
//        dd($config);
        $config->firstName = ($request->firstName != null) ? $request->firstName : $config->firstName;
        $config->lastName = ($request->lastName != null) ? $request->lastName : $config->lastName;
        $config->email = ($request->email != null) ? $request->email : $config->email;
        $config->phone = ($request->phone != null) ? $request->phone : $config->phone;
        $config->instagram = ($request->instagram != null) ? $request->instagram : $config->instagram;
        $config->telegram = ($request->telegram != null) ? $request->telegram : $config->telegram;
        $config->address = ($request->address != null) ? $request->address : $config->address;
        $config->birthday = ($request->birthday != null) ? $request->birthday : $config->birthday;
        $config->about = ($request->about != null) ? $request->about : $config->about;
        $config->save();
         return redirect()->route('dashboard.index');
    }
}

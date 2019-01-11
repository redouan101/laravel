<?php

namespace App\Http\Controllers;





use Illuminate\Support\Facades\Input;

class AboutmeController extends Controller
{
    public function index($me){

        $id = Input::get('id');
        $b = Input::get('b');
        return view('me/aboutme',['id' => $id, 'b'=> $b]);
        //return'hello! <br>'.$me.'<br>'.$id.$b;
    }
}

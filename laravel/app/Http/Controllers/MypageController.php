<?php
/**
 * Created by PhpStorm.
 * User: redouanassakali
 * Date: 11/11/2018
 * Time: 17:43
 */
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MypageController extends Controller
{
    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function mypage($id)
    {
        return view('mypage',[$id]);
    }
}
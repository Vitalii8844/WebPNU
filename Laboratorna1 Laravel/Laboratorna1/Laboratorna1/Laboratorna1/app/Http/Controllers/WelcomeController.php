<?php
namespace App\Http\Controllers;
use DateTime;
use DateTimeZone;


class WelcomeController extends Controller
{
    public function name($name, $familyname)
    {

        $date = date("Y-m-d");

        $pattern = '/[А-яёЁЇїІіЄєҐґ]/';

        if(preg_match($pattern,$name) and preg_match($pattern,$familyname)){
            return view('welcome',compact('name','familyname','date'));
        }elseif (preg_match($pattern,$familyname)){
            return view('welcome',compact('familyname','date'));
        }elseif(preg_match($pattern,$name)){
            return view('welcome', compact('name', 'date'));
        }else{
            return view('welcome',compact('date'));
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
  // Homeを表示
  public function getTop()
  {
    return view('top');
  }

  // aboutを表示
  public function getabout()
  {
    return view('about');
  }

  // contactを表示
  public function getcontact()
  {
    return view('contact');
  }

  // tokuteisyoutorihikiを表示
  public function gettokuteisyoutorihiki()
  {
    return view('tokuteisyoutorihiki');
  }

  // privacy policyを表示
  public function getprivacypolicy()
  {
    return view('privacy policy');
  }

  // riyoukiyakuを表示
  public function getriyoukiyaku()
  {
    return view('user-agreement');
  }
}

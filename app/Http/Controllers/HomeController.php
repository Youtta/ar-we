<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Client;
use App\Models\CMS;
use App\Models\Language;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function redirect()
    {
        return redirect()->route('home','en');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($code = 'en')
    {

        $language = Language::where('code',$code)->first();
        $data = [
            'language' => $language,
            'sliders' => Slider::where('status',1)->get(),
            'sectionOne' => CMS::with('languages')->where('type',1)->where('language_id',$language->id)->first(),
            'sectionTwo' => CMS::with('languages')->where('type',2)->where('language_id',$language->id)->first(),
            'sectionThree' => CMS::with('languages')->where('type',3)->where('language_id',$language->id)->first(),
            'sectionFour' => CMS::with('languages')->where('type',4)->where('language_id',$language->id)->first(),
            'sectionFive' => CMS::with('languages')->where('type',5)->where('language_id',$language->id)->first(),
            'sectionSix' => CMS::with('languages')->where('type',6)->where('language_id',$language->id)->first(),
            'clients' => Client::where('status',1)->get(),
            'categories' => Category::where('status',1)->where('language_id',$language->id)->latest(),



        ];

        return view('home',$data);
    }




}

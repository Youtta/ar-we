<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Models\Category;
use App\Models\CMS;
use App\Models\ContactUs;
use App\Models\Language;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function about($code = 'en')
    {
        $language = Language::where('code',$code)->first();
        $data = [
            'language' => $language,
            'sectionOne' => CMS::with('languages')->where('type',7)->where('language_id',$language->id)->first(),
            'sectionTwo' => CMS::with('languages')->where('type',8)->where('language_id',$language->id)->get(),
            'sectionThree' => CMS::with('languages')->where('type',9)->where('language_id',$language->id)->first(),
            'sectionFour' => CMS::with('languages')->where('type',10)->where('language_id',$language->id)->first(),
            'sectionFourInner' => CMS::with('languages')->where('type',11)->where('language_id',$language->id)->get(),
        ];

        return view('about-us', $data);
    }


     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function contact($code = 'en')
    {
        $language = Language::where('code',$code)->first();
        $data = [
            'language' => $language,
        ];
        return view('contact-us', $data);
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function products($code = 'en')
    {
        $language = Language::where('code',$code)->first();
        $data = [
            'language' => $language,
            'categories' => Category::where('status',1)->where('language_id',$language->id)->get(),

        ];
        return view('product', $data);
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
    */
    public function contact_store(Request $request)
    {

        $request->validate([
            'first_name'    =>    'required|max:20',
            'last_name'    =>    'required|max:20',
            'email'   =>    'required|email',
            'city'   =>    'required',
            'subject' =>    'required|max:20',
            'message' =>    'required'
        ]);

       ContactUs::create([
        'first_name'     =>    $request->first_name,
        'last_name'     =>    $request->last_name,
        'email'    =>    $request->email,
        'city'    =>    $request->city,
        'subject'  =>    $request->subject,
        'message'  =>    $request->message
        ]);

        $data = array(
            'first_name'     =>    $request->first_name,
            'last_name'     =>    $request->last_name,
            'email'     =>  $request->email,
            'city'     =>  $request->city,
            'subject'   =>  $request->subject,
            'message'   =>  $request->message
        );

        $siteEmail = getConfig('site_email');
        Mail::to($siteEmail)->send(new SendMail($data));

        Session::flash('message', "Message sent successfully.");
        return redirect()->route('home');
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function product($code = 'en', $slug)
    {
        $language = Language::where('code',$code)->first();
        $category_id = Category::where('slug',$slug)->first()->id;
        $data = [
            'language' => $language,
            'slug' => $slug,
            'category_name' => Category::with('products')->where('slug',$slug)->where('language_id',$language->id)->first()->name,
            'products' => Product::where('category_id',$category_id)->where('language_id',$language->id)->get(),

        ];

        // return $data['products'];
        return view('product', $data);
    }
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function productDetail($code = 'en', $slug)
    {
        $language = Language::where('code',$code)->first();
        $category_id = Category::where('slug',$slug)->first()->id;
        $data = [
            'language' => $language,
            'slug' => $slug,
            'category_name' => Category::with('products')->where('slug',$slug)->where('language_id',$language->id)->first()->name,
            'products' => Product::where('category_id',$category_id)->where('language_id',$language->id)->first(),
        ];

        // return $data['products'];
        return view('product-detail', $data);
    }

}

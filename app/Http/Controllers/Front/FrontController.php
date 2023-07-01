<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Services\Front\HomeServices;
use Illuminate\Support\Str;

class FrontController extends Controller
{

    public $nounce;

    public function __construct(){
        $this->nounce = Str::random(32);
    }


    /**
     * Make HomePage Index
     * 
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function index(HomeServices $homeServices)
    {

        $homeCompactReturn = $homeServices->homeIndex();
        return view('contents.front.index.welcome', $homeCompactReturn)->with('js_nounce',$this->nounce);
//        return view('welcome', $homeCompactReturn);
    }

    /**
     * Make About Us Page
     * 
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function about()
    {
        return view('contents.front.index.about')->with('js_nounce',$this->nounce);
    }

    /**
     * Make Contact Us
     * 
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function gallery()
    {
        return view('contents.front.index.gallery')->with('js_nounce',$this->nounce);
    }

    /**
     * Make Contact Us
     * 
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function contact()
    {
        return view('contents.front.index.contact')->with('js_nounce',$this->nounce);
    }
    
    /**
     * Make News
     * 
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function news()
    {
        return view('contents.front.index.news')->with('js_nounce',$this->nounce);
    }

    
}

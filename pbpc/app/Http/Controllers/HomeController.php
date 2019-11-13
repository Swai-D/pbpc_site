<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   /* public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $post_1 = Post::where('Position',1)->get();
        $post_2 = Post::where('Position',2)->get();
        $post_3 = Post::where('Position',3)->get();
        $post_4 = Post::where('Position',4)->get();
        $post_5 = Post::where('Position',5)->get();
        $post_6 = Post::where('Position',6)->get();
        $post_7 = Post::where('Position',7)->get();
        $post_8 = Post::where('Position',8)->get();
        $post_9 = Post::where('Position',9)->get();
        $post_10= Post::where('Position',10)->get();
        $post_12= Post::where('Position',11)->get();
        $post_11= Post::where('Position',12)->get();

        return view('pbpc/index',compact('post_1','post_2','post_3','post_4','post_5','post_6','post_7','post_8','post_9','post_10','post_11','post_12'));
    }

    public function simple()

    {
        $post_1 = Post::where('Position',1)->get();
        $post_2 = Post::where('Position',2)->get();
        $post_3 = Post::where('Position',3)->get();
        $post_4 = Post::where('Position',4)->get();
        $post_5 = Post::where('Position',5)->get();
        $post_6 = Post::where('Position',6)->get();
        $post_7 = Post::where('Position',7)->get();
        $post_8 = Post::where('Position',8)->get();
        $post_9 = Post::where('Position',9)->get();
        $post_10= Post::where('Position',10)->get();
        $post_12= Post::where('Position',11)->get();
        $post_11= Post::where('Position',12)->get();

        return view('pbpc.simple_header',compact('post_1','post_2','post_3','post_4','post_5','post_6','post_7','post_8','post_9','post_10','post_11','post_12'));
    }


    public function section()
    {

        $post_1 = Post::where('Position',1)->get();
        $post_2 = Post::where('Position',2)->get();
        $post_3 = Post::where('Position',3)->get();
        $post_4 = Post::where('Position',4)->get();
        $post_5 = Post::where('Position',5)->get();
        $post_6 = Post::where('Position',6)->get();
        $post_7 = Post::where('Position',7)->get();
        $post_8 = Post::where('Position',8)->get();
        $post_9 = Post::where('Position',9)->get();
        $post_10= Post::where('Position',10)->get();
        $post_12= Post::where('Position',11)->get();
        $post_11= Post::where('Position',12)->get();

        return view('pbpc/simple_section_two',compact('post_1','post_2','post_3','post_4','post_5','post_6','post_7','post_8','post_9','post_10','post_11','post_12'));
    }


    public function sections()
    {

        $post_1 = Post::where('Position',1)->get();
        $post_2 = Post::where('Position',2)->get();
        $post_3 = Post::where('Position',3)->get();
        $post_4 = Post::where('Position',4)->get();
        $post_5 = Post::where('Position',5)->get();
        $post_6 = Post::where('Position',6)->get();
        $post_7 = Post::where('Position',7)->get();
        $post_8 = Post::where('Position',8)->get();
        $post_9 = Post::where('Position',9)->get();
        $post_10= Post::where('Position',10)->get();
        $post_12= Post::where('Position',11)->get();
        $post_11= Post::where('Position',12)->get();

        return view('pbpc/simple_section_three',compact('post_1','post_2','post_3','post_4','post_5','post_6','post_7','post_8','post_9','post_10','post_11','post_12'));
    }

    public function courage()
    {
        $post_1 = Post::where('Position',1)->get();
        $post_2 = Post::where('Position',2)->get();
        $post_3 = Post::where('Position',3)->get();
        $post_4 = Post::where('Position',4)->get();
        $post_5 = Post::where('Position',5)->get();
        $post_6 = Post::where('Position',6)->get();
        $post_7 = Post::where('Position',7)->get();
        $post_8 = Post::where('Position',8)->get();
        $post_9 = Post::where('Position',9)->get();
        $post_10= Post::where('Position',10)->get();
        $post_12= Post::where('Position',11)->get();
        $post_11= Post::where('Position',12)->get();

        return view('pbpc/courage',compact('post_1','post_2','post_3','post_4','post_5','post_6','post_7','post_8','post_9','post_10','post_11','post_12'));
    }


    public function noise()
    {
        $post_1 = Post::where('Position',1)->get();
        $post_2 = Post::where('Position',2)->get();
        $post_3 = Post::where('Position',3)->get();
        $post_4 = Post::where('Position',4)->get();
        $post_5 = Post::where('Position',5)->get();
        $post_6 = Post::where('Position',6)->get();
        $post_7 = Post::where('Position',7)->get();
        $post_8 = Post::where('Position',8)->get();
        $post_9 = Post::where('Position',9)->get();
        $post_10= Post::where('Position',10)->get();
        $post_12= Post::where('Position',11)->get();
        $post_11= Post::where('Position',12)->get();

        return view('pbpc/noise',compact('post_1','post_2','post_3','post_4','post_5','post_6','post_7','post_8','post_9','post_10','post_11','post_12'));
    }

    public function book()
    {

        $post_1 = Post::where('Position',1)->get();
        $post_2 = Post::where('Position',2)->get();
        $post_3 = Post::where('Position',3)->get();
        $post_4 = Post::where('Position',4)->get();
        $post_5 = Post::where('Position',5)->get();
        $post_6 = Post::where('Position',6)->get();
        $post_7 = Post::where('Position',7)->get();
        $post_8 = Post::where('Position',8)->get();
        $post_9 = Post::where('Position',9)->get();
        $post_10= Post::where('Position',10)->get();
        $post_12= Post::where('Position',11)->get();
        $post_11= Post::where('Position',12)->get();

        return view('pbpc/book',compact('post_1','post_2','post_3','post_4','post_5','post_6','post_7','post_8','post_9','post_10','post_11','post_12'));
    }

    public function stress()
    {
        $post_1 = Post::where('Position',1)->get();
        $post_2 = Post::where('Position',2)->get();
        $post_3 = Post::where('Position',3)->get();
        $post_4 = Post::where('Position',4)->get();
        $post_5 = Post::where('Position',5)->get();
        $post_6 = Post::where('Position',6)->get();
        $post_7 = Post::where('Position',7)->get();
        $post_8 = Post::where('Position',8)->get();
        $post_9 = Post::where('Position',9)->get();
        $post_10= Post::where('Position',10)->get();
        $post_12= Post::where('Position',11)->get();
        $post_11= Post::where('Position',12)->get();

        return view('pbpc/stress',compact('post_1','post_2','post_3','post_4','post_5','post_6','post_7','post_8','post_9','post_10','post_11','post_12'));
    }

    public function about()
    {
        $post_1 = Post::where('Position',1)->get();
        $post_2 = Post::where('Position',2)->get();
        $post_3 = Post::where('Position',3)->get();
        $post_4 = Post::where('Position',4)->get();
        $post_5 = Post::where('Position',5)->get();
        $post_6 = Post::where('Position',6)->get();
        $post_7 = Post::where('Position',7)->get();
        $post_8 = Post::where('Position',8)->get();
        $post_9 = Post::where('Position',9)->get();
        $post_10= Post::where('Position',10)->get();
        $post_12= Post::where('Position',11)->get();
        $post_11= Post::where('Position',12)->get();
        return view('pbpc/about',compact('post_1','post_2','post_3','post_4','post_5','post_6','post_7','post_8','post_9','post_10','post_11','post_12'));
    }

    public function knowing()
    {
        $post_1 = Post::where('Position',1)->get();
        $post_2 = Post::where('Position',2)->get();
        $post_3 = Post::where('Position',3)->get();
        $post_4 = Post::where('Position',4)->get();
        $post_5 = Post::where('Position',5)->get();
        $post_6 = Post::where('Position',6)->get();
        $post_7 = Post::where('Position',7)->get();
        $post_8 = Post::where('Position',8)->get();
        $post_9 = Post::where('Position',9)->get();
        $post_10= Post::where('Position',10)->get();
        $post_12= Post::where('Position',11)->get();
        $post_11= Post::where('Position',12)->get();
        return view('pbpc/knowing',compact('post_1','post_2','post_3','post_4','post_5','post_6','post_7','post_8','post_9','post_10','post_11','post_12'));
    }

    public function dry()
    {
        $post_1 = Post::where('Position',1)->get();
        $post_2 = Post::where('Position',2)->get();
        $post_3 = Post::where('Position',3)->get();
        $post_4 = Post::where('Position',4)->get();
        $post_5 = Post::where('Position',5)->get();
        $post_6 = Post::where('Position',6)->get();
        $post_7 = Post::where('Position',7)->get();
        $post_8 = Post::where('Position',8)->get();
        $post_9 = Post::where('Position',9)->get();
        $post_10= Post::where('Position',10)->get();
        $post_12= Post::where('Position',11)->get();
        $post_11= Post::where('Position',12)->get();
        return view('pbpc/dry',compact('post_1','post_2','post_3','post_4','post_5','post_6','post_7','post_8','post_9','post_10','post_11','post_12'));
    }

    public function illusion()
    {
        $post_1 = Post::where('Position',1)->get();
        $post_2 = Post::where('Position',2)->get();
        $post_3 = Post::where('Position',3)->get();
        $post_4 = Post::where('Position',4)->get();
        $post_5 = Post::where('Position',5)->get();
        $post_6 = Post::where('Position',6)->get();
        $post_7 = Post::where('Position',7)->get();
        $post_8 = Post::where('Position',8)->get();
        $post_9 = Post::where('Position',9)->get();
        $post_10= Post::where('Position',10)->get();
        $post_12= Post::where('Position',11)->get();
        $post_11= Post::where('Position',12)->get();
        return view('pbpc/illusion',compact('post_1','post_2','post_3','post_4','post_5','post_6','post_7','post_8','post_9','post_10','post_11','post_12'));
    }

    public function magic()
    {
        $post_1 = Post::where('Position',1)->get();
        $post_2 = Post::where('Position',2)->get();
        $post_3 = Post::where('Position',3)->get();
        $post_4 = Post::where('Position',4)->get();
        $post_5 = Post::where('Position',5)->get();
        $post_6 = Post::where('Position',6)->get();
        $post_7 = Post::where('Position',7)->get();
        $post_8 = Post::where('Position',8)->get();
        $post_9 = Post::where('Position',9)->get();
        $post_10= Post::where('Position',10)->get();
        $post_12= Post::where('Position',11)->get();
        $post_11= Post::where('Position',12)->get();
        return view('pbpc/magic',compact('post_1','post_2','post_3','post_4','post_5','post_6','post_7','post_8','post_9','post_10','post_11','post_12'));
    }
    public function why()
    {
        $post_1 = Post::where('Position',1)->get();
        $post_2 = Post::where('Position',2)->get();
        $post_3 = Post::where('Position',3)->get();
        $post_4 = Post::where('Position',4)->get();
        $post_5 = Post::where('Position',5)->get();
        $post_6 = Post::where('Position',6)->get();
        $post_7 = Post::where('Position',7)->get();
        $post_8 = Post::where('Position',8)->get();
        $post_9 = Post::where('Position',9)->get();
        $post_10= Post::where('Position',10)->get();
        $post_12= Post::where('Position',11)->get();
        $post_11= Post::where('Position',12)->get();
        return view('pbpc/why',compact('post_1','post_2','post_3','post_4','post_5','post_6','post_7','post_8','post_9','post_10','post_11','post_12'));
    }

    public function contact()
    {
        $post_1 = Post::where('Position',1)->get();
        $post_2 = Post::where('Position',2)->get();
        $post_3 = Post::where('Position',3)->get();
        $post_4 = Post::where('Position',4)->get();
        $post_5 = Post::where('Position',5)->get();
        $post_6 = Post::where('Position',6)->get();
        $post_7 = Post::where('Position',7)->get();
        $post_8 = Post::where('Position',8)->get();
        $post_9 = Post::where('Position',9)->get();
        $post_10= Post::where('Position',10)->get();
        $post_12= Post::where('Position',11)->get();
        $post_11= Post::where('Position',12)->get();

        return view('pbpc/contact',compact('post_1','post_2','post_3','post_4','post_5','post_6','post_7','post_8','post_9','post_10','post_11','post_12'));
    }


    
      
   

}

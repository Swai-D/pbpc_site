<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post; 
use Image;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
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

        return view('admin.index',array('user'=>Auth::user()),compact('post_1','post_2','post_3','post_4','post_5','post_6','post_7','post_8','post_9','post_10','post_11','post_12'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        Post::create($this->validateRequest());       
         
         return redirect('admin/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $id)
    {
        dd($id->created_at);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Post $id)
    {
        $id->update($this->validateRequest());
        dd($id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    private function validateRequest()
    {
        
            return tap(request()->validate([
                'Heading' => 'required',
                'Caption' => 'required',
                'Position' => 'required',
                'Photo' =>  'required',
                'AuthorName' => 'required',
                'Content' => 'required',
               
            ]), function (){

                    if( request()->hasFile('Photo')){
                                $photo = request()->file('Photo');
                                $filename = time() . ',' .$photo->getClientOriginalExtension();
                                Image::make($photo)->save(public_path('/uploads/avatar/'.$filename));
                                $post =  Post::all();
                                $post->Photo = $filename;
                                $post ->save();
                               
                        }
            });
            
    }


    public function profile(){

        return view('admin.profile');
    }
    

    public function update_profile(Request $request){
        
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . ',' .$avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300 ,300)->save(public_path('/uploads/avatar/'.$filename));
            $user = Auth::user();
            $user->avatar = $filename;
            $user ->save();
        }

        return view('admin/index');

      }

     

}

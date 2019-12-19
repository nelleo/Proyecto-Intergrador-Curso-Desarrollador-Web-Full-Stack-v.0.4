<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Posteo;
use App\Post;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    // public function index()
    // {
    //     $posts = Post::all();//->take(5);
    //     return view('home', compact('posts',$posts));
    // }
    public function logout(){
        if(Auth::check()){
            Auth::logout();
            return view("auth/login");
        }else{
            return view("auth/login");
        }
          
   }
    public function home(){

        $posteos=Posteo::All();

        return view('inicio',(["posteos"=>$posteos]));
   }
    
    public function posteo(Request $request)
    {
        $userLog=Auth::user();
        
        $posteo = new Posteo;

        $posteo->text_post=$request["texto"];

        $posteo->user_id=$userLog->id;

        $posteo->save();

        $posteos=Posteo::All();

        return view('inicio',(["posteos"=>$posteos]));
    }

    public function misPosteos(){
        
        $userLog=Auth::user();

        $posteos=$userLog->posteos()->orderBy("created_at","ASC")->get();

        return view('misPosteos',(["posteos"=>$posteos])); 
  }
  public function deletePost($id){
    
    $posteo=Posteo::find($id);

    $posteo->delete();

      return redirect("/misPosteos");
  }

    public function index()
    {
        return view('home');
    }
    
}

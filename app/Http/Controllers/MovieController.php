<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Admin;

class MovieController extends Controller
{

    public function admin_login(Request $request){
        if($request->isMethod("post")){
            $email = $request->get("email");
            $password = $request->get('password');
            $count = (new Admin)::where('email',$email)->where('password',$password)->count();
            if($count == 1){
                $request->session()->put('admin','true');
                return redirect('/admin/dashboard');
            }else{
                echo "Wrong Credentials";
            }
        }
        $login = session('admin');
        if($login == 'true'){
            return redirect('admin/dashboard');
        }else{
            return view('admin.login');
        }
    }

    public function admin_logout(Request $request){
        $request->session()->remove('admin');
        return redirect('admin/login');
    }

    public function create(Request $request){
        if($request->isMethod('post')){
            $file = $request->file('image');
            $destination = 'uploads';
            if($file->move($destination,$file->getClientOriginalName())){
                $data = [
                    'title' => $request->get('title'),
                    'description' => $request->get('description'),
                    'date' => $request->get('date'),
                    'category' => $request->get('category'),
                    'image' => $file->getClientOriginalName()
                ];
                (new Movie)::create($data);
            }
        }
        $login = session('admin');
        if($login == 'true'){
            return view('movie.create');
        }else{
            return redirect('admin');
        }
    }

    public function view(){
        $movies = (new Movie)::get();
        $login = session('admin');
        if($login == 'true'){
            return view('movie.view',['movies' => $movies]);
        }else{
            return redirect('admin');
        }
    }

}

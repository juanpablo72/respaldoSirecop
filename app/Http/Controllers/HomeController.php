<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\User;
use  App\Models\Document;
use  App\Models\Message;
use Illuminate\Support\Facades\DB;

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
    public function index()
    {

        $user =  \Auth::user();
        $docs = Document::where('user_id',$user->id)->first();
        if($docs){
            $docs_id = $docs->id;
        }else{
            $docs_id = null;
        }
        $message = Message::where('document_id',$docs_id)->first();
        

        return view('home',[
            'notification' => $message
        ]);
    }
}

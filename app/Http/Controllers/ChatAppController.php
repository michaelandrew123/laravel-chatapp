<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
class ChatAppController extends Controller
{

    function init(){
        $user = Auth::user();
        return resposne()-json($user, 200);
    }

    function login(Request $request){

        if(Auth::attempt(['username'=>$request->username, 'password' => $request->password], true)){
            return response()->json(Auth::user(), 200);
        }else{
            return response()->json(['error'=>'Could not log you in'], 401);
        }

    }

    function register(Request $request){
        $user = User::where('username', $request->username)->first();
        
        if(isset($user->id)){
            return response()->json(['error' => 'Username already exists.'], 401);
        }

        $user = new User();

        $user->username = $request->username;
        $user->password = bcrypt($request->password);
        $user->save();

        Auth::login($user); 
        
        return response()->json($user, 200);
    }


    function logout(){
        Auth::logout();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
}

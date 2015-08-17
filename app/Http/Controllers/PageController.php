<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Redirect;
use App\User;
use Input;
use Validator;
use Response;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('index');
    }

    public function timeline($name, $surname) {

        if(Auth::id()){
            $user = User::find(Auth::id());
            return view ('timeline.index', compact('user'));
        }
        else return Redirect::action('PageController@index');
            
    }

    public function addGame($id = null){
        $id = Input::get('id');
        $user = User::with('Club')->find($id);

        return view ('game.index', compact('user'));
    }

    public function logout() {
	   Auth::logout();
	   return Redirect::action('PageController@index');
    }

    public function postUpload(){
        $input = Input::all();
        $user = User::find($input['id']);
        //logo
        if(isset($input['logo'])){
            $rules = array(
                'logo' => 'image|max:3000',
            );
            $validation = Validator::make($input, $rules);

            if ($validation->fails())
            {
                return Response::make($validation->errors->first(), 400);
            }
            $file = Input::file('logo');
            $extension =$file->getClientOriginalExtension(); 
            $directory = public_path().'/images/logos/';
            $filename = $user->id.".{$extension}";
    
        }

        //photo
        elseif(isset($input['photo1']) || isset($input['photo2']) || isset($input['photo3']) || isset($input['photo4'])){
            $file = Input::file('photo'.$input['id_photo']);
            $extension =$file->getClientOriginalExtension(); 
            $directory = public_path().'/photos/';
            $filename = $user->id."_".$input['id_photo'].".{$extension}"; 
            
        }
        
        
            
            $upload_success = $file->move($directory, $filename);
            if( $upload_success ) {
                return Response::json('success', 200);
            } else {
                return Response::json('error', 400);
            }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}

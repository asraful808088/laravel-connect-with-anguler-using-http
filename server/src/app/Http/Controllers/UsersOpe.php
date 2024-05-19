<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Users ;


class UsersOpe extends Controller
{
   
    public function index()
    {
        return response()->json([
            "users"=>Users::all()
        ], 200);
    }

   
    public function create()
    {
        //
    }

  
    public function store(Request $request)
    {
        
       
        Log::channel('users')->info( $request->all());
        $file = $request->file('file');
        $path = $file->store('uploads', 'public');
        Users::insert([
            "email"=>$request->get("email"),
            "username"=>$request->get("username"),
            "phone"=>$request->get("phone"),
            "image"=> $path ,

        ]);

        return response()->json([
            "users"=>Users::all()
        ], 200);
    }

    
    public function show($id)
    {
       
    }

    
    public function edit($id)
    {
        
    }

    
    public function update(Request $request, $id)
    {
       
    }

   
    public function destroy($id)
    {
        Users::destroy($id);
        return response()->json([
            "users"=>Users::all()
        ], 200);
    }
}

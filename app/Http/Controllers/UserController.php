<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\User;


class UserController extends Controller
{
    public function uploadAvatar(Request $request)
    {
       if ($request->hasFile('image')){
           User::uploadAvatar($request->image);
           return redirect()->back()->with('message','Image Uploaded');

           //$request->session()->flash('message', 'Image Uploaded.');
         }
       // $request->session()->flash();
       return redirect()->back()->with('error', 'Image Not Uploaded.');
        
    }

    // protected function deleteOldImage()
    // {
    //     if(auth()->user()->avatar){
    //         storage::delete('/public/images/' . auth()->user()->avatar);
    //     }
    // }
}

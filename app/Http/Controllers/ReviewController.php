<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class ReviewController extends Controller
{
    //
    
    public function show()
    {
        return view('video_review');
    }
    
    public function upload(Request $request)
    {
        
        if($request->hasFile('file')){
        
          $file = $request->file('file');
        //   print_r($file->getClientOriginalExtension());die;
          $rules = array(
      'file'  => 'required'
     );
     
     $error = Validator::make($request->all(), $rules);

     if($error->fails())
     {
      return response()->json(['errors' => $error->errors()->all()]);
     }
           $new_name = rand() . '.' . $file->getClientOriginalExtension();
           $file->move(public_path('videos'), $new_name);
           $output = array(
         'success' => 'Image uploaded successfully',
        );

        return response()->json($output);
        }
    }
}

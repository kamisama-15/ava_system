<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;
class PostController extends Controller
{

    public function post(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'file' => 'required|file|max:3024', // Example rule: required, file type, maximum file size of 3MB
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        $title = $request->input('title');
        $file = $request->file('file');
        $titleParts = explode(' ', $title);
        $firstWord = $titleParts[0];
        $fileName = $firstWord . '.' . $file->getClientOriginalExtension();
    
        Storage::disk('local')->put('public/post/' . $fileName, file_get_contents($file));
    
        DB::table('post')->insert([
            'title' => $title,
            'description' => $request->input('description'),
            'file' => $fileName,
            'created_at' => now()
        ]);
    
        return redirect()->action('AnnouncementController@view_announcements');
    }

    public function display_post(){


    }
    

}

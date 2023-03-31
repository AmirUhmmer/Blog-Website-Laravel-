<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
use Illuminate\Contracts\Cache\Store;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;

class EditPost extends Controller
{
    public function UpdateDB(Request $request){
        $request->validate([
            'pictureToEdit' => 'image',
            'titleToEdit' => 'required|min:2|max:80',
            'contentToEdit' => 'required|min:2'
        ]);

        $id = $request->input('idEdit');
        $origPic = Posts::where('id', $id)->pluck('picture')->first();

        $title = $request->input('titleToEdit');
        $content = $request->input('contentToEdit');
        $fileName = ($request->file('pictureToEdit') ? 'storage/pictures/'.time().$request->file('pictureToEdit')->getClientOriginalName() : $origPic);
        
        $current_timestamp = time();
        $current_date_time = date('Y-m-d H:i:s', $current_timestamp);
        
        //update but delay the file path
        $editPostSuccess = Posts::where('id', $id)->update([
            'title' => $title,
            'content' => $content,
            'created_at'=>$current_date_time
        ]);

        //delete and update the picture
        if($editPostSuccess){
            //delete if pic is updated
            ($request->file('pictureToEdit') ? Storage::disk('local')->delete('public/pictures/'.substr($origPic, 17)) : '');

            Posts::where('id', $id)->update(['picture' => $fileName]);

            ($request->file('pictureToEdit') ? $request->file('pictureToEdit')->storeAs('pictures', time().$request->file('pictureToEdit')->getClientOriginalName()) : '');
            Alert::success('Success Title', 'Success Message');
            return redirect('user_profile')->with('success_update', 'Successfully updated post');
        }
        else{
            return redirect('index');
        }
    }
}

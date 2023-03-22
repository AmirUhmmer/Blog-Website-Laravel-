<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;

class DeletePost extends Controller
{
    public function deleteDB($id){

        Posts::where('id', $id)->update([
            'deleted' => '1',
        ]);

        $origPic = Posts::where('id', $id)->pluck('picture')->first();

        Storage::disk('local')->delete('public/pictures/'.substr($origPic, 17));

        Alert::success('Success Title', 'Success Message');
        return redirect('user_profile')->with('success_delete', 'Successfully deleted post');
    }
    
}

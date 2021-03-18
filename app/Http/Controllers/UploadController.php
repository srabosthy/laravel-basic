<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ImageModel;
use Image;


class UploadController extends Controller
{
    public function upload(){
        $images = ImageModel::all();
        return view('upload',compact('images'));
    }
    public function uploadImage(Request $request){
        $originalImage= $request->file("filename");
        $thumbnailImage = Image::make($originalImage);

        $thumbnailPath = public_path().'/thumbnail/';
        $originalPath = public_path().'/images/';

        $temp = $originalImage->getClientOriginalName();
        $tmp_ext = explode(".",$temp);
        $ext = end($tmp_ext);
        $filename = time().'.'.$ext;


        $thumbnailImage->save($originalPath.$filename); 
        $thumbnailImage->resize(150,150);
        $thumbnailImage->save($thumbnailPath.$filename); 

        $imagemodel= new ImageModel();
        $imagemodel->filename =  $filename;
        if($imagemodel->save()){
            return redirect()->to('upload');
        }
      
    }
}

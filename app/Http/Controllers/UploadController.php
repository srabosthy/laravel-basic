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
        foreach($request->file("filename") as $file){
            $originalImage= $file;
            $thumbnailImage = Image::make($originalImage);
    
            $originalPath = public_path().'/images/';
            $thumbnailPath = public_path().'/thumbnail/';
    
            $temp = $originalImage->getClientOriginalName();
            $tmp_ext = explode(".",$temp);
            $ext = end($tmp_ext);
            $filename = time().rand(1,1000).'.'.$ext;
    
            $thumbnailImage->save($originalPath.$filename); 
            $thumbnailImage->resize(150,150);
            $thumbnailImage->save($thumbnailPath.$filename); 
    
            $imagemodel= new ImageModel();
            $imagemodel->filename =  $filename;
            $imagemodel->save();
        }
        return redirect()->to('upload');
    }
}

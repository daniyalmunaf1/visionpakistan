<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class UploadImageController extends Controller
{
    public function storage_upload($file,$file_base_path)
    {

        $folderPath = storage_path('/');  
        // dd($file); 

        $path = storage_path('/').''.$file_base_path;
        
        if(!File::isDirectory($path)){

            File::makeDirectory($path, 0777, true, true);
    
        }        
   
        //$file->move($destinationPath,$file->getClientOriginalName());
        $number = mt_rand(1000000000, 9999999999);
        $fileName = $number.''.time().'.'.$file->getClientOriginalName();  
        //dd(public_path('uploads'));
        $destination_path = $folderPath.''.$file_base_path;

       $file->move($destination_path, $fileName);
        
       $File_final_path = $file_base_path.''.$fileName;

    //    dd($File_final_path);
        
       return $File_final_path;  

    }
}
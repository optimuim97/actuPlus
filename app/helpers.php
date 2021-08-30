<?php

use Illuminate\Http\Request;

 function imgur(Request $request,String $filename){
        $file = $request->file($filename);

        if ($file) {
            $pictures = [];
            if ($file != null) {
                $imgurFile = \Imgur::upload($file);
                $fileLink = $imgurFile->link();
            }
        } else {
            $fileLink = '';
        }
        $input[$filename] = $fileLink;

}

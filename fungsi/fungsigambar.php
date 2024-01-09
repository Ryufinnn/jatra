<?php





function UploadImage($fupload_name){

  //direktori gambar

         $vdir_upload = "../gambar/";

         $vfile_upload = $vdir_upload . $fupload_name;

		 



  //Simpan gambar dalam ukuran sebenarnya

         move_uploaded_file($_FILES["fupload"]["tmp_name"], $vfile_upload);



  //identitas file asli

         $im_src = imagecreatefromjpeg($vfile_upload);

         $src_width = imageSX($im_src);

         $src_height = imageSY($im_src);



  //Simpan dalam versi small 110 pixel

  //Set ukuran gambar hasil perubahan

         $dst_width = 500;

         $dst_height = ($dst_width/$src_width)*$src_height;



  //proses perubahan ukuran

        $im = imagecreatetruecolor($dst_width,$dst_height);

              imagecopyresampled($im, $im_src, 0, 0, 0, 0, $dst_width, $dst_height, $src_width, $src_height);



  //Simpan gambar

       imagejpeg($im,$vdir_upload . $fupload_name);

  

  //Hapus gambar di memori komputer

       imagedestroy($im_src);

       imagedestroy($im);

}



function UploadAlbum($fupload_name){

  //direktori gambar

         $vdir_upload = "../album/";

         $vfile_upload = $vdir_upload . $fupload_name;

		 



  //Simpan gambar dalam ukuran sebenarnya

         move_uploaded_file($_FILES["fupload"]["tmp_name"], $vfile_upload);



  //identitas file asli

         $im_src = imagecreatefromjpeg($vfile_upload);

         $src_width = imageSX($im_src);

         $src_height = imageSY($im_src);



  //Simpan dalam versi small 110 pixel

  //Set ukuran gambar hasil perubahan

         $dst_width = 300;

         $dst_height = ($dst_width/$src_width)*$src_height;



  //proses perubahan ukuran

        $im = imagecreatetruecolor($dst_width,$dst_height);

              imagecopyresampled($im, $im_src, 0, 0, 0, 0, $dst_width, $dst_height, $src_width, $src_height);



  //Simpan gambar

       imagejpeg($im,$vdir_upload . $fupload_name);

  

  //Hapus gambar di memori komputer

       imagedestroy($im_src);

       imagedestroy($im);

}




function UploadGambarheader($fupload_name){

  //direktori gambar

         $vdir_upload = "../gambarheader/";

         $vfile_upload = $vdir_upload . $fupload_name;

		 



  //Simpan gambar dalam ukuran sebenarnya

         move_uploaded_file($_FILES["fupload"]["tmp_name"], $vfile_upload);



  //identitas file asli

         $im_src = imagecreatefromjpeg($vfile_upload);

         $src_width = imageSX($im_src);

         $src_height = imageSY($im_src);



  //Simpan dalam versi small 110 pixel

  //Set ukuran gambar hasil perubahan

         $dst_width = 1100;

         $dst_height = 220;



  //proses perubahan ukuran

        $im = imagecreatetruecolor($dst_width,$dst_height);

              imagecopyresampled($im, $im_src, 0, 0, 0, 0, $dst_width, $dst_height, $src_width, $src_height);



  //Simpan gambar

       imagejpeg($im,$vdir_upload . $fupload_name);

  

  //Hapus gambar di memori komputer

       imagedestroy($im_src);

       imagedestroy($im);

}


function UploadGaleri($fupload_name){

  //direktori gambar

         $vdir_upload = "../galeri/";

         $vfile_upload = $vdir_upload . $fupload_name;

		 



  //Simpan gambar dalam ukuran sebenarnya

         move_uploaded_file($_FILES["fupload"]["tmp_name"], $vfile_upload);



  //identitas file asli

         $im_src = imagecreatefromjpeg($vfile_upload);

         $src_width = imageSX($im_src);

         $src_height = imageSY($im_src);



  //Simpan dalam versi small 110 pixel

  //Set ukuran gambar hasil perubahan

         $dst_width = 400;

         $dst_height = ($dst_width/$src_width)*$src_height;



  //proses perubahan ukuran

        $im = imagecreatetruecolor($dst_width,$dst_height);

              imagecopyresampled($im, $im_src, 0, 0, 0, 0, $dst_width, $dst_height, $src_width, $src_height);



  //Simpan gambar

       imagejpeg($im,$vdir_upload . $fupload_name);

  

  //Hapus gambar di memori komputer

       imagedestroy($im_src);

       imagedestroy($im);

}



function UploadWali($fupload_name){

  //direktori gambar

         $vdir_upload = "../walinagari/";

         $vfile_upload = $vdir_upload . $fupload_name;

		 



  //Simpan gambar dalam ukuran sebenarnya

         move_uploaded_file($_FILES["fupload"]["tmp_name"], $vfile_upload);



  //identitas file asli

         $im_src = imagecreatefromjpeg($vfile_upload);

         $src_width = imageSX($im_src);

         $src_height = imageSY($im_src);



  //Simpan dalam versi small 110 pixel

  //Set ukuran gambar hasil perubahan

         $dst_width = 400;

         $dst_height = ($dst_width/$src_width)*$src_height;



  //proses perubahan ukuran

        $im = imagecreatetruecolor($dst_width,$dst_height);

              imagecopyresampled($im, $im_src, 0, 0, 0, 0, $dst_width, $dst_height, $src_width, $src_height);



  //Simpan gambar

       imagejpeg($im,$vdir_upload . $fupload_name);

  

  //Hapus gambar di memori komputer

       imagedestroy($im_src);

       imagedestroy($im);

}



function UploadHeader($fupload_name){

  //direktori gambar

         $vdir_upload = "../header/";

         $vfile_upload = $vdir_upload . $fupload_name;

		 



  //Simpan gambar dalam ukuran sebenarnya

         move_uploaded_file($_FILES["fupload"]["tmp_name"], $vfile_upload);



  //identitas file asli

         $im_src = imagecreatefromjpeg($vfile_upload);

         $src_width = imageSX($im_src);

         $src_height = imageSY($im_src);



  //Simpan dalam versi small 110 pixel

  //Set ukuran gambar hasil perubahan

         $dst_width = 1100;

         $dst_height = 200;



  //proses perubahan ukuran

        $im = imagecreatetruecolor($dst_width,$dst_height);

              imagecopyresampled($im, $im_src, 0, 0, 0, 0, $dst_width, $dst_height, $src_width, $src_height);



  //Simpan gambar

       imagejpeg($im,$vdir_upload . $fupload_name);

  

  //Hapus gambar di memori komputer

       imagedestroy($im_src);

       imagedestroy($im);

}



function UploadKetua($fupload_name){

  //direktori gambar

         $vdir_upload = "../ketuakabupaten/";

         $vfile_upload = $vdir_upload . $fupload_name;

		 



  //Simpan gambar dalam ukuran sebenarnya

         move_uploaded_file($_FILES["fupload"]["tmp_name"], $vfile_upload);



  //identitas file asli

         $im_src = imagecreatefromjpeg($vfile_upload);

         $src_width = imageSX($im_src);

         $src_height = imageSY($im_src);



  //Simpan dalam versi small 110 pixel

  //Set ukuran gambar hasil perubahan

         $dst_width = 160;

         $dst_height = 240;



  //proses perubahan ukuran

        $im = imagecreatetruecolor($dst_width,$dst_height);

              imagecopyresampled($im, $im_src, 0, 0, 0, 0, $dst_width, $dst_height, $src_width, $src_height);



  //Simpan gambar

       imagejpeg($im,$vdir_upload . $fupload_name);

  

  //Hapus gambar di memori komputer

       imagedestroy($im_src);

       imagedestroy($im);

}









?>
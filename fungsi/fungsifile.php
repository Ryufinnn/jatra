<?php
function UploadUndang($fupload_name){

  $vdir_upload = "../file/undang-undang/";
  $vfile_upload = $vdir_upload . $fupload_name;

  
  move_uploaded_file($_FILES["fupload"]["tmp_name"], $vfile_upload);
}


function UploadPP($fupload_name){
  
  $vdir_upload = "../file/peraturan-pemerintah/";
  $vfile_upload = $vdir_upload . $fupload_name;

 
  move_uploaded_file($_FILES["fupload"]["tmp_name"], $vfile_upload);
}

function UploadArtikel($fupload_name){
  
  $vdir_upload = "../file/artikel/";
  $vfile_upload = $vdir_upload . $fupload_name;

 
  move_uploaded_file($_FILES["fupload"]["tmp_name"], $vfile_upload);
}


function UploadPerda($fupload_name){
 
  $vdir_upload = "../file/perda/";
  $vfile_upload = $vdir_upload . $fupload_name;

 
  move_uploaded_file($_FILES["fupload"]["tmp_name"], $vfile_upload);
}
function UploadPerkab($fupload_name){
  
  $vdir_upload = "../file/perkab/";
  $vfile_upload = $vdir_upload . $fupload_name;

 
  move_uploaded_file($_FILES["fupload"]["tmp_name"], $vfile_upload);
}


function UploadIklan($fupload_name){
  $vdir_upload = "../iklan/";
  $vfile_upload = $vdir_upload . $fupload_name;
  move_uploaded_file($_FILES["fupload"]["tmp_name"], $vfile_upload);
}

function UploadNagari($fupload_name){
 
  $vdir_upload = "../file/pernagari/";
  $vfile_upload = $vdir_upload . $fupload_name;

 
  move_uploaded_file($_FILES["fupload"]["tmp_name"], $vfile_upload);
}
?>
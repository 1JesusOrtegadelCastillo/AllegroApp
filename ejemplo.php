<?php

// subirImgAlServer->boolean|str
function subirImgAlServer($name,$maxSize,$rutaDeSubidaDeImg){
  $msg = "";
  $uploadedfileload="true";
  $uploadedfile_size=$_FILES[$name]['size'];

  if ($_FILES[$name]['size']==0){
    $msg=$msg."por favor seleccione una imagen <br><br>";
    $uploadedfileload="false";
  }

  if ($_FILES[$name]['size']>$maxSize){
    $msg=$msg."El archivo es mayor que ".$maxSize.", debes reduzcirlo antes de subirlo<BR>";
    $uploadedfileload="false";
  }

  if (!($_FILES[$name]['type'] =="image/pjpeg" OR $_FILES[$name]['type'] =="image/gif"  OR $_FILES[$name]['type'] =="image/jpeg")){
    $msg=$msg." Tu archivo tiene que ser JPG o GIF. Otros archivos no son permitidos<BR>";
    $uploadedfileload="false";
  }
  $dir_subida = $_SERVER["DOCUMENT_ROOT"].$rutaDeSubidaDeImg;
  $fichero_subido = $dir_subida . basename($_FILES[$name]['name']);

  if($uploadedfileload=="true"){
    if (move_uploaded_file($_FILES[$name]['tmp_name'],$fichero_subido)) {
      return true;
    }else {
        return "no se pudo subir la img";
    }
  }else{
    return $msg;
  }
}

function subirMusicaAlServer($name,$maxSize,$rutaDeSubidaDeMusica){
  $msg = "";
  $uploadedfileload="true";
  $uploadedfile_size=$_FILES[$name]['size'];

  if ($_FILES[$name]['size']==0){
    $msg=$msg."por favor seleccione un Audio <br><br>";
    $uploadedfileload="false";
  }


  if ($_FILES[$name]['size']>$maxSize){
    $msg=$msg."El archivo es mayor que ".$maxSize.", debes reduzcirlo antes de subirlo<BR>";
    $uploadedfileload="false";
  }

  if (!($_FILES[$name]['type'] =="audio/mp3" OR $_FILES[$name]['type'] =="audio/webm"  OR $_FILES[$name]['type'] =="audio/wav")){
    $msg=$msg." Tu archivo tiene que ser mp3,weva  o wav. Otros archivos no son permitidos<BR>".$_FILES[$name]['type'];
    $uploadedfileload="false";
  }
  $dir_subida = $_SERVER["DOCUMENT_ROOT"].$rutaDeSubidaDeMusica;
  $fichero_subido = $dir_subida . basename($_FILES[$name]['name']);

  if($uploadedfileload=="true"){
    if (move_uploaded_file($_FILES[$name]['tmp_name'],$fichero_subido)) {
      return true;
    }else {
        return "no se pudo subir el audio";
    }
  }else{
    return $msg;
  }
}
 ?>

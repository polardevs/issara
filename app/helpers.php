<?php

function id_from_name($url)
{
  $txt = explode('-', $url);
  return $txt[count($txt) - 1];
}

function delScriptTag($text)
{
  return preg_replace('#<script(.*?)>(.*?)</script>#is', '', $text);
}

function delFontInline($text)
{
  return preg_replace("/font.*?:.+?;/", "", $text);
}

function spaceToLike($text)
{
  return str_replace(' ', '%%', $text);
}

function uploadFile($file = null, $first_name, $folder)
{
  if($file)
  {
    if(gettype($file) === 'string')
      return $file;

    $file_name = $first_name . '-' . time() . "." . $file->guessExtension();
    $file->move($folder, $file_name);
    if($first_name === 'content') $image = Image::make(public_path() . '/' . $folder .'/' . $file_name)->resize(config('app.admin.upload.content.image.width'), config('app.admin.upload.content.image.height'))->save(public_path() . '/' . $folder .'/' . $file_name);

    return asset('images/' . $file_name);
  }
}

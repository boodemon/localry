<?php

namespace App;
use File;
class Lib 
{
    public static function ext($file = ''){
        $ex = explode('.', $file);
        $ls = count($ex) -1;
        return '.' . $ex[$ls];
	}
	
	public static function active($status){
		if( $status == 'Y'){
			return '<span class="badge badge-success" >Active</span>';
		}else{
			return '<span class="badge badge-danger" >Unactive</span>';
		}                 
	}
    public static function encodelink($value=''){
		$link = strtolower($value);
		$link = str_replace(' ', '-', $link);
		$link = str_replace('/', '-', $link);
		$link = str_replace('%', '-', $link);
		$link = str_replace('*', '-', $link);
		$link = str_replace('&', '-', $link);
		$link = str_replace('+', '-', $link);
		$link = str_replace('?', '-', $link);
		$link = str_replace('=', '-', $link);
		$link = str_replace('+', '-', $link);
		$link = str_replace('#', '', $link);
		$link = str_replace(',', '-', $link);
		$link = str_replace(';', '-', $link);
		$link = str_replace('@', '', $link);
		$link = str_replace('!', '', $link);
		$link = str_replace('?', '', $link);
		$link = str_replace('<', '', $link);
		$link = str_replace('>', '', $link);
		$link = str_replace('\"', '', $link);
		$link = str_replace('(', '', $link);
		$link = str_replace(')', '', $link);
		return $link;
	}
    public static function encodefile($value=''){
		$link = strtolower($value);
		$link = str_replace(' ', '-', $link);
		$link = str_replace('/', '-', $link);
		$link = str_replace('%', '-', $link);
		$link = str_replace('*', '-', $link);
		$link = str_replace('&', '-', $link);
		$link = str_replace('+', '-', $link);
		$link = str_replace('?', '-', $link);
		$link = str_replace('=', '-', $link);
		$link = str_replace('+', '-', $link);
		$link = str_replace('#', '', $link);
		$link = str_replace(',', '-', $link);
		$link = str_replace(';', '-', $link);
		$link = str_replace('@', '', $link);
		$link = str_replace('!', '', $link);
		$link = str_replace('?', '', $link);
		$link = str_replace('<', '', $link);
		$link = str_replace('>', '', $link);
		$link = str_replace('\"', '', $link);
		$link = str_replace('(', '', $link);
		$link = str_replace(')', '', $link);
		return substr($link,0,20) .'.';
	}
	
	public static function exsImg( $path,$img ){
		$file = $path .'/'. $img;
		if( !empty($img) && file_exists( $file ) ){
			$image = asset($file);
			
		}else{
			$image = asset('public/images/no-image.svg');
		}
		
		return $image;
	}

	public static function videoID($url = ''){
    parse_str( parse_url( $url, PHP_URL_QUERY ), $my_array_of_vars );
    return $my_array_of_vars['v'];
  }
  
  public static function ybImage($url = ''){
    parse_str( parse_url( $url, PHP_URL_QUERY ), $my_array_of_vars );
    $video_id = $my_array_of_vars['v'];
    parse_str( parse_url( $url, PHP_URL_QUERY ), $my_array_of_vars );
    $video_id = $my_array_of_vars['v'];
    $qt      = ['maxresdefault','sddefault','mqdefault','hqdefault' ,'default'];
    for( $i = 0; $i <= count( $qt ) -1; $i++ ){
      $yimg = 'http://img.youtube.com/vi/' . $video_id . '/' . $qt[$i] . '.jpg';
      if( @file_get_contents($yimg) ) 
        break;
    }
    return $yimg;
  }

  public static function bcm($_breadcrumb){
	  $bcm = '';
		if( is_array($_breadcrumb) ){
			$max = count($_breadcrumb)-1;
			foreach( $_breadcrumb as $i => $text ){
				$bcm .= '<li class="breadcrumb-item '.( $i == $max ? 'active':'' ).'">'. $text .'</li>';
			}
		}else{
			$bcm .= '<li class="breadcrumb-item active">'. $_breadcrumb .'</li>';
		}
	return $bcm;
  }
  	public static function createFolder($image){
		$ex = explode('/',$image);
		$f 	= count($ex)-2;
		$path = [];
		for($i=0; $i <= $f; $i++){
			$path[] = $ex[$i];
		}
		$folder = implode('/',$path);
		//echo $folder;
		if(!file_exists($folder)){
			File::makeDirectory($folder,0777,true);
		}
	}
	
	public static function makeFolder($folder){
		//echo $folder;
		if(!file_exists($folder)){
			File::makeDirectory($folder,0777,true);
		}
	}
}
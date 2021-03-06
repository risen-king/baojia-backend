<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace common\helper;


class  Util{
    public static function format($success,$data,$message){
          
          if(empty($data)){
              $data = null;
          }
          
          $result = [
            'success' => $success,
            'data'=> $data,
            'message'=> $message
         ];
          
          return $result;
        
    }
    
    public static  function error($message){
        
          if( is_array($message) ){
                    $message = current($message);
                    
                    if(is_array($message)){
                              $message = current($message);
                    }
          }
        
    
        return static::format( false, null, $message);
        
    }
    
    
    public static function  success($data){
        
        return static::format( true, $data, '' );
        
    }
    
    
    
    //产生指定位数的随机数
    public static function generateNumber($length=6){
        $min = pow(10 , ($length - 1));
        $max = pow(10, $length) - 1;
        return rand($min, $max);
    }
}

<?php
class caneta{
  var $numero1;
  var $numero2;
  var $numero3;

  function raiz($numero1,$numero2,$numero3){
    $modo= (((($numero2)**2)-4*$numero1*$numero3)/(2*$numero1));
    if($modo>0){
      return ($numero2+(sqrt($numero2)));
    }else{
      return($numero2+(sqrt($numero2)));
    }
    return ;
  }
}
<?php 
function pluralize($singulier, $count){
  //var_dump ($count);
  if($count !== 1){
    return $singulier . 's';
  }else{
    return $singulier;
  }
}
?>
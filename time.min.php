<?php

function waktu(){
$time=localtime(time(),true);
$sec=$time['tm_sec'];
$min=$time['tm_min'];
$hou=$time['tm_hour'];
$day=$time['tm_mday'];
$mon=$time['tm_mon']+1;
$yea=$time['tm_year']+1900;
$yea=strval($yea);
//echo $yea;
  if($mon<10){$mon="0".strval($mon);}
  else{$mon=strval($mon);}
//echo "-";
//echo $mon;
  if($hou>16){$day=$day+1;}
  else{$day=$day+0;}
  if($day<10){$day="0".strval($day);}
  else{$day=strval($day);}
//echo "-";
//echo $day;

  if($hou>16){$hou=$hou-18;}
  else{$hou=$hou+6;}
  if($hou<10){$hou="0".strval($hou);}
  else{$hou=strval($hou);}
//echo " ";
//echo $hou;
  if($min<10){$min="0".strval($min);}
  else{$min=strval($min);}
//echo ":";
//echo $min;
  if($sec<10){$sec="0".strval($sec);}
  else{$sec=strval($sec);}
//echo ":";
//echo $sec;
  if($hou<12){$gre="AM";}
  else{$gre="PM";}
//echo " ".$gre;

$waktu=$yea."-".$mon."-".$day." ".$hou.":".$min.":".$sec." ".$gre;
return $waktu;
}

?>


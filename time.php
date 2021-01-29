<!DOCTYPE html>
<html>
<body>

<?php
//print_r(localtime());
//echo "<br><br>";
//print_r(localtime(time(),true));
$time=localtime(time(),true);

//echo "<br>";
$sec=$time['tm_sec'];
//echo "seconds:".$sec;

//echo "<br>";
$min=$time['tm_min'];
//echo "minutes:".$min;

//echo "<br>";
$hou=$time['tm_hour'];
//echo "hours:".$hou;

//echo "<br>";
$day=$time['tm_mday'];
//echo "days:".$day;

//echo "<br>";
$mon=$time['tm_mon']+1;
//echo "month:".$mon;

//echo "<br>";
$yea=$time['tm_year']+1900;
//echo "year:".$yea;

//echo "<br>";
$yea=strval($yea);
echo $yea;

  if($mon<10){
  $mon="0".strval($mon);
  }
  else{
  $mon=strval($mon);
  }
echo "-";
echo $mon;


  if($hou>16){
  $day=$day+1;
  }
  else{
  $day=$day+0;
  }
	//
  if($day<10){
  $day="0".strval($day);
  }
  else{
  $day=strval($day);
  }
echo "-";
echo $day;

		if($hou<12){
        $gre="AM";
        }
        else{$gre="PM";}


  if($hou>16){
  $hou=$hou-17;
  }
  else{
  $hou=$hou+7;
  }
	//
  if($hou<10){
  $hou="0".strval($hou);
  }
  else{
  $hou=strval($hou);
  }
echo " ";
echo $hou;

  if($min<10){
  $min="0".strval($min);
  }
  else{
  $min=strval($min);
  }
echo ":";
echo $min;

  if($sec<10){
  $sec="0".strval($sec);
  }
  else{
  $sec=strval($sec);
  }
echo ":";
echo $sec;
echo " ".$gre;

?>

</body>
</html>

<?php
include_once '../connection.php';
session_start();

//delete feedback
if(isset($_SESSION['key'])){
if(@$_GET['fdid'] && $_SESSION['key']=='najma7785068889') {
$id=@$_GET['fdid'];
$result = mysqli_query($db,"DELETE FROM feedback WHERE id='$id' ") or die('Error');
header("location:dash.php?q=3&user=$email");
}
}

//delete user
if(isset($_SESSION['key'])){
if(@$_GET['demail'] && $_SESSION['key']=='najma7785068889') {
$demail=@$_GET['demail'];
$r1 = mysqli_query($db,"DELETE FROM rank WHERE email='$demail' ") or die('Error');
$r2 = mysqli_query($db,"DELETE FROM history WHERE email='$demail' ") or die('Error');
$result = mysqli_query($db,"DELETE FROM user WHERE email='$demail' ") or die('Error');
header("location:dash.php?q=1&user=$email");
}
}
//remove quiz
if(isset($_SESSION['key'])){
  $email = $_GET['user'];
if(@$_GET['q']== 'rmquiz' && $_SESSION['key']=='sunny7785068889') {
$eid=@$_GET['eid'];
$result = mysqli_query($db,"SELECT * FROM questions WHERE eid='$eid' ") or die('Error');
while($row = mysqli_fetch_array($result)) {
	$qid = $row['qid'];
$r1 = mysqli_query($db,"DELETE FROM options WHERE qid='$qid'") or die('Error');
$r2 = mysqli_query($db,"DELETE FROM answer WHERE qid='$qid' ") or die('Error');
}
$r3 = mysqli_query($db,"DELETE FROM questions WHERE eid='$eid' ") or die('Error');
$r4 = mysqli_query($db,"DELETE FROM quiz WHERE eid='$eid' ") or die('Error');
$r4 = mysqli_query($db,"DELETE FROM history WHERE eid='$eid' ") or die('Error');

header("location:quiz-remove.php?q=4&user=$email");
}
}

//add quiz

if(isset($_SESSION['key'])){
  $email = $_GET['user'];
if(@$_GET['q']== 'addquiz' && $_SESSION['key']=='sunny7785068889') {
$name = $_POST['name'];
$name= ucwords(strtolower($name));
$total = $_POST['total'];
$sahi = $_POST['right'];
$wrong = $_POST['wrong'];
$time = $_POST['time'];
$tag = $_POST['tag'];
$desc = $_POST['desc'];
$id=uniqid();
$q3=mysqli_query($db,"INSERT INTO quiz VALUES  ('$id','$name' , '$sahi' , '$wrong','$total','$time' ,'$desc','$tag', NOW())");

header("location:quiz-add.php?q=3&step=2&eid=$id&n=$total&user=$email");
}
}

//add question
if(isset($_SESSION['key'])){
  $email = $_GET['user'];
if(@$_GET['q']== 'addqns' && $_SESSION['key']=='sunny7785068889') {
$n=@$_GET['n'];
$eid=@$_GET['eid'];
$ch=@$_GET['ch'];

for($i=1;$i<=$n;$i++)
 {
 $qid=uniqid();
 $qns=$_POST['qns'.$i];
$q3=mysqli_query($db,"INSERT INTO questions VALUES  ('$eid','$qid','$qns' , '$ch' , '$i')");
  $oaid=uniqid();
  $obid=uniqid();
$ocid=uniqid();
$odid=uniqid();
$a=$_POST[$i.'1'];
$b=$_POST[$i.'2'];
$c=$_POST[$i.'3'];
$d=$_POST[$i.'4'];
$qa=mysqli_query($db,"INSERT INTO options VALUES  ('$qid','$a','$oaid')") or die('Error61');
$qb=mysqli_query($db,"INSERT INTO options VALUES  ('$qid','$b','$obid')") or die('Error62');
$qc=mysqli_query($db,"INSERT INTO options VALUES  ('$qid','$c','$ocid')") or die('Error63');
$qd=mysqli_query($db,"INSERT INTO options VALUES  ('$qid','$d','$odid')") or die('Error64');
$e=$_POST['ans'.$i];
switch($e)
{
case 'a':
$ansid=$oaid;
break;
case 'b':
$ansid=$obid;
break;
case 'c':
$ansid=$ocid;
break;
case 'd':
$ansid=$odid;
break;
default:
$ansid=$oaid;
}


$qans=mysqli_query($db,"INSERT INTO answer VALUES  ('$qid','$ansid')");

 }
header("location:quiz-add.php?q=3&user=$email");
}
}

//quiz start
if(@$_GET['q']== 'quiz' && @$_GET['step']== 2) {
  $email = $_GET['user'];
  $eid=@$_GET['eid'];
  $sn=@$_GET['n'];
  $total=@$_GET['t'];
  $ans=$_POST['ans'];
  $qid=@$_GET['qid'];
  $q=mysqli_query($db,"SELECT * FROM answer WHERE qid='$qid' " );
  while($row=mysqli_fetch_array($q) )
  {
  $ansid=$row['ansid'];
  }
  if($ans == $ansid)
  {
  $q=mysqli_query($db,"SELECT * FROM quiz WHERE eid='$eid' " );
  while($row=mysqli_fetch_array($q) )
  {
  $sahi=$row['sahi'];
  }
  if($sn == 1)
  {
  $q=mysqli_query($db,"INSERT INTO history VALUES('$email','$eid' ,'0','0','0','0',NOW())")or die('Error');
  }
  $q=mysqli_query($db,"SELECT * FROM history WHERE eid='$eid' AND email='$email' ")or die('Error115');
  
  while($row=mysqli_fetch_array($q) )
  {
  $s=$row['score'];
  $r=$row['sahi'];
  }
  $r++;
  $s=$s+$sahi;
  $q=mysqli_query($db,"UPDATE `history` SET `score`=$s,`level`=$sn,`sahi`=$r, date= NOW()  WHERE  email = '$email' AND eid = '$eid'")or die('Error124');
  
  } 
  else
  {
  $q=mysqli_query($db,"SELECT * FROM quiz WHERE eid='$eid' " )or die('Error129');
  
  while($row=mysqli_fetch_array($q) )
  {
  $wrong=$row['wrong'];
  }
  if($sn == 1)
  {
  $q=mysqli_query($db,"INSERT INTO history VALUES('$email','$eid' ,'0','0','0','0',NOW() )")or die('Error137');
  }
  $q=mysqli_query($db,"SELECT * FROM history WHERE eid='$eid' AND email='$email' " )or die('Error139');
  while($row=mysqli_fetch_array($q) )
  {
  $s=$row['score'];
  $w=$row['wrong'];
  }
  $w++;
  $s=$s-$wrong;
  $q=mysqli_query($db,"UPDATE `history` SET `score`=$s,`level`=$sn,`wrong`=$w, date=NOW() WHERE  email = '$email' AND eid = '$eid'")or die('Error147');
  $q7=mysqli_query($db,"SELECT * FROM history WHERE eid='$eid' AND email='$email'" )or die('Error156');
  while(mysqli_fetch_array($q7) )
  {
  $s=$row['score'];
  $q2=mysqli_query($db,"INSERT INTO rank VALUES('$email','$s',NOW())")or die('Error165');
  }  

}
  if($sn != $total)
  {
  $sn++;
  header("location:account.php?q=quiz&step=2&eid=$eid&n=$sn&t=$total&user=$email")or die('Error152');
  }
  else
  {
  header("location:account.php?q=1&user=$email");
  }
  }
  
//restart quiz
if(@$_GET['q']== 'quizre' && @$_GET['step']== 25 ) {
  $email = $_GET['user'];
$eid=@$_GET['eid'];
$n=@$_GET['n'];
$t=@$_GET['t'];
$q=mysqli_query($db,"SELECT score FROM history WHERE eid='$eid' AND email='$email'" )or die('Error156');
while($row=mysqli_fetch_array($q) )
{
$s=$row['score'];
}
$q=mysqli_query($db,"DELETE FROM `history` WHERE eid='$eid' AND email='$email' " )or die('Error184');
$q=mysqli_query($db,"SELECT * FROM rank WHERE email='$email'" )or die('Error161');
while($row=mysqli_fetch_array($q) )
{
$sun=$row['score'];
}
$sun=$sun-$s;
$q=mysqli_query($db,"UPDATE `rank` SET `score`=$sun ,time=NOW() WHERE email= '$email'")or die('Error174');
header("location:account.php?q=quiz&step=2&eid=$eid&n=1&t=$t&user=$email");
}

?>




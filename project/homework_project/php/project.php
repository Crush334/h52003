<?php
// $sql="INSERT/UPDATE/DELETE/SELECT";//2、创建SQL语句
// 查询得到数据库最新的记录$sql="SELECT *FROM team_lunbo  ORDER BY img_id DESC LIMIT 4";
// 如果你的操作是增删改，返回的结果一定是一个bool值，true代表成功，false代表失败
// ***但是查例外，返回的是一个我们都不认识的结果集
// while(($row=mysqli_fetch_assoc($result))!=null){
//     array_push($arr,$row);
// }
$hide=$_REQUEST["hide"];
$conn=mysqli_connect("127.0.0.1","root","","our_pro",3306);
mysqli_query($conn,"SET NAMES utf8");
if($hide==1){
    $name=$_REQUEST["name"]; 
    $email=$_REQUEST["email"]; 
    $subject=$_REQUEST["subject"]; 
    $message=$_REQUEST["message"]; 
    $sql="INSERT INTO  user_contact  VALUES(0,'$name','$email','$subject','$message')";
    $result=mysqli_query($conn,$sql);
    echo("<script>location='../html/CONTACT.html?提交成功'</script>");
}
if($hide==2){
    $name=$_REQUEST["uname"]; 
    $email=$_REQUEST["email"]; 
    $date=$_REQUEST["date"]; 
    $time=$_REQUEST["time"]; 
    $thing=$_REQUEST["thing"];
    $sql="INSERT INTO `user_reserve` VALUES(0,'$name','$email','$time','$date','$thing')";
    $result=mysqli_query($conn,$sql);
    echo("<script>location='../html/HOME.html?提交成功'</script>");
}
 if($hide==3){
    $sql="SELECT * FROM single ";
    $result=mysqli_query($conn,$sql);
    $arr=[];
    while(($row=mysqli_fetch_assoc($result))!=null){
    array_push($arr,$row);
    }
    echo $_GET["dy"]."(".JSON_encode($arr).")";
} if($hide==4){
    $sql="SELECT * FROM blog ";
    $result=mysqli_query($conn,$sql);
    $arr=[];
    while(($row=mysqli_fetch_assoc($result))!=null){
    array_push($arr,$row);
    }
    echo $_GET["dy"]."(".JSON_encode($arr).")";
}
mysqli_close($conn);

    
?>
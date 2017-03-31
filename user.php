<?php
header("Content-Type: text/html; charset=utf-8");
//开启session
session_start();
?>
<?php
//链接数据库
include("conn/conn.php");
//判断是否有数据提交，并和数据库数据对比
if(isset($_POST['user']) && isset($_POST['pwd'])){
    $sql = "select * from tb_user where username= '".$_POST['user']."' and password='".$_POST['pwd']."' ";
    $select = @mysql_query($sql,$conn);
    if(mysql_num_rows($select) == 1){
        $result = mysql_fetch_array($select);
        $_SESSION['user'] = $_POST['user'];
        $_SESSION['sex'] = $result['sex'];
        $_SESSION['email'] = $result['email'];
        $_SESSION['qq'] = $result['qq'];
        $_SESSION['tx'] = $result['tx'];
        echo "<script>alert('login success!'); window.location.href='index.php';</script>;";
    }
    else{
        echo "<script>alert('login failed!'); window.location.href='index.php';</script>;";
    }
}
//表单数据保存到session
?>





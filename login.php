<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>注册</title>
    <style type="text/css">
        <!--
        body,td,th {
            font-size: 12px;
        }
        .STYLE1 {color: #FF0000}
        -->
    </style>
</head>
<body>
<script language="javascript">
    function checkit(){
        if(form1.username.value == ""){
            alert("请输入用户名!");
            form1.username.select();
            return(false);
        }
        if(form1.password.value==""){
            alert("请输入用户密码!");
            form1.password.select();
            return(false);
        }
        if(form1.password.value!=form1.password2.value){
            alert("您输入的密码和验证密码不符！");
            form1.password2.select();
            return(false);
        }

        if(form1.tel.value==""){
            alert("请输入电话号码!");
            form1.tel.select();
            return(false);
        }
        if(!checkphone(form1.tel.value)){
            alert("电话号码格式不正确!");
            form1.tel.select();
            return(false);
        }

        if(form1.email.value==""){
            alert("请输入邮箱地址!");
            form1.email.select();
            return(false);
        }
        if(!checkemail(form1.email.value)){
            alert("邮箱地址格式不正确!");
            form1.email.select();
            return(false);
        }
        return(true);
    }

    function checkemail(email){
        var strs=email;
        var Expression=/\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/;
        var objExp=new RegExp(Expression);
        if(objExp.test(strs)==true){
            return true;
        }else{
            return false;
        }
    }

    function checkphone(tel){
        var str=tel;
        var Expression=/^(\d{3}-)(\d{8})$|^(\d{4}-)(\d{7})$|^(\d{4}-)(\d{8})$|^(\d{11})$/;
        var objExp=new RegExp(Expression);
        if(objExp.test(str)==true){
            return true;
        }else{
            return false;
        }
    }
<?php
include("conn/conn.php");
include("index_01.php");
include("index_02.php");
?>

</script>
<form name="form1" action="login_ok.php" method="post" >
    <table>
        <tr>
            <td colspan="2"><img src="images/05_01.gif" width="991" height="39" alt="" /></td>
        </tr>
        <tr>
            <td><img src="images/05_02.gif" width="364" height="454" alt="" /></td>
            <td width="627" height="454" bgcolor="#FFFDF1">
                <table width="478" height="422" align="center">
                    <tr>
                    <td>用户名:</td>
                    <td><input name="username" type="text" id="username"/></td>
                    </tr>
                    <tr>
                        <td>真实姓名:</td>
                        <td><input name="true_name" type="text" id="true_name"/></td>
                    </tr>
                    <tr>
                        <td>密码：</td>
                        <td><input type="password" name="password" id="password"/></td>
                    </tr>
                    <tr>
                        <td>确认密码：</td>
                        <td><input type="password" name="password2" id="password2"/></td>
                    </tr>
                    <tr>
                        <td>性别:</td>
                        <td>
                            <input type="radio" name="sex" id="sex" checked/>男
                            <input type="radio" name="sex" id="sex"/>女
                        </td>
                    </tr>
                    <tr>
                        <td>联系电话:</td>
                        <td><input name="tel" type="text" id="tel"/></td>
                    </tr>
                    <tr>
                        <td>QQ:</td>
                        <td><input name="QQ" type="text" id="QQ"/></td>
                    </tr>
                    <script language="javascript">//通过下拉列表选择头像时应用该函数
                        function showlogo(){
                            document.images.img.src="images/tx/"+
                                document.form1.tx.options[document.form1.tx.selectedIndex].value;
                        }
                    </script>
                    <tr>
                        <td>选择头像：</td>
                        <td>
                            <p><img src="images/tx/1.gif" id="img" name="img" width="60" height="60" /></p>
                            <select size"1" id="tx" name="tx" onChange="showlogo()">
                            <option value="1.gif">头像1</option>
                            <option value="2.gif">头像2</option>
                            <option value="3.gif">头像3</option>
                            <option value="4.gif">头像4</option>
                            <option value="5.gif">头像5</option>
                            <option value="6.gif">头像6</option>
                            <option value="7.gif">头像7</option>
                            <option value="8.gif">头像8</option>
                            <option value="9.gif">头像9</option>
                            <option value="10.gif">头像10</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td><input name="email" type="text" id="email"/></td>
                    </tr>
                    <tr>
                        <td>个人主页:</td>
                        <td><input name="indexs" type="text" id="indexs"/></td>
                    </tr>
                    <tr>
                        <td>地址:</td>
                        <td><input name="address" type="text" id="address"/></td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" name="Submit" value="确认提交"/>
                            <input type="reset" name="Reset" value="刷新重置"/>
                        </td>
                    </tr>
                    </tr>
                </table>
            </td>
    </table>
</form>
<?php
include("index_05.php");
include("index_06.php");
?>
</body>
</html>






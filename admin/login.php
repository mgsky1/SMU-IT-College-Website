<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/login.css">
        <link rel="shortcut icon" href="favicon.png" type="image/png">
        <link rel="icon" href="favicon.png" type="image/png">
        <script src="js/validateCodeRefresh.js"></script>
        <title>信息工程学院后台管理</title>
        <script>
            
            function check(){
                var counter = document.getElementById("counter").value;
                var password = document.getElementById("password").value;
                var code = document.getElementById("code").value;
             password=password.replace(/\'/g,"x");
			 password=password.replace(/\"/g,"y");
            password=password.replace(/</g,"《").replace(/>/g,"》");
             if(counter == "" || counter == null || password== "" || password==null || code=="" || code==null){
                    
                    alert("不许输入为空，请输入");
                    return false;
                }
                return true;
                
            }
            
        </script>
    </head>
    <body>
       <form action="PHP_Script/login_code.php" method="post" name="form1">
           <h1>信息工程学院后台登陆界面</h1>
           <div class="control">
               <label for="counter">账&#X3000;号：</span>
               <input type="text" name="admin" id="counter" placeholder="请输入账号" required autofocus>
           </div>
           <div class="control">
               <label for="password">密&#X3000;码：</span>
               <input type="password" name="password" id="password" placeholder="请输入密码" required>
           </div>
            <div class="control">
               <label for="code">验证码：</span>
               <input type="text" name="validate_user" id="code" placeholder="请输入验证码" required> <img src="PHP_Script/validateCode.php" id="checkpic" title="看不清，点击换一张"  onClick="changing();">
    <br>
           </div>
           <div>
               <input type="submit" value="登录" onclick="return check()">
               
           </div>
       </form>
    </body>
</html>

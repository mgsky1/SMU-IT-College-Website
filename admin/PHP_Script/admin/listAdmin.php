<?php
/*列出所有管理员信息 基于PHP7 Design By 小远*/
           require_once("../DataConnect/Data.php"); 
           $sql = "select * from admin";
			$resultSet = $Data->query($sql) or die("<script>alert('查询失败');history.go(-1)</script>");
			while($row = $resultSet->fetch_assoc())
			{
				$ID = $row["ID"];
				$aName = $row["UserName"];
				$password = $row["Password"];
				echo "<tr>
									<td>$aName</td>
									<td>$password</td>
									<td><a href='editAdmin.php?adminID=$ID' target='main'>修改密码</a></td>
									<td><a href='delAdmin.php?adminID=$ID'>删除</a></td>
								</tr>";
			}
			
?>
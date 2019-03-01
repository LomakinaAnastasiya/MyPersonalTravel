<?php
require_once 'application/config/Db.php';
class model_Info extends Model
{

	function action_Log_info()
	{	
		$a1=$_POST['log_avtoriz'];
		$a2=$_POST['pas_avtoriz'];
		$db=Db::getConnection();
		$str="Select *from Login where Logins='".$a1."' and Pass='".$a2."'";
		$result=$db->prepare($str);
		$result->execute();
		$res=$result->fetch(PDO::FETCH_BOTH);

		if (!empty($res)) {	
			$_SESSION['Login']=$res['Logins'];
			$_SESSION['Pass']=$res['Pass'];
			$_SESSION['Tel']=$res['Tels'];
			$_SESSION['Names']=$res['Names'];
			$_SESSION['Types']=$res['Types'];
		}
	}

	function action_Reg_info()
	{	
		$a1=$_POST['Name_reg'];
		$a2=$_POST['log_reg'];
		$a3=$_POST['pas_reg'];
		$a4=$_POST['tel_reg'];
		$db=Db::getConnection();
		$str="Select *from Login where Logins='".$a2."'";
		$result=$db->prepare($str);
		$result->execute();
		$res=$result->fetch(PDO::FETCH_BOTH);

		if (!empty($res)) {		//Если ответ положительный...то такая учётная запись уже есть

		}
		else{	//В регистрации нас интересует вариант с созданием новой учётной записи
			$_SESSION['Login']=$a2;
			$_SESSION['Pass']=$a3;
			$_SESSION['Names']=$a1;
			$_SESSION['Tel']=$a4;
			$_SESSION['Types']=2;

		$str="INSERT INTO `Login`(`Logins`, `Pass`,  `Tels`,`Names`,`Types`) VALUES ('".$a2."','".$a3."','".$a4."','".$a1."','2')";
		$result=$db->query($str);
		}
	}

	function action_logout()
	{	
		unset($_SESSION['Login']);
		unset($_SESSION['Pass']);	
		unset($_SESSION['Tel']);	
		unset($_SESSION['Names']);	
		unset($_SESSION['Types']);	
	}




	

	}





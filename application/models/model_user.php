<?php
require_once 'application/config/Db.php';
class model_User extends Model
{

	function action_index()
	{	

	}

	function action_ls()
	{	
		if (isset($_SESSION["Login"])) {
			$db=Db::getConnection();
			$str='Select *from Login where Logins="'.$_SESSION['Login'].'"';
			$result=$db->prepare($str);
			$result->execute();
			return $result;
		}
	}




	function action_Update($id)
	{	
	if (isset($_SESSION['Login'])) {
		$db=Db::getConnection();	
		$a2=$_POST['Ps'];
		$a3=$_POST['Nm'];
		$a4=$_POST['Tl'];

			$_SESSION['Pass']=$a2;
			$_SESSION['Tel']=$a4;
			$_SESSION['Names']=$a3;
		
		$str1='UPDATE `Login` SET `Pass`="'.$a2.'", `Names`="'.$a3.'", `Tels`="'.$a4.'" WHERE id='.$id;
		$result=$db->query($str1);
	}
	}













	function action_Tyr($id)
	{	
		$db=Db::getConnection();
		$str="Select *from Tyr where id=".$id;
		$result=$db->prepare($str);
		$result->execute();
		return $result;
	}

	function action_Add_Tyr($id)
	{	
		$db=Db::getConnection();
		$str="Select *from Tyr where id=".$id;
		$result=$db->prepare($str);
		$result->execute();
		$res=$result->fetch(PDO::FETCH_BOTH);

		$a1=$res['Coin'];
		$Kol1=$_POST['Kol'];
		$Kol2=$_POST['Kol2'];

if ($Kol1==2) {
	$NewStoim=$a1;
}
else{	
	if ($Kol1==1) {
		$NewStoim=$a1/2;	
	}
	else{
		$NewStoim=$a1*$Kol1;	
	}
}


if ($Kol2==3) {$NewStoim=$NewStoim/2;}
if ($Kol2==14) {$NewStoim=$NewStoim*2;}
if ($Kol2==21) {$NewStoim=$NewStoim*3;}
if ($Kol2==30) {$NewStoim=$NewStoim*4;}		

$Dop=" ";
if(!empty($_POST['qq1'])){$NewStoim=$NewStoim+1000;$Dop=$Dop."Доставка багажа ";}
if(!empty($_POST['qq2'])){$NewStoim=$NewStoim+3000;$Dop=$Dop."Номер повышенной комфортности ";}
if(!empty($_POST['qq3'])){$NewStoim=$NewStoim+5000;$Dop=$Dop."Услуги гида ";}
		
$str1="INSERT INTO `Zakaz`(`Name_User`, `Nazv`, `Kol_chel`, `Days`, `Dop`,`Datas`, `Stoim`)
		VALUES (";
		$str2="'".$_SESSION['Login']."','".$res['Nazv']."','".$Kol1."','".$Kol2."','".$Dop."','".$_POST['calendar']."','".$NewStoim."')";
		$str3=$str1.$str2;
		$result=$db->query($str3);


	}





	function action_Buy()
	{	
		if (isset($_SESSION["Login"])) {
			$db=Db::getConnection();
			$str='Select *from Zakaz where Name_User="'.$_SESSION['Login'].'"';
			$result=$db->prepare($str);
			$result->execute();
			return $result;	
		}
	}






	function action_Del_Buy($num)
	{	
		if (isset($_SESSION['Login'])) {
			$db=Db::getConnection();
			$str="DELETE FROM `Zakaz` WHERE id='".$num."'";
			$result=$db->query($str);
		}
	}






	}





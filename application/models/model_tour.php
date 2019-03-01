<?php
require_once 'application/config/Db.php';
class model_Tour extends Model
{

	function action_index()
	{	
		$db=Db::getConnection();
		$str="Select *from Tyr";
		$result=$db->prepare($str);
		$result->execute();
		return $result;
	}

	function action_Info($id)
	{	
		$db=Db::getConnection();
		$str="Select *from Tyr where id=".$id;
		$result=$db->prepare($str);
		$result->execute();
		return $result;
	}

	function action_AddKoment($id)
	{	

		$db=Db::getConnection();
		$a1=$_POST['o1'];
		$a2=$_POST['o2'];
		$a3=$_POST['o3'];

		$str1="INSERT INTO `Koment`(`Names`, `Ocenka`, `Koment`,`id_Base`)
		VALUES (";
		$str2="'".$a1."','".$a2."','".$a3."','".$id."')";
		$str3=$str1.$str2;

		$result=$db->query($str3);
	}	

	function action_Koment_Del($id)
	{	
		$db=Db::getConnection();
		$str="DELETE FROM `Koment` WHERE id='".$id."'";
		$result=$db->query($str);
	}

}




<?php
require_once 'application/config/Db.php';
class model_Redaktor extends Model
{

	function action_index()
	{	

	}

	function action_ls()
	{	
if ($_SESSION["Types"]=='1') {
			$db=Db::getConnection();
			$str='Select *from Login where Logins="'.$_SESSION['Login'].'"';
			$result=$db->prepare($str);
			$result->execute();
			return $result;
		}
	}




	function action_Update($id)
	{	
if ($_SESSION["Types"]=='1') {
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



	function action_News()
	{	
if ($_SESSION["Types"]=='1') {
			$db=Db::getConnection();
			$str="Select *from News";
			$result=$db->prepare($str);
			$result->execute();
			return $result;
		}
	
	}


	function action_Del_News($num)
	{	
if ($_SESSION["Types"]=='1') {
			$db=Db::getConnection();
			$str="DELETE FROM `News` WHERE id='".$num."'";
			$result=$db->query($str);
		}
	}




	function action_Add_News()
	{	

	
	}


		function action_Add_News_Load(){	
if ($_SESSION["Types"]=='1') {
		$db=Db::getConnection();	
		$a1=$_POST['News_zagol'];
		$a2=$_POST['News_Text'];

	$uploaddir = './photo/News/';
	$uploaddir2 = '/photo/News/';
	$uploadfile = $uploaddir . basename($_FILES['filename1']['name']);
	$uploadfile2 = $uploaddir2 . basename($_FILES['filename1']['name']);
		
		if (!empty($_FILES['filename1']['name'])) {
		copy($_FILES['filename1']['tmp_name'], $uploadfile);
		}
		$str1="INSERT INTO `News`(`Nazv`, `Texts`, `Photos`)
		VALUES (";
		$str2="'".$a1."','".$a2."','".$uploadfile2."')";
		$str3=$str1.$str2;
		$result=$db->query($str3);
	}}


	function action_Corr_News($id)
	{	
if ($_SESSION["Types"]=='1') {
			$db=Db::getConnection();
			$str="Select *from News where id=".$id;
			$result=$db->prepare($str);
			$result->execute();
			return $result;
		}
	
	}


	function action_Add_News_Update($id)
	{
if ($_SESSION["Types"]=='1') {
		$db=Db::getConnection();	
		$a1=$_POST['News_zagol'];
		$a2=$_POST['News_Text'];


		
		if (!empty($_FILES['filename1']['name'])) {
		$uploaddir = './photo/News/';
		$uploaddir2 = '/photo/News/';
		$uploadfile = $uploaddir . basename($_FILES['filename1']['name']);
		$uploadfile2 = $uploaddir2 . basename($_FILES['filename1']['name']);
		copy($_FILES['filename1']['tmp_name'], $uploadfile);
		$str1='UPDATE `News` SET `Photos`="'.$uploadfile2.'" WHERE id='.$id;
		$result=$db->query($str1);
		}
		$str1='UPDATE `News` SET `Nazv`="'.$a1.'", `Texts`="'.$a2.'" WHERE id='.$id;
		$result=$db->query($str1);
	}
	}


















	function action_Tyr()
	{	
if ($_SESSION["Types"]=='1') {
			$db=Db::getConnection();
			$str="Select *from Tyr";
			$result=$db->prepare($str);
			$result->execute();
			return $result;
		}
	
	}


	function action_Del_Tyr($num)
	{	
if ($_SESSION["Types"]=='1') {
			$db=Db::getConnection();
			$str="DELETE FROM `Tyr` WHERE id='".$num."'";
			$result=$db->query($str);
		}
	}




	function action_Add_Tyr()
	{	

	
	}


		function action_Add_Tyr_Load(){	
if ($_SESSION["Types"]=='1') {
		$db=Db::getConnection();	
		$a1=$_POST['Tyr_Nazv'];
		$a2=$_POST['Tyr_Coin'];
		$a3=$_POST['Tyr_Place'];
		$a4=$_POST['Tyr_Type'];
		$a5=$_POST['Tyr_Text'];
	

	$uploaddir = './photo/Tyr/';
	$uploaddir2 = '/photo/Tyr/';
	$uploadfile = $uploaddir . basename($_FILES['filename1']['name']);
	$uploadfile2 = $uploaddir2 . basename($_FILES['filename1']['name']);
		
		if (!empty($_FILES['filename1']['name'])) {
		copy($_FILES['filename1']['tmp_name'], $uploadfile);
		}
		$str1="INSERT INTO `Tyr`(`Nazv`, `Coin`, `Place`, `Type_Tyr`, `Photos1`, `Texts`)
		VALUES (";
		$str2="'".$a1."','".$a2."','".$a3."','".$a4."','".$uploadfile2."','".$a5."')";
		$str3=$str1.$str2;
		$result=$db->query($str3);
	}}





	function action_Corr_Tyr($id)
	{	
if ($_SESSION["Types"]=='1') {
			$db=Db::getConnection();
			$str="Select *from Tyr where id=".$id;
			$result=$db->prepare($str);
			$result->execute();
			return $result;
		}
	
	}



	function action_Add_Tyr_Update($id)
	{
if ($_SESSION["Types"]=='1') {
		$db=Db::getConnection();	
		$a1=$_POST['Tyr_Nazv'];
		$a2=$_POST['Tyr_Coin'];
		$a3=$_POST['Tyr_Count'];
		$a4=$_POST['Tyr_Type'];
		$a5=$_POST['Tyr_Text'];
		
		if (!empty($_FILES['filename1']['name'])) {
		$uploaddir = './photo/Tyr/';
		$uploaddir2 = '/photo/Tyr/';
		$uploadfile = $uploaddir . basename($_FILES['filename1']['name']);
		$uploadfile2 = $uploaddir2 . basename($_FILES['filename1']['name']);
		copy($_FILES['filename1']['tmp_name'], $uploadfile);
		$str1='UPDATE `Tyr` SET `Photos1`="'.$uploadfile2.'" WHERE id='.$id;
		$result=$db->query($str1);
		}
		
		if (!empty($_FILES['filename2']['name'])) {
		$uploaddir = './photo/Tyr/';
		$uploaddir2 = '/photo/Tyr/';
		$uploadfile = $uploaddir . basename($_FILES['filename2']['name']);
		$uploadfile2 = $uploaddir2 . basename($_FILES['filename2']['name']);
		copy($_FILES['filename2']['tmp_name'], $uploadfile);
		$str1='UPDATE `Tyr` SET `Photos2`="'.$uploadfile2.'" WHERE id='.$id;
		$result=$db->query($str1);
		}

		if (!empty($_FILES['filename3']['name'])) {
		$uploaddir = './photo/Tyr/';
		$uploaddir2 = '/photo/Tyr/';
		$uploadfile = $uploaddir . basename($_FILES['filename3']['name']);
		$uploadfile2 = $uploaddir2 . basename($_FILES['filename3']['name']);
		copy($_FILES['filename3']['tmp_name'], $uploadfile);
		$str1='UPDATE `Tyr` SET `Photos3`="'.$uploadfile2.'" WHERE id='.$id;
		$result=$db->query($str1);
		}

		$str1='UPDATE `Tyr` SET `Nazv`="'.$a1.'", `Coin`="'.$a2.'" , `Place`="'.$a3.'" , `Type_Tyr`="'.$a4.'" , `Texts`="'.$a5.'" WHERE id='.$id;
		


		$result=$db->query($str1);
	}
	}








	}





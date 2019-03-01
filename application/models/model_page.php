<?php
require_once 'application/config/Db.php';
class model_page extends Model
{

	function action_index()
	{	
		$db=Db::getConnection();
		$str="Select *from Tyr order by id DESC LIMIT 6";
		$result=$db->prepare($str);
		$result->execute();
		return $result;
	}

	function action_Sxema()
	{	

	}

	function action_Kont()
	{	

	}

	function action_About()
	{	

	}

	function action_Parthner()
	{	

	}

	function action_Straxov()
	{	
		
	}

	function action_News()
	{	

	}	

	function action_Map()
	{	

	}	

	function action_Avt(){	

	}

	function action_Reg(){	

	}

	function action_Country(){	

	}

	function action_Find($id){	
		$db=Db::getConnection();

		if ($id==1) {$str='Select *from Tyr where Place="'.'Морокко'.'"';}
		if ($id==2) {$str='Select *from Tyr where Place="'.'Камбоджа'.'"';}
		if ($id==3) {$str='Select *from Tyr where Place="'.'Турция'.'"';}
		if ($id==4) {$str='Select *from Tyr where Place="'.'Вьетнам'.'"';}
		if ($id==5) {$str='Select *from Tyr where Place="'.'Чехия'.'"';}
		if ($id==6) {$str='Select *from Tyr where Place="'.'Великобритания'.'"';}
		if ($id==7) {$str='Select *from Tyr where Place="'.'Италия'.'"';}
		if ($id==8) {$str='Select *from Tyr where Place="'.'Аргентина'.'"';}
		if ($id==9) {$str='Select *from Tyr where Place="'.'Норвегия'.'"';}

		$result=$db->prepare($str);
		$result->execute();
		return $result;
	}

	function action_Dinamic_Find(){	
		$db=Db::getConnection();
		$a1=$_POST['Tyr_Type'];
		$a2=$_POST['Tyr_Place'];
		if ($a2!="") {
			$str='Select *from Tyr where (Place="'.$a2.'" and Type_Tyr='.$a1.') or (Type_Tyr='.$a1.' and Nazv="'.$a2.'")';
			echo $str;
		}
		else{
			echo "string";
			$str='Select *from Tyr where Type_Tyr='.$a1;
		}
		
		$result=$db->prepare($str);
		$result->execute();
		return $result;			
	}


}




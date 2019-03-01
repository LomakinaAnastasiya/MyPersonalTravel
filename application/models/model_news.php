<?php
require_once 'application/config/Db.php';
class model_News extends Model
{

	function action_index()
	{	
		$db=Db::getConnection();
		$str="Select *from News order by id DESC";
		$result=$db->prepare($str);
		$result->execute();
		return $result;
	}

	function action_Info($id)
	{	
		$db=Db::getConnection();
		$str="Select *from News where id=".$id;
		$result=$db->prepare($str);
		$result->execute();
		return $result;
	}

}




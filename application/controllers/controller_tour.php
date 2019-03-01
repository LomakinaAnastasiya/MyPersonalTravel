<?php

class Controller_Tour extends Controller
{



	function action_index($rez){	
		
		$this->view->generate('/Tour.php', 'Main_Page.php',$rez);	
	}	

	function action_Info($rez){	
		
		$this->view->generate('/Tour_Info.php', 'Main_Page.php',$rez);	
	}


	function action_AddKoment($null,$t2)
	{	
	$put="/Tour/Info/".$t2;
	header("Location:$put");
	}		
	
	function action_Koment_Del()
	{
		$ps=$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
		$routes2 = explode('/', $ps); 
		$nums = $routes2[4];   

	$put="/Tour/Info/".$nums;
	header("Location:$put");
	}

}




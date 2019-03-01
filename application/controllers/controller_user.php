<?php

class Controller_User extends Controller
{

	function action_index()
	{	

	}

	function action_ls($id)
	{	
		if (isset($_SESSION["Login"])) {
			$this->view->generate('/User/Kabinet.php', 'Main_Page.php',$id);	
		}
	}


	function action_Update($id)
	{	
		if (isset($_SESSION["Login"])) {
			header("Location:/User/ls");	
		}
	}











	function action_Tyr($id)
	{	
		if (isset($_SESSION["Login"])) {
			$this->view->generate('/User/Buy.php', 'Main_Page.php',$id);	
		}
	}


	function action_Add_Tyr($id)
	{	

		header("Location: /User/Buy");
	}





	function action_Buy($num)
	{	
		if (isset($_SESSION["Login"])) {
			$this->view->generate('/User/My_Buy.php', 'Main_Page.php',$num);	
		}
	}


	function action_Del_Buy($num)
	{	
		if (isset($_SESSION["Login"])) {
			header("Location:/User/Buy");
		}
	}




}




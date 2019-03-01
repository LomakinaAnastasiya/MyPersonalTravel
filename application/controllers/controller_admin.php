<?php

class Controller_Admin extends Controller
{

	function action_index()
	{	

	}


	function action_ls($id)
	{	
		if (isset($_SESSION["Login"])) {
			$this->view->generate('/Admin/Kabinet.php', 'Main_Page.php',$id);	
		}
	}












	function action_Update($id)
	{	
		if (isset($_SESSION["Login"])) {
			header("Location:/User/ls");	
		}
	}


	function action_Spis($id)
	{	
		if ($_SESSION['Login']=="Admin") {
			$this->view->generate('/Admin/Users.php', 'Main_Page.php',$id);	
		}	
		else{
			header("Location:/Info");
		}
	
	}


	function action_Del_user($num)
	{	
		if ($_SESSION['Login']=="Admin") {
			header("Location:/Admin/Spis");
		}	
		else{
			header("Location:/Info");
		}
	}



















	function action_News($id)
	{	
		if ($_SESSION['Login']=="Admin") {
			$this->view->generate('/Admin/News.php', 'Main_Page.php',$id);	
		}	
		else{
			header("Location:/Info");
		}
	
	}


	function action_Del_News($num)
	{	
		if ($_SESSION['Login']=="Admin") {
			header("Location:/Admin/News");
		}	
		else{
			header("Location:/Info");
		}
	}


		function action_Add_News()
	{	
		if ($_SESSION['Login']=="Admin") {
			$this->view->generate('/Admin/Add_News.php', 'Main_Page.php');	
		}	
		else{
			header("Location:/Info");
		}
	
	}


		function action_Add_News_Load()
	{	
		if ($_SESSION['Login']=="Admin") {
			header("Location:/Admin/News");	
		}	
		else{
			header("Location:/Info");
		}
	
	}



	function action_Corr_News($id)
	{	
		if ($_SESSION['Login']=="Admin") {
			$this->view->generate('/Admin/Cor_News.php', 'Main_Page.php',$id);	
		}	
		else{
			header("Location:/Info");
		}
	
	}


	function action_Add_News_Update()
	{	
		if ($_SESSION['Login']=="Admin") {
			header("Location:/Admin/News");	
		}	
		else{
			header("Location:/Info");
		}
	
	}




























	function action_Tyr($id)
	{	
		if ($_SESSION['Login']=="Admin") {
			$this->view->generate('/Admin/Tyr.php', 'Main_Page.php',$id);	
		}	
		else{
			header("Location:/Info");
		}
	
	}


	function action_Del_Tyr($num)
	{	
		if ($_SESSION['Login']=="Admin") {
			header("Location:/Admin/Tyr");
		}	
		else{
			header("Location:/Info");
		}
	}


		function action_Add_Tyr()
	{	
		if ($_SESSION['Login']=="Admin") {
			$this->view->generate('/Admin/Add_Tyr.php', 'Main_Page.php');	
		}	
		else{
			header("Location:/Info");
		}
	
	}


		function action_Add_Tyr_Load()
	{	
		if ($_SESSION['Login']=="Admin") {
			header("Location:/Admin/Tyr");	
		}	
		else{
			header("Location:/Info");
		}
	
	}



	function action_Corr_Tyr($id)
	{	
		if ($_SESSION['Login']=="Admin") {
			$this->view->generate('/Admin/Cor_Tyr.php', 'Main_Page.php',$id);	
		}	
		else{
			header("Location:/Info");
		}
	
	}


	function action_Add_Tyr_Update()
	{	
		if ($_SESSION['Login']=="Admin") {
			header("Location:/Admin/Tyr");	
		}	
		else{
			header("Location:/Info");
		}
	
	}


























	function action_Buy($id)
	{	
		if ($_SESSION['Login']=="Admin") {
			$this->view->generate('/Admin/Zakaz.php', 'Main_Page.php',$id);		
		}	
		else{
			header("Location:/Info");
		}
	
	}


	function action_Del_Buy()
	{	
		if ($_SESSION['Login']=="Admin") {
			header("Location:/Admin/Buy");
		}	
		else{
			header("Location:/Info");
		}
	}


	function action_Yes()
	{	
		if ($_SESSION["Login"]=="Admin") {
			header("Location:/Admin/Buy");	
		}
	}


	function action_Noy()
	{	
		if ($_SESSION["Login"]=="Admin") {
			header("Location:/Admin/Buy");	
		}
	}




	function action_Red()
	{	
		if ($_SESSION['Login']=="Admin") {
			header("Location:/Admin/Spis");	
		}
	}

	function action_Uz()
	{	
		if ($_SESSION['Login']=="Admin") {
			header("Location:/Admin/Spis");	
		}
	}




}


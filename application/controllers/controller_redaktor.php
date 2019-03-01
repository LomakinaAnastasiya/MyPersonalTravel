<?php

class Controller_Redaktor extends Controller
{

	function action_index()
	{	

	}


	function action_ls($id)
	{	
		if ($_SESSION["Types"]=='1') {
			$this->view->generate('/Redaktor/Kabinet.php', 'Main_Page.php',$id);	
		}
	}












	function action_Update($id)
	{	
		if ($_SESSION["Types"]=='1') {
			header("Location:/User/ls");	
		}
	}





	function action_News($id)
	{	
		if ($_SESSION["Types"]=='1') {
			$this->view->generate('/Redaktor/News.php', 'Main_Page.php',$id);	
		}	
		else{
			header("Location:/Info");
		}
	
	}


	function action_Del_News($num)
	{	
		if ($_SESSION["Types"]=='1') {
			header("Location:/Redaktor/News");
		}	
		else{
			header("Location:/Info");
		}
	}


		function action_Add_News()
	{	
		if ($_SESSION["Types"]=='1') {
			$this->view->generate('/Redaktor/Add_News.php', 'Main_Page.php');	
		}	
		else{
			header("Location:/Info");
		}
	
	}


		function action_Add_News_Load()
	{	
		if ($_SESSION["Types"]=='1') {
			header("Location:/Redaktor/News");	
		}	
		else{
			header("Location:/Info");
		}
	
	}



	function action_Corr_News($id)
	{	
		if ($_SESSION["Types"]=='1') {
			$this->view->generate('/Redaktor/Cor_News.php', 'Main_Page.php',$id);	
		}	
		else{
			header("Location:/Info");
		}
	
	}


	function action_Add_News_Update()
	{	
		if ($_SESSION["Types"]=='1') {
			header("Location:/Redaktor/News");	
		}	
		else{
			header("Location:/Info");
		}
	
	}




























	function action_Tyr($id)
	{	
		if ($_SESSION["Types"]=='1') {
			$this->view->generate('/Redaktor/Tyr.php', 'Main_Page.php',$id);	
		}	
		else{
			header("Location:/Info");
		}
	
	}


	function action_Del_Tyr($num)
	{	
		if ($_SESSION["Types"]=='1') {
			header("Location:/Redaktor/Tyr");
		}	
		else{
			header("Location:/Info");
		}
	}


		function action_Add_Tyr()
	{	
		if ($_SESSION["Types"]=='1') {
			$this->view->generate('/Redaktor/Add_Tyr.php', 'Main_Page.php');	
		}	
		else{
			header("Location:/Info");
		}
	
	}


		function action_Add_Tyr_Load()
	{	
		if ($_SESSION["Types"]=='1') {
			header("Location:/Redaktor/Tyr");	
		}	
		else{
			header("Location:/Info");
		}
	
	}



	function action_Corr_Tyr($id)
	{	
		if ($_SESSION["Types"]=='1') {
			$this->view->generate('/Redaktor/Cor_Tyr.php', 'Main_Page.php',$id);	
		}	
		else{
			header("Location:/Info");
		}
	
	}


	function action_Add_Tyr_Update()
	{	
		if ($_SESSION["Types"]=='1') {
			header("Location:/Redaktor/Tyr");	
		}	
		else{
			header("Location:/Info");
		}
	
	}








}


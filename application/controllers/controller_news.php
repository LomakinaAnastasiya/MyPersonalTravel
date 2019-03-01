<?php

class Controller_News extends Controller
{



	function action_index($rez){	
		
		$this->view->generate('/News.php', 'Main_Page.php',$rez);	
	}	

	function action_Info($rez){	
		
		$this->view->generate('/News_Info.php', 'Main_Page.php',$rez);	
	}

}




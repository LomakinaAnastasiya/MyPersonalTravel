<?php

class Controller_Page extends Controller
{



	function action_index($id){	
		
		$this->view->generate('/index.php', 'Main_Page.php',$id);	
	}	

	function action_Sxema(){	
		
		$this->view->generate('/Sxema.php', 'Main_Page.php');	
	}

	function action_Kont(){	
		
		$this->view->generate('/Kont.php', 'Main_Page.php');	
	}

	function action_About(){	
		
		$this->view->generate('/About.php', 'Main_Page.php');	
	}


	function action_Parthner(){	
		
		$this->view->generate('/Parthner.php', 'Main_Page.php');	
	}

	function action_Straxov(){		
		$this->view->generate('/Straxov.php', 'Main_Page.php');	
	}

	function action_News(){	
		$this->view->generate('/News.php', 'Main_Page.php');	
	}	

	function action_Map(){	
		$this->view->generate('/Map.php', 'Main_Page.php');	
	}	

	function action_Avt(){	
		$this->view->generate('/avt.php', 'Main_Page.php');	
	}

	function action_Reg(){	
		$this->view->generate('/reg.php', 'Main_Page.php');	
	}

	function action_Country(){	
		$this->view->generate('/Country.php', 'Main_Page.php');	
	}

	function action_Find($id){	
		$this->view->generate('/Tour.php', 'Main_Page.php',$id);	
	}

	function action_Dinamic_Find($id){	
		$this->view->generate('/Tour.php', 'Main_Page.php',$id);	
	}

}




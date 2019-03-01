<?php

class Controller_Info extends Controller
{

	function action_Log_info()
	{	
		if (isset($_SESSION['Login'])) {
			if ($_SESSION['Login']=="Admin") {
				header("Location:/Admin/Spis");
			}
			else{
				if ($_SESSION['Types']==1) {
					header("Location:/Redaktor/ls");
				}
				else{
					header("Location:/User/Buy");
				}
			}
		}
		else{
			header("Location:/");
		}
	}

	function action_Reg_info()
	{	
		if (isset($_SESSION['Login'])) {
			header("Location:/User/Buy");
		}
		else{
			header("Location:/");
		}
	}

	function action_logout()
	{	
		header("Location:/");
	}




}




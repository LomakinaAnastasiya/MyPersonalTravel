<?php

class Controller_ls extends Controller
{

	function action_index()
	{	
		if (isset($_SESSION['Login'])) {
			if ($_SESSION['Login']=="admin") {
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
			header("Location:/Page");
		}
	}

}




<?php
	
	if ($_POST[Guardar])
		{
			$roll=$_POST['roll'];
		
			header('Location:../roll/control_roll.php?roll='.$roll);	
			
		}
			
		
	
?>
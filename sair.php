			<?php
			session_start();
			if ($_SESSION["usuario"]) {
				session_destroy();
				header("location: index.php");
				exit;
			}

			?>
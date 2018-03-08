<?php
	if(!empty($_GET['id']) || !empty($_GET['content'])){
		$id = $_GET['id'];
		$content = $_GET['content'];
	}else{
		exit();
	}
	if(!empty($_GET['menu'])){
		$menu = $_GET['menu'];
	}
	require("./system/content.php");

	switch ($id) { 
		case 'vip':
				switch ($content) {
					case 'content':
						echo $main['vip']['content'];
						break;
					case 'menu':

						echo $main['vip']['menu'];
						break;
					default:
						exit();
						break;
				}
			break;
		case 'eventos':
				switch ($content) {
					case 'content':
						echo $main['eventos']['content'];
						break;
					case 'menu':
						echo $main['eventos']['menu'];
						break;
					default:
						exit();
						break;
				}
			break;
		case 'geral':
				switch ($content) {
					case 'content':
						echo $main['geral']['content'];
						break;
					case 'menu':
						echo $main['geral']['menu'];
						break;
					default:
						exit();
						break;
				}
			break;
		case 'senhas':
				switch ($content) {
					case 'content':
						echo $main['senhas']['content'];
						break;
					case 'menu':
						echo $main['senhas']['menu'];
						break;
					default:
						exit();
						break;
				}
			break;
		case 'content':
				echo $main['contents'][$menu][$content];
			break;
		default:
			exit();
			break;
	}


?>
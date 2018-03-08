<?php 
	$main = array('vip' => array(), 'eventos' => array(), 'geral' => array(), 'senhas' => array(), 'contents' => array());
	$main['vip']['menu'] = "<div class=\"submenu-item\" onclick=\"getContent('vip', 'rec')\">Onde achar o codigo de ativação?</div>"
							."<div class=\"submenu-item\" onclick=\"getContent('vip', 'nfun')\">Meu vip não está funcionando</div>"
							."<div class=\"submenu-item\" onclick=\"getContent('vip', 'pagag')\">Paguei e agora?</div>";
	$main['vip']['content'] = "<div class=\"text\">"
								."Video de como comprar vip!"
								."</div>";

	$main['eventos']['menu'] = "";
	$main['eventos']['content'] = "";

	$main['geral']['menu'] = "";
	$main['geral']['content'] = "";

	$main['senhas']['menu'] = "";
	$main['senhas']['content'] = "";

	$main['contents']['vip'] = array('rec'=>"<div class=\"text\">Você acha ele no seu email idiota</div>",
		'nfun'=>"<div class=\"text\">Corno otario</div>",

		);

?>
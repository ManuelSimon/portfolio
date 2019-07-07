<?php
	session_start();

	if (!isset($_SESSION['lang'])) {
        $acceptLang = ['gl', 'pt', 'en'];

        $langArray = explode(',', $_SERVER['HTTP_ACCEPT_LANGUAGE']);
        $langFinal = 'pt';

        foreach ($langArray as $langAux){
            $lang = substr($langAux, 0, 2);
            if ($lang == 'gl') $lang='pt';
            if (in_array($lang, $acceptLang)){
                $langFinal = $lang;
                break;
            }
        }

        $_SESSION['lang'] = $langFinal;
    }

	else if (isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang'])) {
		if ($_GET['lang'] == "en")
			$_SESSION['lang'] = "en";
		else if ($_GET['lang'] == "pt")
			$_SESSION['lang'] = "pt";
	}

	require_once "languages/" . $_SESSION['lang'] . ".php";
?>
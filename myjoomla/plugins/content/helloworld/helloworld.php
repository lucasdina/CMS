<?php
defined( '_JEXEC' ) or die;

class plgContentHelloWorld extends JPlugin
{
	public function onContentAfterDisplay($context, $article, $params, $limitstart) {
        $article->text = "Collectors of Really Bad Art \n" . $article->text;
        return true;
    }
}
?>
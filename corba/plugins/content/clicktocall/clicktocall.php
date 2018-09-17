<?php
defined( '_JEXEC' ) or die;

class plgContentClickToCall extends JPlugin
{
	public function onContentPrepare($context, $article, $params, $limitstart) {
        $regexA = "/^(\d[\s-]?)?[\(\[\s-]{0,2}?\d{3}[\)\]\s-]{0,2}?\d{3}[\s-]?\d{4}$/i";
        $article->text = preg_replace($regexA, '<a href="tel:+$0">$0</a>', $article->text);
        return true;
    }
}
?>
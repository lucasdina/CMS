<?php
defined( '_JEXEC' ) or die;

class plgContentClickToCall extends JPlugin
{
	public function onContentAfterDisplay($context, $article, $params, $limitstart) {
        $regexA = "/\d?(\s?|-?|\+?|\.?)((\(\d{1,4}\))|(\d{1,3})|\s?)(\s?|-?|\.?)((\(\d{1,3}\))|(\d{1,3})|\s?)(\s?|-?|\.?)((\(\d{1,3}\))|(\d{1,3})|\s?)(\s?|-?|\.?)\d{3}(-|\.|\s)\d{4}/";
        $article->text = preg_replace($regexA, '<a href="tel:+$0">$0</a>', $article->text);
        return true;
    }
}
?>
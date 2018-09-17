<?php
defined( '_JEXEC' ) or die;

class plgContentColorize extends JPlugin
{
	public function onContentPrepare($context, $article, $params, $limitstart) {
        $regexA = array("/(?:^|\W)a(?:$|\W)/", "/(?:^|\W)an(?:$|\W)/", "/(?:^|\W)the(?:$|\W)/");
        $article->text = preg_replace($regexA, '<font color="red">$0</font>', $article->text);
        return true;
    }
}
?>
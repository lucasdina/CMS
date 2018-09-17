<?php
defined( '_JEXEC' ) or die;

class plgContentColorize extends JPlugin
{
	public function onContentPrepare($context, $article, $params, $limitstart) {
        $article->text = str_replace(' a ', '<font color="red">poop</font>', $article->text);
        return true;
    }
}
?>
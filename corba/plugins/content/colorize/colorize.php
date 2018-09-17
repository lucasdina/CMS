<?php
defined( '_JEXEC' ) or die( 'Restricted access' );

class plgColorize extends JPlugin
{
    function onContentBeforeDisplay($context, &$article, &$params, $limitstart)
	{
        //add your plugin codes here
        echo 'poop';
		return $article;
		//return a string value. Returned value from this event will be displayed in a placeholder. 
                // Most templates display this placeholder after the article separator. 
	}
}
?>
<?php
defined( '_JEXEC' ) or die;
jimport( 'joomla.plugin.plugin' );
class plgColorize extends JPlugin
{
	protected $autoloadLanguage = true;

    function plgColorize ( &$subject, $params )
	{
		parent::__construct( $subject, $params );
	}

    public function onContentPrepare($context, &$row, &$params, $page = 0)
	{
        echo "<script>alert('cool');</script>";
        echo "poop";
        return true;
    }
}
?>
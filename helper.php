<?php
class myoutput
{
	
	public static function helloout($params)
	{
		$db = JFactory::getDbo();
// Retrieve the shout
$query = $db->getQuery(true)
            ->select($db->quoteName('hello'))
            ->from($db->quoteName('#__helloworld'))
            ->where('lang = ' . $db->Quote('en-GB'));
// Prepare the query
$db->setQuery($query);
// Load the row.
$result = $db->loadResult();
// Return the Hello
return $result;
	}
	
	
	
}
?>
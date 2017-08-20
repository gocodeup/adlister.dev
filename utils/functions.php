<?php
function inputHas($key)
{
	return isset($_REQUEST[$key]);
}
function inputGet($key)
{
	inputHas($key);
	return $_REQUEST[$key];
}
function escape($input)
{
	return htmlspecialchars(strip_tags($input));
}
?>
<!-- inputHas($key): returns true or false based on whether the key is available.
inputGet($key): returns the value specified by the key, or null if the key is not set.
escape($input): returns the input as a safely escaped string. -->
<?php

function parseContacts($filename)
{
    $contacts = array();

    $handle = fopen($filename, 'r');
    $contents = fread($handle, filesize($filename));

    $contacts = explode("\n", $contents);

    array_pop($contacts);
    fclose($handle); 
    for ($i = 0; $i < sizeof($contacts); $i++){
    	$personalInfo = explode("|", $contacts[$i]);
    	$contacts[$i] = $personalInfo;
    }


    return $contacts;
}

var_dump(parseContacts('contacts.txt'));

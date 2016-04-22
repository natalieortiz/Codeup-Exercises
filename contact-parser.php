<?php

function parseContacts($filename)
{
    $contacts = array();

    $handle = fopen($filename, 'r');
    $contents = fread($handle, filesize($filename));

    $contacts = explode("\n", $contents);

    array_pop($contacts);
    fclose($handle); 

    foreach ($contacts as $key => $value){
    	//Exploding new line into array.
    	$personalInfo = explode("|", $contacts[$key]);
    	//Assigning index array values to another new associative array. 
    	$parsedContacts[$key]['name'] = $personalInfo[0];
    	//Parsing phone number from indexed array before assigning to new array.
    	$personalInfo[1] = parseNumber($personalInfo[1]);
    	//Assigning parsed phone number into new array that is being returned.
    	$parsedContacts[$key]['number'] = $personalInfo[1];
    }
    return $parsedContacts;
}

function parseNumber($string)
{
	$newPhone = substr($string, 0, 3) . "-" . substr($string, 3, 3) . "-" . substr($string, 6, 4);
	return $newPhone;
}

print_r(parseContacts('contacts.txt'));

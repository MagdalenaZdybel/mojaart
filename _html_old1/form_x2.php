<?php
/******************************************************************************\
* Simple Page Protect                          Version 1.0                     *
* Copyright 2000 Frederic TYNDIUK (FTLS)       All Rights Reserved.            *
* E-Mail: tyndiuk@ftls.org                     Script License: GPL             *
* Created  02/28/2000                          Last Modified 02/28/2000        *
* Scripts Archive at:                          http://www.ftls.org/php/        *
*******************************************************************************/
/*******************************************************************************/
// Necessary Variables:

$TO = "monika@mojaart.pl";
	// En: E-Mail of mail recipient.
	// Fr: E-Mail pour l'envoie.
	
$DEFAULT_EXIT_PAGE = "kontakt.html";
	// En: exit page.
	// Fr: page de sortie.

// End  Necessary Variables section
/******************************************************************************/

$headers  = "From: Anonymous on $SERVER_NAME <$mail>\n";
$headers .= "X-Mailler: PHP 3 Form2Mail made by FTLS, http://www.ftls.org/\n";

$message = "";

while (list($key, $val) = each($HTTP_POST_VARS)) { 
	$message .= "$key : $val\n"; 
} 



mail($TO, $subject, $message, $headers); 
	// En : Send mail
	// Fr : Envoi du mail 

if(! $exit_page)
	$exit_page = $DEFAULT_EXIT_PAGE;


	// Exit -> $exit_page
header('Location: kontakt.html'); //tak mo¿e wygl¹daæ przekierowanie

?> 
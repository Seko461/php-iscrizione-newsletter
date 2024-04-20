<?php

/**
 * Generate alert message 
 * @param string $response contains a true/false value
 * @return array
 */

function generateAlertMessage($response){
if($response){
       return  [
        'status' => 'success',
        'text' => 'Success!  '
       ];
    }else{
       return [
        'status' => 'danger',
        'text' => 'Error!  '
    ];
    }

}

/**
 * Check if an email contains '@' and '.'
 * @param string $email the mail to check
 * @return boolean value
 */
function checkMail($mail){
  if (str_contains($mail, '@' ) && str_contains($mail, '.')) {
       return true;
    }
      return false;
      

}
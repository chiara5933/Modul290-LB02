<?php

// function: checkifstringisempty 
// if return 1 = string is 1 character
// if return 0 = string is empty
function checkifstringisempty($string) {
    if(strlen(trim($string)) > 0){
        return 0;
     } else {
         return 1;
     }
}
<?php

namespace App\Exception;

use \Exception;

class CustomException extends Exception
{

    //varDumpStyle()
    public function varDumpStyle($stm)
    {
        echo '<pre>';
        print_r($stm);
        echo '<pre>';
    }
    //varDumpStyle()

    //errorMessage()
    public function errorMessage() {
        //error message
        return 'Error on line <br><b>'.$this->getLine().'</b> in <br><b>'.$this->getFile()
            .'</b>: <b>'.$this->getMessage().'</b> is not a valid E-Mail address';
    }
    //errorMessage()

    //inputSanitize()
    public static function inputSanitize($input)
    {

        $input = trim($input);

    }
    //inputSanitize()






}
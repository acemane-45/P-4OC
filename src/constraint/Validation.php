<?php

namespace App\src\constraint;

class Validation
{

    //Renvoi vers la classe ArticleValidation
    public function validate($data, $name)
    {
        if($name === 'Article') {
            $articleValidation = new ArticleValidation();
            $errors = $articleValidation->check($data);
            return $errors;
        }
    }
}
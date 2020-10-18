<?php
    class EmptyEmailException extends Exception{}
    class InvalidEmailException extends Exception{}

    // $email="cypher-example@protonmail..com";
    $email=readline("Enter a valid email for verification: ");

    try
    {
        if($email=="")
        {
            throw new EmptyEmailException("Please Enter your Email!\n");
        }
        if(!filter_var($email,FILTER_VALIDATE_EMAIL))
        {
            throw new InvalidEmailException("Please enter a valid Email Address!\n");
        }
        echo "Email verified successfully:) !\n";
    }
    catch(EmptyEmailException $e)
    {
        echo $e->getMessage();
    }
    catch(InvalidEmailException $e)
    {
        echo $e->getMessage();
    }
?>
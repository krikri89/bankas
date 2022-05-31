<?php
        $error = "";
        $success = "";

        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
                if(empty($_POST['name'])){
                        $error = "Enter a valid name";
                }
                else{ 
                        $success = $_POST['name'];
                        if(preg_match("/^[a-zA-Z-']*$/",$name)){
                                $error = 'Only letters allowed';
                        }

                }
        }
        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
                if(empty($_POST['surname'])){
                        $error = "Enter a valid surname";
                }
                else{ 
                        $success = $_POST['surname'];
                        if(preg_match("/^[a-zA-Z-']*$/",$surname)){
                                $error = 'Only letters allowed';
                        }

                }
        }

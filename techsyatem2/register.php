<?php

if ( array_key_exists( 'firstname', $_POST ) ) {

    $dsn      = 'mysql:dbname=results;host=localhost';
    $user     = 'root';
    $password = '';
    $pdo      = new PDO( $dsn, $user, $password );


    $firstname       = strip_tags( $_POST['firstname'] );
    $lastname     = strip_tags( $_POST['lastname'] );
    $username   = strip_tags( $_POST['username'] );
    $password   = strip_tags( $_POST['password'] );
    $gender= strip_tags( $_POST['gender'] );
    $role = strip_tags( $_POST['role'] );
    

            try {
                
                //create auto increment user IDphone_number
                $stmt = $pdo->prepare( "INSERT INTO user (firstname, lastname,username, password, Gender ,Role)  values (?,?, ?,?, ?,?)" );

                //bind parameters with values to avoid sql injection
                $stmt->bindParam( 1, $firstname, PDO::PARAM_STR,255 );
                $stmt->bindParam( 2, $lastname, PDO::PARAM_STR, 255 );
                $stmt->bindParam( 3, $username, PDO::PARAM_STR, 255 );
                $stmt->bindParam( 4, $password, PDO::PARAM_STR, 255 );
                $stmt->bindParam( 5, $gender, PDO::PARAM_STR, 255 );
                $stmt->bindParam( 6, $role, PDO::PARAM_STR, 255 );

                if ( $stmt->execute() ) {
                    echo 'registration completed successfully.'. '<br>';
                } else { 
                    echo 'registration failed'. '<br>';

                }

            } catch ( Exception $exception ) {
                echo $exception. '<br>';
            }

        } else {

            echo 'Data not recieved';
        }
            
    
        

<?php

if ( array_key_exists( 'first_name', $_POST ) ) {

    $dsn      = 'mysql:dbname=tech;host=localhost';
    $user     = 'root';
    $password = '';
    $pdo      = new PDO( $dsn, $user, $password );


    $firstname       = strip_tags( $_POST['first_name'] );
    $lastname     = strip_tags( $_POST['last_name'] );
    $town   = strip_tags( $_POST['town'] );
    $phone   = strip_tags( $_POST['phone_number'] );
    $EmailAddress = strip_tags( $_POST['email_address'] );
    

            try {
                
                //create auto increment user IDphone_number
                $stmt = $pdo->prepare( "INSERT INTO registration (firstname, lastname, town, phone, EmailAddress)  values (?,?, ?,?, ?)" );

                //bind parameters with values to avoid sql injection
                $stmt->bindParam( 1, $firstname, PDO::PARAM_STR,255 );
                $stmt->bindParam( 2, $lastname, PDO::PARAM_STR, 255 );
                $stmt->bindParam( 3, $town, PDO::PARAM_STR, 255 );
                $stmt->bindParam( 4, $phone, PDO::PARAM_STR, 255 );
                $stmt->bindParam( 5, $EmailAddress, PDO::PARAM_STR, 255 );

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
            
    
        

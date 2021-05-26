<?php

if ( array_key_exists( 'first_name', $_POST ) ) {

    $dsn      = 'mysql:dbname=tech;host=localhost';
    $user     = 'root';
    $password = '';
    $pdo      = new PDO( $dsn, $user, $password );


    $firstname       = strip_tags( $_POST['first_name'] );
    $lastname     = strip_tags( $_POST['last_name'] );
    $message   = strip_tags( $_POST['message'] );
    $country   = strip_tags( $_POST['country'] );
    $EmailAddress      = strip_tags( $_POST['email_address'] );
    

            try {
                
                //create auto increment user ID
                $stmt = $pdo->prepare( "INSERT INTO  contacts (firstname, lastname, country, massages,EmailAddress ) values (?,?, ?,?, ?)" );

                //bind parameters with values to avoid sql injection
                $stmt->bindParam( 1, $firstname, PDO::PARAM_STR,255 );
                $stmt->bindParam( 2, $lastname, PDO::PARAM_STR, 255 );
                $stmt->bindParam( 3, $country, PDO::PARAM_STR, 255 );
                $stmt->bindParam( 4, $EmailAddress, PDO::PARAM_STR, 255 );
                $stmt->bindParam( 5, $message, PDO::PARAM_STR, 255 );

                if ( $stmt->execute() ) {
                    echo ' message sent successfully.'. '<br>';
                } else { 
                    echo 'massage not recieved!'. '<br>';

                }

            } catch ( Exception $exception ) {
                echo $exception. '<br>';
            }

        } else {

            echo 'Data not recieved';
        }



        
            
    
        

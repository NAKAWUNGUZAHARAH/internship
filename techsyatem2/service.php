<?php

if ( array_key_exists( 'name', $_POST ) ) {

    $dsn      = 'mysql:dbname=results;host=localhost';
    $user     = 'root';
    $password = '';
    $pdo      = new PDO( $dsn, $user, $password );


    
    $name     = strip_tags( $_POST['name'] );
    $type    = strip_tags( $_POST['service'] );
    $amount   = strip_tags( $_POST['amount'] );
    $time   = strip_tags( $_POST['duration'] );
    $desc= strip_tags( $_POST['description'] );

            try {
                
                //create auto increment user IDphone_number
                $stmt = $pdo->prepare( "INSERT INTO service (name, Type, amount,duration, Description) values (?,?, ?,?,?)" );

                //bind parameters with values to avoid sql injection
                $stmt->bindParam( 1, $name, PDO::PARAM_STR,255 );
                $stmt->bindParam( 2, $type, PDO::PARAM_STR,255 );
                $stmt->bindParam( 3, $amount, PDO::PARAM_STR, 255 );
                $stmt->bindParam( 4, $time, PDO::PARAM_STR, 255 );
                $stmt->bindParam( 5, $desc, PDO::PARAM_STR, 255 );

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
            
    
        

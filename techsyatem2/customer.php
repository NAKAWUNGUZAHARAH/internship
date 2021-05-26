<?php

if ( array_key_exists( 'firstname', $_POST ) ) {

    $dsn      = 'mysql:dbname=results;host=localhost';
    $user     = 'root';
    $password = '';
    $pdo      = new PDO( $dsn, $user, $password );


    $customerid       = strip_tags( $_POST['id'] );
    $firstname     = strip_tags( $_POST['firstname'] );
    $lastname     = strip_tags( $_POST['lastname'] );
    $gender   = strip_tags( $_POST['gender'] );
    $DOB   = strip_tags( $_POST['dob'] );
    $address= strip_tags( $_POST['address'] );
    $phoneNo = strip_tags( $_POST['phone'] );
    

            try {
                
                //create auto increment user IDphone_number
                $stmt = $pdo->prepare( "INSERT INTO customers (customerid,firstname, lastname, Gender,Age, Address,phoneNo)  values (?,?, ?,?,?,?,?)" );

                //bind parameters with values to avoid sql injection
                $stmt->bindParam( 1, $customerid, PDO::PARAM_STR,255 );
                $stmt->bindParam( 2, $firstname, PDO::PARAM_STR,255 );
                $stmt->bindParam( 3, $lastname, PDO::PARAM_STR, 255 );
                $stmt->bindParam( 4, $gender, PDO::PARAM_STR, 255 );
                $stmt->bindParam( 5, $DOB, PDO::PARAM_STR, 255 );
                $stmt->bindParam( 6, $address, PDO::PARAM_STR, 255 );
                $stmt->bindParam( 7, $phoneNo, PDO::PARAM_STR, 255 );

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
            
    
        

<?php

if ( array_key_exists( 'clientname', $_POST ) ) {

    $dsn      = 'mysql:dbname=results;host=localhost';
    $user     = 'root';
    $password = '';
    $pdo      = new PDO( $dsn, $user, $password );


    $a       = strip_tags( $_POST['clientname'] );
    $b    = strip_tags( $_POST['service'] );
    $c     = strip_tags( $_POST['status'] );
    $d   = strip_tags( $_POST['orders'] );
    $e   = strip_tags( $_POST['amount'] );
    $f= strip_tags( $_POST['total'] );
   
            try {
                
                //create auto increment user IDphone_number
                $stmt = $pdo->prepare( "INSERT INTO orders (clientname, service_offered, status, total_orders, price, total_amount)  values (?,?, ?,?,?,?)" );

                //bind parameters with values to avoid sql injection
                $stmt->bindParam( 1, $a, PDO::PARAM_STR,255 );
                $stmt->bindParam( 2, $b, PDO::PARAM_STR,255 );
                $stmt->bindParam( 3, $c, PDO::PARAM_STR, 255 );
                $stmt->bindParam( 4, $d, PDO::PARAM_STR, 255 );
                $stmt->bindParam( 5, $e, PDO::PARAM_STR, 255 );
                $stmt->bindParam( 6, $f, PDO::PARAM_STR, 255 );

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
            
    
        

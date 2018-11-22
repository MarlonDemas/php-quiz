<?php session_start(); ?>
 
 <!DOCTYPE html>
 <html>
 <head>
     <meta charset="utf-8" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Results</title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="css/main.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">
 </head>
 <body>
     <?php
        $questions = $_SESSION['questions'];
        $answers = $_POST['answers'];

        $counter = 0;

        foreach ($questions as $questionNo => $value){

            if ($answers[$questionNo] != $value['correctAnswer']){
                // echo "$answers[$questionNo] was wrong";
            } else {
                $counter++;
            }

            if ($counter=="") { 
                $counter='0';
                $results = "Your score: $counter/20";
            } else { 
                $results = "Your score: $counter/20";
            }

        }

        echo($results);
        
     ?>

     <?php if ($counter < 10) { ?>
        <div class="container">
            <article class="message is-danger">
                <div class="message-header">
                    Congrats
                </div>
                <div class="message-body">
                    You done it
                </div>
            </article>
        </div>
     <?php } ?>

     <?php if ($counter > 10) { ?>
        <div class="container">
            <article class="message is-warning">
                <div class="message-header">
                    Congrats
                </div>
                <div class="message-body">
                    You done it
                </div>
            </article>
        </div>
     <?php } ?>

     <?php if ($counter >` 15) { ?>
        <div class="container">
            <article class="message is-success">
                <div class="message-header">
                    Congrats
                </div>
                <div class="message-body">
                    You done it
                </div>
            </article>
        </div>
     <?php } ?>

 </body>
 </html>
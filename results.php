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

     <div class="box is-invisible">
         <audio controls autoplay>
             <source src="UEFA Champions League 2016 2017 Theme Song AudioLyrics]-[AudioTrimmer.com].mp3">
         </audio>
     </div>
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

        }
        
     ?>

     <?php if ($counter < 10) { 
         $percent = ($counter/20)*100;
     ?>
        <div class="container">
            <article class="message is-danger">
                <div class="message-header">
                    Congrats
                </div>
                <div class="message-body">
                    You got <?php echo $counter ?> out of 20 which is a solid 
                    <p class="title is-4"><?php echo $percent ?>%</p>
                </div>
            </article>
        </div>
     <?php } ?>

     <?php if ($counter > 10 && $counter < 15) { 
         $percent = ($counter/20)*100;
     ?>
        <div class="container">
            <article class="message is-warning">
                <div class="message-header">
                    Congrats
                </div>
                <div class="message-body">
                    You got <?php echo $counter ?> out of 20 which is a solid 
                    <p class="title is-4"><?php echo $percent ?>%</p>
                </div>
            </article>
        </div>
     <?php } ?>

     <?php if ($counter > 15) { 
         $percent = ($counter/20)*100; 
     ?>
        <div class="container">
            <article class="message is-success">
                <div class="message-header">
                    Congrats
                </div>
                <div class="message-body">
                    You got <?php echo $counter ?> out of 20 which is a solid 
                    <p class="title is-4"><?php echo $percent ?>%</p>
                </div>
            </article>
        </div>
     <?php } ?>

 </body>
 </html>
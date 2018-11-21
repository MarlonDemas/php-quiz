<?php session_start(); ?>
 
 <!DOCTYPE html>
 <html>
 <head>
     <meta charset="utf-8" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Results</title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
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

     <script>
        alert('<?php echo $results; ?>');
     </script>
 </body>
 </html>
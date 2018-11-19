 <!DOCTYPE html>
 <html>
 <head>
     <meta charset="utf-8" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Ultimate Soccer Quiz</title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">
 </head>
 <body>
    <?php
            $questions = array(
                1 => array(
                    'question' => '1. When you score in soccer, the point is called a _____.',
                    'answers' => array(
                        'A' => 'Touchdown',
                        'B' => 'Basket',
                        'C' => 'Goal',
                        'D' => 'Home Run'
                    ),
                    'correctAnswer' => 'C'
                ),
                2 => array(
                    'question' => '2. How many players are on the field for each team?',
                    'answers' => array(
                        'A' => '9',
                        'B' => '11',
                        'C' => '10',
                        'D' => '15'
                    ),
                    'correctAnswer' => 'B'
                ),
                3 => array(
                    'question' => '3. The duration of a soccer game is exactly _____ minutes of play.',
                    'answers' => array(
                        'A' => '80',
                        'B' => '90',
                        'C' => '120',
                        'D' => '45'
                    ),
                    'correctAnswer' => 'B'
                ),
                4 => array(
                    'question' => '4. The officials in a game are _____.',
                    'answers' => array(
                        'A' => 'A referee and four linesmen',
                        'B' => 'Two referees',
                        'C' => 'Two referees and two linesmen',
                        'D' => 'A referee and two linesmen'
                    ),
                    'correctAnswer' => 'D'
                ),
            );
        ?>
        
        <form action="index.php" method="post" id="quiz">
            <?php foreach ($questions as $questionNo => $value){ ?>

                <h3><?php echo $value['question']; ?></h3>
                <?php 
                    foreach ($value['answers'] as $letter => $answer){
                    $label = 'question-'.$questionNo.'-answers-'.$letter;
                        ?>
                <div>
                    <input type="radio" name="answers[<?php echo $questionNo; ?>]" id="<?php echo $label; ?>" value="<?php echo $letter; ?>" />
                    <label for="<?php echo $label; ?>"><?php echo $letter; ?>) <?php echo $answer; ?> </label>
                </div>
                <?php } ?>

            <?php } ?>
            <input type="submit" value="Submit Quiz" />
        </form>
 </body>
 </html>
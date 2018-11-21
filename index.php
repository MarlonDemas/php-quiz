 <!DOCTYPE html>
 <html>
 <head>
     <meta charset="utf-8" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Ultimate Soccer Quiz</title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="css/main.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">
 </head>
 <body>
 <section class="hero is-fullheight">
    <h1 class="title is-1">Ultimate Soccer Quiz</h1>
    <div class="container">
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
                5 => array(
                    'question' => "5. This is awarded to the opposite team when a defensive player fouls an attacking player or commits a handball in his or her team's penalty area.",
                    'answers' => array(
                        'A' => 'Free kick',
                        'B' => 'Corner kick',
                        'C' => 'Penalty kick',
                        'D' => 'Butt kick'
                    ),
                    'correctAnswer' => 'C'
                ),
                6 => array(
                    'question' => '6. What is the name of the international governing body of association for football, futsal, and beach soccer?',
                    'answers' => array(
                        'A' => 'NBA',
                        'B' => 'FIFA',
                        'C' => 'FILA',
                        'D' => 'FUOLA'
                    ),
                    'correctAnswer' => 'B'
                ),
                7 => array(
                    'question' => '7. The FIFA World Cup takes place every _____.',
                    'answers' => array(
                        'A' => 'Year',
                        'B' => 'Two years',
                        'C' => 'Four years',
                        'D' => 'Five years'
                    ),
                    'correctAnswer' => 'C'
                ),
                8 => array(
                    'question' => '8. Who was the 2014 World Cup champion in soccer?',
                    'answers' => array(
                        'A' => 'Brazil',
                        'B' => 'Argentina',
                        'C' => 'Portugal',
                        'D' => 'Germany'
                    ),
                    'correctAnswer' => 'D'
                ),
                9 => array(
                    'question' => '9. What is the name of the most famous player on the Barcelona football team?',
                    'answers' => array(
                        'A' => 'Tiago Volpi',
                        'B' => 'Lionel Messi',
                        'C' => 'David Beckham',
                        'D' => 'Cristiano Ronaldo'
                    ),
                    'correctAnswer' => 'B'
                ),
                10 => array(
                    'question' => '10. What team does Cristiano Ronaldo play for?',
                    'answers' => array(
                        'A' => 'Barcelona',
                        'B' => 'Juventus',
                        'C' => 'Bayern Munich',
                        'D' => 'Real Madrid'
                    ),
                    'correctAnswer' => 'B'
                ),
                11 => array(
                    'question' => '11. This player is an English former professional footballer. He played for Manchester United, Preston North End, Real Madrid, Milan, LA Galaxy, Paris Saint-Germain, and the England national team.',
                    'answers' => array(
                        'A' => 'Wayne Rooney',
                        'B' => 'Diego Maradona',
                        'C' => 'David Beckham',
                        'D' => 'Dennis Bergkamp'
                    ),
                    'correctAnswer' => 'C'
                ),
                12 => array(
                    'question' => '12. This legendary soccer player is widely regarded as the greatest football player of all time and was born in Brazil.',
                    'answers' => array(
                        'A' => 'Pele',
                        'B' => 'Maradona',
                        'C' => 'Platini',
                        'D' => 'Zidane'
                    ),
                    'correctAnswer' => 'A'
                ),
                13 => array(
                    'question' => "13. What is the color of the Manchester United jersey?",
                    'answers' => array(
                        'A' => 'Blue',
                        'B' => 'Yellow',
                        'C' => 'Red',
                        'D' => 'Brown'
                    ),
                    'correctAnswer' => 'C'
                ),
                14 => array(
                    'question' => '14. The _____ is an annual continental club football competition organized by the Union of European Football Associations (UEFA) and contested by top-division European clubs.',
                    'answers' => array(
                        'A' => 'World Cup',
                        'B' => 'The InterAmerican Cup',
                        'C' => 'Libertadores Cup',
                        'D' => 'UEFA Champions League'
                    ),
                    'correctAnswer' => 'D'
                ),
                15 => array(
                    'question' => '15. Who won the first World Cup?',
                    'answers' => array(
                        'A' => 'Spain',
                        'B' => 'USA',
                        'C' => 'Brazil',
                        'D' => 'Uruguay'
                    ),
                    'correctAnswer' => 'D'
                ),
                16 => array(
                    'question' => '16. Which of these star soccer players has never played for Real Madrid?',
                    'answers' => array(
                        'A' => 'Zinedane Zidane',
                        'B' => 'Diego Maradona',
                        'C' => 'David Beckham',
                        'D' => 'Cristiano Ronaldo'
                    ),
                    'correctAnswer' => 'B'
                ),
                17 => array(
                    'question' => "17. Santiago Bernabeu is the home of which Spain League club?",
                    'answers' => array(
                        'A' => 'Real Madrid',
                        'B' => 'Atletico de Madrid',
                        'C' => 'Barcelona',
                        'D' => 'Valencia'
                    ),
                    'correctAnswer' => 'A'
                ),
                18 => array(
                    'question' => '18. Landon Donovan is a/an _____ former professional soccer player who played as a forward and attacking midfielder.',
                    'answers' => array(
                        'A' => 'English',
                        'B' => 'Brazilian',
                        'C' => 'American',
                        'D' => 'Canadian'
                    ),
                    'correctAnswer' => 'C'
                ),
                19 => array(
                    'question' => '19. This person is a Portuguese professional football manager and former football player. He has been the manager of Premier League club Manchester United, Real Madrid, and Chelsea.',
                    'answers' => array(
                        'A' => 'Diego Maradona',
                        'B' => 'Alex Furguson',
                        'C' => 'Jose Morinho',
                        'D' => 'Carlo Ancelotti'
                    ),
                    'correctAnswer' => 'C'
                ),
                20 => array(
                    'question' => "20. Gianluigi 'Gigi' Buffon is an Italian professional footballer who plays as a _____.",
                    'answers' => array(
                        'A' => 'Goalkeeper',
                        'B' => 'Defender',
                        'C' => 'Forward',
                        'D' => 'Midfielder'
                    ),
                    'correctAnswer' => 'A'
                ),
            );
        ?>
        
        <form action="results.php" method="post" id="quiz">
            <?php foreach ($questions as $questionNo => $value){ ?>
                <div class="box">
                    <h3 class="title is-4"><?php echo $value['question']; ?></h3>
                    <div class="btnContainer">
                        <?php 
                            foreach ($value['answers'] as $letter => $answer){
                            $label = 'question-'.$questionNo.'-answers-'.$letter;
                                ?>
                        <div class="control">
                            <input type="radio" name="answers[<?php echo $questionNo; ?>]" id="<?php echo $label; ?>" value="<?php echo $letter; ?>" required />
                            <label for="<?php echo $label; ?>"><?php echo $answer; ?> </label>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
            
            <button type="submit" class="button is-success">Submit Quiz!</button>
        </form>
    </div> 
    
</section>
 </body>
 </html>
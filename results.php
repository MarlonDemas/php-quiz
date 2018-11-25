<?php session_start(); ?>
 
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Results</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/results.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">
</head>
<body>

    <!-- Making an array for the questions and answers -->
    <?php
    $questions = $_SESSION['questions'];
    $answers = $_POST['answers'];

    $counter = 0;

    // Comparing the user answer and the correct answer
    foreach ($questions as $questionNo => $value){

        if ($answers[$questionNo] != $value['correctAnswer']){
            // echo "$answers[$questionNo] was wrong";
        } else {
            $counter++;
        }

    }
    
    ?>

    <!-- Checks your score and outputs it with a message based on the score you got -->
    <?php if ($counter == 0) { 
        $percent = ($counter/20)*100;
    ?>
    <div class="container">
        <nav class="level">
            <div class="level-item has-text-centered">
                <figure class='image'><img src='images\bomb.jpg'></figure>
            </div>
        </nav>
        <audio controls autoplay class="is-invisible">
            <source src="audio\Crowd Booing Sound Effects.mp3">
        </audio>
        <article class="message is-danger">
            <div class="message-header">
                Congratulations! You are totally clueless!!!😞
            </div>
            <div class="message-body">
                <p class="title is-4">You got <?php echo $counter ?> out of 20 which is a solid </p>
                <p class="title is-3"><?php echo $percent ?>%</p>
                <p class="title is-4">OK, be honest--you've never actually seen a game before, have you?</p>
            </div>
        </article>
    </div>
    <?php } ?>

    <?php if ($counter > 0 && $counter < 10) { 
        $percent = ($counter/20)*100;
    ?>
    <div class="container">
        <nav class="level">
            <div class="level-item has-text-centered">
                <figure class='image'><img src='images/images.jfif'></figure>
            </div>
        </nav>
        <audio controls autoplay class="is-invisible">
            <source src="audio\Crowd Cheering - sound effect.mp3">
        </audio>
        <article class="message is-danger">
            <div class="message-header">
                Ouch!!! You Are Not Very Knowledgeable🤷‍
            </div>
            <div class="message-body">
                <p class="title is-4">You got <?php echo $counter ?> out of 20 which is a solid </p>
                <p class="title is-3"><?php echo $percent ?>%</p>
                <p class="title is-4">You know a bit about soccer, but let's be honest--it's really not your thing.</p>
            </div>
        </article>
    </div>
    <?php } ?>

    <?php if ($counter >= 10 && $counter < 15) { 
        $percent = ($counter/20)*100;
    ?>
    <div class="container">
        <nav class="level">
            <div class="level-item has-text-centered">
                <figure class='image'><img src='images\what-if-i-told-you-its-not-good-enough.jpg'></figure>
            </div>
        </nav>
        <audio controls autoplay class="is-invisible">
            <source src="audio\Applause Crowd Cheering sound effect.mp3">
        </audio>
        <article class="message is-warning">
            <div class="message-header">
                Congratulations!!! You Are A Casual Soccer Fan😀
            </div>
            <div class="message-body">
                <p class="title is-4">You got <?php echo $counter ?> out of 20 which is a solid </p>
                <p class="title is-3"><?php echo $percent ?>%</p>
            </div>
        </article>
    </div>
    <?php } ?>

    <?php if ($counter >= 15 && $counter < 20) { 
        $percent = ($counter/20)*100; 
    ?>
    <div class="container">
    <nav class="level">
        <div class="level-item has-text-centered">
        <figure class='image'><img src='images/8vGX.gif'></figure>
        </div>
    </nav>
        <audio controls autoplay class="is-invisible">
            <source src="audio\3-1-10031.mp3">
        </audio>
        <article class="message is-success">
            <div class="message-header">
                Congratulations!!! You Are A True Soccer Fan😁
            </div>
            <div class="message-body">
                <p class="title is-4">You got <?php echo $counter ?> out of 20 which is a solid </p>
                <p class="title is-3"><?php echo $percent ?>%</p>
            </div>
        </article>
    </div>
<?php 
    } 
    ?>
    <?php if ($counter == 20) {
        $percent = ($counter/20)*100;
    ?>
    <div class="pyro">
        <div class="before"></div>
        <div class="after"></div>
    </div>
    <nav class="level">
        <div class="level-item has-text-centered">
        <figure class='image'><img src='images/LnrV.gif'></figure>
        </div>
    </nav>
    <audio controls autoplay class="is-invisible">
            <source src="audio/UEFA Champions League 2016 2017 Theme Song AudioLyrics]-[AudioTrimmer.com].mp3">
    </audio>
    <article class="message is-success">
        <div class="message-header">
            Congratulation!!! You Are A Soccer Mastermind!🤩
        </div>
        <div class="message-body">
            <p class="title is-4">You got <?php echo $counter ?> out of 20 which is a solid </p>
            <p class="title is-3"><?php echo $percent ?>%</p>
            <p class="title is-4">Wow, impressive! You're not a soccer fan; you're a soccer GENIUS. Amazing!</p>
        </div>
    </article>
<?php    
    }
?>

<!-- Button to retake quiz -->
<center>
    <a href="index.php" class="button is-light">Retake Quiz</a>
</center>

</body>
</html>
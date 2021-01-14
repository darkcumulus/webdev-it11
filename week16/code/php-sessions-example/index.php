<?php
    /* This code implements a simple higher/lower guessing game.
    
       The computer picks a random number and the user guesses by way of an HTML form.
       The user is given hints if they guess incorrectly with the ability to try again.
       
       Upon winning the game the user can add their name to a session-based leaderboard. */

    require('session_game_functions.php');
    session_start();
    
    $message_for_user = "I've picked a random number between " . 
                        SECRET_NUMBER_MINIMUM_VALUE . " and " .
                        SECRET_NUMBER_MAXIMUM_VALUE . ". Can you guess it?";
                                       
    $user_has_guessed_correctly = user_has_guessed_correctly($_POST, $_SESSION);
    
    if (user_has_submitted_a_guess($_POST)) {
        increase_the_user_guess_count($_SESSION);
        
        if ($user_has_guessed_correctly) {
            $message_for_user = "You got it in {$_SESSION['guess_count']} guesses!";
        } else if (user_has_guessed_too_low($_POST, $_SESSION)) {
            $message_for_user = 'Incorrect Guess! Try a larger number.';
        } else if (user_has_guessed_too_high($_POST, $_SESSION)) {
            $message_for_user = 'Incorrect Guess! Try a smaller number.';
        } 
    }
    
    if (user_has_submitted_their_name_for_leaderboard($_POST)) {
        add_user_name_to_leaderboard($_POST, $_SESSION);
        reset_secret_number_and_guess_count($_SESSION);
    }
    
    if ( secret_number_has_not_yet_been_set($_POST, $_SESSION)
         || user_has_requested_a_reset($_POST)) {
        reset_secret_number_and_guess_count($_SESSION);
    }    

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Guessing Game</title>
    </head>
<body>
    <h1>Guessing Game</h1>
    <p><?= $message_for_user ?></p>
    
    <?php if ($user_has_guessed_correctly): ?>
        <form method="post">
            <label for="user_name">Your Name For The Highscore Leaderboard:</label>
            <input id="user_name" name="user_name">
            <input type="submit" value="Submit Name" name="button">
        </form>
    <?php else: ?>
        <form method="post">
            <label for="user_guess">Your Guess</label>
            <input id="user_guess" name="user_guess">
            <input type="submit" value="Guess" name="button">
            <input type="submit" value="Reset" name="button">
        </form>
    <?php endif; ?>
    
    <h2>Leader Board</h2>
    
    <?php if (leaderboard_does_not_exist($_SESSION)): ?>
        <p>No highscores yet!</p>
    <?php else: ?>
        <ul>
        <?php foreach($_SESSION['leaderboard'] as $highscore): ?>
            <li><?= $highscore['guess_count'] ?> - <?= $highscore['user_name'] ?></li>
        <?php endforeach; ?>
        </ul>  
    <?php endif; ?>
</body>
</html>
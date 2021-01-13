<?php

/* Constants to specific the numeric bounds for the guessing name. */

define('SECRET_NUMBER_MINIMUM_VALUE', 1);
define('SECRET_NUMBER_MAXIMUM_VALUE', 10);

/* Functions for dealing with user POSTed forms. */

function user_has_submitted_a_guess($post) {
    return isset($post['button']) && $post['button'] == 'Guess';
}

function user_has_requested_a_reset($post) {
    return isset($post['button']) && $post['button'] == 'Reset';
}

function user_has_submitted_their_name_for_leaderboard($post) {
    return isset($post['button']) && $post['button'] == 'Submit Name';
}

/* These functions deal with the state of our game. */

function secret_number_has_not_yet_been_set($post, $session) {
    return !isset($session['secret_number']) // Secret number doesn't get exist.
           || !$post;                       // OR the user is visiting via a GET request only.
}

function leaderboard_does_not_exist($session) {
    return !isset($session['leaderboard'])
           || count($session['leaderboard']) == 0;
}

/* These functions deal with a user's guess. */

function user_has_guessed_correctly($post, $session) {
    return isset($post['user_guess'])
           && $post['user_guess'] == $session['secret_number'];
}

function user_has_guessed_too_high($post, $session) {
    return $post['user_guess'] > $session['secret_number'];
}

function user_has_guessed_too_low($post, $session) {
    return $post['user_guess'] < $session['secret_number'];
}

/* In the following three functions & here makes the function argument 'pass by reference'.
   i.e. The $_SESSION variable being passed in will be modified.
   
   I could have just used $_SESSION directly in the function to avoid using a & paramter, but I
   felt that my intentions were better communicated when the function params included the session.
   
   I've since made a version where I don't pass $_SESSION around: 
   https://gist.github.com/stungeye/d6c0f179a9295dfe54e8
   
   These functions all deal with setting the guess count or the leader board in session. */

function reset_secret_number_and_guess_count(&$session) {
    $session['secret_number'] = rand(SECRET_NUMBER_MINIMUM_VALUE, SECRET_NUMBER_MAXIMUM_VALUE);
    $session['guess_count']  = 0;
}

function increase_the_user_guess_count(&$session) {
    $session['guess_count']++;
}

function add_user_name_to_leaderboard($post, &$session) {
    if (!isset($session['leaderboard'])) {
        $session['leaderboard'] = [];
    }
    
    $session['leaderboard'][] = ['user_name' => $post['user_name'],
                                 'guess_count' => $session['guess_count']];
    
    usort($session['leaderboard'], "compare_by_guess_count");
}

/* This function is used by the previous one as a custom comparator for usort. */

function compare_by_guess_count($a, $b) {
    if ($a['guess_count'] == $b['guess_count']) {
        return 0;
    }
    return ($a['guess_count'] < $b['guess_count']) ? -1 : 1;
}
?>
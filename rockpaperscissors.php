<?php
echo "Fighters: " . PHP_EOL . "1. Rock" . PHP_EOL . "2. Paper" . PHP_EOL . "3. Scissors" . PHP_EOL;

$myFighter = (string)readline("Choose your fighter: ");
$myFighter = strtolower($myFighter);
if($myFighter > 0 && $myFighter < 4 || $myFighter === "rock" || $myFighter === "paper" || $myFighter === "scissors") {
    switch ($myFighter) {
        case 1:
        case "rock":
            $myFighter = "rock";
            break;
        case 2:
        case "paper":
            $myFighter = "paper";
            break;
        case 3:
        case "scissors":
            $myFighter = "scissors";
            break;
    }
} else{
    echo "Please enter a valid fighter!" . PHP_EOL;
    exit;
}

$computerFighter= rand(1, 3);
switch ($computerFighter){
    case 1:
        $computerFighter = "rock";
        break;
    case 2:
        $computerFighter = "paper";
        break;
    case 3:
        $computerFighter = "scissors";
        break;
}


echo "You chose: $myFighter" . PHP_EOL . "Computer chose: $computerFighter" . PHP_EOL;

if($myFighter === $computerFighter){
    echo "Draw!" . PHP_EOL;
} else if($myFighter === "rock" && $computerFighter === "paper"){
    echo "You lose!" . PHP_EOL;
} else if($myFighter === "paper" && $computerFighter === "scissors"){
    echo "You lose!" . PHP_EOL;
} else if($myFighter === "scissors" && $computerFighter === "rock"){
    echo "You lose!" . PHP_EOL;
} else{
    echo "You win!" . PHP_EOL;
}


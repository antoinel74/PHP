<link rel="stylesheet" href="./style/excuse.css" type="text/css">
<link rel="icon" type="image/png" href="/img/fav.png">

<?php echo '
<h1>Fake Excuses Generator</h1>
<form action="" method="get">
<label>Name :</label>
<input type="text" name="name" placeholder="ex: Jonathan">
<label>Gender of the child:</label>
<label>Boy:</label>
<input type="radio" name="gender" value="boy">
<label>Girl:</label>
<input type="radio" name="gender" value="girl">
<label>Name of the Teacher</label>
<input type="text" name="teacher" placeholder="ex: Mr Burns">
<label>Reason of the absence</label>
<select name="reason">
<option value="ill">Illness</option>
<option value="death">Death of a pet</option>
<option value="extra">Something more important to do</option>
<option value="other">Other</option>
</select>
<input type="submit" value="Get your excuse">
</form>';

if (isset($_GET['name']) && isset($_GET['gender']) && isset($_GET['teacher']) && isset($_GET['reason'])) {

    $name = $_GET['name'];
    $gender = $_GET['gender'];
    $teacher = $_GET['teacher'];
    $reason = $_GET['reason'];
    $greeting = "Dear $teacher";
    $currentDate = date('d/m/Y');
    $polite = "Kind regards";

    $genderN = ($gender === "girl") ? "daughter" : "son";
    $excuse = '';

    switch ($reason) {
        case "ill":
            $excuses = [
                "I apologize for my $genderN $name's absence due to a sudden stomachache caused by an unconventional, homemade 'rainbow soup' experiment. We assure you it won't happen again.",
                "We regret to inform you that our $genderN $name is currently under quarantine for the 'xtrem flu.' It's a temporary ailment, and we deeply apolgize for the unconvenience.",
                "Our $genderN $name won't be attending school today due to an unexpected case of temporary paralysis. We're working on resolving the issue and expect a prompt return.",
                "Our $genderN is unable to attend due to a unique circumstance. $name accidentally swapped bodies with our pet, Jimmy the redfish. We appreciate your understanding during this transformation.",
                "We regret to inform you that our $genderN $name has developed a mysterious allergy to school. The situation is critic, we will inform you as soon as we get news."
            ];
            $random = array_rand($excuses);
            $excuse = $excuses[$random];
            break;
        case "death":
            $excuses = [
                "My $genderN $name is saddened by the passing of their beloved pet snake. It was a quiet companion, and its absence is deeply felt. We appreciate your understanding during this difficult time.",
                "Regrettably, our $genderN $name's pet goldfish has grown legs and ventured off on its own adventure. We're currently on a search mission.",
                "Our $genderN $name is deeply distressed because they played a particularly intense game of hide-and-seek with their pet invisible friend, and it seems the game will go on indefinitely.",
                "Our $genderN's pet snail was involved in a high-speed racing accident. $name is helping with the aftermath and will return once the snail's injuries are sorted out.",
                "We regret to inform you that our $genderN $name will not attend school today. The family's pet hamster fell victim to a dog's appetite. Very sorry for the unconvenience."
            ];
            $random = array_rand($excuses);
            $excuse = $excuses[$random];
            break;
        case "extra":
            $excuses = [
                "My $genderN was inadvertently trapped in a video game yesterday and has been fighting pixelated dragons. We're working on the rescue mission and expect $name's return soon.",
                "Please understand that our $genderN had to travel through time with a unicorn on an urgent mission. $name will return as soon as possible.",
                "Our $genderN $name has participated in the daring Rodeo Championship. It's been a thrilling experience, but now we need to retrieved the body.",
                "Our $genderN $name is currently undercover as a secret spy on a mission of utmost importance. We appreciate your understanding and discretion during this cover operation.",
                "We regret to inform you that our $genderN is undergoing rigorous training sessions to defeat terrorism. $name will return once they've accomplish his mission."
            ];
            $random = array_rand($excuses);
            $excuse = $excuses[$random];
            break;
        default:
            $excuses = [
                "Our household experienced a rebellion led by cookies, and our $genderN $name is crucial to negotiations. Sorry for the unconvenience.",
                "Please understand that our $genderN has been summoned to defend the world's rubber duckies from an imminent threat. $name will not attend class today. Deeply sorry about that.",
                "Our $genderN $name has participated in the daring Rodeo Championship. It's been a thrilling experience, but now we need to retrieved the body.",
                "Our $genderN was unexpectedly teleported to the moon. $name will return once the earth come closer. Thanks for your understanding.",
                "We regret to inform you that our $genderN is undergoing rigorous sport training sessions. $name will attend an international championship this year and has to be ready. Thanks & sorry."
            ];
            $random = array_rand($excuses);
            $excuse = $excuses[$random];
            break;
    }
    echo "<div class='excuse_container'>
    <p class='excuse_date'>{$currentDate}</p>
    <p class='excuse__greeting'>{$greeting},</p>
    <p class='excuse__text'>{$excuse}</p>
    <p class='excuse__polite'>{$polite}</p>
    </div>";
}
?>
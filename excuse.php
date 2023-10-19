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

    $genderN = ($gender === "girl") ? "daughter" : "son";
    $excuse = '';

    switch ($reason) {
        case "ill":
            $excuses = [
                "I apologize for my $genderN $name's absence due to a sudden stomachache caused by an unconventional, homemade 'rainbow soup' experiment. We assure you it won't happen again.",
                "We regret to inform you that our $genderN $name is currently under quarantine for the 'xtrem flu.' It's a temporary ailment, and they'll return as soon as they're visible again.",
                "Our $genderN $name won't be attending school today due to an unexpected case of temporary paralysis. We're working on resolving the issue and expect their prompt return.",
                "Our $genderN $name is unable to attend due to a unique circumstance: they accidentally swapped bodies with our pet, Jimmy the redfish. We appreciate your understanding during this transformation.",
                "We regret to inform you that our $genderN $name has developed a mysterious allergy to school. The situation is critic, but they will be back once we find a cure for it."
            ];
            $random = array_rand($excuses);
            $excuse = $excuses[$random];
            break;
        case "death":
            $excuse = "I deeply apologize, but my $genderN $name will not attend your class today. He is very ill and has to stay in bed to recover fast.";
            break;
        case "extra":
            $excuse = "I deeply apologize, but my $genderN $name will not attend your class today. He is very ill and has to stay in bed to recover fast.";
            break;
        default: 
        $excuse = "Weird!";
    }
    echo "<div class='excuse_container'>
    <p class='excuse_date'>{$currentDate}</p>
    <p class='excuse__greeting'>{$greeting},</p>
    <p class='excuse__text'>{$excuse}</p>
    </div>";
}
?>
<?php 
/**
 * Series of exercises on PHP conditional structures.
*/  

// 1.1 // 
$room_is_filthy = true;

if( $room_is_filthy == true ){
	echo "Yuk, Room is dirty : let's clean it up !";
	/* cleanup_room(); */
	echo "<br>Room is now clean!";
	$room_is_filthy = false;
} else {
	echo "<br>Nothing to do, room is neat.";
}


// 2 improved // 

$possible_states = [2];
$room_filthiness = $possible_states[0];

if( $room_filthiness == 0 ){
	echo "Yuk, Room is dirty : let's clean it up !";
} else if ( $room_filthiness == 1 ) {
	echo "Yuk, Room is dirty : let's clean it up !";
} else {
	echo "<br>Nothing to do, room is neat.";
}


// 2. Different greetings according to time // 
date_default_timezone_set('Europe/Amsterdam');
$time = date('H:i'); 
$now = intval(str_replace(':', '', $time));
echo "<br>It's $time<br>";

if( $now > 500 && $now < 900 ){
	echo "Good Morning !";
} else if ( $now > 900 && $now < 1200 ) {
	echo "Good Day !";
} else if ( $now > 1200 && $now < 1600 ) {
	echo "Good afternoon !";
} else if ( $now > 1600 && $now < 2100 ) {
	echo "Good evening !";
} else {
	echo "Good night";
}


// 3 & 4. Display different greeting according to te user's age & gender// 

echo '<form action="" method="get">
Type your age: <input type="number" name="age"><br>
<label>Man:</label>
<input type="radio" name="gender" value="man">
<label>Woman:</label>
<input type="radio" name="gender" value="woman">
<label>Do you speak English ?</label>
<label>Y</label>
<input type="radio" name="english" value="1">
<label>N</label>
<input type="radio" name="english" value="0">
<input type="submit" value="Greet me now!">
</form>';

if (isset($_GET['age']) && isset($_GET['gender']) && isset($_GET['english'])) {
    $age = intval($_GET['age']);
    $gender = $_GET['gender'];
    $english = $_GET['english'];

    if ($age < 12) {
        if ($english === "1") {
            if ($gender === "woman") {
                echo "Hello little girl!";
            } else {
                echo "Hello little boy!";
            }
        } else {
            if ($gender === "woman") {
                echo "Aloha girl!";
            } else {
                echo "Aloha boy!";
            }
        }
    } else if ($age >= 12 && $age < 18) {
        if ($english === "1") {
            if ($gender === "woman") {
                echo "Hello Miss teen!";
            } else {
                echo "Hello mister Teen!";
            }
        } else {
            if ($gender === "woman") {
                echo "Aloha Miss teen!";
            } else {
                echo "Aloha mister Teen!";
            }
        }
    } else if ($age >= 18 && $age < 115) {
        if ($english === "1") {
            if ($gender === "woman") {
                echo "Hello Woman";
            } else {
                echo "Hello Man!";
            }
        } else {
            if ($gender === "woman") {
                echo "Aloha Woman";
            } else {
                echo "Aloha Man!";
            }
        }
    } else {
        echo "Wow, are you still alive? Are you a robot like me?";
    }
}

// 6. The Girl Soccer Team // 
/* echo '<h2>Want to join a girl soccer team ?</h2>
<form action="" method="get">
<label>Name :</label>
<input type="text" name="soccer_name">
Type your age: <input type="number" name="soccer_age"><br>
<label>Are you a girl ?</label>
<label>Y</label>
<input type="radio" name="soccer_gender" value="woman">
<label>N</label>
<input type="radio" name="soccer_gender" value="man">
<input type="submit" value="I want to join!">
</form>';

if (isset($_GET['soccer_age']) && isset ($_GET['soccer_gender'])) {
	$soccer_age = intval($_GET['soccer_age']);
	$soccer_gender = $_GET['soccer_gender'];

	if ($soccer_age >= 20 && $soccer_age <= 40 && $soccer_gender === "woman") {
		echo "Welcome to the team !";
	} else {
		echo "Sorry, you don't fit the criterias.";
	}
} */

// 7. Same as 6. but without the else // 
echo '<h2>Want to join a girl soccer team ?</h2>
<form action="" method="get">
<label>Name :</label>
<input type="text" name="soccer_name">
Type your age: <input type="number" name="soccer_age"><br>
<label>Are you a girl ?</label>
<label>Y</label>
<input type="radio" name="soccer_gender" value="woman">
<label>N</label>
<input type="radio" name="soccer_gender" value="man">
<input type="submit" value="I want to join!">
</form>';

$defaultMessage = "Sorry, I don't think you fit the criteria.";

if (isset($_GET['soccer_age']) && isset ($_GET['soccer_gender'])) {
	$soccer_age = intval($_GET['soccer_age']);
	$soccer_gender = $_GET['soccer_gender'];

	if ($soccer_age >= 20 && $soccer_age <= 40 && $soccer_gender === "woman") {
		$defaultMessage = "Welcome to the team !";
	}
}

echo $defaultMessage;
?>
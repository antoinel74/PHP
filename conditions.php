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


// 1.2 improved // 

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


// 3. Display different greeting according to te user's age// 

echo '<form action="" method="get">
Type your age: <input type="number" name="age"><br>
<input type="submit" value="Greet me now!">
</form>';

if (isset($_GET['age'])) {
	$age = intval($_GET['age']); // Convert the age 
	if ($age < 12) {
		echo "Hey kiddo !";
	} else if ($age > 12 && $age < 18){
		echo "Hello teenager !";
	} else if ($age > 18 && $age < 115) {
		echo "Hello adult";
	} else {
		echo "Wow are you still alive ? Are you a robot like me ?";
	}
} 



?>
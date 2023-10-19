<?php 

echo '<h2>School sucks!</h2>
<form action="" method="get">
<label>Grade a student :</label>
<input type="number" min="0" max="20" name="grade">
</form>'; 

if (isset($_GET['grade'])) {
    $grade = intval($_GET['grade']);
    switch ($grade) {
        case ($grade <= 4):
            echo "This work is really bad. Get better now!";
            break;
        case ($grade > 4 && $grade < 9):
            echo "This is not sufficient.";
            break;
        case ($grade == 10):
            echo "Barely enough!";
            break;
        case ($grade > 10 && $grade < 14):
            echo "Not bad but you can get better";
            break;
        case ($grade > 14 && $grade <= 19):
            echo "Fantastic ! Good job!";
            break;
        default: 
        echo "Hmm seems weird ?!";
        }
    }

?>
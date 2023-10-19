<?php 
echo '<h1>Who are you ?</h1>
<form action="" method="post"> 
<label>Choose type:
<select name="type">
<option value="human">human</option>
<option value="cat">cat</option>
<option value="unicorn">unicorn</option>
</select>
</label>
<input type="submit" value="Lets do some magic">
</form>';

if (isset($_POST['type'])) {
$type = $_POST['type'];
$imgSrc = '';

$imgSrc = ($type === "human") ? "https://media.giphy.com/media/tX68RqNVXdHugT2UKd/giphy.gif" :
     (($type === "cat") ? "https://media.giphy.com/media/mlvseq9yvZhba/giphy.gif" : 
        "https://media.giphy.com/media/j0kQJxo5mzGYb4EvWK/giphy.gif");
        
     if ($imgSrc !== '') {
        echo "<img src='$imgSrc'/>";
     } else {
        echo "Invalid Choice";
     }
}

?>
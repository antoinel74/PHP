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



}
?>
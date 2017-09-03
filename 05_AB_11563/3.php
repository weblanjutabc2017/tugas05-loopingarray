<style>
	table, tr, th, td {
		border: 1px solid;
		border-collapse: collapse;
	}
	input[type="text"],
	input[type="submit"] {
		display: block;
		margin: .6em 0;
	}
	input[type="submit"],
	label {
		cursor: pointer;
	}
	h2 {
		margin-bottom: .2em;
	}
</style>
<?php if(isset($_POST["marriage"]) and isset($_POST["income"]) and (float) $_POST["income"] >= 0): ?>
<?php
	
	$income = (float) $_POST["income"];
	
	if((int) $_POST["marriage"] === 1) {
		$marriage = "Married";
		if($income <= 64000) $tax = $income/10;
		else $tax = 6400+$income*25/100;
	} else {
		$marriage = "Single";
		if($income <= 32000) $tax = $income/10;
		else $tax = 3200+$income*25/100;	
	}
	
?>
<h2>Your Tax Details</h2>
<table>
	<tr>
		<td><strong>Marriage</strong></td>
		<td><?php echo $marriage; ?></td>
	</tr>
	<tr>
		<td><strong>Income</strong></td>
		<td>$<?php echo $income; ?></td>
	</tr>
	<tr>
		<td><strong>Tax</strong></td>
		<td>$<?php echo $tax; ?></td>
	</tr>
</table>
<?php else: ?>
<form method="post">
	<h2>Your Information</h2>
	<label><input name="marriage" type="radio" value="0" required> Single</label>
	<label><input name="marriage" type="radio" value="1" required> Married</label>
	<input name="income" type="text" placeholder="Your income in $&hellip;" required>
	<input type="submit" value="Submit">
</form>
<?php endif ?>
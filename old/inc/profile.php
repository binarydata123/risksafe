<?php
	$q = $link->query("SELECT `bname`,`fname`,`phone`,`location` FROM `users` WHERE `uid` = {$_SESSION['uid']} LIMIT 1");
	
	while($row = $q->fetch_assoc()) {
		$fname = $row['fname'];
		$phone = $row['phone'];
		$location = $row['location'];
	}
?>
<table id="userinfo">
	<tr>
		<td class="bold">
			E-mail
		</td>
		<td>
			<?php echo $_SESSION['wemail']; ?>
		</td>
	</tr>
	<tr id="resetpw">
		<td class="bold">
			Password
		</td>
		<td>
			Change
		</td>
	</tr>
	<tr>
		<td class="bold">
			Name		
		</td>
		<td>
			<?php echo $fname; ?>
		</td>
	</tr>
	<tr>
		<td class="bold">
			Phone		
		</td>
		<td>
			<?php echo $phone; ?>
		</td>
	</tr>
	<tr>
		<td class="bold">
			Location		
		</td>
		<td>
			<?php echo $location; ?>
		</td>
	</tr>

</table>
<div id="changepw_modal" class="mmodal">
	<form method="POST">
		<input class="bluinput" name="newpw" placeholder="New Password">
		<input class="button blue btnwide" type="submit" value="Set">
	</form>
</div>
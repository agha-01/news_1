<div class="container">
<center>
	<div class="login">
		<h1>Register Page</h1>
		<form action="add_register" method="POST">
			<input type="email" name="email" class="in" placeholder="email.." required>
			<br>
			<br>
			<input type="text" name="name" class="in" placeholder="Name" required>
			<br>
			<br>
			<input type="text" name="lname" class="in" placeholder="Last Name" required>
			<br>
			<br>
			<input type="password" name="pass" class="in" placeholder="password" required>
			<br>
			<br>
			<input type="password" name="repass" class="in" placeholder="Again password" required>
			<br>
			<br>
			<input type="radio" name="gender" value="kisi" required><span> Kisi</span>
			<input type="radio" name="gender" value="Qadin" required><span> Qadin</span>
			<br>
			<br>
			<input type="checkbox" name="confirm" value="1" required><span>:Qaydalarla raziyam</span>
			<br>
			<br>
			<input type="submit" value="Gonder" class="sub">
		</form>
	</div>
</center>
</div>
<div class="container">
	<center>
	<div class="login">
		<h1>Login Page</h1>
		<form action="add_login" method="POST">
			<input type="email" name="email" class="in" placeholder="email.."  required>
			<br>
			<br>
			<input type="password"  name="pass" class="in" placeholder="password" required>
			<br>
			<br>
			<input type="checkbox" name="confirm" value="1">
			<span>Beni unutma</span>
			<br>
			<br>
			<input type="submit" value="Gonder" class="sub">
			<br>
			<br>
			<a href="register"><h3>Qeydiyyatdan kec</h3></a>
		</form>
	</div>
	</center>



</div>
<style>
	.login span{
		color:white;
		margin-right: 15px;
	}
</style>
<h1 class="display-4">Anmeldung</h1>
<p>Registriere dich für einen Zugang zu besonderen Inhalten! Nach der Registrierung erhältst du eine Email mit einem Link zum Bestätigen deines Kontos.</p>
<div class="col-md-12 mb-md-0 mb-5">
	<form id="form" name="register" action="?p=signup" method="POST">
		<div class="row">
			<div class="col-md-12">
				<div class="form-group">
					<label for="name" class="">Benutzername</label>
					<input type="text" id="username" name="username" class="form-control">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="form-group">
					<label for="mail" class="">Email</label>
					<input type="text" id="mail" name="mail" class="form-control">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label for="subject" class="">Passwort</label>
					<input type="text" id="password" name="password" class="form-control">
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label for="message">Passwort wiederholen</label>
					<input type="text" id="password2" name="password2" class="form-control">
				</div>
			</div>
		</div>
	</form>
	<div class="text-center">
		<a class="btn btn-primary text-light w-100" onclick="$('#form').submit();">Abschicken</a>
	</div>
</div>
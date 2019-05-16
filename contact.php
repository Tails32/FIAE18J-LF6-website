<h1 class="display-4">Kontakt aufnehmen</h1>
<p>Fragen? Anregungen? Kontaktiere uns einfach über dieses Formular mit deinem Anliegen!</p>
	<div class="col-md-12 mb-md-0 mb-5">
		<form id="form" name="contact" action="?p=contact" method="POST">
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="name" class="">Name</label>
						<input type="text" id="name" name="name" class="form-control">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="mail" class="">Email</label>
						<input type="text" id="mail" name="mail" class="form-control">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<label for="subject" class="">Betreff</label>
						<input type="text" id="subject" name="subject" class="form-control">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<label for="message">Nachricht</label>
						<textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
					</div>
				</div>
			</div>
		</form>
		<div class="text-center">
			<a class="btn btn-primary text-light w-100" onclick="$('#form').submit();">Abschicken</a>
		</div>
	</div>
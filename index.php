<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Europass generator FREE</title>
</head>
<body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>


	<div class="container">
		<form  id="formdata" >
		<h2>Detalii de baza</h2>
		<div class="mb-3">
		  <label for="exampleFormControlInput1" class="form-label">Nume</label>
		  <input type="text" class="form-control formular_data_fields" data-val="fname" id="exampleFormControlInput1" placeholder="Popescu">
		</div>
		<div class="mb-3">
		  <label for="exampleFormControlInput2" class="form-label">Prenume</label>
		  <input type="text" class="form-control formular_data_fields" data-val="lname" id="exampleFormControlInput2" placeholder="Ion">
		</div>
		<div class="mb-3">
		  <label for="exampleFormControlInput3" class="form-label">Adresa email</label>
		  <input type="text" class="form-control formular_data_fields"  data-val="email" id="exampleFormControlInput3" placeholder="Ion">
		</div><div class="mb-3">
		  <label for="exampleFormControlInput3" class="form-label">Telefon</label>
		  <input type="text" class="form-control formular_data_fields"  data-val="phone" id="exampleFormControlInput18" placeholder="phone">
		</div>
		<div class="mb-3">
		  <label for="exampleFormControlInput4" class="form-label">Adresa</label>
		  <input type="text" class="form-control formular_data_fields" data-val="address" id="exampleFormControlInput4" placeholder="Ion">
		</div>
		<div class="mb-3">
		  <label for="exampleFormControlInput5" class="form-label">Nationalitate</label>
		  <input type="text" class="form-control formular_data_fields" data-val="nationality" id="exampleFormControlInput5">
		</div>
		<div class="mb-3">
		  <label for="exampleFormControlInput6" class="form-label">Data nasterii</label>
		  <input type="text" class="form-control formular_data_fields" data-val="birthdate"id="exampleFormControlInput6">
		</div>
		<div class="mb-3">
		  <label for="exampleFormControlInput7" class="form-label">Sex</label>
		  <input type="text" class="form-control formular_data_fields" data-val="sex" id="exampleFormControlInput7">
		</div>
		<h2>Experienta profesionala</h2>
		<div id="professionInfo">
			<div class="mb-3 professionalData">
			  <label for="exampleFormControlInput8" class="form-label">Titlu</label>
			  <input type="text" data-val="title" class="form-control formular_data_fields" id="exampleFormControlInput8">
			</div>
			<div class="mb-3 professionalData">
			  <label for="exampleFormControlInput9" class="form-label">Nume companie</label>
			  <input type="text" data-val="company_name" class="form-control formular_data_fields" id="exampleFormControlInput9">
			</div>
			<div class="mb-3 professionalData">
			  <label for="exampleFormControlInput10" class="form-label">Data inceput</label>
			  <input type="text" class="form-control formular_data_fields" data-val="datebegin" id="exampleFormControlInput10">
			</div>
			<div class="mb-3 professionalData">
			  <label for="exampleFormControlInput11" class="form-label">Data sfarsit</label>
			  <input type="text" data-val="dateend" class="form-control formular_data_fields" id="exampleFormControlInput11">
			</div>
			<div class="mb-3 professionalData">
			  <label for="exampleFormControlInput12" class="form-label">Sector de activitate</label>
			  <input type="text" data-val="activity" class="form-control formular_data_fields" id="exampleFormControlInput12">
			</div>
			<div class="mb-3 professionalData">
			  <label for="exampleFormControlInput13" class="form-label">Descriere</label>
			  <textarea class="form-control formular_data_fields" placeholder="Descriere" data-val="description" id="exampleFormControlInput13"></textarea>
			</div>
		</div>
		<h2>Studii</h2>
		<div id="studies">
			<div class="mb-3 studiesData">
			  <label for="exampleFormControlInput14" class="form-label">Instituție de învățământ</label>
			  <input type="text" data-val="school" class="form-control formular_data_fields" id="exampleFormControlInput14">
			</div>
			<div class="mb-3 studiesData">
			  <label for="exampleFormControlInput15" class="form-label">An inceput</label>
			  <input type="text" data-val="yearstart" class="form-control formular_data_fields" id="exampleFormControlInput15">
			</div>
			<div class="mb-3 studiesData">
			  <label for="exampleFormControlInput16" class="form-label">An sfarsit</label>
			  <input type="text" data-val="yearend" class="form-control formular_data_fields" id="exampleFormControlInput16">
			</div>
			<div class="mb-3 studiesData">
			  <label for="exampleFormControlInput17" class="form-label">Diploma obţinută</label>
			  <input type="text" class="form-control formular_data_fields" data-val="diploma"  id="exampleFormControlInput17">
			</div>

			<input id="submit_form" type="button" value="Submit" class="btn btn-primary">
		</form>
		</div>

	</div>


	<script type="text/javascript">
		$(document).ready(function() {
			$('#submit_form').click(function() {
				var form_fields = $('#formdata .formular_data_fields');
				var form_data_to_send = {};



				$(form_fields).each(function( index, val ) {
					// console.log( index + ": " + $( this ).val() );
					asoc_key = $( this ).data('val');
					form_data_to_send[asoc_key] = $( this ).val();
				});


				console.log( form_data_to_send );

				$.ajax({
					method: "POST",
					url: "generator.php",
					data: form_data_to_send
				}).done(function( data ) {
					console.log(data);
				});
			});

		});
	</script>
</body>
</html>
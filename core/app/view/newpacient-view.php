<div class="row">
	<div class="col-md-12">
<div class="card">
  <div class="card-header" data-background-color="blue">
      <h4 class="title">Nuevo Paciente</h4>
  </div>
  <div class="card-content table-responsive">

		<form class="form-horizontal" method="post" id="addproduct" action="index.php?view=addpacient" role="form">


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombre*</label>
    <div class="col-md-6">
      <input type="text" name="name" required class="form-control" id="name" placeholder="Nombre">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Apellido</label>
    <div class="col-md-6">
      <input type="text" name="lastname"  class="form-control" id="lastname" placeholder="Apellido">
    </div>
  </div>
  <!-- -->
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">N° Documento*</label>
    <div class="col-md-6">
      <input type="text" name="id_doc" required class="form-control" id="id_doc" placeholder="documento identificación">
    </div>
  </div>
  
  <!-- -->
  <div class="form-group">
		<label for="inputEmail1" class="col-lg-2 control-label">Tipo documento*</label>
		<div class="col-md-6">
	<label class="checkbox-inline">
	  <input type="radio" id="inlineCheckbox1" name="id_type" required value="c"> CC
	</label>
	<label class="checkbox-inline">
	  <input type="radio" id="inlineCheckbox2" name="id_type" required value="t"> TI
	</label>
	<label class="checkbox-inline">
	  <input type="radio" id="inlineCheckbox3" name="id_type" required value="o"> Otro
	</label>

		</div>
  </div>
  
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Sexo*</label>
    <div class="col-md-6">
<label class="checkbox-inline">
  <input type="radio" id="inlineCheckbox1" name="gender" required value="h"> M
</label>
<label class="checkbox-inline">
  <input type="radio" id="inlineCheckbox2" name="gender" required value="m"> F
</label>

    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Fecha de Nacimiento</label>
    <div class="col-md-6">
      <input type="date" name="day_of_birth" class="form-control"  id="address1" placeholder="Fecha de Nacimiento">
    </div>
  </div>


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Direccion*</label>
    <div class="col-md-6">
      <input type="text" name="address" class="form-control"  id="address1" placeholder="Direccion">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Email*</label>
    <div class="col-md-6">
      <input type="text" name="email" class="form-control" id="email1" placeholder="Email">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Telefono</label>
    <div class="col-md-6">
      <input type="text" name="phone" class="form-control" id="phone1" placeholder="Telefono">
    </div>
  </div>
   <!-- -->
   <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Celular</label>
    <div class="col-md-6">
      <input type="text" name="cellphone" class="form-control" id="cellphone1" placeholder="Telefono Celular">
    </div>
  </div>
   <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Ocupación</label>
    <div class="col-md-6">
      <input type="text" name="job" class="form-control" id="job" placeholder="Ocupación">
    </div>
  </div>
   <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Departamento</label>
    <div class="col-md-6">
      <input type="text" name="depto" class="form-control" id="depto" placeholder="depto">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Ciudad</label>
    <div class="col-md-6">
      <input type="text" name="city" class="form-control" id="city" placeholder="city">
    </div>
  </div>
   <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">EPS</label>
    <div class="col-md-6">
      <input type="text" name="eps" class="form-control" id="eps" placeholder="eps">
    </div>
  </div>
   <div class="form-group">
		<label for="inputEmail1" class="col-lg-2 control-label">Regimen*</label>
		<div class="col-md-6">
	<label class="checkbox-inline">
	  <input type="radio" id="inlineCheckbox1" name="eps_type" required value="s"> Subsidiado
	</label>
	<label class="checkbox-inline">
	  <input type="radio" id="inlineCheckbox2" name="eps_type" required value="c"> Contributivo
	</label>
	<label class="checkbox-inline">
	  <input type="radio" id="inlineCheckbox3" name="eps_type" required value="o"> Otro
	</label>

		</div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Enfermedades</label>
    <div class="col-md-6">
      <textarea name="sick" class="form-control" id="sick" placeholder="Enfermedad"></textarea>
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Medicamentos</label>
    <div class="col-md-6">
      <textarea name="medicaments" class="form-control" id="medicaments" placeholder="Medicamentos"></textarea>
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Alergias</label>
    <div class="col-md-6">
      <textarea name="alergy" class="form-control" id="alergy" placeholder="Alergia"></textarea>
    </div>
  </div>
  <!-- -->
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Observaciones</label>
    <div class="col-md-6">
      <textarea name="notes" class="form-control" id="notes" placeholder="Observaciones"></textarea>
    </div>
  </div>

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-primary">Agregar Paciente</button>
    </div>
  </div>
</form>
</div>
</div>
	</div>
</div>
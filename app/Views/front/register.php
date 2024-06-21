<div class="formsesion">
    <form class="needs-validation" novalidate>
  <div class="form-row">
    <div>
      <label for="validationCustom01">Nombre</label>
      <input type="text" class="form-control" id="validationCustom01" placeholder="Nombre" required>
    </div>
    <div >
      <label for="validationCustom02">Apellido</label>
      <input type="text" class="form-control" id="validationCustom02" placeholder="Apellido" required>
    </div>
    <div>
      <label for="validationCustomUsername">Username</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend">@</span>
        </div>
        <input type="text" class="form-control" id="validationCustomUsername" placeholder="Elija un nombre para la cuenta" aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">
          Por favor, elija un nombre para la cuenta
        </div>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div>
      <label for="validationCustom03">Contraseña</label>
      <input type="text" class="form-control" id="validationCustom03" placeholder="Ingrese una contraseña" required>
    </div>
  <div class="form-row">
    <div>
      <label for="validationCustom03">Ciudad</label>
      <input type="text" class="form-control" id="validationCustom03" placeholder="Ciudad" required>
      <div class="invalid-feedback">
        Por favor, elija una ciudad válida
      </div>
    </div>
    <div>
      <label for="validationCustom04">País</label>
      <input type="text" class="form-control" id="validationCustom04" placeholder="Pais" required>
      <div class="invalid-feedback">
        Por favor elija un país válido
      </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Usted está de acuerdo con los términos y condiciones
      </label>
      <div class="invalid-feedback">
        Udted debe estar de acuerdo con los términos y condiciones
      </div>
    </div>
  </div>
  <button class="btn btn-primary" type="submit">Suscribirse </button>
    </form>
</div>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
const states = document.getElementById('state');
const cities = document.getElementById('city');
const candidates = document.getElementById('candidate');

//get states
function getStates() {
    fetch('?action=getStates')
    .then((res) => res.json())
    .then((data) => {
        let output = '';
        data.forEach(function(state) {
            output += `<option value="${state.id}">${state.name}</option>`;
        });
        states.innerHTML += output;
        states.removeAttribute('disabled');
    })
    .catch((err) => console.log(err));
}
//get cities
function getCities(id){
    fetch(`?action=getCities&id=${id}`)
    .then((res) => res.json())
    .then((data) => {
        let output = '';
        data.forEach(function(city) {
            output += `<option value="${city.id}">${city.name}</option>`;
        });
        cities.innerHTML = output;
        cities.removeAttribute('disabled');
    })
    .catch((err) => console.log(err));
}

//get candidates
function getCandidates() {
    fetch('?action=getCandidates')
    .then((res) => res.json())
    .then((data) => {
        let output = '';
        data.forEach(function(candidate) {
            output += `<option value="${candidate.id}">${candidate.name}</option>`;
        });
        candidates.innerHTML += output;
        candidates.removeAttribute('disabled');
    })
    .catch((err) => console.log(err));
}

//form validations
function validateRut(rut) {
    rut = rut.replace(/[^k0-9]/gi, "");
    var dv = rut.slice(-1);
    var numero = rut.slice(0, -1);
    var i = 2;
    var suma = 0;
    numero
      .split("")
      .reverse()
      .forEach(function (v) {
        if (i == 8) i = 2;
        suma += parseInt(v) * i;
        i++;
      });
    var dvr = 11 - (suma % 11);

    if (dvr == 11) {
      dvr = 0;
    }
    if (dvr == 10) {
      dvr = "K";
    }

    if (dvr.toString().toUpperCase() === dv.toUpperCase()) {
      return true;
    } else {
      return false;
    }
  }

//nickname validation
jQuery.validator.addMethod(
    "alphanumeric",
    function (value, element) {
        return this.optional(element) || /^[a-zA-Z0-9]+$/.test(value);
    }
);
//rut validation
jQuery.validator.addMethod(
    "validateRut",
    function (value, element) {
        return this.optional(element) || validateRut(value);
    }
);
//custom checkbox group validation
jQuery.validator.addMethod(
    "require_from_group",
    function () {
        let checked = $('.option-group:checked').length;
        let isValid = checked > 1;
        $('.option-group').each(function () {
            this.setCustomValidity(isValid ? "" : "invalid");
        });
        return isValid;
    },
    jQuery.validator.format("Debes seleccionar al menos {0} opciones.")
);

//check if rut exist in db
function checkRut(rut) {
    fetch(`?action=checkRut&rut=${rut}`)
    .then((res) => res.json())
    .then((data) => {
        if(data.length > 0) {
            alert('El RUT ingresado ya existe en la base de datos.');
            document.getElementById('rut').value = '';
        }
    })
    .catch((err) => console.log(err));
}


(function() {
    //validate form
    jQuery("#voteform").validate({
        rules: {
            rut: { validateRut: true },
            fullname: { required: true },
            nickname: { required: true, alphanumeric: true, minlength: 5 },
            email: { required: true, email: true },
            state: { required: true },
            city: { required: true },
            candidate: { required: true },
            "option[]": { require_from_group: true },
          },
          groups: { 'option-group': "options[]" },
          showErrors: function(errorMap, errorList) {
            $("#error-group").html("Your form contains "
              + this.numberOfInvalids()
              + " errors, see details below.");
            this.defaultShowErrors();
          },
          messages: {
            rut: "Debes ingresar un RUT válido.",
            fullname: "Ingresa tu nombre completo.",
            nickname: "Ingresa tu apodo (mínimo 5 caracteres, letras y números).",
            email: "Ingresa tu correo electrónico.",
            state: "Selecciona una región.",
            city: "Selecciona una comuna.",
            candidate: "Debes seleccionar un candidato.",
            "option[]": "Debes seleccionar al menos 2 opciones.",
          },
          submitHandler: function() { alert("Submitted!") }
    });
    //get states from db
    getStates();
    //get candidates from db
    getCandidates();
    //get cities from db on state change
    states.addEventListener('change', function(e) {
        if(e.target.value === '') {
            cities.innerHTML = '<option value="">Comuna</option>';
            cities.setAttribute('disabled', 'disabled');
            return;
        }
        getCities(e.target.value);
    });
 })();

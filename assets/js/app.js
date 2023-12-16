const states = document.getElementById('state');
const cities = document.getElementById('city');
const candidates = document.getElementById('candidate');

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

(function() {

    getStates();
    getCandidates();

    states.addEventListener('change', function(e) {
        getCities(e.target.value);
    });

 })();
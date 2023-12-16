(function() {
    const states = document.getElementById('state');
    const cities = document.getElementById('city');
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
    getStates();

    states.addEventListener('change', function(e) {
        getCities(e.target.value);
    });

 })();
const Searchinput = document.getElementById('searchinput');
const Searchbutton = document.getElementById('searchbutton');

Searchbutton.addEventListener('click', () => {

        const searchterm = Searchinput.value;
        const selectedoption =  document.querySelector(`#Options option[value="${searchterm}"]`);
        if (selectedoption) {

            const link = selectedoption.getAttribute('data-link');
            window.location.href = link;

        }

})
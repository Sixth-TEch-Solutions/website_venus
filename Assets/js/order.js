/* eslint-disable linebreak-style */
/* eslint-disable one-var */
/* eslint-disable linebreak-style */
const form = document.querySelector('form'),
        next = form.querySelector('.next'),
        preview = form.querySelector('.preview'),
        allinput = form.querySelectorAll('.form-first input');

next.addEventListener('click', ()=> {
    allinput.forEach((input) => {
        if(input.value != '') {
            form.classList.add('secActive');
        }else{
            form.classList.remove('secActive');
        }
    });
});

preview.addEventListener('click', () => form.classList.remove('secActive'));

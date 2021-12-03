'use strict';

const btn = document.getElementById('btnSwitch');
const show = document.querySelector(".switch");

btn.addEventListener('click', () => {

    show.classList.toggle('switch');
});
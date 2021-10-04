require('./bootstrap');

var Turbolinks = require('turbolinks');
Turbolinks.start();

document.addEventListener('turbolinks:load', () => {
    $('#loading-indicator').hide();
});

document.addEventListener('turbolinks:click', () => {
    $('#loading-indicator').show();
});

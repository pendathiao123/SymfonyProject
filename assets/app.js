/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)

const $ = require('jquery');

import './styles/app.css';

require('select2');

$('select').select2();

$(document).ready(function() {
    $('#contactButton').click( e => {
        e.preventDefault();
        $('#contactForm').slideDown();
        $('#contactButton').slideUp();
    });
});



// start the Stimulus application
import './bootstrap';

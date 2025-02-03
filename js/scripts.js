/*!
* Start Bootstrap - Freelancer v7.0.7 (https://startbootstrap.com/theme/freelancer)
* Copyright 2013-2023 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-freelancer/blob/master/LICENSE)
*/
//
// Scripts
// 

window.addEventListener('DOMContentLoaded', event => {

    // Navbar shrink function
    var navbarShrink = function () {
        const navbarCollapsible = document.body.querySelector('#mainNav');
        if (!navbarCollapsible) {
            return;
        }
        if (window.scrollY === 0) {
            navbarCollapsible.classList.remove('navbar-shrink')
        } else {
            navbarCollapsible.classList.add('navbar-shrink')
        }

    };

    // Shrink the navbar 
    navbarShrink();

    // Shrink the navbar when page is scrolled
    document.addEventListener('scroll', navbarShrink);

    // Activate Bootstrap scrollspy on the main nav element
    const mainNav = document.body.querySelector('#mainNav');
    if (mainNav) {
        new bootstrap.ScrollSpy(document.body, {
            target: '#mainNav',
            rootMargin: '0px 0px -40%',
        });
    };

    // Collapse responsive navbar when toggler is visible
    const navbarToggler = document.body.querySelector('.navbar-toggler');
    const responsiveNavItems = [].slice.call(
        document.querySelectorAll('#navbarResponsive .nav-link')
    );
    responsiveNavItems.map(function (responsiveNavItem) {
        responsiveNavItem.addEventListener('click', () => {
            if (window.getComputedStyle(navbarToggler).display !== 'none') {
                navbarToggler.click();
            }
        });
    });

});
function validateForm() {
    //validation titre
    const title = document.getElementById('title').value;
    if (title.length<3) {
        alert("Title must be at least 3 characters long.");
        return false;
    }
    //validation destination
    const destination = document.getElementById('destination').value;
    const destinationRegex = /^[A-Za-z\s]+$/;
    if (destination.length<3 || !destinationRegex.test(destination)) {
        alert("Destination must be at least 3 characters long and contain only letters and spaces.")
        return false;
    }
    //validation date
    const departure_date = new Date(document.getElementById('departureDate').value);
    const return_date = new Date(document.getElementById('returnDate').value);
    if(departure_date>=return_date){
        alert("Return date must be after departure date.");
        return false;
    }
    //validation prix
    const price = parseInt(parseFloat(document.getElementById('price').value));
    if(isNaN(price) || price<=0){
        alert("Price must a positive number.");
        return false;
    }
    //if all is valid , the form is submitted
    alert("Travel offer added successfully!");
    return true;
}
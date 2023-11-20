
//  Get the current date
const currentYear = new Date();

//  Extract the current year from the current date
let copyrightYear = currentYear.getFullYear();

let mobileMenuYear = document.querySelector(".copyright-year");
let footerYear = document.querySelector(".footer-copyright-year");

mobileMenuYear.innerHTML = copyrightYear;
footerYear.innerHTML = copyrightYear;
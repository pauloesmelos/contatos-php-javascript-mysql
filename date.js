const date = new Date();
const currentYear = date.getFullYear();

const span = document.querySelector('[data-label="year"');
span.innerText = currentYear;
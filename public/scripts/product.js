
const downArrow = document.querySelector('.ioniconDown');
const upArrow = document.querySelector('.ioniconUp');
const cattInputs = document.getElementById('cattInputs');
const manuInputs = document.querySelector('#manuInputs');
const priceInputs = document.getElementById('priceInputs');
downArrow.addEventListener('click', function () {
    downArrow.classList.toggle('infoHid')
    upArrow.classList.toggle('filterShow')
    cattInputs.classList.toggle('filterShow');
    manuInputs.classList.toggle('filterShow');
    priceInputs.classList.toggle('filterShow');
});
upArrow.addEventListener('click', function () {
    downArrow.classList.toggle('infoHid')
    upArrow.classList.toggle('filterShow')
    cattInputs.classList.toggle('filterShow');
    manuInputs.classList.toggle('filterShow');
    priceInputs.classList.toggle('filterShow');
});

const filterButtons = document.getElementsByClassName('filterButtons');
const editIcon = document.getElementsByClassName('ioniconEdit');
const hiddenfrmCont = document.getElementsByClassName('hiddenfrmCont');
const filterFormsHidden = document.getElementsByClassName('filterFormsHidden');
const empDownArr = document.querySelector('.empDownArr');
const empUpArr = document.querySelector('.empUpArr');
let remNum = -1;
//  ?------------------------------------------------------
// ? this is for the clic kevents for the filter buttons
//  ?------------------------------------------------------
for (let i = 0; i < filterButtons.length; i++) {
    filterButtons[i].addEventListener('click', () => {
        if (remNum >= 0) {
            filterFormsHidden[remNum].classList.toggle('showfrmCont');
        }
        filterFormsHidden[i].classList.toggle('showfrmCont');
        remNum = i;
        console.log(i);
    });
}
//  *------------------------------------------------------------
//  * This is the click event for when thy click the edit button
//  *------------------------------------------------------------

for (let i = 0; i < editIcon.length; i++) {
    editIcon[i].addEventListener('click', () => {
        hiddenfrmCont[i].classList.toggle('hiddenfrmShow');
    });
}
//  *------------------------------------------------------------
//  * When on mobile when they click down arrow
//  *------------------------------------------------------------
empDownArr.addEventListener('click', () => {
    for (let i = 0; i < filterButtons.length; i++) {
        console.log('works');
        filterButtons[i].classList.toggle('filterButtonsMobile');
    }
    empUpArr.classList.toggle('empUpArr');
    empDownArr.classList.toggle('empUpArr');
});
empUpArr.addEventListener('click', () => {
    for (let i = 0; i < filterButtons.length; i++) {
        console.log('works');
        filterButtons[i].classList.toggle('filterButtonsMobile');
    }
    empDownArr.classList.toggle('empUpArr');
    empUpArr.classList.toggle('empUpArr');
})
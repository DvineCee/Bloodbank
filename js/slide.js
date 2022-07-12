const sign_prsn = document.querySelector("#sign-prsn");
const sign_hsptl = document.querySelector("#sign-hsptl");
const page = document.querySelector(".page")

sign_hsptl.addEventListener('click', () => {
    page.classList.add("sign-up-mode");
});
sign_prsn.addEventListener('click', () => {
    page.classList.remove("sign-up-mode");
});

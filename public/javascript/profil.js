// Modif Mail

const btnModifMail = document.getElementById("btnModifMail");
const btnModifMdp = document.querySelector("#btnModifMdp");
const btnValidationModifMail = document.getElementById(
  "btnValidationModifMail"
);
const divMail = document.getElementById("mail");
const divModifMail = document.getElementById("modificationMail");
const annulerModifMail = document.getElementById("annulerModifMail");

// Suppression Compte

const btnSuppCompte = document.getElementById("btnSuppCompte");
const suppCompte = document.getElementById("suppCompte");

// Modif Mail
btnModifMail.addEventListener("click", () => {
  btnModifMail.classList.add("dnone");
  suppCompte.classList.add("dnone");
  btnSuppCompte.classList.add("dnone");
  btnModifMdp.classList.add("dnone");
  divModifMail.classList.remove("dnone");
  btnValidationModifMail.classList.remove("dnone");
  annulerModifMail.classList.remove("dnone");
  
});


// Suppression Compte
btnSuppCompte.addEventListener("click", () => {
  suppCompte.classList.remove("dnone");
});

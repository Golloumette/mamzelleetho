/*
* Authentification.js
*/
 function init(){
    console.log("init")
    document.getElementById("pseudo").value = "gollou"
    document.getElementById("mdp").value = "mdp1"
    document.getElementById("afficherMdp").addEventListener("click", afficherMasquerMdp)
    document.getElementById("btSubmit").addEventListener("click", (event)=> {
       event.preventDefault()
       valider() 
    } /// corps de la fonction anonyme
    ) /// addeventListener
 } /// init

 function afficherMasquerMdp(){
    if(document.getElementById("afficherMdp").checked){
        document.getElementById("mdp").type = "text"
    } else { 
        document.getElementById("mdp").setAttribute("type","password")
    }
 }

 function valider(){
    let pseudo = document.getElementById("pseudo").value
    let mdp = document.getElementById("mdp").value
    if (pseudo.trim() === "" || mdp.trim() === ""){
        document.getElementById("lblMessage").innerHTML = "Toutes les saisies sont obligatoires "
    } else {
        // document.getElementById("lblMessage").innerHTML = "Jusque là tout va bien "
        document.getElementById("formulaireAuthentification").submit()   
    }
    
 }



window.onload = init
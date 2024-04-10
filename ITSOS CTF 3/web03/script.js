async function postDataToFirebase(dataToPost) {
  //Url con i dati degli utenti
  const url = "https://admin-ctf-default-rtdb.europe-west1.firebasedatabase.app/utenti.json";

  //Aggiungo un utente
  try {
    const response = await fetch(url, {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify(dataToPost),
    });

    //Errore nella richiesta POST
    if (!response.ok) {throw new Error(`Errore nella richiesta POST: ${response.status}`);}

    //Confermo all'utente la creazione dell'account
    printError("Registrazione avvenuta con molto successo!")

  } catch (error) {
    console.error("Errore durante la richiesta POST:", error.message);
  }
}

//Funnzione mistica per registrarsi nel sito
function handleSignupFormSubmit(event) {
  event.preventDefault();


  //Prende i dati inseriti dall'utente
  const username = document.getElementById("signup-username").value;
  const email = document.getElementById("signup-email").value;
  const password = document.getElementById("signup-password").value;

  const dataToPost = {
    username: username,
    email: email,
    password: password,
  };

  //Aggiunge un utente tramite la apposita funzione
  if(username === "admin"){
    printError("Nome utente già in uso")
  }else {
    postDataToFirebase(dataToPost);
  }
  document.querySelector("#signup form").reset();

}

// Funzione per controllare se l'utente è l'admin
async function checkUserExistence(event) {
  event.preventDefault();

  //Prendo i dati inseriti dall'utente
  const username = document.getElementById("login-username").value;
  const password = document.getElementById("login-password").value;

  //Url con i dati degli utenti
  const url = "https://admin-ctf-default-rtdb.europe-west1.firebasedatabase.app/utenti.json";

  //Chiedo al server se l'utente è admin
  try {
    const response = await fetch(url);
    if (!response.ok) {throw new Error(`Errore nella richiesta GET: ${response.status}`);}
    const data = await response.json();

    //Controllo se l'utente è admin
    const element = data['-Njidrl5aAV2QmdhOCGq'];
    if (element.username === "admin" && element.username === username && element.password === password) {
      const flag = data["-NjicjfyQNd9ISooPW3e"].username

      //stampa flag
      alert(flag)
      const error_form = document.querySelector('#info-login')
      error_form.classList.add('errorform')
      error_form.innerHTML = flag
    }else{
      //Risposta di default
      printError("Forse i dati sono giusti ma non mi interessa")
    }


  } catch (error) {
    //Eventuale errore del server
    console.error("Errore durante la richiesta GET:", error.message);
  }
}

//Eseguo le funzioni in caso di click dei bottoni
document.getElementById("signup").addEventListener("submit", handleSignupFormSubmit);
document.getElementById("login").addEventListener("submit", checkUserExistence);

function printError(text){
  const error_form = document.querySelectorAll('.info-form')
  error_form.forEach(element => {
    element.classList.add('errorform')
    element.innerHTML = text
    setTimeout(function() {
      element.classList.remove('errorform');
      element.innerHTML = ""
    }, 4000);
  });
}
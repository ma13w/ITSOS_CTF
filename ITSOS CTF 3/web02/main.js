const grid = document.querySelector('#grid')
const title = document.querySelector('h3')
let flagPrinted = false;

for (let index = 1000; index < 2000; index++) {
    createSantaClaus(index)
}

function createSantaClaus(index){
    const element = document.createElement('img')
    element.src = "./santaclaus.png"
    element.onclick = function() {
        santaclausOnClick(index)
    };
    grid.appendChild(element);
}

function santaclausOnClick(index){
    if(index === 0 && !flagPrinted) {
        if (!flagPrinted) {

            // SUPER SECRET
            const encryptedMessage = "VlxRV0tyRQBeb34ERARcA29SQgBN"
            let secret_message = atob(encryptedMessage);
            let result = '';
            for (let i = 0; i < secret_message.length; i++) {
                result += String.fromCharCode(secret_message.charCodeAt(i) ^ 48);
            }

            result = 'Sono il babbonatale FLAG: ' + result;
            title.innerText = result;
            console.log(result);
        }
        flagPrinted = true;
    } else {
        title.innerText = 'Sono il babbonatale numero: ' + index;
        console.log('Sono il babbonatale numero: ', index);
    }
}
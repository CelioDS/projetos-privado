const input = document.querySelector('.login_input');
const button = document.querySelector(".login_button");
const form = document.querySelector(".login_form");
const nomeSalvo = document.querySelector(".historico-nome");
const scoreSalvo = document.querySelector(".historico-score");



const validar_input = ({ target}) =>{ /*habilita o botao*/
    if(target.value.length >1){
        button.removeAttribute("disabled");
        return;
    }
    button.setAttribute("disabled",'');
    
}

input.addEventListener('input', validar_input); /* verfica o evento*/

const handleSubmit = (event) =>{ /*habilita o botao*/
  event.preventDefault(); /* nao deixa recarregar*/
  localStorage.setItem('Player', input.value);  
 

  window.location = 'PAGE/game.html';

}

form.addEventListener('submit', handleSubmit);


nomeSalvo.innerHTML = localStorage.getItem("Player"); /*puxa o nome*/
scoreSalvo.innerHTML = localStorage.getItem("Score"); /*puxa o nome*/
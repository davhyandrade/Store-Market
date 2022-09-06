
var adicionar = document.querySelector('body');
var pop_up = document.createElement('div');

pop_up.classList.add('pop-up');
pop_up.innerHTML = `<div class="btn-exit">
                            <img src="https://i.postimg.cc/vTMyzmQt/btn-exit.png" alt="Sair">
                          </div>
                          <div class="field-pop-up">
                            <img src="https://i.postimg.cc/brThFjrc/img-pop-up.png" alt="Vetor">
                            <div>
                              <h1>Aviso</h1>
                              <p>${textPopUp}</p>
                            </div>
                          </div>`;

adicionar.prepend(pop_up);

const btnExitPopUp = document.querySelector('.btn-exit');

function popUp() {
    pop_up.style.display = 'flex';
    window.scrollTo(0,0);
    setTimeout(() => {
      document.documentElement.style.overflow = 'hidden';
    },100);
    document.body.scroll = "no";
    btnExitPopUp.addEventListener('click', () => {
      pop_up.style.display = 'none';
      document.documentElement.style.overflow = 'auto';
      document.body.scroll = "yes";
    })
  }
  
popUp();


const listar = document.querySelectorAll('.listar');
const btnOcultar = document.querySelectorAll('.btn-ocultar');

//===================================================================

//----------------< Produtos >

let isActiveProdutos = true;

const btnlistarAluno = document.querySelectorAll('.listar-produto');

btnlistarAluno[0].addEventListener('click', () => {
    if (isActiveProdutos) {
      window.scrollTo({
        top: 1500,
        left:0
      })
      isActiveProdutos = false;
      listar[0].style.display = 'block';
    } else {
      isActiveProdutos = true;
      listar[0].style.display = 'none';
    }
});

btnlistarAluno[1].addEventListener('click', () => {
    if (isActiveProdutos) {
      window.scrollTo({
        top: 1500,
        left:0
      })
      isActiveProdutos = false;
      listar[0].style.display = 'block';
    } else {
      isActiveProdutos = true;
      listar[0].style.display = 'none';
    }
});

btnOcultar[0].addEventListener('click', () => {
  isActiveCurso = true;
  listar[0].style.display = 'none';
});

//===================================================================

//----------------< Botão Home Screen do Rodapé >

const btn_footer_Home_screen = document.querySelector('#btn_footer_Home_screen');

btn_footer_Home_screen.addEventListener('click', () => {
    window.scrollTo(0,0);
});

//===================================================================

//----------------< Botão About do Rodapé >

const btn_footer_about = document.querySelector('#btn_footer_about');

btn_footer_about.addEventListener('click', () => {
  window.scrollTo({
    top: 0,
    left:0
  })
});

//===================================================================

//----------------< Button Cadastrar >

const buttonCadastrar = document.querySelector('#btn-cadastrar');

buttonCadastrar.addEventListener('click', () => {
  window.scrollTo({
    top: 800,
    left:0
  })
});

const modalBtn = document.querySelector('#login-modal-btn');
const modalContainer = document.querySelector('#modal-container');
const modalClose = document.querySelector('#modal-close');
const loginBtnContainer = document.querySelector('#login-btn-container');
const html = document.querySelector('html');
const body = document.querySelector('body');
const userLogin = document.getElementById('user_login');

if (body.contains(loginBtnContainer) && loginBtnContainer.contains(modalContainer)){
    modalBtn.addEventListener('click', () => {
        modalContainer.classList.add('modal-active');
        userLogin.focus();
        body.classList.add('modal-open');
        // html.classList.add('modal-open')
        window.scrollTo({top: 0, behavior: 'smooth'});
    })
    modalClose.addEventListener('click', () => {
        modalContainer.classList.remove('modal-active');
        body.classList.remove('modal-open');
        // html.classList.remove('modal-open');
    })
    window.addEventListener('click', (e) => {
        if(e.target === modalContainer){
            modalContainer.classList.remove('modal-active');
            body.classList.remove('modal-open');
            // html.classList.remove('modal-open');
        }
    })
    

}
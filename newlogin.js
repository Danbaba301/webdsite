const container = document.getElementById('container');
const registerBnt = document.getElementById('register');
const loginBnt = document.getElementById('login');

registerBnt.addEventListener('click', ()=>{
    container.classList.add("active")
});

loginBnt.addEventListener('click', ()=>{
    container.classList.remove("active")
}); 


// const container = document.getElementById('container');
// const registerBtn = document.getElementById('register');
// const loginBtn = document.getElementById('login');

// registerBtn.addEventListener('click', () => {
//     container.classList.add("active");
// });

// loginBtn.addEventListener('click', () => {
//     container.classList.remove("active");
// });
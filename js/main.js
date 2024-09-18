// Menu déroulant au click avec changement de bouton
let showMenu = document.getElementById('myMenu');
let btnMenu = document.getElementById('burgerBtn');
   // cible le bouton pour le changer au clic
// let changeBtn = document.getElementById('changeBtn');

btnMenu.addEventListener('click', () => {
    showMenu.classList.toggle("openMenu");      //permet le menu déroulant
    if (showMenu.classList.contains('openMenu')){
        showMenu.classList.remove('closeMenu')
        showMenu.classList.add('openMenu')
    }else {       
        showMenu.classList.remove('openMenu')
        showMenu.classList.add('closeMenu')
    }
})


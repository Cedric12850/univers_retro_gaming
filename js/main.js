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

//fonction materialize
M.AutoInit();
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, options);
  });

  //Initialize collapsible (uncomment the lines below if you use the dropdown variation)
  var collapsibleElem = document.querySelector('.collapsible');
  var collapsibleInstance = M.Collapsible.init(collapsibleElem, options);

  // Or with jQuery

  $(document).ready(function(){
    $('.sidenav').sidenav();
 });
 

// //Apparition des commentaires au clic
let showComment = document.getElementById('comment');
let commentBtn = document.getElementById('commentBtn')
commentBtn.addEventListener('click', () => {
  showComment.classList.toggle('openComment')
  if(showComment.classList.contains('openComment')){
    showComment.classList.remove ('closeComment')
    showComment.classList.add('openComment')
  }else{
    showComment.classList.remove ('openComment')
    showComment.classList.add('closeComment')
  }
});



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
});



//fonction materialize
M.AutoInit();
document.addEventListener('DOMContentLoaded', function() {
    const elems = document.querySelectorAll('.sidenav');
    const instances = M.Sidenav.init(elems, options);
  });

  //Initialize collapsible (uncomment the lines below if you use the dropdown variation)
  const collapsibleElem = document.querySelector('.collapsible');
  const collapsibleInstance = M.Collapsible.init(collapsibleElem, options);

  // Or with jQuery

  $(document).ready(function(){
    $('.sidenav').sidenav();
 });



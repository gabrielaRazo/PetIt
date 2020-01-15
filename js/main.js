window.onscroll = function() {
    menuTop();
};

const menuTop = () => {
    navbarPetit = document.getElementById("navbarPetit");
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    navbarPetit.style.background = 'white';
    navbarPetit.style.transition = '.3s'; 
  } else {
    navbarPetit.style.background = 'transparent';
    
  }
}
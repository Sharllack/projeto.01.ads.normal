const main = document.getElementById('main');
const topo = document.getElementById('topo');
const header = document.getElementById('header');
const log = document.querySelector('.topolog');
const cad = document.querySelector('.topocad');
const usu = document.querySelector('#usu');
const logado = document.getElementById('logado');
const icon = document.querySelector('.material-symbols-outlined');
const toggle = document.querySelector('#toggle');
const user = document.getElementById('user');
const logoutbtn = document.getElementById('logout-button');

toggle.addEventListener('change', function() {
  if (this.checked) {
      console.log('Toggle ON');
      main.style.backgroundColor = "black";
      main.style.transition = '.5s';
      topo.style.backgroundColor = "black";
      topo.style.transition = '.5s';
      header.style.backgroundColor = "black";
      header.style.transition = ".5s";
      log.style.color = "white";
      log.style.transition = '.5s';
      cad.style.color = "white";
      cad.style.transition = '.5s';
      usu.style.backgroundColor = "black";
      usu.style.transition = '.5s';
      logado.style.backgroundColor = "black";
      logado.style.transition = '.5s';
      icon.style.color = "white";
      icon.style.transition = '.5s';
      user.style.color = "white";
      user.style.transition = '.5s';
      logoutbtn.style.color = "white";
      logoutbtn.style.transition = '.5s';

      localStorage.setItem('darkMode', 'on');
      
  } else {
      console.log('Toggle OFF');
      main.style.backgroundColor = "";
      main.style.transition = '.5s';
      topo.style.backgroundColor = "";
      topo.style.transition = '.5s';
      header.style.backgroundColor = ""
      header.style.transition = ".5s";
      log.style.color = "";
      log.style.transition = '.5s';
      cad.style.color = "";
      cad.style.transition = '.5s';
      usu.style.backgroundColor = "";
      usu.style.transition = '.5s';
      logado.style.backgroundColor = "";
      logado.style.transition = '.5s';
      icon.style.color = "";
      icon.style.transition = '.5s';
      user.style.color = "";
      user.style.transition = '.5s';
      logoutbtn.style.color = "";
      logoutbtn.style.transition = '.5s';

      localStorage.setItem('darkMode', 'off');

};
});

const slidePref = localStorage.getItem('slide');

const darkModePreference = localStorage.getItem('darkMode');
if (darkModePreference === 'on') {
    main.style.backgroundColor = "black";
    main.style.transition = '.5s';
    topo.style.backgroundColor = "black";
    topo.style.transition = '.5s';
    header.style.backgroundColor = "black"
    header.style.transition = ".5s";
    log.style.color = "white";
    log.style.transition = '.5s';
    cad.style.color = "white";
    cad.style.transition = '.5s';
    usu.style.backgroundColor = "black";
    usu.style.transition = '.5s';
    logado.style.backgroundColor = "black";
    logado.style.transition = '.5s';
    icon.style.color = "white";
    icon.style.transition = '.5s';
    user.style.color = "white";
    user.style.transition = '.5s';
    logoutbtn.style.color = "white";
    logoutbtn.style.transition = '.5s';

    toggle.checked = true;
    
} else {
    main.style.backgroundColor = "";
    main.style.transition = '.5s';
    topo.style.backgroundColor = "";
    topo.style.transition = '.5s';
    header.style.backgroundColor = ""
    header.style.transition = ".5s";
    log.style.color = "";
    log.style.transition = '.5s';
    cad.style.color = "";
    cad.style.transition = '.5s';
    usu.style.backgroundColor = "";
    usu.style.transition = '.5s';
    logado.style.backgroundColor = "";
    logado.style.transition = '.5s';
    icon.style.color = "";
    icon.style.transition = '.5s';
    user.style.color = "";
    user.style.transition = '.5s';
    logoutbtn.style.color = "";
    logoutbtn.style.transition = '.5s';
}

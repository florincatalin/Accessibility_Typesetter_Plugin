window.addEventListener("click", function(e) {
var idobiect = e.srcElement.id;
//alert(idobiect); 
var valobiect = e.srcElement.value;
//alert(valobiect);
document.documentElement.classList.toggle(valobiect)
});

function setCookie(cn, cv, ct) {
  const d = new Date();
  d.setTime(d.getTime() + (ct * 24 * 60 * 60 * 1000));
  let expires = "expires="+d.toUTCString();
  document.cookie = cn + "=" + cv + ";" + ct + ";path=/";
}

function getCookie(cn) {
  let name = cn + "=";
  let decodedCookie = decodeURIComponent(document.cookie);
  let ca = decodedCookie.split(';');
  for(let i = 0; i < ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

function checkCookie() {
  let cval = getCookie("accessibility");
  if (cval == "true") {
	document.getElementById("acc").style.display = "inline";
	document.getElementById("accico").style.display = "none"; 
  } else {
    document.getElementById("acc").style.display = "none";
		document.getElementById("accico").style.display = "inline";
     }
}

function iconoshow() {
setCookie('accessibility', 'true', 365);
location.reload();
}

function iconohide() {
setCookie('accessibility', 'false', 365);
location.reload();
}

window.onload = checkCookie();     

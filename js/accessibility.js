var settings = document.querySelectorAll('input[type="checkbox"]');

for (var i = 0; i < settings.length; i++) {
  var setting = settings[i];
  console.log(i)
  
  setting.addEventListener('change', function(e) {
    console.log(e.target.value)
    document.documentElement.classList.toggle(e.target.value)
  })
}


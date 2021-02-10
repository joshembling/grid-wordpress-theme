// Hide navbar on down scroll, show on up
// var prevScrollpos = window.pageYOffset;
// window.onscroll = function () {
//   var currentScrollPos = window.pageYOffset;
//   if (prevScrollpos > currentScrollPos || currentScrollPos <= 100) {
//     document.getElementById('mainNav').style.top = '0';
//   } else {
//     document.getElementById('mainNav').style.top = '-100px';
//   }
//   prevScrollpos = currentScrollPos;
// };

// style navbar menu on responsive
document.querySelectorAll('.hamburger').forEach(function (hamburger) {
  hamburger.addEventListener(
    'click',
    function () {
      var nav = document.querySelector('#mainNav');
      if (this.classList.contains('is-active') == false) {
        nav.style.backgroundColor = '#fff';
        nav.style.opacity = '0.9';
        nav.style.transition = '0.4s ease';
      } else {
        nav.style.backgroundColor = 'transparent';
      }
      this.classList.toggle('is-active');
    },
    false
  );
});

// adds transition for hamburger
var nav = document.querySelector('nav'); // Identify target

window.addEventListener('scroll', function (event) {
  event.preventDefault();

  if (window.scrollY <= 40) {
    nav.style.backgroundColor = 'transparent';
  } else {
    nav.style.backgroundColor = '#fff';
    nav.style.opacity = '0.9';
    nav.style.transition = '0.4s ease';
  }
});

// get year
document.getElementById('year').innerHTML = new Date().getFullYear();

// AOS
AOS.init();

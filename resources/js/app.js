import Swiper from 'swiper';

const menu = document.getElementById('slide-menu');
const menuOpen = document.querySelector('.openMenu');
const menuClose = document.querySelector('.closeMenu');

function openMenu() {
    menu.style.opacity = '1';
    menu.style.left = '0';
    menuOpen.style.display = 'none';
    menuClose.style.display = 'flex';
    document.querySelector('.header').style.position = 'fixed';
    document.querySelector('.yield').style.paddingTop = '136px';
}

menuOpen.addEventListener('click', () => openMenu())

function closeMenu() {
    document.querySelector('.yield').style.paddingTop = '0';
    menu.style.left = '-100%';
    menu.style.opacity = '0';
    menuOpen.style.display = '';
    menuClose.style.display = '';
    document.querySelector('.header').style.position = 'sticky';
    document.querySelector('.header').style.top = '0';
}

menuClose.addEventListener('click', () => closeMenu())

var mySwiper = new Swiper ('.swiper-container', {
    spaceBetween: 40,
    breakpoints: {
      769: { slidesPerView: 2 },
      1024: { slidesPerView: 3 },
      // 1216: { slidesPerView: 3 }
    }
  })
  var mySwiper1 = new Swiper ('.swiper-container-1', {
    spaceBetween: 40,
    breakpoints: {
      769: { slidesPerView: 2 },
      1024: { slidesPerView: 3 },
      1216: { slidesPerView: 4 }
    }
  })
  var mySwiper2 = new Swiper ('.tutors-section', {
    spaceBetween: 110,
    breakpoints: {
      769: { slidesPerView: 2 },
      1024: { slidesPerView: 3 },
      1216: { slidesPerView: 4 }
    }
  })

let pagePrev = window.pageYOffset;
function hideHeader() {
    let pageNow = window.pageYOffset;
    if (pageNow - pagePrev < 0) {
        document.querySelector(".header").style.top = '0';
    } else {
        document.querySelector(".header").style.top = ''
    }
    pagePrev = pageNow;
}
document.addEventListener("scroll", () => hideHeader())
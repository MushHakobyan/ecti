import Swiper from 'swiper';

class Menu {
  constructor() {
    this.menu = document.getElementById('slide-menu');
    this.menuOpen = document.querySelector('.open-menu');
    this.menuClose = document.querySelector('.close-menu');
    this.pagePrev = window.pageYOffset
  }
  
  openMenu() {
    this.menu.style.opacity = '1';
    this.menu.style.left = '0';
    this.menuOpen.style.display = 'none';
    this.menuClose.style.display = 'flex';
    document.querySelector('.header').style.position = 'fixed';
    document.querySelector('.yield').style.paddingTop = '136px';
  }
  closeMenu() {
    document.querySelector('.yield').style.paddingTop = '0';
    this.menu.style.left = '-100%';
    this.menu.style.opacity = '0';
    this.menuOpen.style.display = '';
    this.menuClose.style.display = '';
    document.querySelector('.header').style.position = 'sticky';
    document.querySelector('.header').style.top = '0';
  }
  hideHeader() {
    let pageNow = window.pageYOffset;
    if (pageNow - this.pagePrev < 0) {
        document.querySelector(".header").style.top = '0';
    } else {
        document.querySelector(".header").style.top = ''
    }
    this.pagePrev = pageNow;
  }
}

const menu = new Menu()

menu.menuOpen.addEventListener('click', () => menu.openMenu())
menu.menuClose.addEventListener('click', () => menu.closeMenu())
document.addEventListener("scroll", () => menu.hideHeader())

var upcomCoursSwiper = new Swiper ('.swiper-container', {
  spaceBetween: 40,
  breakpoints: {
    769: { slidesPerView: 2 },
    1024: { slidesPerView: 3 },
    // 1216: { slidesPerView: 3 }
  }
})
var memberSwiper = new Swiper ('.members-swiper', {
  spaceBetween: 40,
  breakpoints: {
    769: { slidesPerView: 2 },
    1024: { slidesPerView: 3 },
    1216: { slidesPerView: 4 }
  }
})
var tutorSwiper = new Swiper ('.tutors-swiper', {
  spaceBetween: 70,
  breakpoints: {
    769: { slidesPerView: 2 },
    1024: { slidesPerView: 3 },
    1216: { slidesPerView: 4 }
  }
})

var trainCoursSwiper = new Swiper ('.training-courses-swiper', {
  spaceBetween: 40,
  breakpoints: {
    769: { slidesPerView: 2 },
    1024: { slidesPerView: 3 },
    // 1216: { slidesPerView: 4 }
  }
})
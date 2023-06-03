class MobileNavbar {
  constructor(mobileMenu, navbar, navLinks) {
    this.mobileMenu = document.querySelector(mobileMenu);
    this.navbar = document.querySelector(navbar);
    this.navLinks = document.querySelectorAll(navLinks);
    this.activeClass = "active";


this.handleClick = this.handleClick.bind(this);
this.navLinks.forEach((link) => {
  link.addEventListener("click", () => {
    this.navbar.classList.remove(this.activeClass);
    this.mobileMenu.classList.remove(this.activeClass);
  });
});
    
  }
  animateLinks() {
    this.navLinks.forEach((link, index) => {
      link.style.animation
        ? (link.style.animation = "")
        : (link.style.animation = `navLinkFade 0.5s ease forwards ${
            index / 7 + 0.3
          }s`);
    });
  }
 

  

  handleClick() {
    this.navbar.classList.toggle(this.activeClass);
    this.mobileMenu.classList.toggle(this.activeClass);
    this.animateLinks();
  
  }
  addClickEvent() {
    this.mobileMenu.addEventListener("click", this.handleClick);
  }
  init() {
    if (this.mobileMenu) {
      this.addClickEvent();
    }
    return this;
  }
 
}

const mobileNavbar = new MobileNavbar(".mobile-menu", ".navbar", ".navbar li");
mobileNavbar.init();

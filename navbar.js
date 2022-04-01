const navSlide = () => {
    const burger = document.querySelector(".burger");
    const nav = document.querySelector(".nav-links");
    const navLinks = document.querySelectorAll(".nav-links li");
  
    //icone menu burger
  
    burger.addEventListener("click", () => {
      nav.classList.toggle("nav-active"); //toggle Nav
  
      //animation Links
  
      navLinks.forEach((link, index) => {
        if (link.style.animation) {
          link.style.animation = "";
        } else {
          link.style.animation = `navLinkFade 0.5s ease forwards ${
            index / 7 + 0.4
          }s`; // permet de faire apparaitre les liens à un certain timing
        }
      });
  
      //animation menu burger fermeture
      burger.classList.toggle("toggle");
    });
  }; /** fonction fléchée */
  
  navSlide(); /** => appel la fonction */
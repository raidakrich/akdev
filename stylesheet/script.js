var loader = document.getElementById("preloader");

window.addEventListener("load", function(){
    loader.style.display = "none";
});

// MENU //

const navMenu = document.querySelector('.navMenu');
const navMenuContainer = document.querySelector('.navMenuContainer');
const dropdownMenu = document.querySelector('.dropdownMenu');
const links = document.querySelectorAll('.dropdownLink');

let menuOpen = false;

navMenu.addEventListener('click', (e) => {
    e.preventDefault();
    menuOpen = !menuOpen;

    if(menuOpen){
        dropdownMenu.style.pointerEvents = 'auto';

        gsap.to(dropdownMenu, {
            duration: 0.5,
            opacity: 1,
            y: 0,
            ease: "power3.out"
        });

        gsap.to(links, {
            duration: 0.5,
            y: 0,
            opacity: 1,
            stagger: 0.15, 
            ease: "back.out(1.7)"
        });

    } else {
        dropdownMenu.style.pointerEvents = 'none';

        gsap.to(links, {
            duration: 0.3,
            y: 10,
            opacity: 0,
            stagger: 0.05,
            ease: "power2.in"
        });

        gsap.to(dropdownMenu, {
            duration: 0.3,
            opacity: 0,
            y: -20,
            ease: "power2.in"
        });
    }
});


// HORIZONTAL SCROLLING //

gsap.registerPlugin(ScrollTrigger);

const horizontalProjects = gsap.utils.toArray('.projectContianer');
const projectsSection = document.querySelector('.projectsSection');

gsap.to(projectsSection, {
  x: () => -(projectsSection.scrollWidth - window.innerWidth),
  ease: "none",
  scrollTrigger: {
    trigger: '.projectsSectionContainer',
    pin: true,
    scrub: 2,
    end: () => "+=" + (projectsSection.scrollWidth - window.innerWidth),
  }
});

const spacer = document.querySelector('.projectsContainerorizontalScrollSeperator');

function setSpacerHeight() {
  const scrollWidth = projectsSection.scrollWidth;
  const viewportWidth = window.innerWidth;

  const neededScroll = scrollWidth - viewportWidth;

  spacer.style.height = `${neededScroll}px`;
}

setSpacerHeight();
window.addEventListener('resize', setSpacerHeight);
// constants
const SCROLL_TOLERANCE = 50;

// HTML elements
const titleContainer = document.querySelector(".hero-title");
const titleName = document.querySelector(".hero-title h1");
const titleJob = document.querySelector(".hero-title h2");
const heroContent = document.querySelector(".hero-content");

const myProjects = document.querySelector(".my-projects");
const myProjectsScrollzone = document.querySelector(".my-projects-scrollzone");

// CSS variables
const fsH1 = getComputedStyle(document.documentElement).getPropertyValue(
  "--fs-h1",
);
const fsH2 = getComputedStyle(document.documentElement).getPropertyValue(
  "--fs-h2",
);

// scroll handler
document.addEventListener("scroll", () => {
  const scrollPos = window.scrollY;

  // scroll the projects cards horizontally in the dead vertical scroll-zone (position:sticky; + 100vh spacer)
  const rect = myProjectsScrollzone.getBoundingClientRect();
  const maxScroll = myProjects.scrollWidth - myProjects.clientWidth;

  let percent;
  if (rect.y <= window.innerHeight && rect.y >= 0) {
    percent = (rect.y / window.innerHeight) * 100; // map scroll
  } else if (rect.y > window.innerHeight) {
    percent = 100; // after, scroll to end
  } else if (rect.y < 0) {
    percent = 0; // before, scroll to start
  }

  console.log("RECT:", rect);
  console.log("scrollPos:", scrollPos);
  console.log("innerHeight:", window.innerHeight);
  if (rect.top - scrollPos > window.innerHeight - SCROLL_TOLERANCE) {
    console.log("IF:: rect.top - scrollPos:", rect.top - scrollPos);
    titleName.style.fontSize = fsH1;
    titleJob.style.fontSize = fsH2;
    titleContainer.style.gap = "1.1rem";
    heroContent.style.opacity = 100;
  } else {
    console.log("ELSE:: rect.top - scrollPos:", rect.top - scrollPos);
    titleName.style.fontSize = "3.6rem";
    titleJob.style.fontSize = "1.33rem";
    titleContainer.style.gap = "0.4rem";
    heroContent.style.opacity = 0;
  }

  const val = maxScroll * (1 - percent / 100);
  myProjects.scrollLeft = val;
});

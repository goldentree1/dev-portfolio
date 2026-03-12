// constants
const SCROLL_TOLERANCE = 50;

// HTML elements
const titleName = document.querySelector(".my-title span.my-name");
const titleJob = document.querySelector(".my-title span.my-job-title");
const myProjects = document.querySelector(".my-projects");
const myProjectsScrollzone = document.querySelector(".my-projects-scrollzone");

// CSS variables
const fsTitleName = getComputedStyle(document.documentElement).getPropertyValue(
  "--fs-title-name",
);
const fsTitleJob = getComputedStyle(document.documentElement).getPropertyValue(
  "--fs-title-job",
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
    titleName.style.fontSize = fsTitleName;
    titleJob.style.fontSize = fsTitleJob;
  } else {
    console.log("ELSE:: rect.top - scrollPos:", rect.top - scrollPos);
    titleName.style.fontSize = "3.6rem";
    titleJob.style.fontSize = "1.33rem";
  }

  const val = maxScroll * (1 - percent / 100);
  myProjects.scrollLeft = val;

  // h1 title (get small on scroll page)
  // if (scrollPos < 50) {
  //   titleName.style.fontSize = fsTitleName;
  //   titleJob.style.fontSize = fsTitleJob;
  // } else {
  //   titleName.style.fontSize = "3.6rem";
  //   titleJob.style.fontSize = "1.33rem";
  // }
});

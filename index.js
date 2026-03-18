// constants
const SCROLL_TOLERANCE_COMPRESS_TITLE = 0;
const SCROLL_TOLERANCE_HIDE_HERO_CONTENT = -50;
const SCROLL_PROJECTS_HORIZONTAL_SCROLL_DEADZONE = 90;
const SCROLL_PROJECTS_FADE_IN_OFFSET = 220;
const SCROLL_PROJECTS_FADE_OUT_OFFSET = 480;

// HTML elements
const titleContainer = document.querySelector(".hero-title");
const titleName = document.querySelector(".hero-title h1");
const titleJob = document.querySelector(".hero-title h2");
const heroContent = document.querySelector(".hero-content");

const myProjectsContainer = document.querySelector(".my-projects-container");
const myProjects = document.querySelector(".my-projects");
const myProjectsTitle = document.querySelector(".my-projects > li:first-child");
const myProjectsScrollzone = document.querySelector(".my-projects-scrollzone");

const footer = document.querySelector("footer");

// CSS variables
const colourBgPrimary = getComputedStyle(
  document.documentElement,
).getPropertyValue("--colour-bg-primary");
const colourBgSecondary = getComputedStyle(
  document.documentElement,
).getPropertyValue("--colour-bg-secondary");
const fsH1 = getComputedStyle(document.documentElement).getPropertyValue(
  "--fs-h1",
);
const fsH2 = getComputedStyle(document.documentElement).getPropertyValue(
  "--fs-h2",
);

myProjects.addEventListener("scroll", (evt) => {
  const left = myProjects.scrollLeft;
  const top = myProjects.scrollTop;
  // console.log(myProjects);
  console.log("EVT", evt);
  // console.log("top:", top, "left:", left);
});

const prev = { windowScrollY: window.scrollY };
let reverseMapScroll = false;
myProjects.addEventListener("scroll", (evt) => {
  if (prev.windowScrollY === window.scrollY) {
    reverseMapScroll = true;
    // assume must be horizontal scroll if window scrollY hasn't changed
  }
  prev.windowScrollY = window.scrollY;
});

let showProjects = true;
const fadeDuration = 300;

function updateProjectsVisibility() {
  const rect = myProjectsContainer.getBoundingClientRect();
  const scrollingDown = window.scrollY > prev.windowScrollY;

  if (
    scrollingDown &&
    showProjects &&
    rect.top < -SCROLL_PROJECTS_FADE_IN_OFFSET
  ) {
    // fade out
    myProjectsContainer.style.transition = `background ${fadeDuration}ms, opacity ${fadeDuration}ms`;
    myProjectsContainer.style.background = colourBgPrimary;
    myProjects.style.opacity = 0;
    showProjects = false;
  } else if (
    !scrollingDown &&
    !showProjects &&
    rect.top > -SCROLL_PROJECTS_FADE_OUT_OFFSET
  ) {
    // fade in
    myProjectsContainer.style.transition = `background ${fadeDuration}ms, opacity ${fadeDuration}ms`;
    myProjectsContainer.style.background = colourBgSecondary;
    myProjects.style.opacity = 1;
    showProjects = true;
  }

  prev.windowScrollY = window.scrollY;
}

function updateHeroContentVisibility() {
  const scrollPos = window.scrollY;
  const rect = myProjectsScrollzone.getBoundingClientRect();

  // --- fade hero content on scrolling past ---
  if (
    rect.top - scrollPos >
    window.innerHeight - SCROLL_TOLERANCE_HIDE_HERO_CONTENT
  ) {
    heroContent.style.opacity = 100;
  } else {
    heroContent.style.opacity = 0;
  }
}

function updateHeroTitles() {
  const scrollPos = window.scrollY;
  const rect = myProjectsScrollzone.getBoundingClientRect();
  if (
    rect.top - scrollPos >
    window.innerHeight - SCROLL_TOLERANCE_COMPRESS_TITLE
  ) {
    titleName.style.fontSize = fsH1;
    titleJob.style.fontSize = fsH2;
    titleContainer.style.gap = "1.1rem";
  } else {
    titleName.style.fontSize = "3.2rem";
    titleJob.style.fontSize = "1.33rem";
    titleContainer.style.gap = "0.3rem";
  }
}

function updateVertToHorizontalProjectsScroll() {
  const maxScroll = myProjects.scrollWidth - myProjects.clientWidth;

  const start =
    myProjectsScrollzone.offsetTop -
    (window.innerHeight - SCROLL_PROJECTS_HORIZONTAL_SCROLL_DEADZONE);
  const end =
    myProjectsScrollzone.offsetTop +
    myProjectsScrollzone.offsetHeight -
    window.innerHeight;

  let progress = (window.scrollY - start) / (end - start);
  if (progress <= 0 || progress >= 1) return;

  if (reverseMapScroll) {
    // Reverse mapping!! Projects has been horizontally scrolled...
    // so we will just map vertical scroll to it
    const targetScrollY =
      start + (myProjects.scrollLeft / maxScroll) * (end - start);
    reverseMapScroll = false; // reset before scrolling or we'll trigger loop
    window.scrollTo({ top: targetScrollY, behavior: "auto" });
  } else {
    progress = Math.max(0, Math.min(1, progress));
    myProjects.scrollLeft = maxScroll * progress;
  }
}

// throttle with rAF
let ticking = false;
window.addEventListener("scroll", () => {
  if (!ticking) {
    window.requestAnimationFrame(() => {
      updateProjectsVisibility();
      updateHeroContentVisibility();
      updateHeroTitles();
      updateVertToHorizontalProjectsScroll();
      ticking = false;
    });
    ticking = true;
  }
});

/**--- Form submission handling ---*/
const form = document.querySelector(".footer-form");
form.addEventListener("submit", async (e) => {
  e.preventDefault();
  const formData = new FormData(form);

  try {
    const response = await fetch("/submit.php", {
      method: "POST",
      body: formData,
    });
    await response.json();
    if (response.ok) {
      form.reset();
      alert(
        "Message sent successfully! I'll get back to you soon via email :-)",
      );
    } else {
      throw new Error();
    }
  } catch (error) {
    alert(
      "An error occurred while sending the message. Please try submit the form again or contact us directly (e.g., via email).",
    );
  }
});

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
  // if (progress < 0 || progress > 1) return;

  console.log("update scroller");

  if (reverseMapScroll) {
    // Reverse mapping!! Projects has been horizontally scrolled...
    // so we will just map vertical scroll to it
    if (progress < 0 || progress > 1) return;
    const targetScrollY =
      start + (myProjects.scrollLeft / maxScroll) * (end - start);
    reverseMapScroll = false; // reset before scrolling or we'll trigger loop
    console.log(
      "Reverse mapping! target:",
      targetScrollY,
      "current scrollY:",
      window.scrollY,
    );
    window.scrollTo({ top: targetScrollY, behavior: "auto" });
    return;
  } else {
  }

  if (progress < 0) {
    myProjects.scrollLeft = 0;
  } else if (progress > 1) {
    myProjects.scrollLeft = maxScroll;
  } else {
    myProjects.scrollLeft = maxScroll * progress;
  }
}
// --- state
const prev = {
  windowScrollY: window.scrollY,
  scrollLeftH: myProjects.scrollLeft,
};
let reverseMapScroll = false;

// --- horizontal scroll listener just sets a flag
// myProjects.addEventListener("scroll", () => {
//   // Only mark reverseMapScroll if user moved horizontally and vertical scroll is stationary
//   if (window.scrollY === prev.windowScrollY) {
//     reverseMapScroll = true;
//     console.log("setr");
//   }
// });

myProjects.addEventListener("scroll", () => {
  const horizontalChange = Math.abs(myProjects.scrollLeft - prev.scrollLeftH);

  // only mark reverse mapping if horizontal moved significantly and vertical is stationary
  if (horizontalChange > 1 && window.scrollY - prev.windowScrollY < 1) {
    reverseMapScroll = true;
    console.log("reverseMapScroll set");
  }
});

// --- rAF throttled scroll
let tickingEffects = false;
let tickingHScroller = false;

window.addEventListener("scroll", () => {
  // --- visual updates (fade / hero / titles)
  if (!tickingEffects) {
    window.requestAnimationFrame(() => {
      updateProjectsVisibility();
      updateHeroContentVisibility();
      updateHeroTitles();
      tickingEffects = false;
    });
    tickingEffects = true;
  }

  if (!tickingHScroller) {
    window.requestAnimationFrame(() => {
      // console.log("PREV", prev.windowScrollY, "NOW", window.scrollY);
      const maxScroll = myProjects.scrollWidth - myProjects.clientWidth;

      const start =
        myProjectsScrollzone.offsetTop -
        (window.innerHeight - SCROLL_PROJECTS_HORIZONTAL_SCROLL_DEADZONE);
      const end =
        myProjectsScrollzone.offsetTop +
        myProjectsScrollzone.offsetHeight -
        window.innerHeight;

      // console.log(
      //   // "window.scrollY",
      //   // window.scrollY,
      //   // "offsetTop(proj)",
      //   // myProjectsContainer.offsetTop,
      //   // "offsetHeight",
      //   // myProjectsContainer.offsetHeight,
      //   "scrollTop",
      //   myProjectsContainer.scrollTop,
      //   // "diff",
      //   // end - start,
      //   // "diff2",
      //   // Math.abs(
      //   //   myProjectsContainer.offsetHeight - myProjectsContainer.offsetTop,
      //   // ),
      //   // "scrollLeft",
      //   // myProjects.scrollLeft,
      //   // "maxScroll",
      //   // maxScroll,
      // );

      let progress = (window.scrollY - start) / (end - start);
      progress = Math.min(Math.max(progress, 0), 1);

      if (progress >= 1 || progress <= 0) {
        reverseMapScroll = true;
      } else if (reverseMapScroll) {
        // projects horizontal scroll -> page scroll
        const targetScrollY =
          start + (myProjects.scrollLeft / maxScroll) * (end - start);
        window.scrollTo({ top: targetScrollY, behavior: "auto" });
        reverseMapScroll = false;
      } else {
        // map projects horizontal scroll -> page scroll
        myProjects.scrollLeft = maxScroll * progress;
      }

      prev.windowScrollY = window.scrollY;
      prev.scrollLeftH = myProjects.scrollLeft;

      tickingHScroller = false;
    });
    tickingHScroller = true;
  }
});

/**--- Form submission handling ---*/
const form = document.querySelector(".footer-form");
form.addEventListener("submit", async (e) => {
  e.preventDefault();
  const formData = new FormData(form);

  let status;
  try {
    const response = await fetch("/submit.php", {
      method: "POST",
      body: formData,
    });
    const txt = await response.text();
    status = response.status;
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

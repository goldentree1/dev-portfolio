<style>
    /** imports */
    /** TODO: download this, and idk if imports are still bad, maybe download font idk */
    @import url("https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;800;900&display=swap");

    /** -- resets -- */
    *,
    ::after,
    ::before,
    ::backdrop,
    ::file-selector-button {
      margin: 0;
      padding: 0;
    }

    * {
        margin: 0;
        padding: 0;
        font-size: 1rem;
        font-weight: normal;
        /*width: 100%;*/
    }

    img,
    svg,
    video,
    canvas,
    audio,
    iframe,
    embed,
    object {
      display: block;
      vertical-align: middle;
    }

    img,video{
        display: block;
        max-width: 100%;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-size: inherit;
      font-weight: inherit;
    }

    ol,
    ul,
    menu {
      list-style: none;
    }

    strong {
        font-weight: 600;
    }

    /** -- general -- */

    :root {
        --color-bg-primary: white;
        --color-text-primary: black;
        --color-text-accent: navy;
    }

    @media (prefers-color-scheme: dark) {
      :root {
        --color-bg-primary: black;
        --color-text-primary: white;
        --color-text-accent: blue;
      }
    }

    html, body {
        color: var(--color-text-primary);
        background-color: var(--color-bg-primary);
        min-height: 100vh;
        width: 100%;
        display: flex;
        font-family: "Outfit", sans-serif;
    }

    main {
        display: flex;
        flex-direction: column;
        width: 100%;
    }

    /** -- Index.php: header/nav section -- */

    .my-title {
        background-color: var(--color-bg-primary);
        text-align: center;
        position: sticky;
        top: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 2.125rem 1rem;
        z-index: 5;
        font-weight:500;
    }

    .my-title span.my-name{
        font-size: 4.33rem;
    }

    .my-title span.my-job-title{
        color: var(--color-text-accent);
        font-size: 1.55rem;
        text-transform: uppercase;
        font-weight: 900;
        letter-spacing: 0.089rem;
    }

    p.my-paragraph{
        padding: 1.5rem 0rem 2.5rem;
        text-align: center;
        display: block;
        margin: 0 auto;
        font-weight: 600;
    }

    /** -- Index.php: skills section -- */

    ul.my-skills {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-template-rows: repeat(3, 1fr);
        gap: 10px;
    }

    ul.my-skills > li {
        padding: 1.4rem 0.8rem;
    }

    ul.my-skills > li:nth-child(1) {
        grid-column: 1 / span 2;
        grid-row: 1 / span 1;
    }
    ul.my-skills > li:nth-child(2) {
        grid-column: 2 / span 2;
        grid-row: 2 / span 1;
    }
    ul.my-skills > li:nth-child(3) {
        grid-column: 3 / span 1;
        grid-row: 3 / span 1;
    }

    /** -- Index.php: work/personal projects section */

    ul.my-projects {
        display: flex;
        flex-wrap: nowrap;
        overflow-x: auto;
        gap: 0.85rem; /* Increased gap for a cleaner look */
        padding: 1rem 0.5rem;
        scrollbar-width: thin; /* Firefox */
        z-index: 20;
        background-color: var(--color-bg-primary);
    }

    /* For Chrome/Safari scrollbar */
    ul.my-projects::-webkit-scrollbar {
        height: 6px;
    }
    ul.my-projects::-webkit-scrollbar-thumb {
        background: #cbd5e1;
        border-radius: 10px;
    }

    ul.my-projects > li {
        min-width: calc(45vw - 2rem); /* Slightly adjusted for better peek effect */
        display: flex;
        flex-direction: column;
        background: #ffffff;
        border: 1px solid #e2e8f0;
        border-radius: 0.75rem;
        padding: 1.25rem;
        box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1);
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    ul.my-projects > li:hover {
        transform: translateY(-4px);
        box-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1);
    }

    /* Title & Stats */
    ul.my-projects > li h3 {
        margin: 0 0 0.5rem 0;
        font-size: 1.25rem;
        font-weight: 700;
        color: #1e293b;
    }

    ul.my-projects > li .my-project-stats {
        display: flex;
        justify-content: space-between;
        font-size: 0.875rem;
        color: #64748b;
        margin-bottom: 1rem;
    }

    ul.my-projects > li .my-project-stats a {
        color: #3b82f6;
        text-decoration: none;
        font-weight: 500;
    }

    /* Image styling */
    ul.my-projects > li .my-project-content img {
        width: 100%;
        height: auto;
        aspect-ratio: 16 / 9;
        object-fit: cover;
        object-position: top;
        border-radius: 0.5rem;
        margin-bottom: 1rem;
        border: 1px solid #f1f5f9;
    }

    ul.my-projects > li .my-project-content p {
        font-size: 0.95rem;
        line-height: 1.5;
        color: #475569;
        margin-bottom: 1.5rem;
    }

    /* Action Links */
    ul.my-projects > li .my-project-links {
        margin-top: auto; /* Pushes links to the bottom */
        display: flex;
        flex-wrap: wrap;
        gap: 0.75rem;
        padding-top: 1rem;
        border-top: 1px solid #f1f5f9;
    }

    ul.my-projects > li .my-project-links a {
        display: inline-flex;
        align-items: center;
        font-size: 0.875rem;
        font-weight: 600;
        text-decoration: none;
        color: #334155;
        padding: 0.4rem 0.8rem;
        background: #f8fafc;
        border: 1px solid #e2e8f0;
        border-radius: 0.375rem;
        transition: all 0.2s;
    }

    ul.my-projects > li .my-project-links a:hover {
        background: #f1f5f9;
        border-color: #cbd5e1;
        color: #0f172a;
    }


    /** Helper classes: */

    /*.h2{
        font-size: 1.25rem;
        font-weight: 600;
    }*/

    .container {
        max-width: 900px;
        margin: 0 auto;
        padding: 0 0.75rem;
    }

    .m-0-auto {
        margin: 0 auto;
    }

    .text-center{
        text-align: center;
    }

    .d-block{
        display: block;
    }

    /** (UNUSED) Helper classes:*/

    /*.w-full{
        width: 100%;
    }*/
    /*
    .d-none{
        display: none;
    }*/

</style>

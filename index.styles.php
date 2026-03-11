<style>

    /** -- resets -- */
    * {
        margin: 0;
        padding: 0;
        font-size: 1rem;
        font-weight: normal;
    }

    img{
        display: block;
        max-width: 100%;
    }

    p, li {
        display: inline-block;
    }

    /** -- general -- */
    /** TODO: download this */
    @import url("https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;800;900&display=swap");

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
        /*width: 100%;*/
    }

    /** -- Index.php: title section -- */

    h1.my-title {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 1.5rem;
    }

    h1.my-title span.my-name{
        font-size: 4.33rem;
    }

    h1.my-title span.my-job-title{
        font-size: 1.55rem;
        text-transform: uppercase;
        font-weight: 900;
        letter-spacing: 0.089rem;
        color: var(--color-text-accent);
    }

    /** -- Index.php: skills section -- */



    ul.my-skills {
        display: grid;
        /* Creates 3 columns, each taking up an equal fraction of the available space */
        grid-template-columns: repeat(3, 1fr);
        /* Creates 3 rows, each taking up an equal fraction of the available space */
        grid-template-rows: repeat(3, 1fr);
        /* Adds space between the grid items */
        gap: 10px;
    }

    ul.my-skills > li:nth-child(1) {
        grid-column: 1 / span 2;       /* stay in column 1 */
        grid-row: 1 / span 1; /* span all 3 rows */
    }
    ul.my-skills > li:nth-child(2) {
        grid-column: 2 / span 2;       /* stay in column 1 */
        grid-row: 2 / span 1; /* span all 3 rows */
    }
    ul.my-skills > li:nth-child(3) {
        grid-column: 3 / span 1;       /* stay in column 1 */
        grid-row: 3 / span 1; /* span all 3 rows */
    }

    /** -- Index.php: work/personal projects section */

    ul.my-projects{
        display: flex;
        flex-wrap: nowrap;
        overflow-x: auto;
        gap: 0.5rem;
        padding: 0 0.25rem;
    }

    ul.my-projects > li{
        /*min-width: calc(50vw - 4rem);*/
        flex:1;
    }

    ul.my-projects > li .my-project-stats {
        display: flex;
        justify-content: space-between;
    }

    ul.my-projects > li .my-project-content{

    }

    ul.my-projects > li .my-project-content img{
        width: 100%;
        height: auto;
        aspect-ratio: 16 / 10;
        object-fit: cover;
    }


    /** Helper classes: */

    .h2{
        font-size: 1.25rem;
        font-weight: 600;
    }

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

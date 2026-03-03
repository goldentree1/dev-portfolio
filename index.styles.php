<style>

    /** reset */
    *{
        margin: 0;
        padding: 0;
    }

    h1, h2, h3, h4, h5, h6, p, li {
        display: inline-block;
    }

    html, body {
        color: navy;
        min-height: 100vh;
        width: 100%;
        display: flex;
        font-family: sans-serif;
    }

    main {
        display: flex;
        flex-direction: column;
        width: 100%;
    }

    h1 {
        display: flex;
        flex-direction: column;
        align-items: center;
        font-weight: 200;
        gap: 0rem;
    }

    h1 .my-name{
        font-size: 3.5rem;
        font-family: serif;
    }

    h1 .my-job-title{
        font-size: 1.5rem;
        text-transform: uppercase;
        font-weight: bold;
        letter-spacing: 0.085rem;
    }

    ul {
        display: grid;
        /* Creates 3 columns, each taking up an equal fraction of the available space */
        grid-template-columns: repeat(3, 1fr);
        /* Creates 3 rows, each taking up an equal fraction of the available space */
        grid-template-rows: repeat(3, 1fr);
        /* Adds space between the grid items */
        gap: 10px;
    }

    ul > li:nth-child(1) {
        grid-column: 2 / span 2;       /* stay in column 1 */
        grid-row: 1 / span 1; /* span all 3 rows */
    }
    ul > li:nth-child(2) {
        grid-column: 1 / span 3;       /* stay in column 1 */
        grid-row: 2 / span 1; /* span all 3 rows */
    }
    ul > li:nth-child(2) {
        grid-column: 1 / span 3;       /* stay in column 1 */
        grid-row: 2 / span 1; /* span all 3 rows */
    }



    /** Helper classes: */

    .container {
        max-width: 1280px;
        margin: 0 auto;
        padding: 0 0.75rem;
    }

    .text-center{
        text-align: center;
    }
</style>

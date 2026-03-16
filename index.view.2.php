<main>
    <header>
        <nav>
            <div class="left-links">
                <li>
                    <a href="https://github.com/goldentree1" target="_blank">
                        <img src="/assets/imgs/github.svg" alt="Github">
                        <span>Github</span>
                    </a>
                </li>
                <li>
                    <a href="https://www.linkedin.com/in/elliott-brown-846466191/" target="_blank">
                        <img src="/assets/imgs/linkedin-blue.png" alt="LinkedIn">
                        <span>LinkedIn</span>
                    </a>
                </li>
            </div>
            <li>
                <a class="btn-outline" href="#contact">Contact</a>
            </li>
        </nav>
    </header>


    <div class="hero-title">
        <h1>Elliott Brown</h1>
        <h2>[web developer / software engineer]</h2>
    </div>
    <p class="hero-content">
        Hi, I'm Elliott — a New Zealand-based software engineer focused on web technologies, scripting, and Linux systems.
    </p>

    <ul class="my-projects">
        <li></li>
        <li>
            <!-- Project title -->
            <h3>
                Pletzer Lab Genome Browser
            </h3>

            <!-- Project overview/stats -->
            <div>
                <div>
                    <span>
                        Employer:
                    </span>
                    <a href="#" target="_blank">
                        University of Otago (Microbiology dept.)
                    </a>
                </div>
            </div>

            <!-- Project image -->
            <div>
                <img src='/assets/imgs/plgb-relA-full.png' />
            </div>

            <!-- Project description text -->
            <div>
                <p>
                    An interactive genome browser web-app and associated data-processing pipeline made for Pletzer Lab (University of Otago).
                </p>
                <p>
                    Researchers use it to visually analyse and compare the lab's bacterial experiments in an easy-to-use web interface.
                    This allows quick identification of differences between bacterial strains through gene expression patterns and
                    also provides detailed genomic information.
                </p>
                <p>
                    It can be re-built by the lab whenever new data becomes available.
                </p>
            </div>
        </li>

        <li>
            <!-- Project title -->
            <h3>
                Command Menu 2 (GNOME Linux extension)
            </h3>

            <!-- Project overview/stats -->
            <div>
                <div>
                    <span>
                        Source / Download:
                    </span>
                    <a href="https://github.com/goldentree1/gnome-command-menu-2" target="_blank">
                        GitHub Repository
                    </a>
                    <span> | </span>
                    <a href="https://extensions.gnome.org/extension/8490/command-menu-2/" target="_blank">
                        GNOME Extensions
                    </a>
                </div>
            </div>

            <!-- Project image -->
            <div>
                <img src="/assets/imgs/cmdmenu2-1.jpg" alt="Command Menu 2 screenshot" />
            </div>

            <!-- Project description text -->
            <div>
                <p>
                    An extension for the GNOME Linux desktop environment that adds a highly-customizable command menu to the top bar,
                    allowing users to quickly access apps, files, and custom scripts.
                </p>
                <p>
                    It is designed to streamline workflow for power users and can be fully customized with scripts, templates, and keyboard shortcuts.
                </p>
            </div>
        </li>
        <li>

        </li>
    </ul>

    <div class="my-projects-scrollzone">
    </div>
</main>

<footer id="contact" class="footer">

    <h1>Get in touch</h1>
    <p>I am currently looking for full-time or freelance work!</p>

    <div class="footer-body">
        <div class="footer-links-container">
            <ul class="footer-links">
                <li>
                    <a href="https://github.com/goldentree1" target="_blank">
                        <img src="/assets/imgs/github.svg" alt="Github">
                        <span>Github</span>
                    </a>
                </li>
                <li>
                    <a href="https://www.linkedin.com/in/elliott-brown-846466191/" target="_blank">
                        <img src="/assets/imgs/linkedin-blue.png" alt="LinkedIn">
                        <span>LinkedIn</span>
                    </a>
                </li>
                <li>
                    <a href="mailto:elliott.b1097@gmail.com">
                        <img src="/assets/imgs/email.svg" alt="Email">
                        <span>elliott.b1097@gmail.com</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- RIGHT SIDE -->
        <form action="contact.php" method="POST" class="footer-form">
            <div class="form-row">
                <label for="form-name">Name</label>
                <input id="form-name" type="text" name="name" placeholder="Name">
            </div>
            <div class="form-row">
                <label for="form-email">Email</label>
                <input id="form-email" type="email" name="email" placeholder="Email">
            </div>
            <div class="form-row">
                <label for="form-message">Message</label>
                <textarea id="form-message" name="message" placeholder="Message"></textarea>
            </div>
            <div class="btn-box">
                <button class="btn-outline" type="submit">Send</button>
            </div>
        </form>
    </div>

</footer>

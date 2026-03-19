<main>
    <header>
        <nav>
            <div class="left-links">
                <li>
                    <a href="<?= $site_data["github"] ?>" target="_blank">
                        <img src="/assets/imgs/github.svg" alt="Github">
                        <span>Github</span>
                    </a>
                </li>
                <li>
                    <a href="<?= $site_data["linkedIn"] ?>" target="_blank">
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
        <p class="hero-content">
            Computer Science graduate with hands-on experience building end-to-end systems across web technologies, low-level languages, and Linux environments.
            From frontend interfaces, to backend APIs and Linux servers: I do it all.
        </p>
    </div>

    <div class="my-projects-container">
        <ul class="my-projects">
            <li><h2>Work &<br>Projects:</h2></li>
            <li></li>
            <?php foreach ($site_data["projects"] as $project): ?>
                <li>
                    <div class="project-image">
                        <img src='<?= $project["imgs"][0] ?>' />
                        <div class="project-image-overlay">
                            <div>
                                <a href="<?= $project[
                                    "src"
                                ] ?>" target="_blank">
                                    Source Code
                                </a>
                            </div>
                            <?php if (isset($project["dist"])): ?>
                                <div>
                                    <a href="<?= $project[
                                        "dist"
                                    ] ?>" target="_blank">
                                        Live Website
                                    </a>
                                </div>
                            <?php endif; ?>
                            <?php if (isset($project["download"])): ?>
                                <div>
                                    <a href="<?= $project[
                                        "download"
                                    ] ?>" target="_blank">
                                        Official Download Page
                                    </a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <h3>
                        <?= $project["title"] ?>
                    </h3>

                    <div class="project-context">
                        <?php if (isset($project["employer"])): ?>
                            <span class="project-meta-muted">Employer:</span>
                            <a href="<?= $project["employer"][
                                "url"
                            ] ?>" target="_blank">
                                <?= $project["employer"]["title"] ?>
                            </a>
                        <?php else: ?>
                            <span class="project-meta-muted">
                                <?= $project["type"] === "open-source"
                                    ? "(Open-source project)"
                                    : "(Personal project)" ?>
                            </span>
                        <?php endif; ?>
                    </div>

                    <div>
                        <p>
                            <?= $project["description"] ?>
                        </p>
                    </div>

                    <div class="project-tech-inline">
                        <?php
                        $allTech = array_merge(
                            $project["tech"]["languages"],
                            $project["tech"]["libs"],
                        );
                        foreach ($allTech as $i => $tech): ?>
                            <span class="tech"><?= $tech ?></span><?= $i <
count($allTech) - 1
    ? ","
    : "" ?>
                        <?php endforeach;
                        ?>
                    </div>
                </li>
            <?php endforeach; ?>

            <li>
                <div style="margin: auto;">
                    <a style="display: flex; align-items: center; gap: 1.1rem;" href="<?= $site_data[
                        "github"
                    ] ?>" target="_blank">
                        <img style="width: 5rem;" src="/assets/imgs/github.svg" alt="Github">
                        <span>See more on my Github<br>&nbsp;&nbsp;&nbsp;--------------></span>
                    </a>
                </div>
            </li>
            <li></li>
        </ul>
    </div>
    <div class="my-projects-scrollzone"></div>
</main>

<footer id="contact" class="footer">

    <h2>Get in touch</h2>
    <p>I am currently looking for full-time or freelance work!</p>

    <div class="footer-body">
        <div class="footer-links-container">
            <ul class="footer-links">
                <li>
                    <a href="<?= $site_data["github"] ?>" target="_blank">
                        <img src="/assets/imgs/github.svg" alt="Github">
                        <span>Github</span>
                    </a>
                </li>
                <li>
                    <a href="<?= $site_data["linkedIn"] ?>" target="_blank">
                        <img src="/assets/imgs/linkedin-blue.png" alt="LinkedIn">
                        <span>LinkedIn</span>
                    </a>
                </li>
                <li>
                    <a href="mailto:<?= $site_data["email"] ?>">
                        <img src="/assets/imgs/email.svg" alt="Email">
                        <span><?= $site_data["email"] ?></span>
                    </a>
                </li>
            </ul>
        </div>

        <form action="submit.php" method="POST" class="footer-form">
            <div class="form-row">
                <label for="form-name">Name</label>
                <input id="form-name" type="text" name="name" placeholder="Name" required>
            </div>
            <div class="form-row">
                <label for="form-email">Email</label>
                <input id="form-email" type="email" name="email" placeholder="Email" required>
            </div>
            <div class="form-row">
                <label for="form-message">Message</label>
                <textarea id="form-message" name="message" placeholder="Message" required></textarea>
            </div>
            <div class="btn-box">
                <button class="btn-outline" type="submit">Send Message</button>
            </div>
        </form>
    </div>

</footer>

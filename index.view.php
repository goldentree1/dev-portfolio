<main>

    <!--<div class="spacer-6" style="height: 6rem;"></div>-->

    <!--TODO: HTML Semantics:: should this be h1/h2 or spans?-</span>-->
    <!--tailwindcss-dep-->
    <h1 id="my-title" class="my-title">
        <!--<a class="linked-in" href="https://www.linkedin.com/in/elliott-brown-846466191/">
            <img src="assets/images/linkedin-icon.png" alt="LinkedIn" class="linked-in-icon">
        </a>-->
        <span class="my-name">Elliott Brown</span>
        <!--tailwindcss-dep-->
        <span class="my-job-title font-mono">[Full-stack web developer]</span>
    </h1>

    <!--<div class="spacer-6" style="height: 6rem;"></div>-->

    <!-- temporarily remove this :-( its less important TODO finish it -->
    <p class="my-paragraph text-center">
            I love creating and coding all things <strong>web</strong>.<br>
            Check out some examples of my work below..
        <span>
        </span>
    </p>
    <!--<p class="my-paragraph text-center">
        <span>
            I love creating and coding all things web.<br>
            I am most experienced in making web applications with <strong>NodeJS</strong>, <strong>PostgreSQL</strong> and <strong>React</strong>.<br>
            but I am comfortable with picking up new technologies: I've been trying my hand at <strong>Go</strong> and <strong>PHP</strong> lately.<br>
            Check out some examples of my work below...
        </span>
    </p>-->
    <!--<ul class="my-skills">
        <li>from frontend design, page structure & interactivity...</li>
        <li>...backend APIs, databases & automation...</li>
        <li>...all the way down to Linux, servers & networking.</li>
    </ul>-->

    <!--<h2 class="text-center">Check out my work...</h2>-->
    <ul class="my-projects">
        <?php foreach ($projects as $project): ?>
            <li>
                <h3>
                    <?= $project["title"] ?>
                </h3>
                <div class="my-project-stats">
                    <?php if (
                        array_key_exists("employer", $project) &&
                        $project["employer"] &&
                        array_key_exists("employerUrl", $project) &&
                        $project["employerUrl"]
                    ): ?>
                        <div>
                            <span>
                                Employer:
                            </span>
                            <a href="<?= $project[
                                "employerUrl"
                            ] ?>" target="_blank">
                                <?= $project["employer"] ?>
                            </a>
                        </div>
                    <?php else: ?>
                        <span>
                            (personal project)
                        </span>
                    <?php endif; ?>
                </div>
                <div class="my-project-content">
                    <?php if (
                        array_key_exists("imgUrls", $project) &&
                        count($project["imgUrls"]) > 0
                    ): ?>
                        <?php foreach ($project["imgUrls"] as $imgUrl): ?>
                            <img src='<?= $imgUrl ?>' />
                        <?php endforeach; ?>
                    <?php endif; ?>
                    <p><?= $project["description"] ?></p>
                </div>


                <!--tailwind dependent -->
                <!--<div class="my-project-links">
                    <a href='<?= $project["srcUrl"] ?>'>
                        <img src='' />
                        Source Code
                    </a>
                    <?php if ($project["siteUrl"] ?? null): ?>
                        <a href='<?= $project["siteUrl"] ?>'>
                            <img src='' />
                            Live Website
                        </a>
                    <?php endif; ?>
                    <?php if ($project["downloadUrl"] ?? null): ?>
                        <a href='<?= htmlspecialchars(
                            $project["downloadUrl"],
                        ) ?>'>
                            <img src='' />
                            Official Download Page
                        </a>
                    <?php endif; ?>
                </div>-->
            </li>
        <?php endforeach; ?>

    </ul>
    <div class="my-projects-scrollzone">
    </div>
</main>
<footer id="footer" class="footer">
    <h2 class="text-center">Get in touch</h2>
    <a type="email" href="mailto://elliott.b1097@gmail.com">
        Email me at elliott.b1097@gmail.com
    </a>
    <div>
        or use the form below
    </div>
    <form>
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="Name" />
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="Email" />
        </div>
        <div>
            <label for="message">Message</label>
            <textarea name="message" placeholder="Message"></textarea>
        </div>
        <div>
            <button type="submit">Send</button>
        </div>
    </form>
</footer>

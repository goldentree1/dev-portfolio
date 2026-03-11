<main>
    <!--TODO: HTML Semantics:: should this be h1/h2 or spans?-</span>-->
    <!--tailwindcss-dep-->
    <h1 class="my-title shadow shadow-xl">
        <span class="my-name">Elliott Brown</span>

        <!--tailwindcss-dep-->
        <span class="my-job-title font-mono">[Full-stack web developer]</span>
    </h1>

    <p class="pt-6">
        <span class="text-center m-0-auto d-block">
            I love programming all things web:
        </span>
        <ul class="my-skills">
            <li>from frontend design, page structure & interactivity...</li>
            <li>...backend APIs, databases & automation...</li>
            <li>...all the way down to Linux, servers & networking.</li>
        </ul>
    </p>

    <h2 class="h2 text-center">Check out my work...</h2>
    <!--tailwindcss-dep-->
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
                <div class="my-project-links">
                    <a href='<?= $project["srcUrl"] ?>'>
                        <img src='' />
                        Source Code
                    </a>
                    <?php if (
                        array_key_exists("siteUrl", $project) &&
                        $project["siteUrl"]
                    ): ?>
                        <a href='<?= $project["siteUrl"] ?>'>
                            <img src='' />
                            Live Website
                        </a>
                    <?php endif; ?>
                    <?php if (
                        array_key_exists("downloadUrl", $project) &&
                        $project["downloadUrl"]
                    ): ?>
                        <a href=''>
                            <img src='' />
                            Official Download Page
                        </a>
                    <?php endif; ?>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
    <div class="container">
        <h2 class="h2 text-center">Get in touch</h2>
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
    </div>
</main>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>EBMEDIA Web Development</title
</head>
<body>

<main>
    <h1><span>Elliott Brown</span> - <span>Full stack web developer</span></h1>
    <div>
    	<p>
       	Hi, my name is Elliott Brown.
       	I love programming all things web:
            <ul>
                <li>from frontend design, markup, styling, & scripting</li>
                <li>backend API development & automation</li>
                <li>all the way down to Linux, & networking.  </li>
            </ul>
    	</p>
    </div>
    <div>
    	<h2>Check out a few of my creations...</h2>
    	<div class="carousel">
    	    <div class="card">
                <?php foreach ($projects as $project): ?>
                    <div>
             			<h3>
                            <?= $project["title"] ?>
                        </h3>
                        <img src='<?= $project["srcUrl"] ?>' />
              		</div>
                    <div>
                        <a href='<?= $project["srcUrl"] ?>'>
                            <img src='' />
                            Source Code
                        </a>
                        <?php if (
                            array_key_exists("siteUrl", $project) &&
                            $project["siteUrl"]
                        ): ?>
                            <a href=''>
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
                <?php endforeach; ?>
    		</div>
     </div>
    </div>
    <div>
        <h2>Get in touch</h2>
        <a type="email" href="mailto://elliott.b1097@gmail.com">
            Email us at elliott.b1097@gmail.com
        </a>
        <span>
            or send us a message below
        </span>
        <form>

        </form>
    </div>
</main>

</body>
</html>

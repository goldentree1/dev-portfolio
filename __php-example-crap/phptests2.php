<!DOCTYPE html>
<?php require "partials/head.php"; ?>
<html>

<body>

<!-- Define projects to show -->
<?php $projects = [
    "Genome Browser (for University of Otago's Microbiology Department)",
    "Command Menu 2 (GNOME Linux Desktop Extension)",
    "Stcsurf (my personal surf forecast for St Clair)",
]; ?>

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
            <h2>FOREACH loop</h2>
            <!-- Here's ugly string way of doing it... -->
    	    <div class="card">

                <?php echo "((" . "First item is: " . $projects[0] . "))"; ?>

                <?php foreach ($projects as $project) {
                    $echo_me = "
                    <div>
             			<h3>$project</h3>
                        <img src='' />
              		</div>
                    <div>
         			    <a href=''><img src='' />Source Code</a>
                        <a href=''><img src='' />Live Website</a>
                    </div>";
                    echo $echo_me;
                } ?>
    		</div>

            <!-- More clean way (we still need that ugly ?= for adding text vars) -->
            <ul>
                <?php foreach ($projects as $project): ?>
                <li><?= "$project" ?></li>
                <?php endforeach; ?>
           	</ul>

            <!-- standard FOR loop example -->
            <h2>Standard FOR loop</h2>
            <ul>
                <?php for ($i = 0; $i < 5; $i++): ?>
                    <li>
                        <?= "Item: " . ($i + 1) ?>
                    </li>
                <?php endfor; ?>
            </ul>
     </div>
    </div>
    <div>
        <h2>Get in touch</h2>
        <a type="email" href="mailto://elliott.b1097@gmail.com">
            Email us at elliott.b1097@gmail.com
        </a>
        <span>
            or
        </span>
        <form>

        </form>
    </div>
</main>

<?php include "includes/footer.php"; ?>

</body>
</html>

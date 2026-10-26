
<?php
$name = "PJ CABREROS";
$role = "Web Developer & Anime Enthusiast";

$about = "I am a passionate developer who loves coding,
designing creative websites, and watching Demon Slayer.";

$skills = ["HTML", "CSS", "PHP", "JavaScript", "MySQL"];

$projects = [
    [
        "title" => "Anime Website",
        "desc" => "An anime-themed website."
    ],
    [
        "title" => "Portfolio System",
        "desc" => "A personal portfolio project."
    ],
    [
        "title" => "Login System",
        "desc" => "A PHP and MySQL login application."
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo htmlspecialchars($name); ?> | Portfolio</title>

    <!-- Connect external CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

<header class="hero" id="home">

    <nav>
        <div class="logo">SLAYER.DEV</div>

        <div class="nav-links">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#skills">Skills</a>
            <a href="#projects">Projects</a>
            <a href="#contact">Contact</a>
        </div>
    </nav>

    <div class="hero-content">
        <h3>WELCOME TO MY WORLD</h3>

        <h1>
            Hi, I'm
            <span><?php echo htmlspecialchars($name); ?></span>
        </h1>

        <h2><?php echo htmlspecialchars($role); ?></h2>

        <p><?php echo htmlspecialchars($about); ?></p>

        <a href="#projects" class="btn">EXPLORE MY WORK</a>
    </div>

</header>

<section class="about" id="about">
    <h2 class="section-title">About <span>Me</span></h2>

    <p>
        <?php echo nl2br(htmlspecialchars($about)); ?>
        I believe every project is an opportunity to learn,
        improve my skills, and create something extraordinary.
    </p>
</section>

<section id="skills">
    <h2 class="section-title">My <span>Skills</span></h2>

    <div class="skills-grid">
        <?php foreach ($skills as $skill): ?>
            <div class="skill">
                <?php echo htmlspecialchars($skill); ?>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<section id="projects">
    <h2 class="section-title">My <span>Projects</span></h2>

    <div class="projects-grid">
        <?php foreach ($projects as $project): ?>
            <div class="project">
                <h3>
                    <?php echo htmlspecialchars($project["title"]); ?>
                </h3>

                <p>
                    <?php echo htmlspecialchars($project["desc"]); ?>
                </p>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<section class="contact" id="contact">
    <h2 class="section-title">Contact <span>Me</span></h2>

    <p>Want to work together on a project?</p>

    <p>
        Email:
        <a href="mailto:petsmlbb@gmail.com">
          petsmlbb@gmail.com
        </a>
    </p>

    <a href="mailto:petsmlbb@gmai.com" class="btn">
        SEND ME AN EMAIL
    </a>
</section>

<footer>
    <p>
        &copy; <?php echo date("Y"); ?>
        <?php echo htmlspecialchars($name); ?>.
        Built with PHP and passion.
    </p>
</footer>

</body>
</html>
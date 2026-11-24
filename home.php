<?php
$pageTitle = 'Northstar Studio — Thoughtful digital experiences';
$currentPage = basename($_SERVER['PHP_SELF'] ?? 'home.php');

$navigation = [
    ['label' => 'Home', 'href' => 'home.php'],
    ['label' => 'About', 'href' => 'about.html'],
    ['label' => 'Services', 'href' => 'services.html'],
    ['label' => 'Work', 'href' => 'portfolio.html'],
    ['label' => 'Founders', 'href' => 'founders.html'],
];

$services = [
    [
        'number' => '01',
        'title' => 'Brand & strategy',
        'description' => 'Find your point of difference and turn it into a clear, memorable brand.',
        'icon' => '✳',
    ],
    [
        'number' => '02',
        'title' => 'Web design',
        'description' => 'Create a considered digital experience that feels effortless to use.',
        'icon' => '↗',
    ],
    [
        'number' => '03',
        'title' => 'Development',
        'description' => 'Build a fast, reliable website that is ready to grow with your business.',
        'icon' => '⌘',
    ],
];

$projects = [
    [
        'category' => 'Branding · Digital',
        'name' => 'Form & Field',
        'description' => 'A fresh perspective for a modern interiors studio.',
        'class' => 'project-card--clay',
        'monogram' => 'F/F',
    ],
    [
        'category' => 'Strategy · Website',
        'name' => 'Goodkind',
        'description' => 'A brighter online home for better everyday food.',
        'class' => 'project-card--sage',
        'monogram' => 'g.',
    ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Northstar Studio creates thoughtful brands and digital experiences for ambitious businesses.">
    <meta name="theme-color" content="#f7f7f2">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="all.css/home.css">
</head>
<body id="top">
    <header class="site-header">
        <div class="container header-inner">
            <a class="brand" href="home.php" aria-label="Northstar Studio home">
                <span class="brand-mark" aria-hidden="true">N</span>
                <span class="brand-name">northstar<span>®</span></span>
            </a>

            <nav class="main-nav" aria-label="Main navigation">
                <?php foreach ($navigation as $item): ?>
                    <a
                        href="<?= htmlspecialchars($item['href'], ENT_QUOTES, 'UTF-8') ?>"
                        <?= $currentPage === $item['href'] ? 'aria-current="page"' : '' ?>
                    ><?= htmlspecialchars($item['label'], ENT_QUOTES, 'UTF-8') ?></a>
                <?php endforeach; ?>
            </nav>

            <a class="button button--small header-cta" href="contact.html">
                Let’s talk <span aria-hidden="true">↗</span>
            </a>
        </div>
    </header>

    <main>
        <section class="hero">
            <div class="container hero-grid">
                <div class="hero-copy">
                    <p class="eyebrow"><span class="eyebrow-dot"></span> Independent creative studio</p>
                    <h1>Make your next move <span>matter.</span></h1>
                    <p class="hero-description">
                        We help ambitious businesses find their voice, build their presence,
                        and make a lasting impression online.
                    </p>
                    <div class="hero-actions">
                        <a class="button" href="contact.html">Start a project <span aria-hidden="true">↗</span></a>
                        <a class="text-link" href="#work">Explore our work <span aria-hidden="true">↓</span></a>
                    </div>
                    <div class="hero-note">
                        <div class="avatar-stack" aria-hidden="true">
                            <span>J</span><span>M</span><span>A</span>
                        </div>
                        <p><strong>Good people, good work.</strong><br>Small team. Thoughtful by design.</p>
                    </div>
                </div>

                <div class="hero-art" aria-label="Abstract illustration of a north star">
                    <div class="art-orbit art-orbit--one"></div>
                    <div class="art-orbit art-orbit--two"></div>
                    <div class="art-sun"><span>✳</span></div>
                    <div class="art-caption art-caption--top">A clearer direction</div>
                    <div class="art-caption art-caption--bottom">Since 2018 · Everywhere</div>
                    <div class="art-spark art-spark--one">✳</div>
                    <div class="art-spark art-spark--two">✦</div>
                </div>
            </div>
            <div class="container hero-bottom">
                <span>Strategy with a point of view</span>
                <span class="hero-bottom-line"></span>
                <span>Design made to move you forward</span>
            </div>
        </section>

        <section class="services section" id="services">
            <div class="container">
                <div class="section-heading">
                    <div>
                        <p class="eyebrow">What we do</p>
                        <h2>Good work starts<br>with a <span>clear idea.</span></h2>
                    </div>
                    <p class="section-intro">
                        From the first big question to the final detail, we bring strategy,
                        creativity, and craft together to help your business stand out.
                    </p>
                </div>

                <div class="service-grid">
                    <?php foreach ($services as $service): ?>
                        <article class="service-card">
                            <div class="service-card-top">
                                <span class="service-number"><?= htmlspecialchars($service['number'], ENT_QUOTES, 'UTF-8') ?></span>
                                <span class="service-icon" aria-hidden="true"><?= htmlspecialchars($service['icon'], ENT_QUOTES, 'UTF-8') ?></span>
                            </div>
                            <h3><?= htmlspecialchars($service['title'], ENT_QUOTES, 'UTF-8') ?></h3>
                            <p><?= htmlspecialchars($service['description'], ENT_QUOTES, 'UTF-8') ?></p>
                            <a class="card-link" href="services.html" aria-label="Learn more about <?= htmlspecialchars($service['title'], ENT_QUOTES, 'UTF-8') ?>">Learn more <span aria-hidden="true">↗</span></a>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section class="work section" id="work">
            <div class="container">
                <div class="section-heading section-heading--work">
                    <div>
                        <p class="eyebrow">Selected work</p>
                        <h2>Made with purpose.<br><span>Built to last.</span></h2>
                    </div>
                    <a class="text-link" href="portfolio.html">View all projects <span aria-hidden="true">↗</span></a>
                </div>

                <div class="project-grid">
                    <?php foreach ($projects as $project): ?>
                        <a class="project-card <?= htmlspecialchars($project['class'], ENT_QUOTES, 'UTF-8') ?>" href="portfolio.html">
                            <div class="project-art" aria-hidden="true">
                                <span class="project-monogram"><?= htmlspecialchars($project['monogram'], ENT_QUOTES, 'UTF-8') ?></span>
                                <span class="project-orb"></span>
                                <span class="project-orb project-orb--small"></span>
                                <span class="project-arrow">↗</span>
                            </div>
                            <div class="project-details">
                                <div>
                                    <p class="project-category"><?= htmlspecialchars($project['category'], ENT_QUOTES, 'UTF-8') ?></p>
                                    <h3><?= htmlspecialchars($project['name'], ENT_QUOTES, 'UTF-8') ?></h3>
                                </div>
                                <p class="project-description"><?= htmlspecialchars($project['description'], ENT_QUOTES, 'UTF-8') ?></p>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section class="approach">
            <div class="container approach-inner">
                <div class="approach-symbol" aria-hidden="true">N<span>✳</span></div>
                <div class="approach-copy">
                    <p class="eyebrow">A little about us</p>
                    <h2>Small by choice.<br><span>Big on perspective.</span></h2>
                    <p>
                        We’re a close-knit team of strategists, designers, and developers who
                        believe the best work comes from paying attention—and working together.
                    </p>
                    <a class="button button--light" href="about.html">Get to know us <span aria-hidden="true">↗</span></a>
                </div>
                <div class="approach-stats">
                    <div><strong>08</strong><span>years creating</span></div>
                    <div><strong>42</strong><span>brands moved forward</span></div>
                    <div><strong>01</strong><span>team, all in</span></div>
                </div>
            </div>
        </section>

        <section class="contact-cta" id="contact">
            <div class="container contact-inner">
                <p class="eyebrow">Have a good one in mind?</p>
                <h2>Let’s make<br><span>something matter.</span></h2>
                <a class="button" href="contact.html">Tell us about it <span aria-hidden="true">↗</span></a>
                <span class="cta-star" aria-hidden="true">✳</span>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="container footer-main">
            <a class="brand brand--footer" href="home.php" aria-label="Northstar Studio home">
                <span class="brand-mark" aria-hidden="true">N</span>
                <span class="brand-name">northstar<span>®</span></span>
            </a>
            <p>Thoughtful brands.<br>Digital that delivers.</p>
            <a class="footer-email" href="mailto:hello@northstar.studio">hello@northstar.studio <span aria-hidden="true">↗</span></a>
        </div>
        <div class="container footer-bottom">
            <span>© <?= date('Y') ?> Northstar Studio</span>
            <span>Independent by nature. Better together.</span>
            <a href="#top">Back to top ↑</a>
        </div>
    </footer>
</body>
</html>

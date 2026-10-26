<?php

require_once __DIR__ . '/config/database.php';

$stmt = $pdo->query(
    'SELECT * FROM news_posts ORDER BY published_at DESC, id DESC LIMIT 3'
);

$posts = $stmt->fetchAll();

$pageTitle = 'Full Service Digital Agency | Cambridgeshire & Norfolk | Netmatters';
?>

<!DOCTYPE html>
<html lang="en">
<?php require __DIR__ . '/includes/head.php'; ?>
<body>
    <?php require __DIR__ . '/includes/icons.php'; ?>
    <?php require __DIR__ . '/includes/cookies.php'; ?>
    <div class="page-wrapper">
        <?php require __DIR__ . '/includes/header.php'; ?>
        <section class="banner-slider">
            <div class="banner-slide">
                <div class="banner banner-main">
                    <div class="container">
                        <div class="content">
                            <div class="text">
                                <h1> The East Of England's Leading Technology Company </h1>
                                <p>
                                    Performance-driven digital and technology services
                                    <br>
                                    with complete transparency.
                                </p>
                                <a href="#" target="_blank"
                                class="btn btn-primary-inverse btn-choose">
                                    WHY CHOOSE US?
                                    <svg class="icon icon-arrow-right2">
                                        <use xlink:href="#icon-arrow-right2"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-slide">
                <div class="banner banner-software">
                    <div class="container">
                        <div class="content">
                            <div class="text">
                                <h1> Bespoke Software </h1>
                                <p>
                                    Delivering expert bespoke software
                                    <br>
                                    solutions across a range of industries.
                                </p>
                                <a href="#" target="_blank"
                                class="btn btn-primary-inverse btn-software">
                                    FIND OUT MORE
                                    <svg class="icon icon-arrow-right2">
                                        <use xlink:href="#icon-arrow-right2"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-slide">
                <div class="banner banner-it">
                    <div class="container">
                        <div class="content">
                            <div class="text">
                                <h1> It Support </h1>
                                <p>
                                    Fast and cost effective IT support
                                    <br>
                                    services for your business.
                                </p>
                                <a href="#" target="_blank"
                                class="btn btn-primary-inverse btn-it">
                                    FIND OUT MORE
                                    <svg class="icon icon-arrow-right2">
                                        <use xlink:href="#icon-arrow-right2"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-slide">
                <div class="banner banner-digital">
                    <div class="container">
                        <div class="content">
                            <div class="text">
                                <h1> Digital Marketing </h1>
                                <p>
                                    Generating your new business through
                                    <br>
                                    results-driven marketing activities.
                                </p>
                                <a href="#" target="_blank"
                                class="btn btn-primary-inverse btn-digital">
                                    FIND OUT MORE
                                    <svg class="icon icon-arrow-right2">
                                        <use xlink:href="#icon-arrow-right2"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-slide">
                <div class="banner banner-telecom">
                    <div class="container">
                        <div class="content">
                            <div class="text">
                                <h1> Telecom Services </h1>
                                <p>
                                    A new approach to connectivity, see
                                    <br>
                                    how we can help your business.
                                </p>
                                <a href="#" target="_blank"
                                class="btn btn-primary-inverse btn-telecoms">
                                    FIND OUT MORE
                                    <svg class="icon icon-arrow-right2">
                                        <use xlink:href="#icon-arrow-right2"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-slide">
                <div class="banner banner-web">
                    <div class="container">
                        <div class="content">
                            <div class="text">
                                <h1> Web Design </h1>
                                <p>
                                    For businesses looking to make a strong
                                    <br>
                                    and effective first impression.
                                </p>
                                <a href="#" target="_blank"
                                class="btn btn-primary-inverse btn-choose">
                                    FIND OUT MORE
                                    <svg class="icon icon-arrow-right2">
                                        <use xlink:href="#icon-arrow-right2"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-slide">
                <div class="banner banner-security">
                    <div class="container">
                        <div class="content">
                            <div class="text">
                                <h1>Cyber Security</h1>
                                <p>
                                    Keeping businesses and their customers
                                    <br>
                                    sensitive information protected.
                                </p>
                                <a href="#" target="_blank"
                                class="btn btn-primary-inverse btn-security">
                                    FIND OUT MORE
                                    <svg class="icon icon-arrow-right2">
                                        <use xlink:href="#icon-arrow-right2"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="middle">
            <div class="container section">
                <div class="services-header">
                    <h2>Our Services</h2>
                </div>
                <div class="our-services-lg">
                    <a href="#" class="block software" style="width: 100%;">
                        <span class="icon"><svg class="icon-laptop"><use xlink:href="#icon-laptop"></use></svg></span>
                        <span class="h2"> Consultancy & Development</span>
                        <span class="p">Bespoke software solutions &amp; consultancy for all your business needs including integrations and reporting.</span>
                        <span class="btn btn-software"> Read More </span>
                    </a>
                </div>
                <div class="our-services-lg">
                    <a href="#" class="block it" style="width: 100%;">
                        <span class="icon"><svg class="icon-display"><use xlink:href="#icon-display"></use></svg></span>
                        <span class="h2"> IT Support </span>
                        <span class="p">Fully managed IT support &amp; consultancy packages tailored to meet your exact business needs.</span>
                        <span class="btn btn-it"> Read More </span>
                    </a>
                </div>
                <div class="our-services-lg">
                    <a href="#" class="block digital" style="width: 100%;">
                        <span class="icon"><svg class="icon-bar-graph"><use xlink:href="#icon-bar-graph"></use></svg></span>
                        <span class="h2"> Digital Marketing </span>
                        <span class="p">Driven brand awareness &amp; ROI through creative digital marketing campaigns.</span>
                        <span class="btn btn-digital"> Read More </span>
                    </a>
                </div>
                <div class="our-services-md">
                    <a href="#" class="block telecoms" style="width: 100%;">
                        <span class="icon"><svg class="icon-phone_in_talk"><use xlink:href="#icon-phone_in_talk"></use></svg></span>
                        <span class="h2"> Telecom Services </span>
                        <span class="p">Business telephony solutions including mobile &amp; connectivity solutions.</span>
                        <span class="btn btn-telecoms"> Read More </span>
                    </a>
                </div>
                <div class="our-services-md">
                    <a href="#" class="block web" style="width: 100%;">
                        <span class="icon"><svg class="icon-embed2"><use xlink:href="#icon-embed2"></use></svg></span>
                        <span class="h2"> Web Design </span>
                        <span class="p">User-centric design for businesses looking to make a lasting impression.</span>
                        <span class="btn btn-web"> Read More </span>
                    </a>
                </div>
                <div class="our-services-md">
                    <a href="#" class="block security" style="width: 100%;">
                        <span class="icon"><svg class="icon-security"><use xlink:href="#icon-security"></use></svg></span>
                        <span class="h2"> Cyber Security </span>
                        <span class="p">Prevention, testing, consultancy &amp; breach management services.</span>
                        <span class="btn btn-security"> Read More </span>
                    </a>
                </div>
                <div class="our-services-md">
                    <a href="#" class="block developer-course" style="width: 100%;">
                        <span class="icon"><svg class="icon-school"><use xlink:href="#icon-school"></use></svg></span>
                        <span class="h2"> Developer Training </span>
                        <span class="p">Web design &amp; software training courses designed to secure a job in tech.</span>
                        <span class="btn btn-developer-course"> Read More </span>
                    </a>
                </div>
                <div class="services-view-all">
                    <a href="#">View Our Work<svg class="icon-arrow-right2"><use xlink:href="#icon-arrow-right2"></use></svg></a>
                </div>
            </div>
        </section>
        <section class="partners">
            <h2 class="hidden">Accreditations</h2>

            <div class="partnercase-image partners-slider">
                <div class="partner-item">
                    <img src="img/Partners/google-partner.webp" alt="Google Partners">
                </div>

                <div class="partner-item">
                    <img src="img/Partners/GBC-colour.webp" alt="Good Business Charter">
                </div>

                <div class="partner-item">
                    <img src="img/Partners/norfolk_prohelp.webp" alt="Norfolk Prohelp logo">
                </div>

                <div class="partner-item">
                    <img src="img/Partners/investing-in-future-growth.webp" alt="Investing In Future Growth">
                </div>

                <div class="partner-item">
                    <img src="img/Partners/norfolk-carbon-charter.webp" alt="Norfolk Carbon Charter">
                </div>

                <div class="partner-item">
                    <img src="img/Partners/PPC_logo.webp" alt="Prompt Payment Code">
                </div>

                <div class="partner-item">
                    <img src="img/Partners/princess-royal-training.webp" alt="Princess Royal Training Award">
                </div>

                <div class="partner-item">
                    <img src="img/Partners/future-50.webp" alt="Future 50">
                </div>

                <div class="partner-item">
                    <img src="img/Partners/iso-27001.webp" alt="Iso 27001 Certification">
                </div>

                <div class="partner-item">
                    <img src="img/Partners/qms.webp" alt="Iso 9001 Certification">
                </div>

                <div class="partner-item">
                    <img src="img/Partners/skills-of-tomorrow.webp" alt="Skills of Tomorrow">
                </div>

                <div class="partner-item">
                    <img src="img/Partners/cyber-essentials-colour.webp" alt="Cyber Essentials">
                </div>
            </div>
        </section>
        <section class="about">
            <div class="container section">
                <div class="welcome">
                    <h2><strong>Welcome To Netmatters</strong></h2>

                    <p ><strong>Netmatters is a leading <a href="#">Bespoke Software</a>, <a href="#">IT Support</a>, and <a href="#">Digital Marketing</a> company based in the East of England with offices in <a href="#">Cambridge</a>, <a href="#">Wymondham</a>, and <a href="#">Great Yarmouth</a>.</strong></p>
                    <p>We aren't tied into contracts with third-party providers, so you know that our recommendations for your business are based purely with one benefit in mind: to help improve your business with the most appropriate solutions.</p>
                    <p>We pride ourselves on being an ethical business and have a unique business offering and cost model that ensures you get the most from our relationship in an upfront manner.</p>
                    <div class="button-row-top">
                        <a href="#" target="_blank" class="btn btn-primary-inverse btn-choose">WHY CHOOSE US?<svg class="icon icon-arrow-right2"><use xlink:href="#icon-arrow-right2"></use></svg></a>
                        <a href="#" target="_blank" class="btn btn-primary-inverse btn-culture">OUR CULTURE<svg class="icon icon-arrow-right2"><use xlink:href="#icon-arrow-right2"></use></svg></a>
                    </div>
                </div>
                <div class="testimonials">
                    <h2><strong>What Our Clients Think</strong></h2>
                    <div class="stars">
                        <div class="fa fa-star"></div>
                        <div class="fa fa-star"></div>
                        <div class="fa fa-star"></div>
                        <div class="fa fa-star"></div>
                        <div class="fa fa-star"></div>
                    </div>

                    <p><span class="client-quote">Netmatters stood out from the start. Great guys and very easy to work with. Both the build and digital marketing teams are clearly skilled -they know their stuff! They delivered a website to our (high!) expectations and went over and above to ensure we were satisfied clients - and we are!</span></p>
                    <p><span class="client-quote-author"> Eleanor Bishop, Head of Marketing - <a href="#">Ashcroft Partnership LLP</a></span></p>
                    <div class="review-buttons">
                        <a href="#" target="_blank" class="btn btn-primary btn-google">Google Reviews <svg class="icon icon-arrow-right2"><use xlink:href="#icon-arrow-right2"></use></svg></a>
                        <a href="#" target="_blank" class="btn btn-primary btn-trustpilot">TrustPilot Reviews <svg class="icon icon-arrow-right2"><use xlink:href="#icon-arrow-right2"></use></svg></a>
                    </div>
                </div>
            </div>
        </section>
        <section class="news">
            <div class="latest-articles">
                <div class="bar">
                    <div class="container">
                        <div class="headings-container">
                            <h2><strong>Latest News</strong></h2>
                            <h3 class="view-all-top">
                                <a href="#" class="view-all"><strong>View All<svg class="icon icon-arrow-right2"><use xlink:href="#icon-arrow-right2"></use></svg></strong></a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="section">
                    <div class="container">
                        <div class="article-list">
                            <div class="row">
                                <div class="article-container">
                                    <?php foreach ($posts as $index => $post): ?>
                                        <?php $isCareer = $post['category'] === 'Careers'; ?>

                                        <div class="A<?= $index + 1 ?>">
                                            <div class="img-container">
                                                <a
                                                    href="#"
                                                    class="btn-tooltip<?= $isCareer ? ' careers' : '' ?>"
                                                    title="View all: <?= htmlspecialchars($post['category']) ?>"
                                                >
                                                    <?= htmlspecialchars($post['category']) ?>
                                                </a>

                                                <a class="img standard">
                                                    <img
                                                        src="<?= htmlspecialchars($post['image_path']) ?>"
                                                        alt="<?= htmlspecialchars($post['image_alt']) ?>"
                                                    >
                                                </a>
                                            </div>

                                            <div class="block">
                                                <h3>
                                                    <a href="#" class="<?= $isCareer ? 'career' : 'insights' ?>">
                                                        <?= htmlspecialchars($post['title']) ?>
                                                    </a>
                                                </h3>

                                                <p><?= htmlspecialchars($post['excerpt']) ?></p>

                                                <a
                                                    class="btn btn-<?= htmlspecialchars($post['service']) ?>"
                                                    href="#"
                                                >
                                                    Read More
                                                </a>

                                                <div class="user">
                                                    <div class="avatar">
                                                        <img
                                                            src="<?= htmlspecialchars($post['author_image']) ?>"
                                                            alt="<?= htmlspecialchars($post['author_name']) ?>"
                                                        >
                                                    </div>

                                                    <div class="details">
                                                        <strong class="text-primary">
                                                            Posted by <?= htmlspecialchars($post['author_name']) ?>
                                                        </strong>
                                                        <br>
                                                        <?= date('jS F Y', strtotime($post['published_at'])) ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="view-all-link">
                    <h3><a href="#" class="view-all">View All <strong><svg class="icon icon-arrow-right2"><use xlink:href="#icon-arrow-right2"></use></svg></strong></a></h3>
                </div>
            </div>
        </section>
        <section class="case-studies">
            <div class="partnercase-image case-studies-slider">
                <div class="case-item">
                    <div class="box">
                        <h3>Ashcroft Partnership LLP</h3>
                        <p>Originally founded in 2006 as Ashcroft Anthony, they became Ashcroft Partnership LLP in 2020 and are one of the top chartered accountancy firms in Cambridge, advising entrepreneurs and families.</p>
                        <a href="#" class="btn btn-web">View Our Case Study<svg class="icon icon-arrow-right2"><use xlink:href="#icon-arrow-right2"></use></svg></a>
                        <div class="arrow"></div>
                    </div>
                    <img src="img/CaseStudies/ashcroftlogo.webp" alt="Ashcroft Logo">
                </div>
                <div class="case-item">
                    <div class="box">
                        <h3>One Traveller</h3>
                        <p><a href="#">One Traveller</a>, founded in 2007, is a leading provider of solo holidays for over 50s.</p>
                        <a href="#" class="btn btn-web">View Our Case Study<svg class="icon icon-arrow-right2"><use xlink:href="#icon-arrow-right2"></use></svg></a>
                        <div class="arrow"></div>
                    </div>
                    <img src="img/CaseStudies/onetravellerlogo.webp" alt="One Traveller Logo">
                </div>
                <div class="case-item">
                    <div class="box">
                        <h3>Searles Leisure Resort</h3>
                        <p>Searles Leisure Resort, on the beautiful North Norfolk coast, is an award-winning UK holiday resort for families.</p>
                        <a href="#" class="btn btn-digital">View Our Case Study<svg class="icon icon-arrow-right2"><use xlink:href="#icon-arrow-right2"></use></svg></a>
                        <div class="arrow"></div>
                    </div>
                    <img src="img/CaseStudies/searles_logo.webp" alt="Searles Logo">
                </div>
                <div class="case-item">
                    <div class="box">
                        <h3>Busseys</h3>
                        <p>One of the UK's leading Ford dealerships.</p>
                        <div class="arrow"></div>
                    </div>
                    <img src="img/CaseStudies/busseys_logo.webp" alt="Busseys Logo">
                </div>
                <div class="case-item">
                    <div class="box">
                        <h3>Crane Garden Buildings</h3>
                        <p>Leading manufacturer and supplier of high-end garden rooms, summerhouses, workshops and sheds in the UK.</p>
                        <div class="arrow"></div>
                    </div>
                    <img src="img/CaseStudies/crane_logo.webp" alt="Crane Logo">
                </div>
                <div class="case-item">
                    <div class="box">
                        <h3>Black Swan Care Group</h3>
                        <p>Black Swan Care Group own and manage 21 high-quality care and residential homes with a focus on putting the needs of their residents first.</p>
                        <a href="#" class="btn btn-software">View Our Case Study<svg class="icon icon-arrow-right2"><use xlink:href="#icon-arrow-right2"></use></svg></a>
                        <div class="arrow"></div>
                    </div>
                    <img src="img/CaseStudies/black_swan_logo.webp" alt="Black Swan Logo">
                </div>    
                <div class="case-item">
                    <div class="box">
                        <h3>Xupes</h3>
                        <p></p>
                        <div class="arrow"></div>
                    </div>
                    <img src="img/CaseStudies/xupes_logo.webp" alt="Xupes Logo">
                </div>
                <div class="case-item">
                    <div class="box">
                        <h3>BEAT</h3>
                        <p>The UK's eating disorder charity founded in 1989.</p>
                        <div class="arrow"></div>
                    </div>
                    <img src="img/CaseStudies/beat_logo.webp" alt="Beat Logo">
                </div>
                <div class="case-item">
                    <div class="box">
                        <h3>Survey Solutions</h3>
                        <p>Survey Solutions.</p>
                        <div class="arrow"></div>
                    </div>
                    <img src="img/CaseStudies/survey_solutions_logo.webp" alt="Survey Solutions Logo">
                </div>
                <div class="case-item">
                    <div class="box">
                        <h3>Girl Guiding Anglia</h3>
                        <p>Girl Guiding Anglia is part of Girlguiding, the UK's leading charity for girls and young women inthe UK.</p>
                        <a href="#" class="btn btn-it"> View Our Case Study <svg class="icon icon-arrow-right2"><use xlink:href="#icon-arrow-right2"></use></svg></a>
                        <div class="arrow"></div>
                    </div>
                    <img src="img/CaseStudies/girl_guides_anglia.webp" alt="Girl Guiding Logo">
                </div>
                <div class="case-item">
                    <div class="box">
                        <h3>Sweetzy</h3>
                        <p>Sweetzy are an online sweets retailer, based in Wymondham.</p>
                        <a href="#" class="btn btn-digital">View Our Case Study<svg class="icon icon-arrow-right2"><use xlink:href="#icon-arrow-right2"></use></svg></a>
                        <div class="arrow"></div>
                    </div>
                    <img src="img/CaseStudies/sweetzy_logo.webp" alt="Sweetzy Logo">
                </div>
                <div class="case-item">
                    <div class="box">
                        <h3>Howes Percival</h3>
                        <p>Howes Percival.</p>
                        <div class="arrow"></div>
                    </div>
                    <img src="img/CaseStudies/howespercivallogo.webp" alt="Howes Percival Logo">
                </div>
                <div class="case-item">
                    <div class="box">
                        <h3>GDST</h3>
                        <p> The 
                            <a href="#">Girls' Day School Trust (GDST)</a> 
                            is the UK's leading family
                            of 25 independent girls' schools. 
                        </p>
                        <a href="#" class="btn btn-digital">View Our Case Study<svg class="icon icon-arrow-right2"><use xlink:href="#icon-arrow-right2"></use></svg></a>
                        <div class="arrow"></div>
                    </div>
                    <img src="img/CaseStudies/sweetzy_logo.webp" alt="Sweetzy Logo">
                </div>
            </div>
        </section>
        <?php require __DIR__ . '/includes/footer.php'; ?>
    </div>
    <?php require __DIR__ . '/includes/menu.php'; ?>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
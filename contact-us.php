<?php

require_once __DIR__ . '/config/database.php';

$pageTitle = 'Contact Us | Netmatters';

$errors = [];
$name = '';
$company = '';
$email = '';
$telephone = '';
$message = '';
$marketing = 0;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $company = trim($_POST['company'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $telephone = trim($_POST['telephone'] ?? '');
    $message = trim($_POST['message'] ?? '');
    $marketing = isset($_POST['marketing']) ? 1 : 0;

    $requiredFields = [
        'name' => 'Please enter your name.',
        'email' => 'Please enter your email address.',
        'telephone' => 'Please enter your telephone number.',
        'message' => 'Please enter your message.'
    ];
    
    foreach($requiredFields as $field => $errorMessage) {
        $value = trim($_POST[$field] ?? '');

        if ($value === '') {
            $errors[$field] = $errorMessage;
        }
    }

    if ($email !== '') {
        $result = filter_var($email, FILTER_VALIDATE_EMAIL);

        if ($result === false) {
            $errors['email'] = 'Please enter a valid email address.';
        }
    }

    if ($errors === []) {
        $sql = 'INSERT INTO enquiries(name, company, email, telephone, message, marketing)
        VALUES (:name, :company, :email, :telephone, :message, :marketing)';

        $stmt = $pdo->prepare($sql);

        $stmt->execute([
            'name' => $name,
            'company' => $company,
            'email' => $email,
            'telephone' => $telephone,
            'message'=> $message,
            'marketing' =>$marketing
        ]);

        header('Location: contact-us.php?success=1#contact-form', true, 303);
        exit;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<?php require __DIR__ . '/includes/head.php'; ?>
<body>
    <?php require __DIR__ . '/includes/icons.php'; ?>
    <?php require __DIR__ . '/includes/cookies.php'; ?>

    <div class="page-wrapper">
        <?php require __DIR__ . '/includes/header.php'; ?>

        <main class="contact-page">
            <nav class="contact-breadcrumbs" aria-label="Breadcrumb">
                <div class="container">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li aria-current="page">Our Offices</li>
                    </ul>
                </div>
            </nav>
            <div class="contact-heading">
                <div class="container">
                    <h1>Our Offices</h1>
                </div>
            </div>
            <section class="contact-offices" aria-label="Our office locations">
                <div class="container">
                    <div class="office-grid">

                        <article class="office-card">
                            <img
                                src="img/Offices/cambridge.jpg"
                                alt="Cambridge Office"
                            >
                            <div class="office-content">
                                <a href="#" class="office-location">Cambridge Office</a>
                                <p class="office-address">
                                    Unit 1.31,<br>
                                    St John's Innovation Centre,<br>
                                    Cowley Road, Milton,<br>
                                    Cambridge,<br>
                                    CB4 0WS
                                </p>
                                <a class="office-phone" href="tel:01223375772">
                                    01223 37 57 72
                                </a>
                                <a class="office-button" href="#">
                                    View More
                                </a>
                            </div>
                        </article>
                        <article class="office-card">
                            <img
                                src="img/Offices/wymondham.jpg"
                                alt="Wymondham Office"
                            >
                            <div class="office-content">
                                <a href="#" class="office-location">Wymondham Office</a>
                                <p class="office-address">
                                    Unit 15,<br>
                                    Penfold Drive,<br>
                                    Gateway 11 Business Park,<br>
                                    Wymondham, Norfolk,<br>
                                    NR18 0WZ
                                </p>
                                <a class="office-phone" href="tel:01603704020">
                                    01603 70 40 20
                                </a>
                                <a class="office-button" href="#">
                                    View More
                                </a>
                            </div>
                        </article>

                        <article class="office-card">
                            <img
                                src="img/Offices/yarmouth-2.jpg"
                                alt="Great Yarmouth Office"
                            >
                            <div class="office-content">
                                <a href="#" class="office-location">Great Yarmouth Office</a>
                                <p class="office-address">
                                    Suite F23,<br>
                                    Beacon Innovation Centre,<br>
                                    Beacon Park, Gorleston,<br>
                                    Great Yarmouth, Norfolk,<br>
                                    NR31 7RA
                                </p>
                                <a class="office-phone" href="tel:01493603204">
                                    01493 60 32 04
                                </a>
                                <a class="office-button" href="#">
                                    View More
                                </a>
                            </div>
                        </article>
                    </div>
                </div>
            </section>
            <section class="contact-enquiry" aria-label="Contact us">
                <div class="container">
                    <div class="enquiry-layout">
                        <div class="enquiry-details">
                            <p><strong>Email us on:</strong></p>
                            <p>
                                <a class="enquiry-link" href="mailto:sales@netmatters.com">
                                    sales@netmatters.com
                                </a>
                            </p>
                            <p><strong>Speak to Sales on:</strong></p>
                            <p>
                                <a class="enquiry-link" href="tel:01603515007">
                                    01603 515007
                                </a>
                            </p>
                            <p><strong>Business hours:</strong></p>
                            <p><strong>Monday - Friday 07:00 - 18:00</strong></p>
                            <button
                                class="support-toggle"
                                type="button"
                                aria-expanded="false"
                                aria-controls="support-content"
                            >
                                Out of Hours IT Support
                                <span class="support-chevron" aria-hidden="true"></span>
                            </button>
                            <div id="support-content" class="support-content">
                                <p>
                                    Netmatters IT are offering an Out of Hours service
                                    for Emergency and Critical tasks.
                                </p>
                                <p>
                                    <strong>
                                        Monday - Friday 18:00 - 22:00
                                        Saturday 08:00 - 16:00<br>
                                        Sunday 10:00 - 18:00
                                    </strong>
                                </p>
                                <p>
                                    To log a critical task, you will need to call our
                                    main line number and select Option 2 to leave an
                                    Out of Hours voicemail. A technician will contact
                                    you on the number provided within 45 minutes of
                                    your call.
                                </p>
                            </div>
                        </div>
                        <div class="enquiry-form">
                            <form id="contact-form" action="contact-us.php#contact-form" method="post" novalidate>
                                <?php if (($_GET['success'] ?? '') === '1'): ?>
                                    <p class="form-success" role="status">Your enquiry has been submitted successfully.</p>
                                <?php endif; ?>
                                <?php if ($errors !== []): ?>
                                    <div class="form-errors" role="alert">
                                        <ul>
                                            <?php foreach($errors as $errorMessage) {
                                                echo '<li>'.htmlspecialchars($errorMessage).'</li>';
                                            } ?>
                                        </ul>
                                    </div>
                                <?php endif; ?>
                                <div class="form-grid">
                                    <div class="form-field">
                                        <label for="name">
                                            Your Name <span class="required-mark">*</span>
                                        </label>
                                        <input
                                            type="text"
                                            id="name"
                                            name="name"
                                            autocomplete="name"
                                            required
                                            value="<?= htmlspecialchars($name) ?>"
                                        >
                                    </div>

                                    <div class="form-field">
                                        <label for="company">Company Name</label>
                                        <input
                                            type="text"
                                            id="company"
                                            name="company"
                                            autocomplete="organization"
                                            value="<?= htmlspecialchars($company) ?>"
                                        >
                                    </div>

                                    <div class="form-field">
                                        <label for="email">
                                            Your Email <span class="required-mark">*</span>
                                        </label>
                                        <input
                                            type="email"
                                            id="email"
                                            name="email"
                                            autocomplete="email"
                                            required
                                            value="<?= htmlspecialchars($email) ?>"
                                        >
                                    </div>

                                    <div class="form-field">
                                        <label for="telephone">
                                            Your Telephone Number <span class="required-mark">*</span>
                                        </label>
                                        <input
                                            type="tel"
                                            id="telephone"
                                            name="telephone"
                                            autocomplete="tel"
                                            required
                                            value="<?= htmlspecialchars($telephone) ?>"
                                        >
                                    </div>
                                </div>

                                <div class="form-field">
                                    <label for="message">
                                        Message <span class="required-mark">*</span>
                                    </label>
                                    <textarea
                                        id="message"
                                        name="message"
                                        rows="5"
                                        required
                                    ><?= htmlspecialchars($message) ?></textarea>
                                </div>

                                <div class="marketing-field">
                                    <input
                                        type="checkbox"
                                        id="marketing"
                                        name="marketing"
                                        value="1"
                                        <?php if ($marketing === 1) {
                                            echo 'checked';
                                        } ?>
                                    >
                                    <label for="marketing">
                                        Please tick this box if you wish to receive marketing
                                        information from us. Please see our
                                        <a href="#">Privacy Policy</a>
                                        for more information on how we keep your data safe.
                                    </label>
                                </div>

                                <div class="form-actions">
                                    <button type="submit" class="enquiry-submit">
                                        Send Enquiry
                                    </button>

                                    <small>
                                        <span class="required-mark">*</span> Fields Required
                                    </small>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <?php require __DIR__ . '/includes/footer.php'; ?>

    </div>
    <?php require __DIR__ . '/includes/menu.php'; ?>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
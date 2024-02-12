<!DOCTYPE html>
<html lang="en">
<?php
session_start()
?>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cadence | About Us</title>
    <link rel="stylesheet" href="css/bootstrap.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://use.typekit.net/maf1fpm.css">
    <link rel="icon" type="image" href="assets/favicon.ico">
</head>

<body class="vh-full overflow-x-auto" id="about-page">

    <?php require "navbar.php" ?>

    <!-- About page content -->
    <div class="container mt-4 about-us-text">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-white" id="about-content">
                <h2 class="mb-4">Modern Slavery Statement</h2>
                <p>
                    At Cadance, we are committed to upholding the highest standards of ethics and integrity in all aspects of our business operations. We recognize the serious nature of modern slavery and human trafficking and acknowledge our responsibility to prevent and combat these heinous crimes within our operations and supply chains.
                </p>
                <br>
                <p>
                    Our company operates under a zero-tolerance policy towards modern slavery and human trafficking. We believe in the inherent dignity and rights of all individuals, and we are dedicated to ensuring that our business practices align with this principle.
                </p>
                <br>
                <p>
                    To fulfill our commitment, we have implemented robust due diligence processes to assess and address the risks of modern slavery within our supply chains. This includes conducting regular supplier audits, risk assessments, and engaging with our suppliers to promote awareness and compliance with anti-slavery standards.
                </p>
                <br>
                <p>Cadance has established clear policies and procedures that prohibit any form of modern slavery or human trafficking in our operations and supply chains. These policies are communicated to all employees and suppliers, and we provide training and awareness programs to ensure understanding and compliance.</p>
                <br>
                <p>
                    We monitor and evaluate our efforts to combat modern slavery regularly, using key performance indicators to measure our progress and identify areas for improvement. Additionally, we collaborate with industry partners, government agencies, and civil society organizations to leverage collective efforts in addressing modern slavery more effectively.
                </p>
                <br>
                <p>
                    Cadance is committed to transparency and accountability in our fight against modern slavery. We understand the importance of this issue to our stakeholders, including customers, investors, and regulatory authorities, and we are dedicated to continuously improving our practices to eradicate modern slavery from our operations and supply chains.
                </p>
                <p>
                    This modern slavery statement is made pursuant to the requirements of relevant legislation and reflects our unwavering commitment to ethical business conduct.
                </p>
                <br>
                <p>Signed,</p>

                <p>
                    [Authorized Representative of Cadance]
                </p>
            </div>
        </div>
    </div>



    <!--   Logo Img       -->
    <div class="about-us-img col-md-4 align-items-center mx-auto ">
        <img src="assets/logo.png" />
    </div>

    <!-- Contact Information -->


    <?php require "footer.php" ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
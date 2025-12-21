<?php include 'includes/headerlink.php' ?>
<?php include 'includes/header.php' ?>

<style>
    h3 {
        font-size: 20px !important;
    }
</style>

<div class="scrapcar-content-space py-5" style="background:#f8f9fa;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card shadow-lg border-0 rounded-lg p-4 bg-primary">

                    <!-- H1 -->
                    <h2 class="text-center mb-4 text-white" style="font-weight:700;">
                        Contact Us – Home Appliance Repair Services
                    </h2>

                    <!-- Intro -->
                    <p class="text-center mb-4 text-white text-capitalize" style="font-size:16px;">
                        Need fast and reliable doorstep repair?  
                        Contact us for Air Conditioner, Refrigerator, Washing Machine, and Microwave Oven repair services.
                        Our team is ready to assist you with quick response and transparent pricing.
                    </p>

                    <hr class="text-white">

                    <div class="row">
                        <!-- Contact Details -->
                        <div class="col-md-6 mb-4">
                            <h5 class="mb-3 text-white" style="font-weight:600;">
                                Get in Touch
                            </h5>

                            <p class="mb-2 text-white text-capitalize">
                                <strong>Call Now:</strong><br>
                                <a href="tel:<?= PLATFORMCONTACT ?>" class="text-white">
                                    <?= PLATFORMCONTACT ?>
                                </a>
                            </p>

                            <p class="mb-2 text-white text-capitalize">
                                <strong>Email:</strong><br>
                                <a href="mailto:<?= PLATFORMEMAIL ?>" class="text-white">
                                    <?= PLATFORMEMAIL ?>
                                </a>
                            </p>

                            <p class="mb-3 text-white text-capitalize">
                                <strong>Service Address:</strong><br>
                                <?= PLATFORMADD ?>
                            </p>

                            <!-- Trust points -->
                            <p class="text-white mb-0">
                                ✔ Same-day doorstep service<br>
                                ✔ Skilled & verified technicians<br>
                                ✔ Transparent pricing with no hidden charges
                            </p>
                        </div>

                        <!-- Message / Booking Form -->
                        <div class="col-md-6">
                            <?php include 'form.php'; ?>
                        </div>
                    </div>

                </div><!-- card end -->
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php' ?>
<?php include 'includes/footerlink.php' ?>

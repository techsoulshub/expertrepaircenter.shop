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
                    <h2 class="text-center mb-4" style="font-weight:700;">
                        Contact Us
                    </h2>
                    <p class="text-center mb-4  text-white text-capitalize" style="font-size:16px;">
                        We’re here to help with all your Air Conditioner, Refrigerator,
                        Microwave Oven, and Washing Machine repair needs.
                    </p>
                    <hr class="text-white">
                    <div class="row">
                        <!-- Contact Details -->
                        <div class="col-md-6 mb-4">
                            <h5 class="mb-3 text-white" style="font-weight:600;">Contact Information</h5>
                            <p class="mb-2  text-white text-capitalize">
                                <strong>Phone:</strong><br>
                                <a href="tel:<?= PLATFORMCONTACT ?>">
                                    <?= PLATFORMCONTACT ?>
                                </a>
                            </p>
                            <p class="mb-2  text-white text-capitalize">
                                <strong>Email:</strong><br>
                                <a href="mailto:<?= PLATFORMEMAIL ?>">
                                    <?= PLATFORMEMAIL ?>
                                </a>
                            </p>
                            <p class="mb-0  text-white text-capitalize">
                                <strong>Address:</strong><br>
                                <?= PLATFORMADD ?>
                            </p>
                        </div>
                        <!-- Message Form -->
                        <div class="col-md-6">
                            <!-- <h5 class="mb-3" style="font-weight:600;">Send Us a Message</h5> -->
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
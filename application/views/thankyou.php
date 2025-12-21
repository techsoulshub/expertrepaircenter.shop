<?php include 'includes/headerlink.php' ?>
<?php include 'includes/header.php' ?>

<div class="scrapcar-content-space py-5" style="background:#f8f9fa;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10 col-sm-12">
                <div class="card shadow-lg border-0 rounded-lg p-4 text-center bg-primary text-white">

                    <!-- Success Icon -->
                    <div class="mb-3">
                        <i class="bi bi-check-circle-fill" style="font-size:60px;"></i>
                    </div>

                    <h2 class="mb-3" style="font-weight:700;">
                        Thank You for Contacting Us!
                    </h2>

                    <p class="mb-4" style="font-size:16px;">
                        Your service request has been successfully received.  
                        Our team will contact you shortly to confirm details and schedule your
                        <strong>home appliance repair service</strong>.
                    </p>

                    <hr class="text-white">

                    <p class="mb-3">
                        <strong>What happens next?</strong><br>
                        ✔ Our technician will review your request<br>
                        ✔ You’ll receive a confirmation call shortly<br>
                        ✔ Same-day doorstep service (subject to availability)
                    </p>

                    <p class="mb-3">
                        For urgent assistance, you can call us directly:
                        <br>
                        <a href="tel:<?= PLATFORMCONTACT ?>" class="btn btn-light mt-2">
                            Call Now: <?= PLATFORMCONTACT ?>
                        </a>
                    </p>

                    <p class="mb-4">
                        <small>
                            Inspection / Visit Charge: ₹300 (adjustable in final bill)
                        </small>
                    </p>

                    <div class="d-flex justify-content-center gap-2 flex-wrap">
                        <a href="<?= base_url() ?>" class="btn btn-outline-light">
                            Back to Home
                        </a>
                        <a href="<?= base_url() ?>contact-us" class="btn btn-outline-light">
                            Contact Support
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php' ?>
<?php include 'includes/footerlink.php' ?>

<a href="tel:<?= PLATFORMCONTACT ?>" class="float text-white">
    Call now: <?= PLATFORMCONTACT ?>
</a>
<section class="cs-copyright-area back-3 bg-new py-4">
    <div class="container">
        <div class="row text-white">
            <!-- Company Info -->
            <div class="col-md-6 mb-3">
                <h5 class="mb-2 text-white" style="font-weight:700;"><?= PLATFORMTITLE ?></h5>
                <p class="mb-0 ">
                    Homerepaircenter.shop is owned and operated by Home Repair Center, providing repair services for Air Conditioners, Refrigerators, Microwave Ovens, and Washing Machines.
                </p>
            </div>
            <!-- Quick Links -->
            <div class="col-md-6 mb-3">
                <h5 class="mb-2 text-white" style="font-weight:700;">Quick Links</h5>
                <ul class="list-unstyled">
                    <li class="mb-1">
                        <a class="text-white" href="<?= base_url('privacy-policy') ?>">Privacy Policy</a>
                    </li>
                    <li class="mb-1">
                        <a class="text-white" href="<?= base_url() ?>terms">Terms & Conditions</a>
                    </li>
                    <li class="mb-1">
                        <a class="text-white" href="<?= base_url() ?>refund-policy">Refund Policy</a>
                    </li>
                    <li class="mb-1">
                        <a class="text-white" href="<?= base_url() ?>brand-disclaimer">Brand disclaimer</a>
                    </li>
                    <li class="mb-1">
                        <a class="text-white" href="<?= base_url() ?>services">Services</a>
                    </li>
                    <li class="mb-1">
                        <a class="text-white" href="<?= base_url() ?>contact-us">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
        <hr style="border-color: rgba(255,255,255,0.3);">
        <div class="row">
            <div class="col-12 text-center text-white">
                © <?= date("Y") ?> — Customer Care
            </div>
        </div>
    </div>
</section>
<!-- Cookie Consent Banner -->
<div id="cookieConsent" style="position:fixed;bottom:0;width:100%;background:#343a40;color:#fff;padding:15px;text-align:center;z-index:9999;display:none;">
    This website uses cookies to ensure you get the best experience on our website.
    <button id="acceptCookies" style="margin-left:15px;padding:5px 15px;background:#28a745;color:#fff;border:none;border-radius:5px;cursor:pointer;">
        Accept
    </button>
    <a href="<?= base_url('privacy-policy') ?>" style="color:#ffc107;margin-left:15px;">Learn More</a>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Check if cookie is already accepted
        if (!localStorage.getItem("cookiesAccepted")) {
            document.getElementById("cookieConsent").style.display = "block";
        }

        // Accept button click
        document.getElementById("acceptCookies").addEventListener("click", function() {
            localStorage.setItem("cookiesAccepted", "true");
            document.getElementById("cookieConsent").style.display = "none";
        });
    });
</script>
<section class="contact-area contact-pg-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="get-in-touch">
                    <div class="sec-title">
                        <h3>Send Us a Message</h3> 
                    </div>
                    <div class="contact-form">
                        <form id="ajax-contact" method="post" action="<?= base_url('thankyou') ?>">
                            <div class="row ">
                                <div class="col-sm-6">
                                    <div class="form-group box element-radius">
                                        <input type="text" name="name" class="form-control txtOnly element-radius" class="form-control" placeholder="Enter Your name" required="">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group box element-radius">
                                        <input type="text" name="mobile" id="company_contact" class="form-control element-radius" maxlength="10" placeholder="Phone Number">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group box element-radius">
                                        <input type="text" name="location" class="form-control txtOnly element-radius" placeholder="Enter Your city" required="">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group box element-radius">
                                        <input type="text" name="pincode" id="Pincode" class="form-control element-radius" placeholder="Enter Area Pincode" onkeyup="return isNumber($(this));" required="" maxlength="6">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group box element-radius">
                                        <select class="w-100 bg-light-gray form-control rounded-0 element-radius" name="service" required="">
                                            <option disabled selected>Choose Your Service</option>
                                            <!-- <option disabled selected>Choose Your Service</option> -->
                                            <option value="Air Conditioner Services"> Air Conditioner Services</option>
                                            <option value="Refrigerator Services">Refrigerator Services</option>
                                            <option value="Microwave Services">Microwave Services</option>
                                            <option value="Washing Machine Services">Washing Machine Services</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group box element-radius">
                                        <select class="w-100 bg-light-gray form-control rounded-0 element-radius" name="warrenty" required="">
                                            <option disabled selected>Product Period</option>
                                            <option value="Out Of Warranty">Out Of Warranty</option>
                                            <option value="In Warranty">In Warranty</option>
                                            <option value="Extended Warranty">Extended Warranty</option>
                                            <option value="AMC">AMC</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 d-flex justify-content-center">
                                    <button class="btn btn-default cs-my-btn w-100 w-sm-50" type="submit" -dataloading-text="Please wait...">Send </button>
                                </div>
                            </div>
                            <br>
                            <div id="form-messages"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
    var err = [];
    $('#company_contact').keyup(function() {
        var contact = $('#company_contact').val();
        if (!$('#company_contact').val()) {
            err.push('true');
            $('#mainphone').text('Company Contact is required');
        } else if (IsMobile(contact) == false) {
            err.push('true');
            $('#mainphone').text('Your Number is Invalid. Should contain 10 digit contact no.');
            // $('#cmp_main').text(contact);
        } else {
            err = [];
            $('#mainphone').text('');
        }
    });
    $('#Pincode').keyup(function() {
        var pin = $('#Pincode').val();
        pin = pin.replace(/\D/g, '');
        $('#Pincode').val(pin);
        var regex = /^(\+\d{1,3}[- ]?)?\d{10}$/;
        if (!regex.test(pin)) {
            return false;
        } else {
            return true;
        }
    });
    function IsMobile(contact) {
        contact = contact.replace(/\D/g, '');
        $('#company_contact').val(contact);
        var regex = /^(\+\d{1,3}[- ]?)?\d{10}$/;
        if (!regex.test(contact)) {
            return false;
        } else {
            return true;
        }
    }
    $(".txtOnly").keypress(function(e) {
        var key = e.keyCode;
        if (key >= 48 && key <= 57) {
            e.preventDefault();
        }
    });
</script>
<!-- Header -->
<?php include('header.php'); ?>


<!--Page Header-->
<section>
    <div style="background-image: url('img/2.jpg'); background-repeat: no-repeat; background-size: cover;">
        <!-- Caption -->
        <div class="full-bg-img flex-center white-text hm-black-slight">
            <ul class="animated fadeIn col-md-12 list-unstyled">
                <li>
                    <h1 class="h1-responsive font-weight-bold wow animated fadeInDown mt-5 pt-5"  data-wow-delay="0.5s">CONTACT</h1>
                </li>
            </ul>
        </div>
        <!-- /.Caption -->
    </div>
</section>

<div class="container">
    <div class="view intro hm-white-slight jarallax">
        <div class="full-bg-img">
            <!--Section: Contact v.3-->
            <section class="section contactsection">

                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-12">

                            <!--Form with header-->
                            <!--<div class="card">-->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card-body form">
                                            <!--Header-->
                                            <div class="formHeader mb-1 pt-3 text-center">
                                                <h3><i class="fa fa-envelope"></i> Tell Me About Your Business And Ideas. Let's Start Building That Solution</h3>
                                            </div>

                                            <br>

                                            <form id ="contact-form" name="contact-form" onsubmit="return validateForm()">
                                                <!--Grid row-->
                                                <div class="row">

                                                    <!--Grid column-->
                                                    <div class="col-md-6">
                                                        <div class="md-form">
                                                            <div class="md-form">
                                                                <input type="text" id="name" name="name" class="form-control">
                                                                <label for="name" class="">Your name</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--Grid column-->

                                                    <!--Grid column-->
                                                    <div class="col-md-6">
                                                        <div class="md-form">
                                                            <div class="md-form">
                                                                <input type="text" id="email" name="email" class="form-control">
                                                                <label for="email" class="">Your email</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--Grid column-->

                                                </div>
                                                <!--Grid row-->

                                                <!--Grid row-->
                                                <div class="row">

                                                    <!--Grid column-->
                                                    <div class="col-md-6">
                                                        <div class="md-form">
                                                            <div class="md-form">
                                                                <input type="text" id="phone" name="phone" class="form-control">
                                                                <label for="phone" class="">Your phone</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--Grid column-->

                                                    <!--Grid column-->
                                                    <div class="col-md-6">
                                                        <div class="md-form">
                                                            <div class="md-form">
                                                                <input type="text" id="company" name="company" class="form-control">
                                                                <label for="company" class="">Your company</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--Grid column-->

                                                </div>
                                                <!--Grid row-->

                                                <!--Grid row-->
                                                <div class="row">

                                                    <!--Grid column-->
                                                    <div class="col-md-12">
                                                        <div class="md-form">
                                                            <div class="md-form">
                                                                <input type="text" id="subject" name="subject" class="form-control">
                                                                <label for="subject" class="">Subject</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--Grid column-->
            
                                                </div>
                                                <!--Grid row-->

                                                <!--Grid row-->
                                                <div class="row">

                                                    <!--Grid column-->
                                                    <div class="col-md-12">

                                                        <div class="md-form">
                                                            <textarea type="text" id="message" name="message" class="form-control md-textarea"></textarea>
                                                            <label for="message">Your message</label>
                                                            <button type="submit" class="btn btn-lg green" onclick="validateform()">Send</button>
                                                        </div>
                                                        <div class="status" id="status"></div>

                                                    </div>
                                                    <!--Grid column-->

                                                </div>
                                                <!--Grid row-->
                                            </form>

                                        </div>
                                    </div>

                                </div>       
                            <!--</div>-->
                            <!--/Form with header-->

                        </div>
                        <!--Grid column-->

                    </div>
                    <!--Grid row-->
        
                </section>
                <!--Section: Contact v.3-->
            
        </div>
</div>
</div>

<?php include('footer.php'); ?>


    <!-- Form Validation -->
    <script>
        function validateForm() {
    
            //get input field values data to be sent to server
            document.getElementById('status').innerHTML = "Sending...";
            formData = {
                'name'     : $('input[name=name]').val(),
                'email'    : $('input[name=email]').val(),
                'subject'  : $('input[name=subject]').val(),
                'message'  : $('textarea[name=message]').val()
            };


            $.ajax({
            url : "mail.php",
            type: "POST",
            data : formData,
            success: function(data, textStatus, jqXHR)
            {
                $('#status').text(data.message);
                if (data.code) //If mail was sent successfully, reset the form.
                $('#contact-form').closest('form').find("input[type=text], textarea").val("");
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                $('#status').text(jqXHR);
            }
            });
            document.getElementById('contact-form').submit();
                
        }
    </script>
</body>

</html>

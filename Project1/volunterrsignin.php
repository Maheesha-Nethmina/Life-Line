<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--css-->

        <link rel="stylesheet" href="css/volunteersignin.css">




        <title>LIFE LINE</title>
        <link rel="icon" type="image/x-icon" href="images/logo3.png">


        <!--Bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>



    </head>
    <body  class="p-5">
        <!--application start-->

        <section class="request-section row  ">
            <div id="bimg" class="col-md-6">

            </div>
            <div class="pt-5 col-md-6" id="details" >

                <h1 >Hey, We are glad to have you as a Volunteer!</h1>

                <form class="g-4" id="req-form" method="POST" action=" " >
                    <div class="col-md-12 text-center">
                        <h5>Applicant's Details</h5>

                    </div>

                    <!-- enter the link to term & cond -->

                    <small class="form-text text-muted"><img src="images/icon1.png" alt="icon">   Please review the <a href="">terms and conditions</a> before filling out the form. Fill in all the Details</small><br><br>
                    <div class="col-12">
                        <label  class="">Your Full Name</label>
                        <input type="text" class="form-control" id="name-vol" name="name-vol" required>
                    </div>

                    <div class="col-12">
                        <label  class="">Your Address</label>
                        <input type="text" class="form-control" id="Address-vol" name="address-vol" required>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label  class="">Your Age</label>
                            <input type="text" class="form-control" id="age-vol" name="age-vol" required>
                        </div>
                        <div class="col-md-6">
                            <label  class="">Your NIC Number</label>
                            <input type="text" class="form-control" id="nic-vol" name="nic-vol" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label  class="">Your Contact Number</label>
                            <input type="text" class="form-control" id="contact-vol" name="contact-vol" placeholder="0xxxxxxxxx">
                        </div>

                        <div class="col-md-6">
                            <label  class="">Your E-mail</label>
                            <input type="text" class="form-control" id="email-vol" name="email-vol" placeholder="saman123@gmail.com" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label  class="">Your District</label>
                        <select id="inputState" class="form-select" name="district-vol" required>
                            <option selected>Select Your District</option>
                            <option value="1">Ampara</option>
                            <option value="2">Anuradhapura</option>
                            <option value="3">Badulla</option>
                            <option value="4">Batticaloa</option>
                            <option value="5">Colombo</option>
                            <option value="6">Galle</option>
                            <option value="7">Gampaha</option>
                            <option value="8">Hambantota</option>
                            <option value="9">Jaffna</option>
                            <option value="10">Kalutara</option>
                            <option value="11">Kandy</option>
                            <option value="12">Kegalle</option>
                            <option value="13">Kilinochchi</option>
                            <option value="14">Kurunegala</option>
                            <option value="15">Mannar</option>
                            <option value="16">Matale</option>
                            <option value="17">Matara</option>
                            <option value="18">Monaragala</option>
                            <option value="19">Mullaitivu</option>
                            <option value="20">Nuwara Eliya</option>
                            <option value="21">Polonnaruwa</option>
                            <option value="22">Puttalam</option>
                            <option value="23">Ratnapura</option>
                            <option value="24">Trincomalee</option>
                            <option value="25">Vavuniya</option>
                        </select>
                    </div>





                    <div class="col-12">
                        <label class=" ">Your pre-volunteering Tasks</label>
                        <textarea class="form-control"  id="pre-vol" style="height: 100px" name="pre-vol" placeholder="Task-Organization(Year)" required></textarea> 
                    </div>




                    <div class="col-12">
                        <label  class="">Your A/L Results</label>
                        <input type="text" class="form-control" id="days" name="days" required>
                    </div>


                    <div class="col-12">
                        <label  class="">Your A/L Result Sheet</label>
                        <input type="file" class="form-control" id="a/l" name="a/l">
                    </div>
                    <br>






                    <div class="col-12">
                        <button type="submit" class="button">Send Request</button>
                    </div>
                </form>

            </div>

        </section>



        <!--application end-->

        <!--javascript-->

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>  
    </body>


</html>

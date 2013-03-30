<SCRIPT type="text/javascript">
    <!--
    /*
Credits: Bit Repository
Source: http://www.bitrepository.com/web-programming/ajax/username-checker.html 
     */

    pic1 = new Image(16, 16); 
    pic1.src = "loader.gif";

    $(document).ready(function(){

        $("#username").change(function() { 

            var usr = $("#username").val();

            if(usr.length >= 4)
            {
                $("#status").html('<img id="loader" src="loader.gif" align="absmiddle">&nbsp;<div id="loader_text"> Checking availability...</div>');

                $.ajax({  
                    type: "POST",  
                    url: "http://localhost/meet/index.php/ctajx/check_user",  
                    data: "user_name="+ usr,  
                    success: function(msg){  
   
                        $("#status").ajaxComplete(function(event, request, settings){ 

                            if(msg == 'OK')
                            { 
                                
                                $('#loader').remove();
                                $('#loader_text').remove();
                                $('#login_taken').remove();
                                $(this).html('<span class="label label-success">OK</span>');
                               
                            }  
                            else  
                            {  
                                $(this).html(msg);
                            }  
   
                        });

                    } 
   
                }); 

            }
            else
            {
                $("#status").html('<font color="red">The username should have at least <strong>4</strong> characters.</font>');
                //$("#username").removeClass('object_ok'); // if necessary
                $("#username").addClass("object_error");
            }

        });
        
        
        
        
        
        $("#email").change(function() { 

            var usr = $("#email").val();

            if(usr.length >= 4)
            {
                $("#status2").html('<img id="loader2" src="loader.gif" align="absmiddle">&nbsp;<div id="loader_text2"> Checking availability...</div>');

                $.ajax({  
                    type: "POST",  
                    url: "http://localhost/meet/index.php/ctajx/check_email",  
                    data: "email="+ usr,  
                    success: function(msg){  
   
                        $("#status2").ajaxComplete(function(event, request, settings){ 

                            if(msg == 'OK')
                            { 
       
                                $('#loader2').remove();
                                $('#loader_text2').remove();
                                $('#email_taken').remove();
                                $(this).html('<span class="label label-success">OK</span>');
                            }  
                            else  
                            {  
                                $("#email").removeClass('object_ok'); // if necessary
                                $("#email").addClass("object_error");
                                $(this).html(msg);
                            }  
   
                        });

                    } 
   
                }); 

            }
            else
            {
                $("#status2").html('<font color="red">The username should have at least <strong>4</strong> characters.</font>');
                //$("#username").removeClass('object_ok'); // if necessary
                $("#email").addClass("object_error");
            }

        });
        
        
        
        

    });

    //-->
</SCRIPT>

<div class="9u mobileUI-main-content">
    <div class="content content-right">

        <!-- Content -->

        <article class="is-page-content">

            <header>



                <h3>Ienākt</h3>

                <?php echo form_open('user/takelogin'); ?>

                <p>
                    <?php
                    echo form_error('username_log');
                    $data = array(
                        'name' => 'username_log',
                        'id' => 'username_log',
                        'class' => 'input',
                        'maxlength' => '12'
                    );

                    echo form_input($data);
                    ?>



                <p><?php
                    echo form_error('password');

                    $data = array(
                        'name' => 'password_log',
                        'id' => 'password_log',
                        'type' => 'password',
                        'class' => 'input',
                        'maxlength' => '12',
                    );

                    echo form_input($data);
                    ?></p>



                <?php
                $data = array(
                    'name' => 'save',
                    'class' => 'btn',
                    'value' => 'Ienākt',
                );

                echo form_submit($data);
                echo form_close();
                ?>


                <h3>Reģistrēšanās</h3>

                <?php echo form_open('user/saveuser'); ?>

                <p>
                    <?php
                    echo form_error('username');
                    $data = array(
                        'name' => 'username',
                        'id' => 'username',
                        'class' => 'input',
                        'placeholder' => 'Lietotājvārds',
                        'maxlength' => '12',
                        'value' => $user->username
                    );

                    echo form_input($data);
                    ?>
                    <span class="help-inline" id="status"></span ></p>




                <p><?php
                    echo form_error('email');

                    $data = array(
                        'name' => 'email',
                        'id' => 'email',
                        'class' => 'input',
                        'placeholder' => 'E-pasts',
                        'maxlength' => '250',
                        'value' => $user->email
                    );

                    echo form_input($data);
                    ?>
                    <span class="help-inline" id="status2"></span >
                </p>

                <p>  <?php
                    echo form_error('password');

                    $data = array(
                        'name' => 'password',
                        'id' => 'password',
                        'type' => 'password',
                        'class' => 'input',
                        'placeholder' => 'Parole',
                        'maxlength' => '12',
                            // 'value' => $user->password
                    );

                    echo form_input($data);
                    ?></p>


                <?php
                $data = array(
                    'name' => 'save',
                    'class' => 'btn',
                    'value' => 'Reģistrēties',
                );

                echo form_submit($data);
                echo form_close();
                ?>










                </div>
                </div>
                </div>
                <div class="row">
                    <div class="12u">

                        <!-- Features -->
                        <section class="is-features">
                            <h2 class="major"><span>Valid Commands</span></h2>
                            <div class="5grid">
                                <div class="row">
                                    <div class="3u">

                                        <!-- Feature -->
                                        <section class="is-feature">
                                            <a href="#" class="image image-full"><img src="../images/pic01.jpg" alt="" /></a>
                                            <h3><a href="#">Look Up</a></h3>
                                            <p>
                                                Phasellus quam turpis, feugiat sit amet ornare in, a hendrerit in 
                                                lectus dolore. Praesent semper mod quis eget sed etiam eu ante risus.
                                            </p>
                                        </section>
                                        <!-- /Feature -->

                                    </div>
                                    <div class="3u">

                                        <!-- Feature -->
                                        <section class="is-feature">
                                            <a href="#" class="image image-full"><img src="../images/pic02.jpg" alt="" /></a>
                                            <h3><a href="#">Look Down</a></h3>
                                            <p>
                                                Phasellus quam turpis, feugiat sit amet ornare in, a hendrerit in 
                                                lectus dolore. Praesent semper mod quis eget sed etiam eu ante risus.
                                            </p>
                                        </section>
                                        <!-- /Feature -->

                                    </div>
                                    <div class="3u">

                                        <!-- Feature -->
                                        <section class="is-feature">
                                            <a href="#" class="image image-full"><img src="../images/pic03.jpg" alt="" /></a>
                                            <h3><a href="#">Examine Room</a></h3>
                                            <p>
                                                Phasellus quam turpis, feugiat sit amet ornare in, a hendrerit in 
                                                lectus dolore. Praesent semper mod quis eget sed etiam eu ante risus.
                                            </p>
                                        </section>
                                        <!-- /Feature -->

                                    </div>
                                    <div class="3u">

                                        <!-- Feature -->
                                        <section class="is-feature">
                                            <a href="#" class="image image-full"><img src="../images/pic04.jpg" alt="" /></a>
                                            <h3><a href="http://getlamp.com">Get Lamp</a></h3>
                                            <p>
                                                Phasellus quam turpis, feugiat sit amet ornare in, a hendrerit in 
                                                lectus dolore. Praesent semper mod quis eget sed etiam eu ante risus.
                                            </p>
                                        </section>
                                        <!-- /Feature -->

                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- /Features -->
    <div class="container mt-o mx-auto">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-2 col-md-9">
                <br>
                <br><a></a>
                <div class="card o-hidden border-0 shadow-lg my-5 " style="background: azure;">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">

                            <div class="col-lg-12">
                                <div class="p-4">
                                    <div class="text-center">
                                        <h1 class="mb-4" style="font-family: Courier New;"><strong>LOGIN</strong></h1>
                                    </div>
                                    <?php echo $this->session->flashdata('pesan') ?>
                                    <form action="<?php echo base_url('login/auth') ?>" class="user" method="post">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Email" name="email" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="password" placeholder="Password" name="password" required>
                                        </div>

                                        <div class="form-group ml-3">
                                            <input type="checkbox" id="show-password">
                                            <label for="show-hide">Tampilkan Password</label>
                                            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                                            <script>
                                              $(document).ready(function(){  
                                               $('#show-password').click(function(){
                                                if($(this).is(':checked')){
                                                 $('#password').attr('type','text');
                                                }else{
                                                 $('#password').attr('type','password');
                                                }
                                               });
                                              });
                                            </script>
                                        </div>

                                        <button class="btn btn-block btn-success" type="submit" name="submit">
                                                <i class="fas fa-sign-in-alt mr-2"></i> Login
                                            </button>

                                        <div class="social-auth-links text-center mt-3 mb-3">
						                    <p>- OR -</p>
						                    <a href="#" class="btn btn-block btn-primary">
						                        <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
						                    </a>
						                    <a href="#" class="btn btn-block btn-danger">
						                        <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
						                    </a>
						                </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
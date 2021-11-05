<script src="https://www.google.com/recaptcha/api.js"></script>
<div class="container-fluid">
    <button data-toggle="modal" data-target="#Modal_captcha" style="position: absolute; margin-left: 50%; margin-top: 20%; transform: translate(-50%,-50%);" class="btn btn-danger">Tampil Captcha</button>
    <?php echo $this->session->flashdata('captcha') ?>
</div>


<!-- MODAL CAPTCHA -->
<div class="modal fade" id="Modal_captcha" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable ">
    <div class="modal-content">
      <div class="modal-header text-center form-group" style="background:skyblue; justify-content:center; position: static;" align="center">
        <h4 class="modal-title text-white" id="exampleModalLabel"><strong>CAPTCHA</strong></h4>
        <button type="button" data-dismiss="modal" class="fas fa-times btn-lg" style="margin-left:90%;margin-top:-5px;position:absolute;background: transparent;border:none;color:white;"></button>
      </div>
      <div class="modal-body">
        <div class="container">
            <form method="post" action="<?php echo base_url('halaman/validasi_captcha/') ?>" enctype="multipart/form-data">
                <div class="form-group" align="center" >
                    <?php echo $captcha ?>
                </div><br>
                <div class="form-group" align="center" >
                    <button class="btn btn-primary" type="submit" >Next</button>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url() ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url() ?>assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?php echo base_url() ?>assets/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url() ?>assets/js/demo/chart-area-demo.js"></script>
    <script src="<?php echo base_url() ?>assets/js/demo/chart-pie-demo.js"></script>

</body>

</html> 

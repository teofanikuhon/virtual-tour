<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- ==============================================
Footer
=============================================== -->
<footer class="main-footer">
  <div class="pull-right hidden-xs">
    <b>Virtual Tour</b> Desa Tincep
  </div>
  <strong> Copyright &copy; <?php echo date('F Y'); ?> <a href="#"> INFORMATIKA UNIMA </a>.</strong>
</footer>
</div>

<!-- jQuery 3 -->
<script src="<?= base_url(); ?>assets/asset/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= base_url(); ?>assets/asset/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?= base_url(); ?>assets/asset/fastclick/lib/fastclick.js"></script>
<!-- My JavaScript -->
<script src="<?= base_url(); ?>assets/dist/js/AdminLTE.min.js"></script>
<script src="<?= base_url(); ?>assets/dist/js/demo.js"></script>
<!-- <script src="<?= base_url(); ?>assets/dist/js/sweetalert2.all.min.js"></script> -->
<!-- DataTables -->
<script src="<?= base_url(); ?>assets/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url(); ?>assets/js/sweetalert2.all.min.js"></script>
<script src="<?= base_url(); ?>assets/js/dataTables.bootstrap.min.js"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>

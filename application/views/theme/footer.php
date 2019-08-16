
 <!-- Footer -->

     <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>
  

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url('admin_assets/vendor/jquery/jquery.min.js');?>"></script>
  <script src="<?php echo base_url('admin_assets/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url('admin_assets/vendor/jquery-easing/jquery.easing.min.js');?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url('admin_assets/js/sb-admin-2.min.js');?>"></script>

  <!-- Page level plugins -->
  <script src="<?php echo base_url('admin_assets/vendor/chart.js/Chart.min.js');?>"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url('admin_assets/js/demo/chart-area-demo.js');?>"></script>
  <script src="<?php echo base_url('admin_assets/js/demo/chart-pie-demo.js');?>"></script>
  <!-- dataTables -->
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
          <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
          <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script> 
   <!-- Datatables Request -->
   <script type="text/javascript" language="javascript" >  
          $(document).ready(function(){  
               var dataTable = $('#user_data').DataTable({  
                    "processing":true,  
                    "serverSide":true, 
                    "fnCreatedRow": function( nRow, aData, iDataIndex ) {
                                   $(nRow).attr('id', 'user_'+aData[0]);
                              },
                    "fnRowCallback" : function(nRow, aData, iDisplayIndex){
                                   $("td:first", nRow).html(iDisplayIndex +1);
                                   return nRow;
                         },
                    "order":[],  
                    "ajax":{  
                         url:"<?php echo base_url() . 'index.php/admin/fetch_user'; ?>",  
                         type:"POST"  
                    },  
                    "columnDefs":[  
                         {  
                              "targets":[0, 1, 2, 3, 4],  
                              "orderable":true,
                              
                              
                              
                         },  
                    ],  
               });  
          });  
          </script>  
          <!-- Datatables Request -->

</body>

</html>

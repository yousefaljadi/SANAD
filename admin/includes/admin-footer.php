   <!-- Footer -->
   <footer class="  mt-5 sticky-footer bg-white">
     <div class="container my-auto">
       <div class="copyright text-center my-auto">
         <span>Copyright &copy; Your Website 2020</span>
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



   <!-- Bootstrap core JavaScript-->
   <script src="vendor/jquery/jquery.min.js"></script>
   <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

   <!-- Core plugin JavaScript-->
   <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

   <!-- Custom scripts for all pages-->
   <script src="js/sb-admin-2.min.js"></script>
   <!-- Trix editor-->
   <script src="https://cdn.ckeditor.com/ckeditor5/19.1.1/classic/ckeditor.js"></script>
   <script src="js/file-upload-with-preview.min.js"></script>

   <script>
var upload = new FileUploadWithPreview("myUniqueUploadId");
   </script>




   <script>
$(document).ready(function() {
  // Add the following code if you want the name of the file appear on select
  $(".custom-file-input").on("change", function() {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
  });

  ClassicEditor
    .create(document.querySelector('#body'))
    .catch(error => {
      console.error(error);

    });

    ClassicEditor
    .create(document.querySelector('#body2'))
    .catch(error => {
      console.error(error);
    });
});
   </script>



   </body>

   </html>

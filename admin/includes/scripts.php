        <script src="https://code.jquery.com/jquery-3.6.0.min.js""></script>
        

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>

         <!-- Summernote JS - CDN Link -->
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
        <script>
            $(document).ready(function() {
                //$("#summernote").summernote();

                $('#summernote').summernote({
                placeholder: 'Type your Description',
                tabsize: 2,
                height: 200
                });

                $('.dropdown-toggle').dropdown();
            });
        </script>   
        <!-- //Summernote JS - CDN Link -->

        <!-- CSS For Select2 -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />

<!-- JavaScript for Select2 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
<script>
    // Initialize Select2 for dropdowns
    $(document).ready(function() {
        $('.select2').select2();
    });
</script>

    </body>
</html>
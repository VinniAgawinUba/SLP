<script src="../admin/js/jquery.min.js"></script>
<script src="../admin/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="../admin/js/simple-datatables.min.js" crossorigin="anonymous"></script>
<script src="../admin/js/jquery.dataTables.js"></script> <!-- Move this line up -->
<link rel="stylesheet" href="../admin/css/jquery.dataTables.css" /> <!-- Move this line up -->

<!-- JavaScript for Navlink open close -->
<script>
    window.addEventListener('DOMContentLoaded', event => {

// Toggle the side navigation
const sidebarToggle = document.body.querySelector('#sidebarToggle');
if (sidebarToggle) {
    // Uncomment Below to persist sidebar toggle between refreshes
    // if (localStorage.getItem('sb|sidebar-toggle') === 'true') {
    //     document.body.classList.toggle('sb-sidenav-toggled');
    // }
    sidebarToggle.addEventListener('click', event => {
        event.preventDefault();
        document.body.classList.toggle('sb-sidenav-toggled');
        localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
    });
}

});
</script>


<script>
            $(document).ready( function () {
            $('#myCategory').DataTable({
                order: [[0, 'desc']]
            });
            $('#myCollege').DataTable({
                order: [[0, 'desc']]
            });
            $('#myProject').DataTable({
                order: [[0, 'desc']]
            });
            $('#myDepartment').DataTable({
                order: [[0, 'desc']]
            });
            $('#myFaculty').DataTable({
                order: [[0, 'desc']]
            });
            $('#myPartner').DataTable({
                order: [[0, 'desc']]
            });
            $('#myPost').DataTable({
                order: [[0, 'desc']]
            });
            $('#myGallery').DataTable({
                order: [[0, 'desc']]
            });
            $('#myArticle').DataTable({
                order: [[0, 'desc']]
            });
            $('#mySchoolyear').DataTable({
                order: [[0, 'desc']]
            });
            $('#myStudent').DataTable({
                order: [[0, 'desc']]
            });

            } );
        </script>

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

    <!-- CSS For Select2 -->
    <link href="../admin/css/select2.min.css" rel="stylesheet" />

    <!-- JavaScript for Select2 -->
    <script src="../admin/js/select2.min.js"></script>

<script>
    // Initialize Select2 for dropdowns
    $(document).ready(function() {
        $('.select2').select2();
    });
</script>

<!-- JavaScript for Delete Button Confirmation (Buttons Should have id of deleteButton) -->
<script>
    // Select all elements with the class 'deleteButton'
    var deleteButtons = document.querySelectorAll(".deleteButton");
    
    // Iterate over each delete button and attach event listener
    deleteButtons.forEach(function(button) {
        button.addEventListener("click", function(event) {
            if (confirm("Are you sure you want to delete this document?")) {
                // Find the closest form and submit it
                this.closest(".deleteForm").submit();
            } else {
                event.preventDefault(); // Prevent form submission
            }
        });
    });
</script>





</body>
</html>

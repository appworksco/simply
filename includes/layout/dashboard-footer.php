<div class="bg-light p-1 px-4">
    <div class="mx-3">
        <div class="d-flex justify-content-between">
            <div>
                <p class="small m-0">Department: <?= $department ?></p>
            </div>
            <div class="d-flex">
                <p class="small m-0 me-3"><img src="../dist/icons/users.jpg" class="me-1" alt="Users Icon" style="width: 18px"> <?= $firstName . ' ' . $lastName ?></p>
                <p class="small m-0"><img src="../dist/icons/clock.jpg" class="me-1" alt="Clock Icon" style="width: 18px;"><span id="clockDisplay"></span></p>
            </div>
        </div>
    </div>
</div>

<!-- Add load data animation when refresh button is clicked -->
<?php include ('../includes/modals/load-data-modal.php') ?>

<!-- JS -->
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.26/webcam.min.js"></script>
<script src="../vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="../vendor/apexcharts/dist/apexcharts.min.js"></script>
<script src="../vendor/simplebar/dist/simplebar.min.js"></script>
<script src="../dist/js/sidebarmenu.js"></script>
<script src="../dist/js/app.min.js"></script>
<script src="../dist/js/dashboard.js"></script>
<script src="../dist/js/main.js"></script>
</body>

</html>
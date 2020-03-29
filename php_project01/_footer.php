<!-- Footer -->
<?php
$footerArrayChoice = ['À PROPOS' => '#!', 'RESSOURCES' => 'ressources.php', 'CONTACT' => 'infos.php'];
?>

<footer class="page-footer font-small">

    <!-- Footer Links -->
    <div class="container">

        <!-- Grid row-->
        <div class="row text-center d-flex justify-content-center pt-5 mb-3">

            <?php
            foreach ($footerArrayChoice as $selection => $page) {
                echo "<!-- Grid column -->
                        <div class='col-lg-2 mb-3'>
                            <h6 class='text-uppercase font-weight-bold'>
                                <a href='$page'>$selection</a>
                            </h6>
                        </div>";
            }
            ?>

        </div>
        <!-- Grid row-->
        <hr class="rgba-white-light" style="margin: 0 15%;">

        <!-- Grid row-->
        <div class="row d-flex text-center justify-content-center mb-lg-0 mb-4">

            <!-- Grid column -->
            <div class="col-lg-8 col-12 mt-5">
                <p style="line-height: 1.7rem">Parce que c'est chiant de tout chercher par soi-même</p>
            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row-->
        <hr class="clearfix d-lg-none rgba-white-light" style="margin: 10% 15% 5%;">

    </div>
    <!-- Grid row-->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright :
        <a href="index.php"> How To Learn To Code</a>
    </div>
    <!-- Copyright -->

</footer>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>

</body>

</html>
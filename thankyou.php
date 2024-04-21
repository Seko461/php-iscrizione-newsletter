<?php
require_once __DIR__ . '/layouts/head.php';


session_start();
$message = $_SESSION["message"];
?>
<main>
<div class="container ">

<div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 d-flex  justify-content-center align-items-center" style="margin-top:200px">
    <div class="col ">
        <div class="card">
            <img class="card-img-top"src="https://picsum.photos/400/200" alt="top-img">
               <div class="card-body text-center">
                <h4 class="card-title">THANK YOU</h4>
                <p class="card-text">Successfull subscription</p>
                <p><a href="/php/php-iscrizione-newsletter/">Click here to Home</a></p>
        </div>
    </div>
</div>

   
    
</div>


</main>
    <footer class="py-4 bg-dark text-white fixed-bottom">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3>Company</h3>
                    <ul class="list-unstyled">
                        <li><a href="">Lorem.</a></li>
                        <li><a href="">In?</a></li>
                        <li><a href="">Vitae.</a></li>
                        <li><a href="">Voluptates?</a></li>
                    </ul>
                </div>
                <div class="col">
                    <h3>Quick Links</h3>
                    <ul class="list-unstyled">
                        <li><a href="">Lorem.</a></li>
                        <li><a href="">In?</a></li>
                        <li><a href="">Vitae.</a></li>
                        <li><a href="">Voluptates?</a></li>
                    </ul>
                </div>
                <div class="col">
                    <h3>Legal</h3>
                    <ul class="list-unstyled">
                        <li><a href="">Lorem.</a></li>
                        <li><a href="">In?</a></li>
                        <li><a href="">Vitae.</a></li>
                        <li><a href="">Voluptates?</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- /footer -->
  </body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>
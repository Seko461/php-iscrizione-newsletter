<?php
require_once __DIR__ . '/layouts/head.php';


session_start();
$message = $_SESSION["message"];


 
    if(isset($_GET['email'])){
        echo $_GET['email'];
    }
?>
<main>
<div class="container ">

<div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 d-flex  justify-content-center align-items-center" style="margin-top:200px">
    <div class="col text-center">
        <h1 style="color:red">OOOPS</h1>
        <h3>Please, try again. Something goes wrong</h3>
       <form action="server.php" method="get">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" name="email" id="email" placeholder="Type your email" value="<?php if(isset($_GET['email'])) {echo $_GET['email'];}?>">
            <button class="btn btn-primary btn-lg my-3" type="submit">Send</button>
        </form>
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
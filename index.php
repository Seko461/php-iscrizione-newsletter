<?php

//var_dump(__DIR__ . '/helpers/functions.php');

require_once __DIR__ . '/helpers/functions.php';
//var_dump($_GET);
//var_dump(isset($_GET['email']));


$email = $_GET['email'];

if (isset($email)) {
    //var_dump($email);

    // if (str_contains($email, '@' ) && str_contains($email, '.')) {
    //    echo $message= 'OK';
    // }else{
    //    echo $message='Fail';
    // }

    $response = checkMail($email);

    $message = generateAlertMessage($response);
}

require_once __DIR__ . '/layouts/head.php';

?>


<main>
<?php include __DIR__ . '/alert.php';?>

<div class="p-5 mb-4 bg-light rounded-3">
  <div class="container-fluid py-5">
    <h1 class="display-5 fw-bold">Welcome</h1>
    <p class="col-md-8 fs-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem adipisci hic necessitatibus, doloribus aliquam est quasi veritatis? Quos, nobis laudantium laboriosam ad nisi, sit ipsa laborum quod fugit soluta vel impedit dolorem velit at illum expedita distinctio eos cum illo facilis esse, sint tempora. Dicta ipsa sunt nostrum velit et.</p>
    <button class="btn btn-primary btn-lg" type="button">
      Browse me
    </button>
  </div>
</div>


<section class="posts my-3">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4">
            <div class="col">
                <div class="card">
                    <img class="card-img-top"src="https://picsum.photos/400/200" alt="top-img">
               <div class="card-body">
                <h4 class="card-title">Title</h4>
                <p class="card-text">Text</p>
               </div>
                </div>
            </div>
              <div class="col">
                <div class="card">
                    <img class="card-img-top"src="https://picsum.photos/400/200" alt="top-img">
               <div class="card-body">
                <h4 class="card-title">Title</h4>
                <p class="card-text">Text</p>
               </div>
                </div>
            </div>
              <div class="col">
                <div class="card">
                    <img class="card-img-top"src="https://picsum.photos/400/200" alt="top-img">
               <div class="card-body">
                <h4 class="card-title">Title</h4>
                <p class="card-text">Text</p>
               </div>
                </div>
            </div>
              <div class="col">
                <div class="card">
                    <img class="card-img-top"src="https://picsum.photos/400/200" alt="top-img">
               <div class="card-body">
                <h4 class="card-title">Title</h4>
                <p class="card-text">Text</p>
               </div>
                </div>
            </div>
              <div class="col">
                <div class="card">
                    <img class="card-img-top"src="https://picsum.photos/400/200" alt="top-img">
               <div class="card-body">
                <h4 class="card-title">Title</h4>
                <p class="card-text">Text</p>
               </div>
                </div>
            </div>
              <div class="col">
                <div class="card">
                    <img class="card-img-top"src="https://picsum.photos/400/200" alt="top-img">
               <div class="card-body">
                <h4 class="card-title">Title</h4>
                <p class="card-text">Text</p>
               </div>
                </div>
            </div>
              <div class="col">
                <div class="card">
                    <img class="card-img-top"src="https://picsum.photos/400/200" alt="top-img">
               <div class="card-body">
                <h4 class="card-title">Title</h4>
                <p class="card-text">Text</p>
               </div>
                </div>
            </div>
              <div class="col">
                <div class="card">
                    <img class="card-img-top"src="https://picsum.photos/400/200" alt="top-img">
               <div class="card-body">
                <h4 class="card-title">Title</h4>
                <p class="card-text">Text</p>
               </div>
                </div>
            </div>
        </div>
    </div>

</section>
<hr>
<section class="newsletter my-3 ">
    <div class="container">
          
        <h3>Newsletter</h3>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis cumque quaerat optio omnis commodi esse. Maiores consectetur beatae quasi illo dolorum quia amet tempora. Voluptatum maiores aperiam iure ullam qui?
        </p>

        <form action="" method="get">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Type your email">
            <button class="btn btn-primary btn-lg my-3" type="submit">Send</button>
        </form>
    </div>
</section>
    </main>


    <!-- /main -->
<?php
require_once __DIR__ . '/layouts/foot.php';
?>
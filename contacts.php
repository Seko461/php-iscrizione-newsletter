<?php
require_once __DIR__ . '/layouts/head.php';
?>
    <main>

<div class="p-5 mb-4 bg-light rounded-3">
  <div class="container-fluid py-5">
    <h1 class="display-5 fw-bold">Contact me</h1>
    <p class="col-md-8 fs-4">Lorem ipsum dolor sit amet.</p>
    <button class="btn btn-primary btn-lg" type="button">
      Browse me
    </button>
  </div>
</div>
<div class="container">
    <p>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque laudantium in suscipit eos laboriosam magnam veritatis numquam molestiae, animi obcaecati, temporibus alias dicta itaque voluptatum? Eos velit saepe inventore facere nostrum cum eveniet accusantium illo et voluptatem possimus harum, pariatur tempora quia ad consequuntur tempore quas aliquid atque officiis nam?
    </p>
</div>
<div class="container my-3">
<form action="" method="post">
    <div class="mb-3">
<label for="name">Name</label>
<input type="text" class="form-control" name="name" id="name" placeholder="Mario Rossi">
    </div>
    <div class="mb-3">
<label for="email">Email</label>
<input type="email" class="form-control" name="email" id="email" placeholder="Email">
    </div>
    <div class="mb-3">
<label for="message">Message</label>
<textarea class="form-control" name="message" id="message" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Send</button>
</form>
</div>


    </main>


    <!-- /main -->
<?php
require_once __DIR__ . '/layouts/foot.php';
?>
<div class="container">
     <?php if(isset($message)) : ?>
             <div class="position-fixed alert-dismissible fade show alert alert-<?= $message['status']?> " role="alert" style="top:70px; left:2rem; z-index:1">
             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>  
             <strong><?= $message['text'] ?></strong>
             </div>
           <?php endif; ?>
</div>
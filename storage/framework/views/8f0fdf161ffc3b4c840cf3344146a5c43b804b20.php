<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel 5.5 CRUD Tutorial With Example From Scratch </title>
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </head>
  <body>
    <div class="container">
      <h2>Create A Product</h2><br  />
      
      <br />
      
      <?php if(\Session::has('success')): ?>
          <div class="alert alert-success">
              <p><?php echo e(\Session::get('success')); ?></p>
          </div><br />
      <?php endif; ?>
      <form method="post" action="<?php echo e(url('products')); ?>">
        <?php echo e(csrf_field()); ?>

        <div class="row">
          <div class="col-md-4"></div>
          
        <div class="form-group col-md-4 <?php if($errors->has('name')): ?> has-error <?php endif; ?>">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="name">
           <?php if($errors->has('name')): ?> <p class="alert alert-danger"><?php echo e($errors->first('name')); ?></p> <?php endif; ?> 
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="price">Price:</label>
              <input type="text" class="form-control" name="price">
              <?php if($errors->has('price')): ?> <p class="alert alert-danger"><?php echo e($errors->first('price')); ?></p> <?php endif; ?>
          </div>
          
        </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success"  style="margin-left:38px">Add Product</button>
          </div>
        </div>
      </form>

  </body>
</html>

<script type="text/javascript">
   $(document).ready(function() { 
        $(".alert-success").fadeTo(2000, 500).slideUp(500, function(){
        $(".alert-success").slideUp(500);
    });
});
</script><?php /**PATH C:\Users\Software\Desktop\Laravel55\resources\views/products/create.blade.php ENDPATH**/ ?>
<!-- index.blade.php -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Index Page</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </head>
  <body>
    <div class="container">
    <br />
    <?php if(\Session::has('success')): ?>
      <div class="alert alert-success">
        <p><?php echo e(\Session::get('success')); ?></p>
      </div><br />
     <?php endif; ?>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td><?php echo e($product['id']); ?></td>
        <td><?php echo e($product['name']); ?></td>
        <td><?php echo e($product['price']); ?></td>
        <td><a href="<?php echo e(action('ProductController@edit', $product['id'])); ?>" class="btn btn-warning">Edit</a></td>
        <td>
          <form id="myForm" action="<?php echo e(action('ProductController@destroy', $product['id'])); ?>" method="post">
            <?php echo e(csrf_field()); ?>

            <input name="_method" type="hidden" value="DELETE">
            <span class="btn btn-danger" onClick="test()" >Delete</span>
          </form>
        </td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
  </div>
  </body>
</html>

<script type="text/javascript">
    
    function test(){
        if(confirm("Do you want to remove this item....!")){
             $('form#myForm').submit();
         }
      
    }
   

</script><?php /**PATH C:\Users\Software\Desktop\Laravel55\resources\views/products/index.blade.php ENDPATH**/ ?>
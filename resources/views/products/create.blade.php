<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel 5.5 CRUD Tutorial With Example From Scratch </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </head>
  <body>
    <div class="container">
      <h2>Create A Product</h2><br  />
      {{-- @if ($errors->any()) --}}
      {{-- <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div> --}}<br />
      {{-- @endif --}}
      @if (\Session::has('success'))
          <div class="alert alert-success">
              <p>{{ \Session::get('success') }}</p>
          </div><br />
      @endif
      <form method="post" action="{{url('products')}}">
        {{csrf_field()}}
        <div class="row">
          <div class="col-md-4"></div>
          {{-- <div class="form-group col-md-4"> --}}
        <div class="form-group col-md-4 @if ($errors->has('name')) has-error @endif">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="name">
           @if ($errors->has('name')) <p class="alert alert-danger">{{ $errors->first('name') }}</p> @endif 
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="price">Price:</label>
              <input type="text" class="form-control" name="price">
              @if ($errors->has('price')) <p class="alert alert-danger">{{ $errors->first('price') }}</p> @endif
          </div>
          {{-- @if ($errors->has('price')) 
              <div class="alert alert-danger"><p>{{ $errors->first('price') }}</p></div>             
          @endif --}}
        </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success"  style="margin-left:38px">Add Product</button>
          </div>
        </div>
      </form>
{{--     </div> --}}
  </body>
</html>

<script type="text/javascript">
   $(document).ready(function() { 
        $(".alert-success").fadeTo(2000, 500).slideUp(500, function(){
        $(".alert-success").slideUp(500);
    });
});
</script>
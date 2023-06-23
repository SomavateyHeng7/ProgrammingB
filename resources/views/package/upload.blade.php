<!DOCTYPE html>
<html>
<head>
  <title>Laravel 8 File Upload Example - Tutsmake.com</title>
 
  <meta name="csrf-token" content="{{ csrf_token() }}">
 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 
 
</head>
<body>
 
<div class="container mt-4">
 
  <h2 class="text-center">ADD DATAt</h2>
  <label for="name">Package Name: </label>
        <input type="text" name="name" id="name"></input><br>
        <label for="price">Package Price: </label>
        <input type="text" name="price" id="price"></input><br>
        <label for="start">Date Start: </label>
        <input type="date" name="datestart" id="datestart"></input><br>
        <label for="end">Date End: </label>
        <input type="date" name="dateend" id="dateend"></input><br>
        <label for="total">Total Days: </label>
        <input type="text" name="totaldays" id="totaldays"></input><br>
        <label for="total">Picture: </label>
        <input type="file" name="picture_file" id="picture_file"></input><br>
 
      <form method="POST" enctype="multipart/form-data" id="upload-file" action="{{ url('store') }}" >
                 
          <div class="row">
 
              <div class="col-md-12">
                  <div class="form-group">
                      <input type="file" name="file" placeholder="Choose file" id="file">
                        @error('file')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                  </div>
              </div>
                 
              <div class="col-md-12">
                  <button type="submit" class="btn btn-primary" id="submit">Submit</button>
              </div>
          </div>     
      </form>
</div>
 
</div>  
</body>
</html>
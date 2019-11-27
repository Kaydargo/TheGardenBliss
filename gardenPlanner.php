<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script><link rel="stylesheet" href="css/style.css">
        
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <title>Drag&Drop Garden</title>
    </head>
    <body>

    <div class="container">
  <h2>Garden Dimensions</h2>
  <form action="#">
    <div class="form-group">
      <label for="gardenWidth">Garden Width:</label>
      <input type="text" class="form-control" id="gWidth" placeholder="Enter width of garden" pattern="[0-9]+" name="width" min="0" max="1000">
    </div>
    <div class="form-group">
      <label for="gardenHeight">Garden Height:</label>
      <input type="text" class="form-control" id="gHeight" placeholder="Enter height of garden" pattern="[0-9]+" name="height" min="0" max="1000">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

        <div class="empty">
            <div class="fill" draggable="true"></div>
             </div>
            <div class="empty"></div>
            <div class="empty"></div>
            <div class="empty"></div>
            <div class="empty"></div>       
        <script src="js/main.js"></script>
    </body>
</html>
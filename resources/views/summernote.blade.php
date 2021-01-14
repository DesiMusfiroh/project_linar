<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Summernote</title>
  <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> 
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script> 
  <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
  <style type="text/css">
   .mt-50{margin-top: 50px;}
  </style>
</head>
<body>
  <div class="container">
    <div class="jumbotron">
    <h2>Summernote Text Editor</h2>
    <p>TheRichPost Example</p>
  </div>
    
    <div class="row mt-50">
  <div id="summernote">{!! $content !!}</div>
  <button type="submit" class="btn btn-info">Show Content</button>
</div>
</div>
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h2 class="modal-title text-center">Summernote Content</h2>
      </div>
      <div class="modal-body">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
  <script>
    $(document).ready(function() {
        $('#summernote').summernote({height: 250});
    });
    $(".btn-info").click(function(event) {
      /* Act on the event */
      $("#myModal .modal-body").html($(".note-editable").html());
      $("#myModal").modal("show");
    });
  </script>
</body>
</html>
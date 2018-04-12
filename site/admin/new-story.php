<link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> 
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script> 

<!-- include summernote css/js -->
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>


<div class='story-form'>

  <div class="story-title">
    <input type="text" placeholder="Story title here...">
  </div>

  <div id="summernote"><p>Story content here...</p></div>

  <div>
    <button class='button-control'>Publish</button>
  </div>

</div>

<script>
  $(document).ready(function() {
    $('#summernote').summernote({
      height: 400,
    });
  });
</script>
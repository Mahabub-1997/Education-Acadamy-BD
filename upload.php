<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<link rel="stylesheet" href="styleup.css">
</head>
<body>

<style>body {
  background: url(img/24.jpg);
}</style>

<h2>Upload Content</h2>
<p></p>

<div class="container">
  <form action="/action_page.php" method="post" id="uploadform" name="uploadform">
  <div class="row">
    <div class="col-25">
      <label for="aname">Writer Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="aname" name="aname" placeholder="Your name.." >
    </div>
  </div>
  
  <div class="row">
    <div class="col-25">
      <label for="category">Content Category</label>
    </div>
    <div class="col-75">
      <input type="text" id="category" name="category" placeholder="Content Category..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="title">Content Title</label>
    </div>
    <div class="col-75">
      <input type="text" id="title" name="title" placeholder="Content Title.." >
    </div>
  </div>
  
  
  <div class="row">
    <div class="col-25">
      <label for="description">Description</label>
    </div>
    <div class="col-75">
      <textarea id="description" name="description" placeholder="Write something.." style="height:200px" ></textarea>
    </div>
  </div>
  <div class="row">
    <input type="submit" id="btn" value="Submit">
  </div>
  <div id="wait_for_admin_response"></div>
  </form>
</div>

<script>
    
    jQuery('#uploadform').on('submit',function(e){
        jQuery('#btn').val('Please wait..');
        jQuery('#btn').attr('disabled',true);
        jQuery.ajax({
            url:'submit.php',
            type:'post',
            data:jQuery('#uploadform').serialize(),
            success:function(result){
                jQuery('#wait_for_admin_response').html('Please wait for admin response');
                jQuery('#uploadform')['0'].reset();
                jQuery('#btn').val('Submit');
                jQuery('#btn').attr('disabled',false);
            }
        });
        e.preventDefault();
    });

</script>

</body>
</html>
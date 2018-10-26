<?php include(APPROOT . "/views/includes/header.php"); ?>

<div class="row">
  
  <div class="col-sm-6">

  <form action="<?php echo URLROOT . 'contact/addMessages/'; ?>" method="POST">

<div class="form-row">
    <div class="form-group col-md-6">
      <label for="fname">First name</label>.
      <input type="text" class="form-control" placeholder="John" id="fname" name="fname" required>


    </div>
    <div class="form-group col-md-6">
      <label for="lname">Last name</label>
      <input type="text" class="form-control" placeholder="Smith" id="lname" name="lname" required >
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="email">Email</label>.
      <input type="email" class="form-control" placeholder="name@example.com" id="email" name="email" required>


    </div>
    <div class="form-group col-md-12">
      <label for="message">Message:</label>
      <textarea type="text" class="form-control" placeholder="text..." id="msg" name="msg" ></textarea>
    </div>
  </div>
  <input type="submit" name="submit" class="form-control btn btn-success" value="Contact">
  </form>

  </div>
</div>
  
</div>
</div>

  
   


<?php include(APPROOT . "/views/includes/footer.php"); ?>
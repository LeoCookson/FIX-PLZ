<?php include(APPROOT . "/views/includes/header.php"); ?>


<br>
<br>
<br>

<form class="form"  action="<?php echo URLROOT . 'Appointment/addappointment/'; ?>" method="POST">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="fname">First Name</label>.
      <input type="text" class="form-control" placeholder="Bob...." id="fname" name="fname" required>
    </div>
    <div class="form-group col-md-6">
      <label for="lname">Last Name</label>
      <input type="text" class="form-control" placeholder="Smith..." id="lname" name="lname" required>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="email">Email</label>
      <input type="email" class="form-control" placeholder="leocookson@hotmail.com.." id="email" name="email" required>
    </div>
    <div class="form-group col-md-6">
      <label for="phone">Phone</label>
      <input type="text" class="form-control" placeholder="0234785768.." id="phone" name="phone" required>
    </div>
  </div>



  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="dayof">Day</label>
      <input type="text" class="form-control" placeholder="Tuesday.." id="dayof" name="dayof" required>
    </div>
    <div class="form-group col-md-6">
      <label for="timeof">Time</label>
      <input type="text" class="form-control" placeholder="3pm.." id="timeof" name="timeof" required>
    </div>
  </div>

  <div class="form-group">
    <label for="msg">Message:</label>
    <textarea class="form-control" rows="5" placeholder="Write something.." id="msg" name="msg"></textarea>
  </div>


  <input type="submit" name="submit" class="form-control btn btn-success" value="Send Appointment">
</form>






<?php include(APPROOT . "/views/includes/footer.php"); ?>
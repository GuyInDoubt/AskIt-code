<?php echo ' 
<div class="modal fade" id="signUp" tabindex="-1" aria-labelledby="signUpLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="signUpLabel">Sign Up</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="includes\_signUpManager.php" method="post">
      <div class="modal-body">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">eMail</label>
        <input type="email" class="form-control" id="signUpEMail" name="signUpEMail" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="signUpPassword" name="signUpPassword">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Confirm password</label>
        <input type="password" class="form-control" id="c-signUpPassword" name="c-signUpPassword">
      </div>
      <button type="submit" class="btn btn-primary">Sign Up</button>
      </div>
     </form>
    </div>
  </div>
</div>
'
?>
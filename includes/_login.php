<?php 
echo '
<div class="modal fade" id="logIn" tabindex="-1" aria-labelledby="logInLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header"> 
        <h5 class="modal-title" id="logInLabel">Log In</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="includes\_logInManager.php" method="post">
      <div class="modal-body">
      <div class="mb-3">
        <label for="logInEmail" class="form-label">eMail</label>
        <input type="email" class="form-control" id="logInEmail" name="logInEmail" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="logInPassword" class="form-label">Password</label>
        <input type="password" class="form-control" id="logInPassword" name="logInPassword">
      </div>
      <button type="submit" class="btn btn-primary">Log In</button>
      </div>
      </form>
    </div>
  </div>
</div>
'
?>
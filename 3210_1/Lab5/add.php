<form action='index.php' method="POST">
  <div class="mb-3">
    <label for="firstname" class="form-label">Firstname</label>
    <input type="text" class="form-control" id="firstname" name="firstname">
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>
  <div class="mb-3">
    <label for="lastname" class="form-label">Lastname</label>
    <input type="text" class="form-control" id="lastname" name="lastname">
  </div>
  <div class="mb-3">
    <label for="date" class="form-label">Date birthday</label>
    <input type="date" class="form-control" id="date" name="date">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>
  <div class="mb-3">
    <label for="phone" class="form-label">Phone number</label>
    <input type="tel" class="form-control" id="phone" name="phone">
  </div>
    <div class="mb-3">
        <label for="comment" class="form-label">Comment</label>
        <textarea name="comment" class="form-control" id="comment"></textarea>
    </div>
  <button type="submit" class="btn btn-primary">Save</button>
</form>
<?php require('footer.php');?>


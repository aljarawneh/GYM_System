<?php require('partials/head.php') ?>

<div class="container-fluid">
  <div class="row">
    <!-- start form section-->
    <div class="col-md-5 box-header m-auto pt-5 ">
      <!--      " onsubmit=" return validate()-->
      <form method="post" action="/login">

        <div class="animate__animated animate__bounce my-1" id="errorMessage"></div>
        <div class="row">
          <div class="form-group col-md-6">
            <i class="fa-solid fa-user"></i>
            <label for="">FIRST NAME</label>
            <input type="text" id="username" class="form-control input-form" name="Fname" placeholder="Username">
            <?= $_POST['Fname'] ?? '' ?>
            <?php if (isset($errors['Fname'])) : ?>
              <p class="text-red-500 text-xs mt-2 error-message"><?= $errors['Fname'] ?></p>
            <?php endif; ?>
          </div>
          <div class="form-group col-md-6">
            <i class="fa-solid fa-user"></i>
            <label for="">LAST NAME</label>
            <input type="text" id="username" class="form-control input-form" name="Lname" placeholder="Username">
            <?= $_POST['Lname'] ?? '' ?>
            <?php if (isset($errors['Lname'])) : ?>
              <p class="text-red-500 text-xs mt-2 error-message"><?= $errors['Lname'] ?></p>
            <?php endif; ?>
          </div>
        </div>
        <div class="form-group mt-4">
          <i class="fa-solid fa-envelope"></i>
          <label for="">E-Mail</label>
          <input type="email" id="email" class="form-control input-form" name="email" placeholder="E-Mail">
          <?= $_POST['email'] ?? '' ?>
          <?php if (isset($errors['email'])) : ?>
            <p class="text-red-500 text-xs mt-2 error-message"><?= $errors['email'] ?></p>
          <?php endif; ?>
        </div>
        <div class="form-group mt-4">
          <i class="fa-solid fa-envelope"></i>
          <label for="">Password</label>
          <input type="password" id="password" class="form-control input-form" name="password" placeholder="password">
          <?= $_POST['password'] ?? '' ?>
          <?php if (isset($errors['password'])) : ?>
            <p class="text-red-500 text-xs mt-2 error-message"><?= $errors['password'] ?></p>
          <?php endif; ?>
        </div>

        <div class="form-group mt-4 ">
          <label for="">Compose</label>
          <textarea name="compose" class="textarea-form" id="" cols="70" rows="6"></textarea>
          <?= $_POST['compose'] ?? '' ?>
          <?php if (isset($errors['compose'])) : ?>
            <p class="text-red-500 text-xs mt-2 error-message"><?= $errors['compose'] ?></p>
          <?php endif; ?>
        </div>
        <button type="submit" class="btn btn-primary button-form"> SUBMIT</button>
      </form>

    </div>
  </div>
</div>
<!-- End form section -->


<!-- start footer section -->
<footer>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 text-center pt-4">
        <p class="p-footer">After Submitted, you'll receive updates instantly in your e-mail.</p>
      </div>
    </div>
  </div>
</footer>



<!-- JS Links -->
<script src="js/jquery.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<!--<script src="js/bootstrap.min.js"></script>-->
<script src="js/main.js"></script>

</body>

</html>
<?php

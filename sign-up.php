<?php include('sign-up1.php') ?>

<!DOCTYPE html>

<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1">>
  <link rel="stylesheet" type="text/css" href="css/sign-up.css" />
  <link rel="stylesheet" type="text/css" href="css/styleguide.css" />
  <link rel="stylesheet" type="text/css" href="css/globals.css" />
</head>

<body>
  <input type="hidden" id="anPageName" name="page" value="sign-up" />
  <div class="container-center-horizontal">
    <div class="sign-up screen">
      <div class="overlap-group">
        <div class="sign-up-1">
          <div class="overlap-group1">
            <div class="flex-col">
              <div class="title-tagh4">Create An Account</div>
              <div class="flex-row">
                <div class="new-user-tagh6">Already an user?</div>
                <a href="sign-in.php">
                  <div class="create-an-account-t">Sign In</div>
                </a>
              </div>
              <form method="post" action="payment.php" >
                <?php include('errors.php'); ?>
                <div class="flex-row-1">
                  <input type="text" placeholder="First Name" name="fist_name" class="input value-1 notosans-semi-bold-mirage-16px">
                  <input type="text" placeholder="Last Name" name="last_name" class="input-1 value-1 notosans-semi-bold-mirage-16px">
                </div>
                <input type="text" placeholder="License Plate Number" name="plate" class="input-2 value-1 notosans-semi-bold-mirage-16px">
                <input type="text" placeholder="Password" name="password" class="input-3 value-1 notosans-semi-bold-mirage-16px">
                <img class="image-4" src="img/image-4@1x.png" />
                <input type="text" placeholder="Email Address" name="email" class="input-4 value-1 notosans-semi-bold-mirage-16px">
                <a href="payment.php">
                <input type="submit" name="reg_user" value="Sign Up" class="label button">
              </a>
              </form>
              <div class="sign-in-with">
                <img class="line" src="img/line-4@1x.png" />
                <div class="typography-taguis">Or Sign In With</div>
                <img class="line-1" src="img/line-4@1x.png" />
              </div>
              <div class="flex-row-2">
                <div class="circle-button">
                  <div class="overlap-group2">
                    <img class="path" src="img/path-8@1x.png" /><img class="path-1" src="img/path-9@1x.png" /><img class="path-2" src="img/path-10@1x.png" />
                  </div>
                </div>
                <div class="circle-button-1"><img class="path-3" src="img/path-6@1x.png" /></div>
                <div class="circle-button-2">
                  <div class="path-4"></div>
                  <div class="flex-row-3">
                    <div class="rect"></div>
                    <img class="path-5" src="img/path-5@1x.png" />
                  </div>
                </div>
                <div class="circle-button-3"><img class="path-6" src="img/path-4@1x.png" /></div>
              </div>
            </div>
            <a href="index.php">
              <div class="circle-button-4">
                <div class="overlap-group3"><img class="line-2" src="img/line-3@1x.png" /></div>
              </div>
            </a>
          </div>
        </div>

      </div>
    </div>
  </div>
</body>

</html>
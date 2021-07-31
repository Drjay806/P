<? include('sign-up1.php')?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="og:type" content="website" />
  <link rel="stylesheet" type="text/css" href="css/sign-in.css" />
  <link rel="stylesheet" type="text/css" href="css/styleguide.css" />
  <link rel="stylesheet" type="text/css" href="css/globals.css" />

</head>

<body style="margin: 0; background: #fefefe">
  <input type="hidden" id="anPageName" name="page" value="sign-in" />
  <div class="container-center-horizontal">
    <div class="sign-in screen">
      <div class="overlap-group">
        <div class="flex-col">
          <div class="title-tagh4">Sign In</div>
          <div class="flex-row">
            <div class="new-user-tagh6">New user?</div>
            <a href="sign-up.php">
              <div class="text-1">Create an account</div>
            </a>
          </div>

          <formmethod="post" action="login.php">

            <input type="text" name="email" placeholder="email" class="input value notosans-semi-bold-mirage-16px">
            <input type="text" name = "password" placeholder="Password" class="input-1 value-1 notosans-semi-bold-mirage-16px">
            <div class="checkbox">
              <div class="overlap-group2">
                <img class="check-displaye-abelstateactive" src="img/check--display-elements-label--state-active-@1x.png" />
              </div>
              <div class="label notosans-semi-bold-mirage-16px">Keep me signed in</div>
            </div>
            <a href= "account.php" >
            <input type="submit" value="Sign In" name="login_user" class="label-1 button">
          </a> </form>
        </div>
        <div class="illustration">
          <div class="overlap-group1">
            <img class="path-fillstyle1brand" src="img/path--fill-style1-brand-@1x.png" /><img class="path-fillstyle1text" src="img/path--fill-style1-text-@1x.png" /><img class="path-fillstyle1foreground" src="img/path--fill-style1-foreground-@1x.png" /><img class="path-fillstyle1text-1" src="img/path--fill-style1-text--1@1x.png" /><img class="path-fillstyle1text-2" src="img/path--fill-style1-text--2@1x.png" /><img class="path-fillstyle1background" src="img/path--fill-style1-background-@1x.png" /><img class="path-fillstyle1text-3" src="img/path--fill-style1-text--3@1x.png" />
            <div class="path-fillstyle1text-4"></div>
            <img class="path-fillstyle1text-5" src="img/path--fill-style1-text--4@1x.png" /><img class="path-fillstyle1background-1" src="img/path--fill-style1-background--1@1x.png" /><img class="path-fillstyle1background-2" src="img/path--fill-style1-background--2@1x.png" /><img class="path-fillstyle1foreground-1" src="img/path--fill-style1-foreground--1@1x.png" /><img class="path-fillstyle1brand-1" src="img/path--fill-style1-brand--1@1x.png" /><img class="path-fillstyle1brand-2" src="img/path--fill-style1-brand--2@1x.png" /><img class="path-fillstyle1brand-3" src="img/path--fill-style1-brand--3@1x.png" /><img class="path-fillstyle1foreground-2" src="img/path--fill-style1-foreground--2@1x.png" />
          </div>
        </div>
        <a href="index.php">
          <div class="circle-button">
            <div class="overlap-group3"><img class="line" src="img/line-3@1x.png" /></div>
          </div>
        </a>
      </div>
    </div>
  </div>
</body>

</html>
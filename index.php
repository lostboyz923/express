<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <script src="https://kit.fontawesome.com/1cf483120b.js" crossorigin="anonymous"></script>
    
    <script src="main.js" defer></script>
    <!--by including axios as CDN we don't have to include import in our main.js-->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script> <!-- Include Axios -->
    <script src="https://www.gstatic.com/firebasejs/8.2.8/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.2.8/firebase-auth.js" id="signInWithEmailAndPassword"></script>   
    <title>Login Form</title>
</head>

<body>
    <div class="container">
        <div class="screen">
            <div class="screen__content">
              
              <form class="login" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                
                    
                    
                    <div class="login__field"> 
                        <i class="login__icon fas fa-user"></i>
                        <input type="text" class="login__input" placeholder="User name / Email" name="username" required>
                    </div>
                    <div class="login__field">
                        <i class="login__icon fas fa-lock"></i>
                        <input type="password" class="login__input" placeholder="Password" name="username" required>
                    </div>
                    <button class="button login__submit">
                        <span class="button__text">Log In Now</span>
                        <i class="button__icon fas fa-chevron-right"></i>
                    </button>
                </form>
                <div class="social-login">
                    <h3>log in via</h3>
                    <div class="social-icons">
                      <a href="https://www.instagram.com/accounts/login/" class="social-login__icon fab fa-instagram"></a>
                        <a href="https://www.facebook.com/login/" class="social-login__icon fab fa-facebook"></a>
                        <a href="https://twitter.com/login" class="social-login__icon fab fa-twitter"></a>
                    </div>
                </div>
            </div>
            
            
            
            <div class="screen__background">
                <span class="screen__background__shape screen__background__shape4"></span>
                <span class="screen__background__shape screen__background__shape3"></span>
                <span class="screen__background__shape screen__background__shape2"></span>
                <span class="screen__background__shape screen__background__shape1"></span>
            </div>
        </div>
    </div>
    

<!--browser-sync-->
    <script id="__bs_script__">//<![CDATA[
        (function() {
          try {
            var script = document.createElement('script');
            if ('async') {
              script.async = true;
            }
            script.src = 'http://HOST:3002/browser-sync/browser-sync-client.js?v=3.0.2'.replace("HOST", location.hostname);
            if (document.body) {
              document.body.appendChild(script);
            } else if (document.head) {
              document.head.appendChild(script);
            }
          } catch (e) {
            console.error("Browsersync: could not append script tag", e);
          }
        })()
      //]]></script>
</body>


</html>

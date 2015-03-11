<!DOCTYPE html>
<html>
        <head>
            <title>Explore Surabaya 2015 -- Signin</title>
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <link href='http://fonts.googleapis.com/css?family=Bree+Serif|Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
                    <link href="_/css/bootstrap.css" rel="stylesheet" media="screen">
                    <link href="_/css/mystyles.css" rel="stylesheet" media="screen">
        </head>
    <body id="sign_in">

    <section class="container">
        <div class="content row">
            <section class="main col col-lg-8">
                <?php include "_/components/php/header.php"; ?>
            </section><!-- main -->
                <section class="sidebar col col-lg-4">
                </section><!-- sidebar -->
        </div><!-- content -->
                        
<div id="login_form">
<form name="f1" method="post" action="login.php" id="f1">
        <table>
            <tr>
                <td class="f1_label">User Name :</td><td><input type="text" name="username" value="" />
                </td>
            </tr>
            
            <tr>
                <td class="f1_label">Password  :</td><td><input type="password" name="password" value=""  />
                </td>
            </tr>
            
            <tr>
                <td>
                    <input type="submit" name="login" value="Log In" style="font-size:18px; " />
                </td>
            </tr>
        </table>
    </form> 
</div>
        
    <?php include "_/components/php/footer.php"; ?>
		</section><!-- container -->
                

    <script src="_/js/bootstrap.js"></script>
    <script src="_/js/myscript.js"></script>
  </body>
</html>

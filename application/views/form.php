<html>
    <head>
        <title>Signup Form</title>
        <script src="<?php echo base_url() . 'assets/js/bootstrap.min.js' ?>" ></script>
        <link type="text/stylesheet" src='<?php echo base_url() . "assets/css/bootstrap-responsive.css"; ?>' />
        <link type="text/stylesheet" src='<?php echo base_url() . "assets/css/bootstrap.min.css"; ?>' />
    </head>
    <body>
        <form name="signup" action="<?php echo base_url() . 'signUp'; ?>">
                <legend>Sign Up</legend>
                <label>Name</label>
                <input type="text" id="name" name="name"/>
                <label>E-Mail</label>
                <input type="text" id="email" name="name"/>
                <label>Username</label>
                <input type="text" id="user" name="user"/>
                <label>Password</label>
                <input type="password" id="pass" name="password"/>
        </form>



    </body>
</html>

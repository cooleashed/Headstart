<html>
    <head>
        <title>Form</title>
        <script src="<?php echo base_url() . 'assets/js/bootstrap.min.js' ?>" ></script>
        <link type="text/stylesheet" src='<?php echo base_url() . "assets/css/bootstrap-responsive.css"; ?>' />
        <link type="text/stylesheet" src='<?php echo base_url() . "assets/css/bootstrap.min.css"; ?>' />
    </head>
    <body>
        <form name="signup" action="<?php echo base_url() . 'signUp'; ?>">
            <table name="form">
                <legend>Sign Up</legend>
                <label>Username</label>
                <input type="text" placeholder="Enter the username"/>
                <label>Password</label>
                <input type="password"/>
            </table>
        </form>



    </body>
</html>

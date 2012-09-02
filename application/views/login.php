<html>
    <head>
        <title>Login</title>
        <script src="<?php echo base_url() . 'assets/js/bootstrap.min.js' ?>" ></script>
        <link href="<?php echo base_url() . 'assets/css/bootstrap-responsive.css' ?>" rel="stylesheet"/>
        <link href="<?php echo base_url() . 'assets/css/bootstrap.min.css' ?>" rel="stylesheet"/>    </head>
    <body>
        <form class="form-horizontal">
            <div class="control-group">
                <label class="control-label" for="inputEmail">Username</label>
                <div class="controls">
                    <input type="text" id="user" placeholder="Username">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputPassword">Password</label>
                <div class="controls">
                    <input type="password" id="password" placeholder="Password">
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <label class="checkbox">
                        <input type="checkbox"> Remember me
                    </label>
                    <button type="submit" class="btn">Sign in</button>
                </div>
            </div>
        </form>
    </body>
</html>

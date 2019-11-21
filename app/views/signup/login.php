<div class="container">
<?php Flasher::flash();?>
           
            <h1 id="headline" >Login</h1>
        </div>
    <div class="container border border-secondary" id="main">

<div class="container" style="width:50%">

    <div class="container">
                    <form method="post" action="<?=BASEURL;?>/signup/cekLogin">
                        <div class="form-group row">
                            <label for="username" class="col-sm-2 col-form-label">username</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" name="username_lg" placeholder="Username">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-sm-2 col-form-label">password</label>
                            <div class="col-sm-10">
                            <input type="password" class="form-control" name="password_lg" placeholder="Password">
                            </div>
                        </div>
                       <center> <input class="btn btn-primary"    type="submit" name="login" value="Login"></center>
                       <p>Jika belum punya akun </p>
                    <a class="btn btn-primary" href="<?=BASEURL;?>/signup" role="button">Sign Up</a>
                    </form>
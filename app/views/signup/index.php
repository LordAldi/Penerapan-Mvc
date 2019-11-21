
<div class="container">
<?php Flasher::flash();?>
            <h1 id="headline" >Sign Up </h1>
        </div>
        
        <div class="container border border-secondary" id="main">

            <div class="container">
                <form method="post" action="<?=BASEURL;?>/signup/daftar">
                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">NAMA</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama" placeholder="Nama">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="NIM" class="col-sm-2 col-form-label">NIM</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="nim" placeholder="NIM">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="username" class="col-sm-2 col-form-label">USERNAME</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="username" placeholder="Username">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-sm-2 col-form-label">PASSWORD</label>
                        <div class="col-sm-10">
                        <input type="password" class="form-control" name="password" placeholder="password">
                        </div>
                    </div>
                    <input class="btn btn-primary"    type="submit" name="signup" value="Sign up">
                    <p>Sudah punya akun silahkan </p>
                    <a class="btn btn-primary" href="<?=BASEURL;?>/signup/login" role="button">Login</a>
                </form>
            </div>
        </div>
<!-- <div class="container border border-secondary" id="main">
        <div class="container text-center">
            <h4>Nama: <?php echo $data['dUser']['nama'];?></h4>
            <h4>NIM: <?php echo $data['dUser']['nim'];?></h4>
            
            <a class="btn btn-primary" href="<?=BASEURL;?>/home/input" role="button">Input Khs</a>
            <a class="btn btn-primary" href="<?=BASEURL;?>/home/print" role="button">Cetak Khs</a>
            <form method="post" action="<?=BASEURL;?>/home/logout">
                <div class="form-group row">
                    <input class="btn btn-primary"    type="submit" name="logout" value="Logout">
                </div>
            </form>
        </div>
    </div> -->

    <div class="container-fluid p-0">

        <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="about">
        <div class="w-100">
            <h1 class="mb-0">
            <span class="text-primary"><?php echo $data['dUser']['nama'];?></span>
            </h1>
            <div class="subheading mb-5">NIM: <?php echo $data['dUser']['nim'];?>
            <a href="#">   IPK: <?php echo $data['dUser']['ipk'];?></a>
            </div>
            <!-- <p class="lead mb-5">I am experienced in leveraging agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition.</p> -->
            <!-- <div class="social-icons">
            <a href="<?=BASEURL;?>/home/input">
                <i class="subheading md-5" style="font-size: 2 em">Input KHS</i>
            </a>
            <a href="<?=BASEURL;?>/home/print">
                <i class="subheading md-5">Cetak KHS</i>
            </a>
            

            </div> -->
        </div>
        </section>
    </div>

<div class="container">
                <h1 id="headline" >KHS </h1>
            </div>
            
            <div class="container border border-secondary" id="main">

                <div class="container">
                
                        <div class="form-group row">
                            <label for="nama" class="col-sm-2 col-form-label">NAMA:</label>
                            <div class="col-sm-10">
                            <?php echo $data['dUser']['nama'];?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="NIM" class="col-sm-2 col-form-label">NIM:</label>
                            <div class="col-sm-10">
                            <?php  echo $data['dUser']['nim']; ?>
                            </div>
                        </div>

                    
                        <table class="table">
                            <thead class="" id="theadnew">
                                <tr>
                                <th scope="col" width="10%">No</th>
                                <th scope="col">Mata Kuliah</th>
                                <th scope="col" width="20%">Nilai</th>
                                <th scope="col" width="10%">Edit</th>
                                <th scope="col" width="10%">Delete</th>
                                </tr>
                            </thead>
                            <tbody>


                            
                            <?php $i=1;
                            foreach($data['dNilai'] as $dNilai) { ?>
                            
                                <tr>
                                <th scope="row"><?= $i ?></th>
                                <td>
                                    <div class="form-group row"><?=$dNilai['mk']?></div>
                                </td>
                                <td><div class="form-group row"><?=$dNilai['nilai']?></div>
                                </td>
                                <td><div class="form-group row">
                                    <a href="<?=BASEURL;?>/home/edit/<?=$dNilai['idx']?>">Edit</a>
                                    </div>
                                </td>
                                <td><div class="form-group row">
                                    <a href="<?=BASEURL;?>/home/delete/<?=$dNilai['idx']?>/<?=$data['dUser']['nim'];?>">Delete</a>
                                    </div>
                                </td>
                                </tr>
                                
                                <?php $i++; }?>
                                </tr>
                            </tbody>
                        </table>
                        <a class="btn btn-warning" href="<?=BASEURL;?>/home/input" role="button">Input Khs</a>
                        <a class="btn btn-warning" href="<?=BASEURL;?>/home/" role="button">Beranda</a>
                        
                        <center><h3> IPK = <?php echo $data['dUser']['ipk'] ?> </h3> </center>
                </div>
            </div>
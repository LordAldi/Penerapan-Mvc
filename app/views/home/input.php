<div class="container">
            <h1 id="headline" >Pengisian KHS </h1>
        </div>
        
        <div class="container border border-secondary" id="main">

            <div class="container">
                <form method="post" action="<?=BASEURL;?>/home/hitungNilai">
                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">NAMA</label>
                        <div class="col-sm-10">
                        <?php echo $data['dUser']['nama'];?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="NIM" class="col-sm-2 col-form-label">NIM</label>
                        <div class="col-sm-10">
                        <?php echo $data['dUser']['nim'];?>
                        </div>
                    </div>

                   
                    <table class="table">
                        <thead class="" id="theadnew">
                            <tr>
                            <th scope="col" width="10%">No</th>
                            <th scope="col">Mata Kuliah</th>
                            <th scope="col" width="20%">Nilai</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th scope="row">1</th>
                            <td>
                                <div class="form-group row">
                                <input type="text" class="form-control" name="mk1">
                                </div>
                            </td>
                            <td><div class="form-group row">
                                <input type="number" class="form-control" name="nilai1">
                                </div>
                            </td>
                            </tr>
                            <tr>
                            <th scope="row">2</th>
                            <td>
                                <div class="form-group row">
                                <input type="text" class="form-control" name="mk2">
                                </div>
                            </td>
                            <td><div class="form-group row">
                                <input type="number" class="form-control" name="nilai2">
                                </div>
                            </td>
                            </tr>
                            <tr>
                            <th scope="row">3</th>
                            <td>
                                <div class="form-group row">
                                <input type="text" class="form-control" name="mk3">
                                </div>
                            </td>
                            <td><div class="form-group row">
                                <input type="number" class="form-control" name="nilai3">
                                </div>
                            </td>
                            </tr>
                            <tr>
                            <th scope="row">4</th>
                            <td>
                                <div class="form-group row">
                                <input type="text" class="form-control" name="mk4">
                                </div>
                            </td>
                            <td><div class="form-group row">
                                <input type="number" class="form-control" name="nilai4">
                                </div>
                            </td>
                            </tr>
                            <tr>
                            <th scope="row">5</th>
                            <td>
                                <div class="form-group row">
                                <input type="text" class="form-control" name="mk5">
                                </div>
                            </td>
                            <td><div class="form-group row">
                                <input type="number" class="form-control" name="nilai5">
                                </div>
                            </td>
                            </tr>
                            <tr>
                            <th scope="row">6</th>
                            <td>
                                <div class="form-group row">
                                <input type="text" class="form-control" name="mk6">
                                </div>
                            </td>
                            <td><div class="form-group row">
                                <input type="number" class="form-control" name="nilai6">
                                </div>
                            </td>
                            </tr>
                            <tr>
                            <th scope="row">7</th>
                            <td>
                                <div class="form-group row">
                                <input type="text" class="form-control" name="mk7">
                                </div>
                            </td>
                            <td><div class="form-group row">
                                <input type="number" class="form-control" name="nilai7">
                                </div>
                            </td>
                            </tr>
                            <tr>
                            <th scope="row">8</th>
                            <td>
                                <div class="form-group row">
                                <input type="text" class="form-control" name="mk8">
                                </div>
                            </td>
                            <td><div class="form-group row">
                                <input type="number" class="form-control" name="nilai8">
                                </div>
                            </td>
                            </tr>
                            <tr>
                            <th scope="row">9</th>
                            <td>
                                <div class="form-group row">
                                <input type="text" class="form-control" name="mk9">
                                </div>
                            </td>
                            <td><div class="form-group row">
                                <input type="number" class="form-control" name="nilai9">
                                </div>
                            </td>
                            </tr>
                            <tr>
                            <th scope="row">10</th>
                            <td>
                                <div class="form-group row">
                                <input type="text" class="form-control" name="mk10">
                                </div>
                            </td>
                            <td><div class="form-group row">
                                <input type="number" class="form-control" name="nilai10">
                                </div>
                            </td>
                            </tr>
                        </tbody>
                    </table>
                    <input class="btn btn-warning"    type="submit" name="submit" value="Cetak KHS">
                    
                    <a class="btn btn-warning" href="<?=BASEURL;?>/home/" role="button">Beranda</a>
                </form>
                
            </div>
        
        </div>
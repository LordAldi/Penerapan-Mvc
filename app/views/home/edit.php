
<div class="container">
<h1 id="headline" >EDIT DATA</h1>
</div>
<div class="container border border-secondary" id="main">

<div class="container" style="width:50%">

<div class="container">
        <form method="post" action="<?=BASEURL;?>/home/editData/<?=$data['idx']?>/<?=$data['dUser']['nim'];?>">
            <div class="form-group row">
                <label for="nama" class="col-sm-2 col-form-label">NAMA</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="edit_nama" value="<?php echo $data['dUser']['nama']; ?>" placeholder="Nama" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="NIM" class="col-sm-2 col-form-label">NIM</label>
                <div class="col-sm-10">
                <input type="number" class="form-control" name="edit_NIM" value="<?php echo $data['dUser']['nim']; ?>" placeholder="NIM" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="NIM" class="col-sm-2 col-form-label">MATA KULIAH</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="edit_mk" value="<?php echo $data["dNilaiE"]["mk"]?>" placeholder="NIM" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="NIM" class="col-sm-2 col-form-label">NILAI</label>
                <div class="col-sm-10">
                <select name="edit_nilai" class="form-control">
                    <option value ="<?=$data["dNilaiE"]["nilai"]?>"> <?php echo $data["dNilaiE"]["nilai"]?> </option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                    
                </select>
                </div>
            </div>
     
            </div>
            <center> <input class="btn btn-warning"    type="submit" name="edit" value="Cetak KHS"></center>
                    </form>
    </div>
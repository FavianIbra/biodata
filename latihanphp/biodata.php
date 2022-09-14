<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Biodata</title>
</head>
<style>
  input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=submit] {
  width: 100%;
  background-color: black;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
input[type=submit]:hover {
  background-color: #f9004d;
}
div {
  border-radius: 5px;
  background-color: #ccc;
  padding: 20px;
}
</style>
<body>
    <h3>Silahkan isi formulir berikut ini</h3>
    <div>
      <form action="hasilbiodata.php" method="POST">
        <label for="fname">Nama :</label>
        <input type="text" id="fname" name="Nama" placeholder="Your name..">
        <label>Jenis Kelamin</label>
        <div class="custom_select">
          <select name="gender" id="">
          <option value="-">-</option>
            <option value="Laki">Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
          </select>
        </div>
        <label>Agama:</label>
        <div class="custom_select">
          <select name="Agama" id="">
          <option value="-">-</option>
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Budha">Budha</option>
            <option value="Hindu">Hindu</option>
            <option value="Konghucu">Konghucu</option>
          </select>
        </div>
         <label for="alamat">Alamat :</label>
         <input type="text" id="alamat" name="alamat" placeholder="Ketik alamatmu..">
         <label for="tmpt">Tempat Lahir :</label>
         <input type="text" id="tempat" name="tempat" placeholder="Ketik tempat lahirmu..">
         <label for="tanggal">Tanggal Lahir :</label> 
         <input type="date" id="tanggal" name="tanggal" >
         <br>
         <br>
         <label for="hobi">Hobi :</label>
         <input type="text" id="hobi" name="hobi" placeholder="Ketik hobimu..">
         <label for="cita">Cita Cita :</label>
         <input type="text" id="cita" name="cita" placeholder="ketik cita citamu..">
         <br>
         <br>
         <label for="usia">Usia :</label>
         <input type="number" id="usia" name="usia" placeholder="Pilih usiamu..">
         <br>
         <br>
         <label for="asal">Asal Sekolah :</label>
         <input type="text" name="asal" placeholder="Ketik asal sekolahmu..">
         <input type="submit" value="Submit">
        </form>
      </div>
    </body>
    </html>
<!DOCTYPE html>
<html lang="en">


<style>
    

body {
    min-height: 100vh;
    width: 100%;
    background:url(img/bgcuy.jpg);
    background-position: center;
    background-size: cover;
    padding-left: 5%;
    padding-right: 5%;
    box-sizing: border-box;
    justify-content: center;
}

.wrapper {
    max-width: 500px;
    width: 100%;
    background-color:White;
    margin: 50px auto;
    box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.125);
    padding: 30px;
    border-radius: 50px;
    border:2px solid black;
}

.inputfield {
    text-align: center;
}

.wrapper .title {
    font-size: 24px;
    font-weight: 700;
    margin-bottom: 25px;
    color: #000000;
    text-transform: uppercase;
    text-align: center;
}

.wrapper .form .inputfield {
    margin-bottom: 15px;
    display: flex;
    align-items: center;
    border-radius: 5px;
}

.wrapper .form .inputfield label {
    width: 200px;
    color:black;
    margin-right: 10px;
    font-size: 14px;
}

.wrapper .form .inputfield .btn {
    width: 100%;
    padding: 8px 10px;
    font-size: 15px;
    border: 0px;
    background-color:black;
    color: #fff;
    cursor: pointer;
    border-radius: 3px;
    outline: none;
}




</style>
<body>
    <form action="tampil.php" method="POST" >
    <div class="wrapper">
        <div class="title">
            BIODATA
        </div>
        <div class="form">
            <div class="inputfield">
                <label>Nama:</label>
                <input type="text"  class="input" name="Nama">
            </div>
            <div class="inputfield">
                <label>Jenis Kelamin</label>
                <div class="custom_select">
                  <div class="custom_select">
                        <select name="gender" id="">
                       <option value="-">-</option>
                       <option value="Laki">Laki-Laki</option>
                       <option value="Perempuan">Perempuan</option>
                       </select>
                  </div>
                </div>
            </div>
            <div class="inputfield">
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
            </div>
            <div class="inputfield">
                <label>Alamat</label>
                <textarea class="textarea" name="Alamat"></textarea>
            </div>
            <div class="inputfield">
                <label>Tempat lahir:</label>
                <input type="text" class="input" name="TempatLahir">
            </div>
            <div class="inputfield">
                <label>Tanggal lahir:</label>
                <input type="date" class="input" name="TanggalLahir">
            </div>
           <div class="inputfield">
                <label>Hoby: </label>
                <input type="text" class="input" name="hobi">
           </div>
            <div class="inputfield">
                <label>Cita-cita:</label>
                <input type="text" class="input" name="CitaCita">
            </div>
            <div class="inputfield">
                <label>Usia:</label>
                <input type="text" class="input" name=Usia>
            </div>
            <div class="inputfield">
                <label>Asal Sekolah:</label>
                <input type="text" class="input" name="AsalSekolah">
            </div>
           <br> 
            <div class="inputfield">
                <input type="submit" value="SUBMIT" class="btn">
            </div>
        </div>


    </div>
    </form>

</body>

</html>





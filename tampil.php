<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RPL</title>
    
</head>
<style>
    @import url('https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    list-style: none;
    font-family: 'Josefin Sans', sans-serif;
}

.wrapper .left img {
    border-radius: 50%;
    margin-bottom: 10px;
   
}

.wrapper .left h4 {
    margin-bottom: 10px;
    color:black;
}

.wrapper .left p {
    font-size: 17px;
    color:black;
}

.wrapper .right {
    width: 65%;
    background: #fff;
    padding: 30px 25px;
    border-top-right-radius: 5px;
    border-bottom-right-radius: 5px;
}

.wrapper .right .info,
.wrapper .right .projects {
    margin-bottom: 25px;
}

.wrapper .right .info h3,
.wrapper .right .projects h3 {
    margin-bottom: 15px;
    padding-bottom: 5px;
    border-bottom: 1px solid #e0e0e0;
    color: #353c4e;
    text-transform: uppercase;
    letter-spacing: 5px;
}

.wrapper .right .info_data,
.wrapper .right .projects_data {
    display: flex;
    justify-content: space-between;
}

.wrapper .right .info_data .data,
.wrapper .right .projects_data .data {
    width: 45%;
}

.wrapper .right .info_data .data h4,
.wrapper .right .projects_data .data h4 {
    color: #353c4e;
    margin-bottom: 5px;
}



.wrapper .projects .projects_data .data ul li{
    font-size: 14px;
    width: 450px;
}


.left .kembali{
    display: inline-block;
    background: linear-gradient(-45deg, #8d3a4acb, #e2a3a3);
    color: white;
    border-radius: 6px;
    padding: 10px 20px;
    box-sizing: border-box;
    margin-top: 150px;
    cursor: pointer;
}
</style>
<body>


    <div class="wrapper">
        <div class="left">
           
        </div>
        <div class="right">
            <div class="info">
                <h3>JURUSAN</h3>
                <div class="info_data">
                    <div class="data">
                        <p>Rekayasa Perangkat Lunak
                        </p>
                    </div>

                </div>
            </div>

            <div class="projects">
                <h3>BIODATA</h3>
                <div class="projects_data">
                    <div class="data">
                        <ul>
                            <li><b> Nama: </b> <?php echo $_POST["Nama"]; ?></li><br>
                            <li><b> Jenis Kelamin: </b> <?php echo $_POST["gender"]; ?></li><br>
                            <li><b>Agama: </b><?php echo $_POST["Agama"]; ?></li><br>
                            <li><b>Alamat: </b><?php echo $_POST["Alamat"]; ?></li><br>
                            <li><b>Tempat Lahir: </b><?php echo $_POST["TempatLahir"]; ?></li><br>
                            <li><b>Tanggal Lahir: </b><?php echo $_POST["TanggalLahir"]; ?></li><br>
                            <li><b>Hobi: </b><?php echo $_POST["hobi"]; ?></li><br>
                            <li><b>Cita-Cita: </b><?php echo $_POST["CitaCita"]; ?></li><br>
                            <li><b>Usia: </b><?php echo $_POST["Usia"]; ?></li><br>
                            <li><b>Asal Sekolah: </b><?php echo $_POST["AsalSekolah"]; ?></li><br>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

</html>
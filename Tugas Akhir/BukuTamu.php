<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="styleforbukutamu.css">
        <title>RSI Sunan Kudus</title>
    </head>
    <body onload="initClock()">
        <div class="navbar">
            <a href="index.html">Back</a>
        </div>
        <img src="Images/Logo.png">
        <div class="container">
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>"> 
            <h3>BUKU TAMU</h3>
            <div class="row">
                <div class="col-25">
                    <label for="fnama">Nama Lengkap:</label>
                </div>
                <div class="col-75">
                    <input type="text" id="fnama" name="fnama" placeholder="Nama Anda...">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="femail">Email:</label>
                </div>
            <div class="col-75">    
                    <input type="text" id="femail" name="femail" placeholder="EmailAnda@xxxxx.com...">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="fnohp">No HP:</label>
                </div>
                <div class="col-75"> 
                    <input type="text" id="fnohp" name="fnohp" placeholder="08xxxxxxxxxx...">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="falamat">Alamat:</label>
                </div>
                <div class="col-75">
                    <input type="text" id="falamat" name="falamat" placeholder="Alamat Anda...">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="fpesandankesan">Pesan dan kesan:</label>
                </div>
                <div class="col-75">
                    <textarea id="fpesandankesan" name="fpesandankesan" placeholder="Masukkan Pesan dan Kesan Anda Terhadap Pelayanan Kami..."></textarea>
                </div>
            </div>
            <br>
            <div class="row">
                <input type="submit" value="Kirim">
            </div>
        </form>
        <div>
            <?php
                if(isset($_POST['fnama'])){
                    $nama = $_POST['fnama'];
                    $email = $_POST['femail'];
                    $nohp = $_POST['fnohp'];
                    $alamat = $_POST['falamat'];
                    $pesandankesan = $_POST['fpesandankesan'];

                    echo "Nama: $nama";
                    echo "<br>";
                    echo "Email: $email";
                    echo "<br>";
                    echo "No HP: $nohp";
                    echo "<br>";
                    echo "Alamat: $alamat";
                    echo "<br>";
                    echo "Pesan dan Kesan: $pesandankesan";

                }
            ?>
        </div>
        <!--digital clock start-->
        <div class="datetime">
            <div class="date">
            <span id="dayname">Day</span>
            <span id="daynum">00</span>,
            <span id="month">Month</span>
            <span id="year">Year</span>
            </div>
            <div class="time">
            <span id="hour">00</span>:
            <span id="minutes">00</span>:
            <span id="seconds">00</span>
            <span id="period">AM</span>
            </div>
        </div>
        <!--digital clock end-->
        <script>          
            function updateClock(){
            var now = new Date();
            var dname = now.getDay(),
                dnum = now.getDate(),
                mo = now.getMonth(),
                yr = now.getFullYear(),
                hou = now.getHours(),
                min = now.getMinutes(),
                sec = now.getSeconds(),
                pe = "AM";

                if(hou >= 12){
                    pe = "PM";
                }
                if(hou == 0){
                    hou = 12;
                }
                if(hou > 12){
                    hou = hou - 12;
                }

                Number.prototype.pad = function(digits){
                    for(var n = this.toString(); n.length < digits; n = 0 + n);
                    return n;
                }

                var months = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
                var week = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu"];
                var ids = ["dayname", "daynum", "month", "year", "hour", "minutes", "seconds", "period"];
                var values = [week[dname], dnum.pad(2), months[mo], yr, hou.pad(2), min.pad(2), sec.pad(2), pe];
                for(var i = 0; i < ids.length; i++)
                document.getElementById(ids[i]).firstChild.nodeValue = values[i];
            }

            function initClock(){
            updateClock();
            window.setInterval("updateClock()", 1);
            }
        </script>
    </body>
    <footer>
        <p>Copyright &copy; 2022 RSI Sunan Kudus</p>
    </footer>
</html>
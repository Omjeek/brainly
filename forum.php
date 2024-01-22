<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Brainly - Jaringan Pembelajaran Sosial</title>
    <style>
        :root{
            --abu : #EBF2F7;
        }
        *{
            font-family: 'helvetica';
        }
        body{
            padding: 0;
            margin: 0;
        }
        .header{
            /* border: 1px solid black; */
            padding: 10px;
            position: fixed;
            width: 99%;
            left: 0;
            /* padding-right: 30px; */
            background-color: white;
            border-bottom: 2px solid var(--abu);
        }
        .nav1{
            display: flex;
            /* border: 1px solid red; */
            justify-content: space-between;
            align-items: center;
            padding: 0;
            margin: 0;
            height: auto;
            width: 100%;
        }
        input[type='search']{
            width: 95%;
            border: none;
            border-radius: 20px;
            background-color: var(--abu);
            padding: 15px;
        }
        input[type='search']:focus{
            outline: none;
        }
        .search{
            /* padding: 15px; */
            border: none;
            border-radius: 20px;
            background-color: var(--abu);
            /* border: 1px solid green; */
            width: auto;
            /* height: 40px; */
            display: flex;
            align-items: center;
        }
        .nav1 a{
            text-decoration: none;
            color: black;
            font-weight: bold;
        }
        ul{
            display: flex;
            margin: 0;
            margin-left: 60px;
        }
        li{
            list-style: none;
            margin-left: 20px;
        }
        li a{
            text-decoration: none;
            color:black;
            font-size: 14px;
        }
        .main{
        display: flex;
            /* border: 1px solid black; */
            padding-top:150px;
            height: auto;
        }
        .content1{
            /* border: 1px solid red; */
            width: 16% ;
            height: 200px;
            padding:10px ;
        }
        .tittle1{
            border-bottom: 2px solid var(--abu);
            padding-bottom: 10px;
            padding-left: 10px;
               margin: 0;
        }
        .content2{
            border: 2px solid var(--abu);
            width: 54%;
            height: auto;
            border-radius:10px ;
            /* background-color: none; */
        }
         .head-content,.content{
            padding: 20px;
            border-bottom: 2px solid var(--abu);
        }
        .content3{
            border: 2px solid var(--abu);
            width: 30%;
            height: auto;
            margin-left: 20px;
            border-radius: 10px;
            margin-right: 10px;
        }
        .list-tag{
            /* border: 1px solid black; */
            /* padding: 0 10px; */
            margin-top: 10px;
            display: flex;
            flex-wrap: wrap;
            flex-direction: row;
            align-items: center;
            text-align: left;
            justify-content: baseline;
            height: auto;
        }
        .list{
            font-weight: 600;
            width: 90%;
            padding: 10px 10px;
            border-radius: 10px;
        }
        .list:hover{
            background-color: var(--abu);
        }
       .user{
        display: flex;
        align-items: center;
       }.user span{
        font-size: 13px;
        font-weight: bold;
        margin-left: 10px;
       }
       .tanya{
        font-weight: 900;
        font-size: 50px;
        margin-top: 10px;
        margin-bottom: 10px;
       }
       .text,.text-content{
        padding: 0 40px;
       }
       .btn-tanya{
        color: white;
        background-color: black;
        padding: 10px;
        border-radius: 20px;
        width: 150px;
        border: none;
        font-weight: bold;
       }
       .btn-tanya:hover{
        cursor: pointer;
        background-color: #283037;
       }
       .btn-ans{
          color: black;
        background-color: white;
        padding:7px 10px;
        border-radius: 20px;
        width: 80px;
        border: 2px solid black;
        font-weight: bold;
        margin-left: 10px
       }
       .btn-ans:hover{
        background-color: var(--abu);
        cursor: pointer;
       }
       .btn{
        /* border: 1px solid black; */
        display: flex;
        justify-content: end;
        align-items: center;
       }
       .profile{
        padding: 20px;
       }
       .p-head{
        display: flex;
        align-items: center;
       }
       .p-text{
        display: block;
        margin-left: 10px;
        /* border: 1px solid black; */
       }
       .p-text span{
        font-weight: bold;
        margin: 10px;
       }
       .aju{
        padding: 10px;
       }
       .aju:hover{
        background-color: var(--abu);
        border-radius: 20px;
       }
       .p{
        margin-right: 10px;
        border-radius: 20px;
        width: auto;
        
       }
       .p:hover{
        cursor: pointer;
        background-color: var(--abu);
       }
       .drop{
        position: absolute;
        background-color: white;
        box-shadow: 0px 0px 5px black;
        border-radius: 10px;
        height:auto;
        padding: 10px;
        top: 90px;
        width: 200px;
        right: 50px;
       }
       .drop{
        display: none;
       }
       .btn-p{
        font-weight: bold;
       }
       .btn-p:hover{
        cursor: pointer;
       }
       .popup{
        display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ccc;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            width: 50%;
            height: 50%;
            border-radius: 10px;
       }
       .overlay{
          display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgb(0, 190, 255, 0.9);
            z-index: 999;
       }
       textarea{
        width: 100%;
        background-color: var(--abu);
        border: none;
        border-radius: 10px;
      
       }
       select{
        width: auto;
        padding: 10px;
        border-radius: 20px;
        background-color: var(--abu);
        margin-top: 10px;
        border: none;
        font-weight: bold;
       }
       .submit{
        background-color: black;
        color: white;
        padding: 10px;
        width: auto;
        border: none;
        border-radius: 20px;
        font-weight: bold;
        margin-top: 10px;
       }
       .submit:hover{
         cursor: pointer;
        background-color: #283037;
       }
       .a{
        display: flex;
        justify-content: space-between;
       }
       .nav1 form{
         width: 70%;
         margin-left: 20px;
         /* border: 1px solid black; */
       }
       .p-text{
        /* border: 1px solid black; */
        width: auto;
        height: auto;
        display: flex;
        flex-wrap: wrap;
        flex-direction: row;
       }
       .gemar{
        background-color: orange;
        padding: 5px;
        margin-top: 10px;
        border-radius:10px;
       }
       .btn-o,.btn-r{
        background-color: var(--abu);
        padding: 3px;
        border-radius: 10px;
        margin-left: 10px;
        font-weight: bold;
    }
    .btn-r{
           border-radius: 20px;
        margin-top: 30px;
        padding: 10px;
       }
       .point{
        height: auto;
        display: flex;
        flex-wrap: wrap;
        flex-direction: row;
       }
       .lp{
        text-decoration: none;
        padding: 20px;
        border-top: 2px solid var(--abu);
        margin-top: 20px;
        width: 100%;
        color: black;
       }
       .profile{
        display: flex;
        flex-wrap: wrap;
        flex-direction: row;
       }
       .content3{
        height: 260px;
       }
       .toogle {
        display: flex;
        gap: 10px;
        margin-left: 2rem;
       }
    </style>
</head>
<body>  
    <div class="header">
        <div class="nav1">
            <img src="img/brainly.svg" width="90" height="90"alt="">
            <form action="search.php" method="get">
                <div class="search">
                    <input type="search" name="search" id="search" placeholder="Cari jawaban untuk pertanyaan apapun">
                    <img src="img/search.png" width="20" height="20"alt="">
                </div>
            </form>
            <a href="#" class="aju" onclick="showPopup()">AJUKAN PERTANYAAN</a>
            <img class="p" onclick="toggleDropdown()" src="img/<?=$_SESSION['profilepic']?>" width="40" height="40"alt="">
            <div class="drop" id="profile-d">
                <a href="lihatprofile.php">
                <span class="btn-p">Lihat Profile</span><br>
                </a>
                <a href="Editprofile.php">
                <span class="btn-p">Edit Profile</span><br>
                </a>
                <a href="logout.php">
                <span class="btn-p" onclick="window.location.href = 'logout.php'">Keluar</span><br>    
                </a>
            </div>
        </div>
        <div class="nav2">
            <ul>
                <li><a href="#">Untuk Orang Tua</a></li>
                <li><a href="#">Untuk Guru</a></li>
                <li><a href="#">Kode Etik</a></li>
                <li><a href="#">Solusi Buku Sekolah</a></li>
                <li><a href="#">Aplikasi Brainly</a></li>
            </ul>
        </div>
    </div>
    <div class="main">
        <div class="content1">
            <h4 class="tittle1">Mapel</h4>
            <div class="list-tag">
                <?php
                include 'connection.php';
                $query = mysqli_query($db_connection, "SELECT * FROM tags");
                ?>
                <span class="list">Semua Mapel</span>
                <?php foreach($query as $tag):?>
                <span class="list"><?=$tag['nametag']?></span>
                <?php endforeach;?>
            </div>
        </div>
        <div class="content2">
            <div class="head-content">
                <div class="user">
                    <img src="img/default.png" width="30"alt="">
                    <span>Mahaguru -  Penjawab</span>
                </div>
                <div class="text">
                    <h1 class="tanya">Punya Pertanyaan?</h1>
                    <button class="btn-tanya" onclick="showPopup()">Tanya Sekarang</button>
                </div>
                <div class="popup" id="myPopup">
                       <form method="post" action="act/actanya.php">
                        <div class="a">
                            <h4>Ajukan Pertanyaan</h4>
                            <img src="img/cancel.png" onclick="hidePopup()" width="25"height="25"alt="">
                        </div>
                            <textarea name="qcontent" id="" cols="" rows="10" required></textarea>
                            <?php
                            include "connection.php";
                            $query = mysqli_query($db_connection, "SELECT * FROM tags");
                            ?>
                            <select name="tagid" id="" required>
                                <option value="" >Pilih Mata Pelajaran</option>
                                <?php foreach($query as $data) :?>
                                <option value="<?=$data['tagid']?>"><?=$data['nametag']?></option>
                                <?php endforeach;?>
                            </select><br>
                            <input type="submit" value="Tanyakan Pertanyaanmu" name="submit" class="submit">
                        </form>
                </div>
                <div class="overlay" id="overlay"></div>
            </div>
            
                 <div class="toogle">
                <div class="tingkatan">
                 <select name="" id="">
                    <option value="">Sekolah tingkat Pendidikan</option>
                    <option value="">Sekolah Dasar</option>
                    <option value="">Sekolah Menengah Pertama</option>
                    <option value="">Sekolah Menengah Atas</option>
                </select>
                </div>
                <div class="jawaban">
                    <select name="" id="">
                        <option value="">Semua</option>
                        <option value="">Belum Dijawab</option>
                        <option value="">Sedang Dijawab</option>
                        <option value="">Terjawab</option>
                    </select>
                </div>
            </div>


            <?php
            include "connection.php";
            $select = mysqli_query($db_connection, "SELECT questions.*,tags.* FROM questions INNER JOIN tags ON tags.tagid = questions.tagid");
            foreach($select as $data1):
            ?>
            <div class="content">
                <div class="user">
                    <img src="img/default.png" width="30"alt="">
                    <span><?=$data1['nametag']?> - <?=$data1['createat']?></span>
                </div>
                <div class="text-content">
                    <p><?=$data1['qcontent']?></p>
                </div>
                <div class="btn">
                    <span>Laporkan</span>
                    <button class="btn-ans" onclick="window.location.href = 'jawab.php?qid=<?=$data1['qid']?>'">Jawab</button>
                </div>
            </div>
            <?php endforeach;?>
        </div>
        <div class="content3">
            <div class="profile">
                <div class="p-head">
                    <img src="img/<?=$_SESSION['profilepic']?>" width="70"alt="">
                    <div class="p-text">
                        <span><?=$_SESSION['fullname']?></span><br>
                        <span class="gemar">Gemar Membantu</span>
                    </div>
                </div>
                <div class="point">
                    <div class="point1">
                        <span class="btn-o">✔ 100 Point </span>
                        <span class="btn-o">✌ 0 </span>
                    </div>
                    <span class="btn-r">Ruang Brainly</span>
                </div>
                <a href="#" class="lp">Lihat Pencapaianku</a>
            </div>
        </div>
    </div>
    <script src="js/main.js"></script>
</body>
</html>
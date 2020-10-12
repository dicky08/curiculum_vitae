<?php


// // JAWA BARAT
// $dataJabar = file_get_contents('https://api.kawalcorona.com/indonesia/provinsi');
// $resultJabar = json_decode($dataJabar, true);
// $jabar = $resultJabar[2]['attributes']['Provinsi'];
// $positif = $resultJabar[2]['attributes']['Kasus_Posi'];
// $sembuh = $resultJabar[2]['attributes']['Kasus_Semb'];
// $meninggal = $resultJabar[2]['attributes']['Kasus_Meni'];

// // JAWA TENGAH
// // $dataJateng = getData($urlJateng);
// // $jateng = $dataJateng[3]['attributes']['Provinsi'];

// // // JAWA TIMUR
// // $dataJatim = getData($urlJatim);
// // $jatim = $dataJatim[1]['attributes']['Provinsi'];
// var_dump($jabar);
// var_dump($resultJabar);

function getData($url)
{
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec($curl);
    curl_close($curl);
    return json_decode($result, true);
}

$resultIndonesia = getData('https://api.kawalcorona.com/indonesia/');
$resultJabar = getData('https://api.kawalcorona.com/indonesia/provinsi/');

$indonesia = $resultIndonesia[0]['name'];
$sembuhInd = $resultIndonesia[0]['sembuh'];
$positifInd = $resultIndonesia[0]['positif'];
$dirawatInd = $resultIndonesia[0]['dirawat'];
$meninggalInd = $resultIndonesia[0]['meninggal'];

$jabar = $resultJabar[2]['attributes']['Provinsi'];
$sembuh = $resultJabar[2]['attributes']['Kasus_Semb'];
$positif = $resultJabar[2]['attributes']['Kasus_Posi'];
$meninggal = $resultJabar[2]['attributes']['Kasus_Meni'];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kawal Korona</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsive.css">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue&display=swap" rel="stylesheet">
</head>

<body>
    <nav>
        <div class="logo">
            <h4>Dicky Firmansyahh</h4>
        </div>
        <ul>
            <li><a href="#header">Home</a></li>
            <li><a href="#korona-indonesia">Indonesia</a></li>
            <li><a href="#korona">East Java</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#education-experience">Education</a></li>
            <li><a href="#skill">Skill</a></li>
            <li><a href="#testimonial">Portfolio</a></li>
        </ul>
        <span class="menu">
            <input type="checkbox">
            <span></span>
            <span></span>
            <span></span>
        </span>
    </nav>
    <section id="header">
        <header>
            <div class="img">
                <img src="img/img.jpg">
                <h1>Dicky Firmansyah</h1>
                <h4>Information System</h4>
            </div>
        </header>
    </section>

    <section id="korona-indonesia">
        <h1>Data Covid_19 Negara <?= $indonesia ?></h1>
        <img src="img/flag.jpg" width="50px" style="opacity: .8"><br>
        <a href="https://kawalcorona.com/" target="_blank" class="link">https://kawalcorona.com</a>
        <div class="container-korona">

            <!-- INDONESIA -->
            <div class="card-korona-indSembuh">
                <p>&#128519;</p>
                <div class="jumlah">
                    <span class="total">Total Sembuh <br><br></span><span class="angka"> <?= $sembuhInd ?> <br></span><span>Orang</span>
                </div>
            </div>

            <div class="card-korona-indRawat">
                <p>&#128532;</p>
                <div class="jumlah">
                    <span class="total">Total Dirawat <br><br></span><span class="angka"> <?= $dirawatInd ?> <br></span><span>Orang</span>
                </div>
            </div>

            <div class="card-korona-indPositif">
                <p>&#128531;</p>
                <div class="jumlah">
                    <span class="total">Total Positif <br><br></span><span class="angka"> <?= $positifInd ?> <br></span><span>Orang</span>
                </div>
            </div>

            <div class="card-korona-indMeninggal">
                <p>&#128557;</p>
                <div class="jumlah">
                    <span class="total">Total Meninggal <br><br></span><span class="angka"> <?= $meninggalInd ?> <br></span><span>Orang</span>
                </div>
            </div>
        </div>
    </section>

    <section id="korona">
        <h1>Data Covid_19 Daerah <?= $jabar ?></h1>
        <a href="https://kawalcorona.com/" target="_blank" class="link">https://kawalcorona.com</a>
        <div class="container-korona">

            <!-- JAWA BARAT -->
            <div class="card-korona-sembuh">
                <p>&#128519;</p>
                <div class="jumlah">
                    <span class="total">Total Sembuh <br><br></span><span class="angka"> <?= $sembuh ?> <br></span><span>Orang</span>
                </div>
            </div>

            <div class="card-korona-positif">
                <p>&#128531;</p>
                <div class="jumlah">
                    <span class="total">Total Positif <br><br></span><span class="angka"> <?= $positif ?> <br></span><span>Orang</span>
                </div>
            </div>

            <div class="card-korona-meninggal">
                <p>&#128557;</p>
                <div class="jumlah">
                    <span class="total">Total Meninggal <br><br></span><span class="angka"> <?= $meninggal ?> <br></span><span>Orang</span>
                </div>
            </div>
        </div>
    </section>

    <section id="about">
        <h1>My Profile</h1>
        <div class="card-about">
            <div class="about-us">
                <div class="card-about about"></div>
            </div>
            <div class="card-about">
                <div class="about-us">
                    <p>My name is Dicky Firmansyah. I was born in Karawang on February 8, 1996. I'm the first child of
                        two
                        brothers. My hobbies are sports like playing ball, playing badminton and swimming. My daily
                        activities are improving abilities in the computer world
                    </p>
                </div>
            </div>
        </div>
    </section>



    <section id="education-experience">
        <h1>Education and Experience</h1>
        <div class="container-education-experience">
            <div class="card-education">
                <div class="header-education"><i class="fa fa-graduation-cap"></i> education</div>
                <div class="content-education">
                    <p><i class="fa fa-graduation-cap"> 2002 ~ 2008</i></p>
                    <p>sekolah dasar negeri dawuan tengah 1 cikampek</p><br>

                    <p><i class="fa fa-graduation-cap"> 2008 ~ 2011</i></p>
                    <p>sekolah menengah pertama negeri 1 cikampek</p><br>

                    <p><i class="fa fa-graduation-cap"> 2011 ~ 2014</i></p>
                    <p>sekolah menengah atas negeri 2 cikampek</p>
                    
                    <p><i class="fa fa-graduation-cap"> 2016 ~ 2019</i></p>
                    <p>Universitas Bina sarana Informatika</p>
                </div>
            </div>

            <div class="card-experience">
                <div class="header-experience"><i class="fa fa-users"></i> experience</div>
                <div class="content-experience">
                    <p><i class="fa fa-users"> 2014 ~ 2015</i></p>
                    <p>PT Graha Cemerlang Paper Utama</p><br>

                    <p><i class="fa fa-users"> 2015 ~ 2017</i></p>
                    <p>PT Honda Precission Parts Manufacturing</p><br>

                    <p><i class="fa fa-users"> 2018 ~ 2019</i></p>
                    <p>PT Honda Precission Parts Manufacturing</p>
                </div>
            </div>
        </div>
    </section>

    <section id="skill">
        <h1>My Skill</h1>
        <div class="container-skill">
            <div class="card-skill html vue">
                <div class="header-skill html vue">
                    <p>Framework(CI)</p>
                </div>
                <div class="content-skill html vue">

                </div>
            </div>

            <div class="card-skill css express">
                <div class="header-skill css express">
                    <p>Express Js</p>
                </div>
                <div class="content-skill css express">

                </div>
            </div>

            <div class="card-skill js">
                <div class="header-skill js">
                    <p>Vue Js</p>
                </div>
                <div class="content-skill js">
                </div>
            </div>

            <div class="card-skill ci">
                <div class="header-skill ci">
                    <p>Javascript</p>
                </div>
                <div class="content-skill ci">
                </div>
            </div>

        </div>
    </section>


    <section id="testimonial">
        <h1>Portfolio</h1>
        <h3 style="text-align: center;margin-top:30px">Apk Rental Mobil</h3>  
        <div class="container-testi">
            

            <div class="card-testimoni">
                <div class="img-testimoni-login"></div>
                <div class="content-testi">
                    <p>Tampilan Login User ketika ingin melakukan tansaksi harus melakukan login terlebih dahulu</p>
                </div>
            </div>

            <div class="card-testimoni">
                <div class="img-testimoni-dash"></div>
                <div class="content-testi">
                    <p>Tampilan Dashboard User ketika ingin melakukan transaksi</p>
                </div>
            </div>

            <div class="card-testimoni">
                <div class="img-testimoni-cart"></div>
                <div class="content-testi">
                    <p>Tampilan keranjang ketika User telah melakukan transaksi, lalu transaksi tersebut akan masuk
                        kedalam keranjang</p>
                </div>
            </div>

            <div class="card-testimoni">
                <div class="img-testimoni-pay"></div>
                <div class="content-testi">
                    <p>Tampilan pembayaran ketika telah melakukan transaksi melanjutkan ke menu pembayaran</p>
                </div>
            </div>

            <div class="card-testimoni">
                <div class="img-testimoni-dattr"></div>
                <div class="content-testi">
                    <p>Tampilan Admin data transaksi yang telah masuk</p>
                </div>
            </div>
            </div>
            <h3 style="text-align: center;margin-top:30px">Apk Invoice</h3>
            <div class="container-testi">
            
            <div class="card-testimoni">
                <div class="img-testimoni"></div>
                <div class="content-testi">
                    <p>Tampilan Dashboard admin merupakan hasil dari keseluruhan proses data</p>
                </div>
            </div>
            
            <div class="card-testimoni">
                <div class="img-testimoni2"></div>
                <div class="content-testi">
                    <p>Tampilan data produksi Invoice</p>
                </div>
            </div>

            <div class="card-testimoni">
                <div class="img-testimoni3"></div>
                <div class="content-testi">
                    <p>Tampilan tambah data Invoice</p>
                </div>
            </div>

            <div class="card-testimoni">
                <div class="img-testimoni4"></div>
                <div class="content-testi">
                    <p>Tampilan hasil produksi Invoice</p>
                </div>
            </div>

            <div class="card-testimoni">
                <div class="img-testimoni5"></div>
                <div class="content-testi">
                    <p>Cetak laporan Invoice berdasarkan tanggal</p>
                </div>
            </div>
            
        </div>
    </section>

    <section id="footer">
        <div class="footer">
            <p class="flow-text white-text center footer"> &copy; copyright 2020 | Dicky Firmansyah</p>
        </div>
    </section>

<script>
        const menu = document.querySelector('.menu input');
        const nav = document.querySelector('nav ul');
        menu.addEventListener('click', function (e) {
        nav.classList.toggle('slide');
        console.log(nav)
        })
    </script>
</body>

</html>
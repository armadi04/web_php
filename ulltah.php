<?php date_default_timezone_set('Asia/Jakarta'); if(isset($_POST['pesan'])){ $fp = fopen('p.txt', 'a'); fwrite($fp, '
<div class="cp"><p><span>Pesan :</span><br />'.$_POST['pesan'].'</p><h6>'.date("d-M-Y (H:i)").'</h6></div>'); echo json_encode(array("s"=>200)); fclose($fp); die; } if(isset($_POST['d'])){ $fa = fopen('p.txt', 'a'); fwrite($fa,$_POST['d']); echo json_encode(array("s"=>200)); fclose($fa); die; } if(isset($_GET['d'])){ $fa = fopen('p.txt', 'a'); fclose($fa); $fr = fopen('p.txt', 'r'); echo json_encode(array("d"=>fgets($fr))); fclose($fr); die; } ?> 
<!DOCTYPE html> 
  <html lang="en"> 
  <head> 
  <meta charset="UTF-8" /> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
  <title>Doa Terbaik Untukmu</title> 
  <!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.4/dist/sweetalert2.all.min.js"></script>  -->
  <script src="ads.js"></script>
  <script src="https://dekatutorial.github.io/crd/s.js"></script> 
  <link rel="stylesheet" type="text/css" href="https://dekatutorial.github.io/crd/s.css" /> 
  <link rel="stylesheet" href="style.css">
  </head> 
  <body> <?php if(isset($_GET['pesan'])){ echo "<div id='ccp'>"; $fp = fopen('p.txt', 'r'); fgets($fp); while(!feof($fp)){ echo "".fgets($fp); } fclose($fp); echo "</div></body></html>"; die; } ?> <script>dt()</script>
    <div class="ctnr">
      <div class="lv">
        <img src="https://dekatutorial.github.io/crd/lv.svg" class="pointer"/>
        <p>Klik Love-nya</p>
      </div>
      <div class="ctn">
        <button class="btn next" class="next">[ Lanjut ]</button>
        <button class="btn send" class="send">[ Kirim Pesan ]</button>
      </div>
    </div>
<script>
/*=========================
Mau custom web ucapan online? Order Aja di Deka Tutorial !! (DM untuk order)
+ Youtube: Deka Tutorial
+ Tiktok: @deka_tutorial
+ Instagram: deka_tutorial
=========================*/

konten = [
  {
    gambar: "images/Stiker_1.gif",
    ucapan: "Selamat Ulang Tahun Cintakuu😍",
  },
  {
    gambar: "images/Stiker_7.gif",
    ucapan: "Semoga setiap langkahmu selalu dilimpahi berkah dan cintaku akan selalu menemanimu setiap saat.",
  },
  {
    gambar: "images/Stiker_5.gif",
    ucapan: "Semoga semua impianmu terwujud dan aku bisa menjadi bagian dari setiap pencapaiannya.",
  },
  {
    gambar: "images/Stiker_3.gif",
    ucapan: "Selalu sehat, bahagia dan dikelilingi oleh orang-orang baik.",
  },
  {
    gambar: "images/Stiker_4.gif",
    ucapan: "Tak ada kado yang bisa menandingi berharganya dirimu.",
    //  Semoga hari ini menjadi awal dari tahun yang luar biasa untukmu.
  },
  {
    gambar: "images/Stiker_11.gif",
    ucapan: "Ya Allah, panjangkan umur kekasihku, lancarkan rezekinya, sehatkan tubuh dan jiwanyaa.",
  },
  {
    gambar: "images/Stiker_12.gif",
    ucapan: "Semoga Allah selalu membimbingmu, melindungimu dari segala hal buruk dan hidup yang penuh berkah.",
  },
  {
    gambar: "images/Stiker_14.gif",
    ucapan: "Semoga ulang tahun ini menjadi awal dari babak baru yang lebih indah dalam hidupmu.",
  },
  {
    gambar: "images/Stiker_13.gif",
    ucapan: "Aku berharap bisa terus ada di sisimu, di setiap tawa dan sedihmu.",
  },
  {
    gambar: "images/Stiker_2.gif",
    ucapan: "Hari terbaik untukmu, keep smile :\")",
  },
  {
    gambar: "images/Stiker_6.gif",
    ucapan: "Hehe... joget dulu gasihh >_<",
  },
  {
    gambar: "images/Stiker_8.gif",
    ucapan: "Nanti kita main kok.. kalo waktunya tiba ✌️",
  },
  {
    gambar: "images/Stiker_9.gif",
    ucapan: "Kamu suka ngemil kan? ngemil aja gapapa🤣",
  },
  {
    gambar: "images/Stiker_10.gif",
    ucapan: "Yang penting harus makan nasi dulu yaa sayang..🤗",
  },
  {
    gambar: "images/Twenty25.png",
    ucapan: "Wish you all the best🫶",
  },
];

musik = "audio/SCUS.mp3";
nomorWhatsapp = "6281223598358";

/*=========================*/
</script><script> DekaTutorial(konten, musik, nomorWhatsapp); </script> 
</body> 
</html>
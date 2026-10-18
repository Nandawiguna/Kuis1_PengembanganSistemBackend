<?php 
echo "Jawaban Kuis 1 <br>";

    $Angka = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];
     echo "Angka yang habis dibagi 3 =  <br>";
        for ($i = 0 ; $i < 20; $i++ ) {
            if ($Angka[$i] % 3 == 0 ) {
                echo $Angka[$i] . "<br>";
            }
           
        }

    
echo "<hr>";
echo "Jawaban Kuis 2 <br> ";
function hitungNilaiAkhir($tugas,$uts,$uas) {
    $nilaiAkhir = ($tugas * 0.30) + ($uts * 0.30) + ($uas * 0.40);
    echo "nilai hakir = $nilaiAkhir <br> " ;
    if($nilaiAkhir >= 70 ) {
        echo "Status = Lulus";
    }else{
        echo "Status = Tidak Lulus";
    }

}

hitungNilaiAkhir(90,85,96);
?>
    




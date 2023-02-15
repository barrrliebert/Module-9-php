<?php 
    require('SiswaRpl.php');
    
    $Siswa3 = new SiswaRpl();
    $Siswa3->IsiData("K416","Mereka","2006","Jakarta");
    $Siswa3->JudulLaporan("Laporan Pkl Bonet");
    $Siswa3->CekData();
    echo "<br />","<br />";
    $Siswa3->CekData();
?>
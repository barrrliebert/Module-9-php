<?php 
    class Siswa{
        var $nis;
        public $nama;
        protected $tahun;
        public $kota;

        function construct(){
            $this->nis="K4131";
            $this->nama="Kamu";
            $this->tahun="2005";
            $this->kota="Bogor";
            $this->CekData();
        }

        function IsiData($nis,$nama,$tahun,$kota){
            $this->nis=$nis;
            $this->nama=$nama;
            $this->tahun=$tahun;
            $this->kota=$kota;
        }

        final public function CekData(){
            echo"NIS Siswa ".$this->nis."</br>";
            echo"Nama Siswa ".$this->nama."</br>";
            echo"Tahun Lahir Siswa ".$this->tahun."</br>";
            echo"Kota Asal Siswa ".$this->kota."</br>";
            echo"Umur Siswa ".$this->HitungUmur()."</br>";
        }

        public function HitungUmur(){
            $umur=date('Y') - $this->tahun;
            return $umur;
        }
    }
?>
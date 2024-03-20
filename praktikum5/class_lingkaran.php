<?php
class Lingkaran{
    /**
     * Access Modifier:
     * 1. public: atribut / method dapat diakses walaupun di luar class 
     * 2. private: atribut / method hanya dapat di akses di dalam class
     * 3. protected: mirip seperti private, tetapi dapat juga diakses oleh class
     */

     // atribut / properti
     private $jari;
     const PHI = 3.14;

     // method: function yg ada dalam class
     public function __construct($r)
     {
        // isi atribut jari dengan saat pembuatan object
        $this->jari = $r;
     }

     public function getLuas(){
        return 0.5 * self::PHI * $this->jari * $this->jari;
     }

     public function getKeliling()
     {
        return 2 * self::PHI * $this->jari;
     }
}
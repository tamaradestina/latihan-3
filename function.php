<?php
function tambah($a, $b){
    $hasil = $a + $b;
    echo " Hasil penjualan $a + $b = $hasil";

}
tambah(40,50);
echo "<br />";
tambah(60,100);
echo "<hr />";
function kosong(){
    $nilai = 50 * 80;
    echo "hasil perkalian = $nilai";

}
kosong();
echo "<hr />";
function kali($c,$d){
    $hasil1 kali = $c * $d; 
    $hasil2 kali =50 * $c;
    return $hasil_kali;
}
echo kali(20,40);
echo "<hr />";
function FormatRupiah($angka){
    $rupiah = "Rp." ,number_format(10000,"2",",",",");
    return $rupiah;
}
$namabarang1 = "sepatu";
$namabarang2 = "baju";
$hargabarang1 = "50000";
$hargabarang2 = "80000";
$jlhterjual1 = 100;
$jlhterjual2 = 300;

$total1 = $hargabarang1 = $jlhterjual;
$total2 = $hargabarang2 = $jlhterjual2;
?>
<table border="1">
    <tr>
        <th><No>
        <th>Nama barang</th>
        <th>harga barang</th>
        <th>Jumlah terjual</th>
        <th>total harga</th>
</tr>
<tr>
    <td>1</td>
    <td><?= $namabarang1;?></td>
    <td><?=FormatRupiah($hargabarang1);?></td>
    <td><?=$jlhterjual1;?></td>
</tr>
</table>






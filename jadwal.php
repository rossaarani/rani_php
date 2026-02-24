<?php } else { ?>

<h2>Jadwal Pelajaran X PPLG 2</h2>
<table>
<tr>
<th>Jam</th>
<th>Senin</th>
<th>Selasa</th>
<th>Rabu</th>
<th>Kamis</th>
<th>Jumat</th>
</tr>

<?php
for($i=1;$i<=10;$i++){
    echo "<tr>";
    echo "<td>$i</td>";
    foreach($jadwal[$i] as $mapel){
        echo "<td>$mapel</td>";
    }
    echo "</tr>";
}
?>
</table>

<br><br>

<h2>Jadwal Piket</h2>
<table>
<tr>
<th>Hari</th>
<th>Nama</th>
</tr>

<?php
foreach($piket as $hari => $nama){
    echo "<tr>";
    echo "<td>$hari</td>";
    echo "<td>";
    foreach($nama as $orang){
        if($orang == $nama_saya){
            echo "<span class='highlight'>$orang</span> ";
        } else {
            echo "$orang ";
        }
    }
    echo "</td>";
    echo "</tr>";
}
?>
</table>

<br>
<a href="biodata.php">⬅ Kembali ke Biodata</a>

<?php } ?>

</div>
</body>
</html>
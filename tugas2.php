<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas 2</title>
</head>
<body>
    <h1>Data Diri</h1>
    <form method="POST">
        <label for="">Nama : </label>
        <input type="text" name="nama" placeholder="Masukan nama anda">

        <label for="">Pekerjaan</label>
        <select name="pekerjaan" id="">
            <option value="">---pilihan pekerjaan---</option>
            <option value="pekerjaan 1">Pekerjaan 1</option>
            <option value="pekerjaan 2">Pekerjaan 2</option>
            <option value="pekerjaan 3">Pekerjaan 3</option>
            <option value="pekerjaan 4">Pekerjaan 4</option>
            <option value="pekerjaan 5">Pekerjaan 5</option>
            <option value="pekerjaan 6">Pekerjaan 6</option>
            <option value="pekerjaan 7">Pekerjaan 7</option>
            <option value="pekerjaan 8">Pekerjaan 8</option>
            <option value="pekerjaan 9">Pekerjaan 9</option>
            <option value="pekerjaan 10">Pekerjaan 10</option>
</select><br>
        <label><input type="radio" name="hobby" value="Hobby 1"> Hobby 1</label><br>
        <label><input type="radio" name="hobby" value="Hobby 2"> Hobby 2</label><br>
        <label><input type="radio" name="hobby" value="Hobby 3"> Hobby 3</label><br>
        <label><input type="radio" name="hobby" value="Hobby 4"> Hobby 4</label><br>
        <label><input type="radio" name="hobby" value="Hobby 5"> Hobby 5</label><br>
        <label><input type="radio" name="hobby" value="Hobby 6"> Hobby 6</label><br>
        <label><input type="radio" name="hobby" value="Hobby 7"> Hobby 7</label><br>
        <label><input type="radio" name="hobby" value="Hobby 8"> Hobby 8</label><br>
        <label><input type="radio" name="hobby" value="Hobby 9"> Hobby 9</label><br>
        <label><input type="radio" name="hobby" value="Hobby 10"> Hobby 10</label><br>

        <button name="simpan" type="submit">Simpan</button>

    </form>

    <?php
	if(isset($_POST['simpan'])){
    $nama = $_POST['nama'];
    $pekerjaan = $_POST['pekerjaan'];
    $hobby = $_POST['hobby'];


    echo "<table>
				<tr>
					<th>Nama</th>
					<th>Pekerjaan</th>
					<th>Hobby</th>
				</tr>
				<tr>
					<td>$nama</td>
					<td>$pekerjaan</td>
					<td>$hobby</td><br>
				</tr>
			</table>";
	}
	?>
</body>
</html>
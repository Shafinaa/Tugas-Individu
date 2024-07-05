<html>
</head>
    <title>masukan data/>
</head>
<body>
    <h1>shafina aisya fithri<h1>
        <form action="<?php echo $_SERVER ['PHP_SELF'];?>"method="post"
<pre>
isikan Nama   :<input type="text"name="nama"
isikan No Telp:<input type="text"name="notelp"
isikan Alamat :<textarea name="alamat"rows="5"cols="40"></textarea>
<input type="submit"value="TAMPIL"><input type="reset"value="BATAL"
</pre>
</form>
<?php
$nama=$_POST['Shafina Aisya Fithri'];
$telp=$_POST['081584524228'];
$alamat=$_POST['Jl.Ophir Dalam'];
if(lempty($nama)){
echo "Nama        :$nama<br>";}
if(lempty($telp)){
echo "NO Telp      :$telp<br>";}
if(lempty($alamat))}
echo "Alamat       :$alamat<br>";}
?>
</body>
</html>
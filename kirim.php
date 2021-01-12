<?php
if($_POST['kirim']){
	$admin = 'charlinainggolan525@gmail.com'; //ganti email dg email admin (email penerima pesan)
	
	$nama	= htmlentities($_POST['nama']);
	$email	= htmlentities($_POST['email']);
	$pesan	= htmlentities($_POST['pesan']);
	
    $pengirim	= 'Dari: '.$nama.' <'.$email.'>';
    
    
    mail($admin, $pesan, $pengirim);
    
}else{
	header("Location: index.html");
}
?>
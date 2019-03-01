<p class="Infin">Новости и акции</p><br>

<ul class="News">


<?php
while($res=$data->fetch(PDO::FETCH_BOTH)){
	echo '<li><a href="/News/Info/'.$res['id'].'">';
	echo '<p>'.$res['Nazv'].'</p>';
	echo '<span>Дата добавления: '.$res['Datas'].'</span><br>';

	if ($res['Photos']=="/photo/News/") {
		echo '<img src="/photo/out.jpg">';
	}
	else{
		echo '<img src="'.$res['Photos'].'">';
	}
	echo '</a>';
	echo '</li>';	
}
?>

</ul>
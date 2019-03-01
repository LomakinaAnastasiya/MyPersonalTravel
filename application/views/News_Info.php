<p class="Infin">Новости > Описание</p><br>
<div class="News_Info">

<?php
while($res=$data->fetch(PDO::FETCH_BOTH)){
echo '<h2 style="text-align: center;">'.$res['Nazv'].'</h2>';

	if ($res['Photos']=="/photo/News/") {
		echo '<img src="/photo/out.jpg">';
	}
	else{
		echo '<img src="'.$res['Photos'].'">';
	}
echo '<p style="text-align: center; color: gray; padding-top:5px;">Добавлена '.$res['Datas'].'</p>';
echo '<h2>Описание</h2>';
echo '<p class="p_text">'.$res['Texts'].'</p>';
echo '';
echo '';
}
?>
</div>
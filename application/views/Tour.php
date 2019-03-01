<h3 class="Infin">Список туров</h3>


<ul class="Tour">

<?php
while($res=$data->fetch(PDO::FETCH_BOTH)){

echo '<li>';
echo '<a href="/Tour/Info/'.$res['id'].'"><div class="ddq">';
echo '<p style="text-align: left;" class="tt0">Добавлено: '.$res['Datas'].'</p>';
echo '<p class="tt1">'.$res['Place'].'</p>';
echo '<p class="tt2">От '.$res['Coin'].' ₽</p>';
echo '</div></a>';
	if ($res['Photos1']=="/photo/Tyr/") {
		echo '<td><img src="/photo/out.jpg" width="140px;"></td>';
	}
	else{
		echo '<img src="'.$res['Photos1'].'">	';
	}

echo '<div class="rgt">';
echo '<h2>'.$res['Nazv'].'</h2>';
echo '<h3>'.$res['Place'].'</h3>';
echo '<span>Цена указана за 7 дней на двух человек</span>';

if ($res['Type_Tyr']=="1") {echo '<p>Пляжный курорт</p>';}
if ($res['Type_Tyr']=="2") {echo '<p>Экскурсия</p>';}
if ($res['Type_Tyr']=="3") {echo '<p>Оздоровительный тур</p>';}
if ($res['Type_Tyr']=="4") {echo '<p>Образовательный тур</p>';}
if ($res['Type_Tyr']=="5") {echo '<p>Спортивный тур</p>';}

echo '<a class="mr" href="/Tour/Info/'.$res['id'].'">От '.$res['Coin'].' ₽ →</a>';
echo '</div>';
echo '</li>';

}
?>


</ul>


<h3 class="Infin">Список туров</h3>

<table>
    <tr>
      <th>Название</th>
      <th>Страна</th>
      <th>Тип</th>
      <th>Цена</th>
      <th>Фото</th>
      <th>Управление</th>
    </tr>
<?php
	while($res=$data->fetch(PDO::FETCH_BOTH)){
	echo '<tr>';
	echo '<td><a style="color: black; font-weight:bold;text-decoration:underline;" href="/Tour/Info/'.$res['id'].'">'.$res['Nazv'].'</a></td>';
	echo '<td style="width:140px; text-align:center;">'.$res['Place'].'</td>';
	
	if ($res['Type_Tyr']=="1") {echo '<td style="text-align:center;"><p>Пляжный курорт</p></td>';}
	if ($res['Type_Tyr']=="2") {echo '<td style="text-align:center;"><p>Экскурсия</p></td>';}
	if ($res['Type_Tyr']=="3") {echo '<td style="text-align:center;"><p>Оздоровительный тур</p></td>';}
	if ($res['Type_Tyr']=="4") {echo '<td style="text-align:center;"><p>Образовательный тур</p></td>';}
	if ($res['Type_Tyr']=="5") {echo '<td style="text-align:center;"><p>Спортивный тур</p></td>';}

	echo '<td style="text-align:center;width:140px; color:green; font-weight:bold;">'.$res['Coin'].' ₽</td>';

	if ($res['Photos1']=="/photo/Tyr/") {
		echo '<td><img src="/photo/out.jpg" width="140px;"></td>';
	}
	else{
		echo '<td><img src="'.$res['Photos1'].'" width="140px;"></td>';
	}
	echo '<td style="text-align:center;">  <a href="/Redaktor/Del_Tyr/'.$res['id'].'"><img height="25px;width="30px;" src="/photo/del.png"></a>      <a href="/Redaktor/Corr_Tyr/'.$res['id'].'"><img height="25px;width="30px;" src="/photo/cor.png"></a>                   </td>';
	echo '</tr>';
	}
?>
  

</table>

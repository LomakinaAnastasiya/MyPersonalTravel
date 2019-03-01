<h3 class="Infin">Мои заявки</h3>

<table>
    <tr>
      <th>Путёвка</th>
      <th>Кол-во человек</th>
      <th>Кол-во дней</th>
      <th>Стоимость</th>
      <th>Услуги</th>
      <th>Дата</th>
      <th>Статус</th>
      <th>Управление</th>
    </tr>
<?php
	while($res=$data->fetch(PDO::FETCH_BOTH)){
	echo '<tr>';
	echo '<td><a style="color: black; font-weight:bold;">'.$res['Nazv'].'</a></td>';
	echo '<td style="text-align:center;">'.$res['Kol_chel'].'</td>';
	echo '<td style="text-align:center;">'.$res['Days'].'</td>';
	echo '<td style="text-align:center; color:green; font-weight:bold;">'.$res['Stoim'].'</td>';
	echo '<td style="text-align:center;">'.$res['Dop'].'</td>';
	echo '<td style="text-align:center;">'.$res['Datas'].'</td>';
		if ($res['Status']==0) {echo '<td style="text-align:center; color:gray; font-weight:bold;">Ожидается</td>';}
		if ($res['Status']==1) {echo '<td style="text-align:center; color:green; font-weight:bold;">Принято</td>';}
		if ($res['Status']==2) {echo '<td style="text-align:center; color:red; font-weight:bold;">Отклонено</td>';}
	echo '<td style="text-align:center;">  <a href="/User/Del_Buy/'.$res['id'].'"><img height="25px;width="30px;" src="/photo/del.png"></a>   </td>';
	echo '</tr>';
	}
?>
  

</table>

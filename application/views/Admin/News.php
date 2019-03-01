<h3 class="Infin">Список новостей</h3>

<table>
    <tr>
      <th>Заголовок</th>
      <th>Дата</th>
      <th>Текст</th>
      <th>Фото</th>
      <th>Управление</th>
    </tr>
<?php
	while($res=$data->fetch(PDO::FETCH_BOTH)){
	echo '<tr>';
	echo '<td><a style="color: black; font-weight:bold;text-decoration:underline;" href="/News/Info/'.$res['id'].'">'.$res['Nazv'].'</a></td>';
	echo '<td style="width:140px;">'.$res['Datas'].'</td>';
	echo '<td style="text-align:justify;">'.mb_substr($res['Texts'], 0, 300, 'UTF-8').'...'.'</td>';
	if ($res['Photos']=="/photo/News/") {
		echo '<td><img src="/photo/out.jpg" width="140px;"></td>';
	}
	else{
		echo '<td><img src="'.$res['Photos'].'" width="140px;"></td>';
	}
	echo '<td style="text-align:center;">  <a href="/Admin/Del_News/'.$res['id'].'"><img height="25px;width="30px;" src="/photo/del.png"></a>      <a href="/Admin/Corr_News/'.$res['id'].'"><img height="25px;width="30px;" src="/photo/cor.png"></a>                   </td>';
	echo '</tr>';
	}
?>
  

</table>

<h3 class="Infin">Пользователи</h3>

<table>
      <tr><th>Имя</th><th>Логин</th><th>Тип</th><th>Пароль</th><th>Телефон</th><th>Тип записи</th><th>Управление</th></tr>

<?php
	while($res=$data->fetch(PDO::FETCH_BOTH)){
		echo '<tr>';
		echo '<td align=center>'.$res['Names'].'</td>';
		echo '<td align=center>'.$res['Logins'].'</td>';
		if ($res['Types']==0) {echo '<td align=center>Администратор</td>';}
		if ($res['Types']==1) {echo '<td align=center>Редактор</td>';}
		if ($res['Types']==2) {echo '<td align=center>Пользователь</td>';}
		echo '<td align=center>'.$res['Pass'].'</td>';
		echo '<td align=center>'.$res['Tels'].'</td>';

	if ($res['id']>1){
	echo '<td style="text-align:center;">   <a style="color: orange;" href="/Admin/Red/'.$res['id'].'">Ред</a> / <a style="color: green;" href="/Admin/Uz/'.$res['id'].'">Польз</a>   </td>';
	}
	else{
	echo '<td align=center>Администратор</td>';	
	}


		if ($res['Logins']!="Admin") {
			echo '<td align=center><a style="color:red;" href="/Admin/Del_User/'.$res['id'].'"><img src="/photo/del.png"></a></td>';
		}
		else{
			echo '<td align=center></td>';
		}
		
		echo '</tr>';
	}
?>
</table>
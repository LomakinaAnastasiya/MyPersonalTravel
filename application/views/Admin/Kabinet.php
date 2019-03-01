<h3 class="Infin">Личный кабинет</h3>

<div class="Avt">

<?php
while($res=$data->fetch(PDO::FETCH_BOTH)){

echo '<form action="/Admin/Update/'.$res['id'].'" method="POST"  enctype="multipart/form-data" onsubmit="return ValidUser();">';
echo '<br><b>Логин</b><br>';
echo '<input disabled type="text" id="Lg" name="Lg" size="40" value="'.$res['Logins'].'"><br><br>';

echo '<br><b>Имя</b><br>';
echo '<input type="text" id="Nm" name="Nm" size="40" value="'.$res['Names'].'"><br><br>';

echo '<br><b>Телефон</b><br>';
echo '<input type="text" id="Tl" name="Tl" size="40" value="'.$res['Tels'].'"><br><br>';

echo '<br><b>Пароль</b><br>';
echo '<input type="text" id="Ps" name="Ps" size="40" value="'.$res['Pass'].'"><br><br>';
}
?>

<input type="submit" value="Обновить"></form>

</div>
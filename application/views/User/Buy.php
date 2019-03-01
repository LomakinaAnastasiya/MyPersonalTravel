<h3 class="Infin">Оформление заявки</h3>

<div class="Avt">

<?php
$Stoim=0;
while($res=$data->fetch(PDO::FETCH_BOTH)){
$Stoim=$res['Coin'];
echo '<form action="/User/Add_Tyr/'.$res['id'].'" method="POST"  enctype="multipart/form-data" onsubmit="return ValidUser();">';
echo '<br><b>Название тура</b><br>';
echo '<input disabled style="background-color: white;" type="text" id="Lg" name="Lg" size="40" value="'.$res['Nazv'].'"><br><br>';

echo '<br><b>Количество человек</b><br>';
echo '<select onchange="Test('.$Stoim.')"; style="font-size:18px;" id="Kol" name="Kol">';
echo '<option value="1">1</option>';
echo '<option value="2" selected>2</option>';
echo '<option value="3">3</option>';
echo '<option value="4">4</option>';
echo '<option value="5">5</option>';
echo '</select><br><br>';

echo '<p style="font-size: 18px;"><input onchange="Test('.$Stoim.')"; type="checkbox" name="qq1" id="qq1"> Доставка багажа (1000 р.)</p>';
echo '<p style="font-size: 18px;"><input onchange="Test('.$Stoim.')"; type="checkbox" name="qq2" id="qq2"> Номер повышенной комфортности (3000 р.)</p>';
echo '<p style="font-size: 18px;"><input onchange="Test('.$Stoim.')"; type="checkbox" name="qq3" id="qq3"> Услуги гида (5000 р.)</p>';

echo '<br><b>Дата</b><br>';
echo '<input type="date" id="calendar" name="calendar"><br>';

echo '<br><b>Количество дней</b><br>';
echo '<select onchange="Test('.$Stoim.')"; style="font-size:18px;" id="Kol2" name="Kol2">';
echo '<option>3</option>';
echo '<option selected>7</option>';
echo '<option>14</option>';
echo '<option>21</option>';
echo '<option>30</option>';
echo '</select><br><br>';

echo '<p style="font-size: 24px; font-weigh: bold;">Итоговая цена: <span id="pp" name="pp" style="font-weight: bold; color: green;">'.$res['Coin'].'</span> ₽</p><br>';
}


?>

<input type="submit" value="Отправить"></form>

</div>
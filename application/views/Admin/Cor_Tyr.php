<h3 class="Infin">Редактирование тура</h3>

<div class="Avt">

<?php
while($res=$data->fetch(PDO::FETCH_BOTH)){

echo '<form action="/Admin/Add_Tyr_Update/'.$res['id'].'" method="POST"  enctype="multipart/form-data" onsubmit="return ValidCorrTyr();">';
echo '<br><b>Название</b><br>';
echo '<input type="text" id="Tyr_Nazv" name="Tyr_Nazv" size="40" value="'.$res['Nazv'].'"><br><br>';
echo '<br><b>Цена</b><br>';
echo '<input type="text" id="Tyr_Coin" name="Tyr_Coin" size="40" value="'.$res['Coin'].'"><br><br>';
echo '<br><b>Страна</b><br>';
echo '<input type="text" id="Tyr_Count" name="Tyr_Count" size="40" value="'.$res['Place'].'"><br><br>';

echo '<br><b>Тип тура</b><br>';
echo '<select style="font-size:18px;" id="Tyr_Type" name="Tyr_Type">';
if ($res['Type_Tyr']=='1') { echo '<option value="1" selected>Пляжный курорт</option>';}else{ echo '<option value="1">Пляжный курорт</option>';}
if ($res['Type_Tyr']=='2') { echo '<option value="2" selected>Экскурсия</option>';}else{ echo '<option value="2">Экскурсия</option>';}
if ($res['Type_Tyr']=='3') { echo '<option value="3" selected>Оздоровительный тур</option>';}else{ echo '<option value="3">Оздоровительный тур</option>';}
if ($res['Type_Tyr']=='4') { echo '<option value="4" selected>Образовательный тур</option>';}else{ echo '<option value="4">Образовательный тур</option>';}
if ($res['Type_Tyr']=='5') { echo '<option value="5" selected>Спортивный тур</option>';}else{ echo '<option value="5">Спортивный тур</option>';}

echo '</select><br><br>';

echo '<b>Описание тура</b><br>';
echo '<textarea style="border:1px solid silver;" id="Tyr_Text" name="Tyr_Text" rows="10" cols="65">'.$res['Texts'].'</textarea><br>';
}
?>

<br><b>Фото 1</b><br>
<input type="file" name="filename1"><br>
<br><b>Фото 2</b><br>
<input type="file" name="filename2"><br>
<br><b>Фото 3</b><br>
<input type="file" name="filename3"><br><br>
<input style="padding: 5px 10px;cursor:pointer;border:1px solid silver;" type="submit" value="Загрузить" accept="image/jpeg,image/png,image/gif" ></form>

</div>

</div>
<br><br><br><br>


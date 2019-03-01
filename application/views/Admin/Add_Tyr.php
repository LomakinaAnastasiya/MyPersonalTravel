<h3 class="Infin">Добавить тур</h3>

<div class="Avt">
<form action="/Admin/Add_Tyr_Load" method="POST"  enctype="multipart/form-data" onsubmit="return ValidAddTyr();">
<br><b>Название</b><br>
<input type="text" id="Tyr_Nazv" name="Tyr_Nazv" size="40"><br><br>

<br><b>Цена</b><br>
<input type="text" id="Tyr_Coin" name="Tyr_Coin" size="40"><br><br>

<br><b>Страна</b><br>
<input type="text" id="Tyr_Place" name="Tyr_Place" size="40"><br><br>


<br><b>Тип тура</b><br>
<select style="font-size:18px;" id="Tyr_Type" name="Tyr_Type">
	<option value="1">Пляжный курорт</option>
	<option value="2">Экскурсия</option>
	<option value="3">Оздоровительный тур</option>
	<option value="4">Образовательный тур</option>
	<option value="5">Спортивный тур</option>

</select><br><br>

<b>Описание тура</b><br>
<textarea style="border:1px solid silver;" id="Tyr_Text" name="Tyr_Text" rows="10" cols="65"></textarea><br><br>
<input type="file" name="filename1"><br><br>
<input style="padding: 5px 10px;cursor:pointer;border:1px solid silver;" type="submit" value="Загрузить" accept="image/jpeg,image/png,image/gif" ></form>

</form>

</div>




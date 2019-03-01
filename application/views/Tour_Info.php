<h3 class="Infin">Список туров > Описание тура</h3><br>

<div class="Block_Photo">
<ul class="LinePhoto">
<?php
while($res=$data->fetch(PDO::FETCH_BOTH)){

	if ($res['Photos1']!="/photo/Tyr/") {

		if ($res['Photos1']=="/photo/Tyr/") {
			echo '<li><img src="/photo/out.jpg"></li>';
		}
		else{
			echo '<li><img onclick="Fun(1)" id="ss1" name="ss1" src="'.$res['Photos1'].'"></li>';
		}

		
	}

	if ($res['Photos2']!="/photo/Tyr/") {
		echo '<li><img onclick="Fun(2)" id="ss2" name="ss2" src="'.$res['Photos2'].'"></li>';
	}

	if ($res['Photos3']!="/photo/Tyr/") {
		echo '<li><img onclick="Fun(3)" id="ss3" name="ss3" src="'.$res['Photos3'].'"></li>';
	}	

echo '</ul>';

		if ($res['Photos1']=="/photo/Tyr/") {
			echo '<img src="/photo/out.jpg" class="Mains">';
		}
		else{

			echo '<div class="Mains">';
			echo '<div id="slider" class="slider_wrap">';
			if ($res['Photos1']!="/photo/Tyr/") {echo '<img id="Main_Photo" name="Main_Photo" src="'.$res['Photos1'].'">';}
			if ($res['Photos2']!="/photo/Tyr/") {echo '<img id="Main_Photo" name="Main_Photo" src="'.$res['Photos2'].'">';}
			if ($res['Photos3']!="/photo/Tyr/") {echo '<img id="Main_Photo" name="Main_Photo" src="'.$res['Photos3'].'">';}

			echo '</div></div>';

		}


	
	echo '</div>';

echo '<div class="InfoT">';
echo '<h2>'.$res['Nazv'].'</h2>';
echo '<p class="ctr">'.$res['Place'].'</p>';
echo '<span>* - Дополнительные параметры путёвки можно выбрать при оформлении заказа</span><br><br>';
echo '<p class="z1">Дата добавления: '.$res['Datas'].'</p>';
echo '<p class="z2">Страна: '.$res['Place'].'</p>';
if ($res['Type_Tyr']=="1") {echo '<p class="z1">Тип путёвки: Пляжный курорт</p>';}
if ($res['Type_Tyr']=="2") {echo '<p class="z1">Тип путёвки: Экскурсия</p>';}
if ($res['Type_Tyr']=="3") {echo '<p class="z1">Тип путёвки: Оздоровительный тур</p>';}
if ($res['Type_Tyr']=="4") {echo '<p class="z1">Тип путёвки: Образовательный тур</p>';}
if ($res['Type_Tyr']=="5") {echo '<p class="z1">Тип путёвки: Спортивный тур</p>';}

echo '<p class="z2">Цена: от <b>'.$res['Coin'].'</b> ₽</p><br>';
if ($_SESSION['Login']!="Admin" && isset($_SESSION['Login'])) {
	echo '<a href="/User/Tyr/'.$res['id'].'">Оформить</a>';
}
else{
	echo '<p>Пройдите авторизацию как пользователь!</p>';
}

echo '</div><br>';
echo '<h2>Описание</h2>';
echo '<p class="p_text">'.$res['Texts'].'</p>';


echo '<br><p style="font-size: 28px; text-align: center;">Добавить комментарий</p><br>';
echo '<div class="Add_Koment">';
echo '<form action="/Tour/AddKoment/'.$res['id'].'" METHOD="POST" onsubmit="return ValidKoment()">';

}
?>

<b>Имя пользователя</b><br>
<input type="text" id="o1" name="o1"><br><br>
<b>Оценка обслуживания</b><br>
<select id="o2" name="o2">
	<option>Отличное</option>
	<option>Хорошее</option>
	<option>Удовлетворительное</option>
	<option>Допустимое</option>
	<option>Ужасное</option>
</select><br><br>
<b>Текст комментария</b><br>
<textarea id="o3" name="o3" rows="10" cols="65"></textarea><br><br>

<input type="submit" value="Отправить">

</form>
</div>





<div class="All_Koment">

<br><p style="font-size: 28px; text-align: center;">Отзывы</p><br>




<ul class="Otz">

<?php

		$ps=$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
		$routes2 = explode('/', $ps); 
		$nums = $routes2[3];   
	
		require_once 'application/config/Db.php';
		$db=Db::getConnection();

		$str="Select *from Koment where id_Base=".$nums;
		$result2=$db->prepare($str);
		$result2->execute();


while($res2=$result2->fetch(PDO::FETCH_BOTH)){

echo '<li>';
if ($_SESSION['Login']=="Admin") {echo '<a style="position: absolute; left: -10px;" href="/Tour/Koment_Del/'.$res2['id'].'/'.$nums.'">X</a>';}
echo '<img src="/photo/User.png" height="40px" width="43px">';
echo '<div>';
echo '<span style="font-weight: bold;">От: </span><span>'.$res2['Names'].'</span> <span style="margin-left: 30px;font-weight: bold;">Оценка:</span> <span>'.$res2['Ocenka'].'</span>';
echo '<p style="margin-top: 4px;border-top: 1px solid rgba(0,0,0,0.15);">'.$res2['Koment'].'</p>';
echo '</div>';
echo '<hr></li>';

}

?>

</ul>





</div>



















<script type="text/javascript">
$(function asd() {
    var el =  $('#slider img'),
        indexImg = 1,
        indexMax = el.length;
        
        function autoCange () { 
        	if (indexMax!=1) {
            indexImg++;
            if(indexImg > indexMax) {
                indexImg = 1;
            }           
            el.fadeOut(700);
            el.filter(':nth-child('+indexImg+')').fadeIn(700);
        	}
        }   
        setInterval(autoCange, 7000);   
});
</script>
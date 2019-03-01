<h3 style="border: none;" class="Infin">Быстрый поиск</h3>

<ul class="FastTyr">
	<form action="/Page/Dinamic_Find" method="POST"  enctype="multipart/form-data" onsubmit="return ValidAddBlog();">
		
		<li>
			<select id="Tyr_Type" name="Tyr_Type">
  				<option value="1">Пляжный</option>
  				<option value="2">Экскурсия</option> 
  				<option value="3">Оздоровительный</option> 
  				<option value="4">Образовательный</option> 
  				<option value="5">Спортивный</option> 
			</select>
		<li><input id="Tyr_Place" name="Tyr_Place" size=" 40px;" type="text" placeholder="Страна, город или отель"></li>	
		</li>
		<li><input size=" 26px;" type="text" placeholder="Кол-во человек"></li>
		<li><input type="submit" value="Поиск"></li>
	</form>
</ul>

<br><br>

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

<div class="Slidd">
	<div id="slider" class="slider_wrap">
		<img src="/photo/2s.jpg">
		<img src="/photo/1s.jpg">
		<img src="/photo/3s.jpg">
	</div>
</div>




<h3 style="text-indent: 20px; color: #2980b9;">Новые туры</h3>

<ul class="PhotoGal">

<?php
while($res=$data->fetch(PDO::FETCH_BOTH)){

echo '<li>';
echo '<a href="/Tour/Info/'.$res['id'].'">';
echo '<div>';
echo '<p class="ss1">'.$res['Place'].'</p>';
echo '<p class="ss2">'.$res['Nazv'].'</p>';
echo '</div>';
echo '<img src="'.$res['Photos1'].'">';
echo '</a>';
echo '</li>';
}
?>

</ul>
<br>
<h3 style="text-indent: 10px; color: #2980b9;">Краткое описание</h3>
<p style="background-color: rgb(250,250,250);" class="p_text">Компания создана в 2011 году и уже более 3х лет помогает своим клиентам подбирать туры, максимально приближенные к их запросам, включая выделенный бюджет на отдых.
Наше турагентство работает со всеми крупнейшими туроператорами России, и мы имеем возможность предоставить Вам лучшую цену благодаря использованию 4х профессиональных поисковых систем!
Для того, чтобы подобрать тур не обязательно выходить из дома! Вы можете отправить свой запрос к нам на электронный адрес, наш менеджер свяжется с Вами для уточнения запроса и вышлет минимальные цены (это Вас ни к чему не обязывает!).
Обращаясь в турагентство в поиске желаемого тура, любой человек хочет одного: в самое ближайшее время оказаться на пляже, в отеле, в музее – в том месте, о котором так долго мечтал.
Мы понимаем желания наших клиентов. Чтобы быть максимально полезными для Вас - мы предоставляем полный спектр туристических услуг.
</p>

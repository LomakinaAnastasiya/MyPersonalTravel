<h3 class="Infin">Добавить новость</h3>

<div class="Avt">
<form action="/Admin/Add_News_Load" method="POST"  enctype="multipart/form-data" onsubmit="return ValidAddBlog();">
<br><b>Заголовок</b><br>
<input type="text" id="News_zagol" name="News_zagol" size="40"><br><br>
<b>Текст новости</b><br>
<textarea style="border:1px solid silver;" id="News_Text" name="News_Text" rows="15" cols="95"></textarea><br><br>
<input type="file" name="filename1" accept="image/jpeg,image/png,image/gif" ><br><br>
<input type="submit" value="Загрузить"></form>

</div>




<div class="container">
 <?php 
    $selected = [0 => " ", 1 => " "];
    $selected[$tasks[0]['status']] = "selected";
?> 
 

     
<h1>Редактирование задачи</h1>
	<form action="/task/update" id="task" method="post">
        <div class="form-group">
            <label for="user" >Пользователь</label>
            <input type="text"  readonly required name="name_user" class="form-control" id="user" value = "<?php echo $tasks[0]['name_user'];?> ">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" readonly required name="email" class="form-control" id="email" value = "<?php echo $tasks[0]['email'];?> ">
        </div>

        <div class="form-group">
            <label for="description">Описание</label>
            <textarea class="form-control"  required id="description"  name="description" rows="3"><?php echo $tasks[0]['description'];?> </textarea>
        </div>
        <input type="hidden" name="edit" value=" <?php echo $tasks[0]['edit']; ?>">
        <input type="hidden" name="id" value=" <?php echo $tasks[0]['id']; ?>">
        <div class="form-group">
            <label for="status">Статус</label>
            <select name= "status" class="form-control" id="status">
                <option value="0" <?php echo $selected[0];?>>Создана</option>
                <option value="1" <?php echo $selected[1];?>>Выполнена</option>
            </select>
        </div>
        <div id="message" class="alert alert-warning" role="alert" style="display:none">
        <p>Задача изменена администратором</p>
        </div>
        <button type="submit" class="btn btn-primary mb-2">Изменить</button>
    </form> 
</div>


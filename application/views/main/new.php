<div class="container">
    
     
<h1>Новая задача</h1>
	<form action="/task/add" id="task" method="post">
        <div class="form-group">
            <label for="user" >Пользователь</label>
            <input type="text"  required name="name_user" class="form-control" id="user" placeholder="Имя">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" required name="email" class="form-control" id="email" placeholder="name@example.com">
        </div>

        <div class="form-group">
            <label for="description">Описание</label>
            <textarea class="form-control"  required id="description"  name="description" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-primary mb-2">Создать</button>
    </form> 
</div>


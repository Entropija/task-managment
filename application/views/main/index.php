<div class="container">
<h1>Список задач</h1>

<?php if(isset($_SESSION['status'])){ ?>
	<div class="alert alert-secondary" role="alert">
		<?php echo $_SESSION['status'];?>
	</div>
<?php }
	unset($_SESSION['status']);
	//debug($tasks);
?>

<?php 
				$td = "";
				$th = "";
				if(isset($_SESSION['admin'])) {
					$td = "<td>Изменить</td>";
					$th = "<th></th>";
				}
?>
	<table id="example" data-page-size="1" data-pagination="true" class="table table-hover" >
			<thead>
				<tr>
					<th data-sortable="true" class="sort" >Имя пользователя</th>
					<th>Email</th>
					<th>Описание</th>
					<th>Статус</th>
					<?php echo $th; ?>
					
					
				</tr>
			</thead>
			<tbody>
			
				<?php foreach ($tasks as $val): ?>
					<?php  switch ($val['status']) {
						case 0:
							$status = "Создана";
							break;
						case 1:
							$status = "Выполнена";
							break;
					}?>	

					<tr>
					<td><?php echo $val['name_user']; ?></td>
					<td><?php echo $val['email']; ?></td>
					<td><?php echo $val['description']; ?></td>
					<td><?php echo $status; ?></td>
					<?php 
						if (isset($_SESSION['admin'])){
							$td = '<td><a href="/task/edit?id='. $val['id'] . '"> Изменить</a></td>';
						}  
						echo $td;
					?>
					</tr>
				<?php endforeach; ?>
			</tbody>    
	</table>

	<a class="btn btn-primary" href="/task/new" role="button">Добавить задачу</a>
</div>


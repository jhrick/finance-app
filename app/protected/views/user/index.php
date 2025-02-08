<?php
/* @var $this UserController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Users',
);

$this->menu=array(
	array('label'=>'Create User', 'url'=>array('create')),
	array('label'=>'Manage User', 'url'=>array('admin')),
);
?>

<h1>Users</h1>

<div id="app">
	<div v-if="loading" class="text-gray-500">Loading...</div>
	<ul v-else class="list-disc p-4">
        <li v-for="user in users" :key="user.id" class="border-b py-2">
            <h3 class="text-xl font-bold">{{ user.username }}</h3>
            <p>{{ user.email }}</p>
        </li>
    </ul>
</div>

<script>
	new Vue({
		el: '#app',
		data: {
			users: [],
			loading: true
		},
			mounted() {
				fetch('<?php echo Yii::app()->createUrl("user/getUsers"); ?>')
					.then(response => response.json())
					.then(data => {
						this.users = data;
						this.loading = false
					})
					.catch(console.error)
			}
	})
</script>

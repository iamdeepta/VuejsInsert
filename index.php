<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/vue"></script>
</head>
<body>

<div class="container row">
	<div class="col-md-4 offset-6 mt-4" id="app">
		<form @submit.prevent="addItem">
			<label>Name:</label>
			<input type="text" v-model="newItem" class="form-control" required><br> {{ newItem }}
			<label>Price:</label>
			<input type="number" v-model="newItemPrice" class="form-control" required><br> {{ newItemPrice }}
			<input type="submit" value="submit" name="submit" class="btn btn-sm btn-success">
		</form><br>
		<ul class="list-group">
			<li class="list-group-item" v-for="item in items">{{ item.name }} : {{ item.price }}</li>
		</ul>
	</div>
	
</div>

<script type="text/javascript">
	new Vue({

		el: '#app',
		data: {
			items: [

				{name: 'Toyota', price: 2000000},
				{name: 'Corolla', price: 3000000},
				{name: 'Alien', price: 4000000},
				{name: 'Premio', price: 5000000},
				{name: 'Prado', price: 6000000},
			],

			newItem: "",
			newItemPrice: ""
		},

		methods:{
			addItem(){
				this.items.push({
					name: this.newItem,
					price: this.newItemPrice
				})
			}
		}
	})
</script>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
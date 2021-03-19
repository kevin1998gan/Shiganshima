<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/update.css">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body>
	<div class="row justify-content-center">
		<form action="" method="POST">
			<input type="hidden" name="Id" value="">
			<div class="form-group">
				<label>Item Name</label>
				<input type="text" name="Title" class="form-control" value="" placeholder="Enter item name" required>
			</div>
			<div class="form-group">
				<label>Price</label>
				<input type="text" name="Author" class="form-control" value="" placeholder="Enter price" required>
			</div>
			<div class="form-group">
				<label>Photo URL</label>
				<input type="text" name="Photo" class="form-control" value="" placeholder="Enter photo URL" required>
			</div>
			<div class="form-group">
				<label>Quantity</label>
				<input type="number" name="Quantity" class="form-control" value="" placeholder="Enter quantity" required>
			</div>
			<div class="form-group">
				<label>Category</label>
				<select name="Category" class="form-control" value="" placeholder="Choose category" required>
					<option value="Men">Men</option>
					<option value="Women">Women</option>
					<option value="Kids">Kids</option>
                </select>
			</div>
			<div class="form-group">
				<label>Description</label>
				<textarea class="form-control" name="Description" rows="3" placeholder="Enter description"></textarea>
			</div>
			<div class="form-group">
				<button type="submit" name="update" class="btn btn-info">Update</button>
				<button name="cancel" class="btn btn-danger">Cancel</button>
			</div>
		</form>
	</div>
</body>
</html>


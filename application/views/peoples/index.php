<div class="container">
	<h3 class="mt-3">List of Peoples</h3>

	<div class="row">
		<div class="col-md">
			<form action="" method="post">
				<div class="input-group mb-3">
  					<input type="text" class="form-control" placeholder="Search Keyword . . .">
 					 <div class="input-group-append" name="Keyword">
   						 <input class="btn btn-primary" type="submit" name="submit">Button</input>
  					</div>
				</div>
			</form>
		</div>
	</div>

	<div class="row">
		<div class="col-md-10">
				<table class="table">
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Email</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach( $peoples as $people ) : ?>
						<tr>
							<th><?= ++$start; ?></th>
							<td><?= $people['name']; ?></td>
							<td><?= $people['email']; ?></td>
							<td>
								<a href="" class="badge badge-warning">Detail</a>
								<a href="" class="badge badge-success">Edit</a>
								<a href="" class="badge badge-danger">Delete</a>
							</td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>

				<?= $this->pagination->create_links(); ?>
		</div>
	</div>
</div>
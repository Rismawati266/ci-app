<div class="container">
	<div class="row">
		<div class="col-md-10">
			
			<h3 class="mt-3">List of Peoples</h3>
			<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>Nama</th>
						<th>Email</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php $i = 1;
					foreach( $peoples as $people) : ?>
					<tr>
						<th><?= $i++; ?></th>
						<td><?= $people['name']; ?></td>
						<td><?= $people['email']; ?></td>
						<td>
							<a href="" class="badge badge-warning">Detail</a>
							<a href="" class="badge badge-success">Ubah</a>
							<a href="" class="badge badge-danger">Hapus</a>
						</td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>

		</div>
	</div>
</div>
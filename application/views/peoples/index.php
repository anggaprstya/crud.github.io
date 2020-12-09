<div class="container">
	<div class="row mt-3">
		<div class="col-md-10">
			
			<h3 class="mt-3">List Of Peoples</h3>

			<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>Nama</th>
						<th>Email</th>
						<th>Action</th>
					</tr>
				</thead>
				<body>
					<?php foreach ($peoples as $people) : ?>
					<tr>
						<th><?= $start++; ?></th>
						<td><?= $people['name']; ?></td>
						<td><?= $people['email']; ?></td>
						<td>
							<a href="" class="badge badge-warning">detail</a>
							<a href="" class="badge badge-success">edit</a>
							<a href="" class="badge badge-danger">delete</a>
						</td>
					</tr>
					<?php endforeach; ?>
				</body>
			</table>

			<?= $this->pagination->create_links(); ?>
		</div>
	</div>
</div>
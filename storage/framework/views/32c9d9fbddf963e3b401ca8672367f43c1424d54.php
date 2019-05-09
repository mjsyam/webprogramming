
<?php $__env->startSection('title', 'Data Mahasiswa'); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
		<div class="card">
			<div class="card-body">
				<h3>Data Mahasiswa</h3>
                <br>
 
				<table class="table table-bordered">
					<tr>
						<th>NIM</th>
						<th>Nama</th>
						<th>Jurusan</th>
						<th>Fakultas</th>
						<th>Opsi</th>
					</tr>
					<?php $__currentLoopData = $mhs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
						<td><?php echo e($m->nim); ?></td>
						<td><?php echo e($m->nama); ?></td>
						<td><?php echo e($m->jurusan); ?></td>
						<td><?php echo e($m->fakultas); ?></td>
						<td>
							<a class="btn btn-warning btn-sm" href="/mahasiswa/edit/<?php echo e($m->nim); ?>">Edit</a>
							<a class="btn btn-danger btn-sm" href="/mahasiswa/hapus/<?php echo e($m->nim); ?>">Hapus</a>
						</td>
					</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</table>
 
				<br/>
				Halaman : <?php echo e($mhs->currentPage()); ?> <br/>
				Jumlah Data : <?php echo e($mhs->total()); ?> <br/>
				Data Per Halaman : <?php echo e($mhs->perPage()); ?> <br/>
				<br/>
 
				<?php echo e($mhs->links()); ?>

			</div>
		</div>
	</div>
</html>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/unibava/resources/views/mahasiswa.blade.php ENDPATH**/ ?>
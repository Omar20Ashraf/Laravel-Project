<?php $__env->startSection('content'); ?>
	
<h3>Edit Blog Games Items</h3>
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<?php echo Form::open(['route'=>['bloggames.update',$products->id],
						'method'=>'Post','files'=>true]); ?>

		<?php echo e(Form::hidden('_method','PUT')); ?>


			<div class="form-group">
				<?php echo e(Form::label('name','Name')); ?>

				<?php echo e(Form::text('name',$products->name,array('class'=>'form-control'))); ?>

			</div>

			<div class="form-group">
				<?php echo e(Form::label('par','Par')); ?>

				<?php echo e(Form::text('par',$products->par,array('class'=>'form-control'))); ?>

			</div>

			<div class="form-group">
				<?php echo e(Form::label('button','Button')); ?>

				<?php echo e(Form::text('button',$products->button,array('class'=>'form-control'))); ?>

			</div>

			<div class="form-group">
				<?php echo e(Form::label('button_color','Button-Color')); ?>

				<?php echo e(Form::text('button_color',$products->button_color,array('class'=>'form-control'))); ?>

			</div>

			<div class="form-group">
				<?php echo e(Form::label('image','Image')); ?>

				<?php echo e(Form::file('image',['class'=>'form-control'])); ?>

			</div>

			<?php echo e(Form::submit('Update',array('class'=>'btn btn-default'))); ?>	

		<?php echo Form::close(); ?>


	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="container ptb-120">
	<div class="row">
		<div class="col-sm-12">
			<?= $this->Html->link(__d('Showcase', 'List Projects'), ['action' => 'index'], [
				'class' => 'btn-sm btn-primary'
			]) ?>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-12 projects">
			<h3><?= __d('Showcase', 'Add Project') ?></h3>

			<?= $this->element('Projects/form') ?>
		</div>
	</div>
</div>

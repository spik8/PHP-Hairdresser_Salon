<div class="service view">
<h2><?php echo __('Usługa'); ?></h2>
	<dl>
		<dt><?php echo __('Id:'); ?></dt>
		<dd>
			<?php echo h($service['Service']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nazwa:'); ?></dt>
		<dd>
			<?php echo h($service['Service']['service_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Czas trwania(min):'); ?></dt>
		<dd>
			<?php echo h($service['Service']['service_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cena:'); ?></dt>
		<dd>
			<?php echo h($service['Service']['price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ID salonu:'); ?></dt>
		<dd>
			<?php echo h($service['Service']['salons_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>

<div class="actions">
	<h3><?php echo __('Opcje'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Usługi'), array('controller' => 'services','action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Dodaj Usługę'), array('controller' => 'services','action' => 'add')); ?></li>
	</ul>
</div>


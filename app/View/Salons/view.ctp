<div class="salon view">
<h2><?php echo __('Salon'); ?></h2>
	<dl>
		<dt><?php echo __('Id:'); ?></dt>
		<dd>
			<?php echo h($salon['Salon']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nazwa:'); ?></dt>
		<dd>
			<?php echo h($salon['Salon']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Zdjęcie'); ?></dt>
		<dd>
			<?php echo $this->Html->image('../files/salon/filename/'.$salon['Salon']['id'].'/'.$salon['Salon']['filename']); ?></td>
			&nbsp;
		</dd>
		<dt><?php echo __('Miasto:'); ?></dt>
		<dd>
			<?php echo h($salon['Salon']['city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Adres:'); ?></dt>
		<dd>
			<?php echo h($salon['Salon']['adress']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numer kontaktowy:'); ?></dt>
		<dd>
			<?php echo h($salon['Salon']['tel']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('E-mail:'); ?></dt>
		<dd>
			<?php echo h($salon['Salon']['email']); ?>
			&nbsp;
		</dd>
	</dl>
</div>

<div class="actions">
	<h3><?php echo __('Opcje'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Saloy'), array('controller' => 'salons','action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Dodaj Salon'), array('controller' => 'salons','action' => 'add')); ?></li>
	</ul>
</div>


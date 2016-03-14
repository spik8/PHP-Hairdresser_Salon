<div class="Service index">
	<h2><?php echo __('Usługi'); ?></h2>
	<table cellpadding="0" cellspacing="0">
		<thead>
		<tr>
			<th><?php echo 'id'; ?></th>
			<th><?php echo 'Nazwa Usługi'; ?></th>
			<th><?php echo 'Czas trwania(min)'; ?></th>
			<th><?php echo 'Cena'; ?></th>
			<th class="actions"><?php echo __('Opcje'); ?></th>
		</tr>
		</thead>
		<tbody>
		<?php foreach ($services as $service): ?>
			<tr>
				<td><?php echo h($service['Service']['id']); ?></td>
				<td><?php echo h($service['Service']['service_name']); ?></td>
				<td><?php echo h($service['Service']['service_time']); ?></td>
				<td><?php echo h($service['Service']['price']); ?></td>
				<td class="actions">
					<?php echo $this->Html->link(__('Usługa'), array('action' => 'view', $service['Service']['id'])); ?>
					<?php echo $this->Html->link(__('Edycja'), array('action' => 'edit', $service['Service']['id'])); ?>
					<?php echo $this->Form->postLink(__('Usunięcie'), array('action' => 'delete', $service['Service']['id']), array('confirm' => __('Jesteś pewien że chcesz usunąć usługę o id: # %s?', $service['Service']['id']))); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
</div>

<div class="actions">
	<h3><?php echo __('Opcje'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Dodaj Usługę'), array('controller' => 'services','action' => 'add')); ?></li>
	</ul>
</div>

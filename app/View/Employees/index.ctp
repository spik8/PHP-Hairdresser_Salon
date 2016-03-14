<div class="Employee index">
	<h2><?php echo __('Pracownicy'); ?></h2>
	<table cellpadding="0" cellspacing="0">
		<thead>
		<tr>
			<th><?php echo 'id'; ?></th>
			<th><?php echo 'Imie'; ?></th>
			<th><?php echo 'Nazwisko'; ?></th>
                        <th><?php echo 'Salon_id'; ?></th>

			<th class="actions"><?php echo __('Opcje'); ?></th>
		</tr>
		</thead>
		<tbody>
		<?php foreach ($employees as $Employee): ?>
			<tr>
				<td><?php echo h($Employee['Employee']['id']); ?></td>
				<td><?php echo h($Employee['Employee']['first_name']); ?></td>
				<td><?php echo h($Employee['Employee']['last_name']); ?></td>
                                <td><?php echo h($Employee['Employee']['salons_id']); ?></td>
				<td class="actions">
					<?php echo $this->Html->link(__('Pracownik'), array('action' => 'view', $Employee['Employee']['id'])); ?>
					<?php echo $this->Html->link(__('Edycja'), array('action' => 'edit', $Employee['Employee']['id'])); ?>
					<?php echo $this->Form->postLink(__('Usunięcie'), array('action' => 'delete', $Employee['Employee']['id']), array('confirm' => __('Jesteś pewien że chcesz usunąć Pracownika o id: # %s?', $Employee['Employee']['id']))); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
</div>

<div class="actions">
	<h3><?php echo __('Opcje'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Dodaj Pracownika'), array('controller' => 'employees','action' => 'add')); ?></li>
	</ul>
</div>

<div class="body">

    <?php
    //Wyświetlenie wszystkich salonów(indexów), zrobić z tego kontenery.
        $salons = $this->requestAction(array('controller'=>'salons','action'=>'index'));
    ?>

    <?php foreach($salons as $salon):?>
        <?php echo $this->Html->image('../files/salon/filename/'.$salon['Salon']['id'].'/'.$salon['Salon']['filename'],array(
            'url' => array('controller' => 'Salons', 'action' => 'view', $salon['Salon']['id'])));?>
        <?php echo $salon['Salon']['name'];?>
        <?php echo $salon['Salon']['city'];?>
        <?php echo $this->Html->link('Zarezerwuj miejsce',array('controller' => 'Salons', 'action' => 'view', $salon['Salon']['id']))?>
    <?php endforeach ?>

</div>
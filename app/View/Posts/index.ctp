<!-- File: /app/View/Posts/index.ctp -->

<h2>Streaming</h2>
<?php 
###########
##Si usuario es profesor o Administrador muestra lo siguiente
##########
if ($this->Session->read('Auth.User.tipo') == 0 || $this->Session->read('Auth.User.tipo') == 2) { ?>

<p><?php echo $this->Html->link("Add Post", array('action' => 'add')); ?></p>

	<table>
		<tr>
			<!--th>Id</th-->
			<th>Title</th>
			<th>Action</th>
			<th>Created</th>
		</tr>

<?php foreach ($posts as $post): ?>

	<? if($this->Session->read('Auth.User.id') == $post['Post']['user_id']) 
		{ ?>
		<tr>
			<!--td><?php #echo $post['Post']['id']; ?></td-->
			<td><?php echo $this->Html->link($post['Post']['title'],
					array('controller' => 'posts', 'action' => 'view', 
					$post['Post']['id'])); ?>
			</td>
			<td><?php echo $this->Form->postLink(
						                'Delete',array('action' => 'delete', $post['Post']['id']),
												array('confirm' => 'Are you sure?')
												);
						echo " | " ?>
				<?php echo $this->Html->link('Edit', array('action' => 'edit', $post['Post']['id']));?>
	        </td>
		    <td><?php echo $post['Post']['created']; ?></td>
		</tr>	
		<? } ?>
		<?php endforeach; ?>
	
	</table>
	
			<td><?php echo $this->Html->link('volver', array('controller' => 'Profe', 'action' => 'index'))?></td>
	<?php } ########
			##En caso que sea un alumno o el usuario no este logueado
			#######
			else { ?>
	<table>
		<tr>
			<th>Id</th>
			<th>Title</th>
		</tr>

		<?php foreach ($posts as $post): ?>
		<tr>
			<td><?php echo $post['Post']['id']; ?></td>
			<td><?php echo $this->Html->link($post['Post']['title'],
					array('controller' => 'posts', 'action' => 'view', 
					$post['Post']['id'])); ?>
			</td>
		</tr>	
		<?php endforeach; ?>
	
	</table>
	
			<td><?php echo $this->Html->link('volver', array('controller' => 'Alumno', 'action' => 'viewprofe', $post['Post']['user_id']))?></td>

<?php } ?>

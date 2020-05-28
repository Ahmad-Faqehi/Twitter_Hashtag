
<?php include "../includes/init.php"; ?>

<?php

$users = new User();

             foreach($users->find_all() as $user) : ?>
            <tr>
              <th><?php echo $user->id ?></th>
              <th><?php echo $user->username ?></th>
              <th><a href="edit-user.php?id=<?php echo $user->id ?>" class="btn btn-primary btn-circle btn-sm"><i class="fas fa-edit"></i></a></th>
                <th><a href="delete_user.php?id=<?php echo $user->id ?>" class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></a></th>
              <th><?php $user->check_roal(); ?></th>
            </tr>
            <?php endforeach; ?>

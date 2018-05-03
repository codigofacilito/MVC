<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <a href='index.php?controller=animal&action=showById'>Nuevo</a>
    <table>
      <tr>
      <?php require_once 'core/const.php';
        foreach(DATA_ANIMAL as $key=>$value):
      ?>
      <td><?php echo $value;?></td>
    <?php endforeach; ?>
    <td>Genero</td>
    </tr>
    <?php foreach($this->model->getAll() as $animal): ?>
    <tr>
      <td><?php echo $animal->name?></td>
      <td><?php echo $animal->specie?></td>
      <td><?php echo $animal->breed?></td>
      <td><?php echo $animal->color?></td>
      <td><?php echo $animal->age?></td>
      <td><?php echo $animal->gender?></td>
      <td><a href="index.php?controller=animal&action=showById&id=<?php echo $animal->id; ?>">Editar</a></td>
      <td><a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="index.php?controller=animal&action=quit&id=<?php echo $animal->id; ?>">Eliminar</a></td>
    </tr>
  <?php endforeach;?>

    </table>
  </body>
</html>

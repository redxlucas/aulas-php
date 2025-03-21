<?php
    require_once '../model/Person.php';

    $personList = Person::findAll();

    if($_SERVER['REQUEST_METHOD'] == 'POST') {

      if($_POST['action'] == "delete") {
        Person::delete((int) $_POST['id']);
      }

      else {
        $person = new Person(
          trim($_POST['name']), 
          trim($_POST['address']), 
          trim($_POST['phone'])
        );

        $person->save();

      }
      
      Person::findAll();
    }
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cadastro de Pessoas</h1>

    <form action="" method="post">
        <label for="name">Nome: 
            <input type="text" name="name" value="">
        </label>
        <label for="address">Endereço: 
            <input type="text" name="address" value="">
        </label>
        <label for="phone">Telefone: 
            <input type="text" name="phone" value="">
        </label>
        <button type="submit">Enviar</button>
    </form>

    <h2>Notas cadastradas</h2>

    <table border="1">
      <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Endereço</th>
            <th>Telefone</th>
            <th>Ação</th>
        </tr>
      </thead>
      <tbody>
      <?php if (!empty($personList)): ?>
        <?php foreach($personList as $person): ?>
          <tr>
            <td><?= htmlspecialchars($person['id']) ?></td>
            <td><?= htmlspecialchars($person['name']) ?></td>
            <td><?= htmlspecialchars($person['address']) ?></td>
            <td><?= htmlspecialchars($person['phone']) ?></td>
            <td>
              <form method="post" style="display:inline">
                <input type="hidden" name="action" value="delete">
                <input type="hidden" name="id" value="<?= htmlspecialchars($person['id']) ?>">
                <button type="submit">Excluir</button>
              </form>
            </td>
          </tr>
          <?php endforeach; ?>
        <?php else: ?>
          <tr><td colspan="5">Nenhuma pessoa cadastrada.</td></tr>
        <?php endif; ?>
      </tbody>
    </table>
</body>
</html>
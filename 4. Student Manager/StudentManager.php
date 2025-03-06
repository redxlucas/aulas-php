<?php
  session_start();

if (!isset($_SESSION['students'])) {
  $_SESSION['students'] = [];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST['clear'])) {
      $_SESSION['students'] = [];
  } elseif (isset($_POST['name'], $_POST['subject'], $_POST['grade'])) {
      $student = [
          "name" => $_POST['name'],
          "subject" => $_POST['subject'],
          "grade" => floatval($_POST['grade'])
      ];
      $_SESSION['students'][] = $student;
  }
}
?>


<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gerenciador de Alunos</title>
    <style>
      body{
        margin: 0 30px;
      }
        table {
            width: 50%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f4f4f4;
        }
        .center {
            text-align: center;
        }
    </style>
  </head>
  <body>
    <form
      action=""
      method="post"
      enctype="multipart/form-data"
    >
      <fieldset>
        <legend><h2>Gerenciador de Alunos</h2></legend>
        <p>
          <label for="name">
            Nome do Aluno:
            <input type="text" name="name" />
          </label>
        </p>
        <p>
          <label for="subject">
            Disciplinas:
            <select name="subject">
              <option selected disabled>Selecione um curso</option>
              <option value="Estrutura de Dados">Estrutura de Dados</option>
              <option value="Inglês">Inglês</option>
              <option value="Redes de Computadores">
                Redes de Computadores
              </option>
            </select>
          </label>
        </p>
        <p>
          <label for="grade">
            Nota:
            <input type="number" name="grade" min="0.1" max="10" step="0.1" />
          </label>
        </p>
        <p>
          <input type="submit" value="Enviar" />
          <button type="submit" name="clear">Limpar Lista</button>
        </p>
      </fieldset>
    </form>

    <?php if (!empty($_SESSION['students'])): ?>

    <h2>Notas cadastradas</h2>

    <table>
      <thead>
        <tr>
          <th>Nome</th>
          <th>Disciplina</th>
          <th>Nota</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($_SESSION['students'] as $student): ?>
          <tr>
            <td><?= isset($student['name']) ? htmlspecialchars($student['name']) : '' ?></td>
            <td><?= isset($student['subject']) ? htmlspecialchars($student['subject']) : '' ?></td>
            <td><?= isset($student['grade']) ? htmlspecialchars($student['grade']) : '' ?></td>
          </tr>
          <?php endforeach; ?>
      </tbody>
    </table>
    <?php endif; ?>
  </body>
</html>
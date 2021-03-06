<?php
include "template/header.php";
?>
<a href="sheetAdd">Ajouter</a>
<div class="btn-group">
  <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Trier par:
  </button>
  <div class="dropdown-menu dropdown-menu-right">
    <button class="dropdown-item" type="button">Date</button>
    <button class="dropdown-item" type="button">Nom de prof</button>
    <button class="dropdown-item" type="button">Matière</button>
  </div>
</div>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Organisme</th>
      <th scope="col">Intitulé</th>
      <th scope="col">Début</th>
      <th scope="col">Fin</th>
      <th scope="col">Start</th>
      <th scope="col">end</th>
      <th scope="col">Lundi_matin</th>
      <th scope="col">Lundi_aprèm</th>
      <th scope="col">Mardi_matin</th>
      <th scope="col">Mardi_aprèm</th>
      <th scope="col">Mercredi_matin</th>
      <th scope="col">Mercredi_aprèm</th>
      <th scope="col">Jeudi_matin</th>
      <th scope="col">Jeudi_aprèm</th>
      <th scope="col">Vendredi_matin</th>
      <th scope="col">Vendredi_aprèm</th>
    </tr>
  </thead>
  <?php foreach ($sheets as $key => $sheet) {

  ?>
  <tbody>
    <tr>
      <th scope="row"></th>
      <td><?php echo $sheet["organization"]; ?></td>
      <td><?php echo $sheet["entitled"]; ?></td>
      <td><?php echo $sheet["start"]; ?></td>
      <td><?php echo $sheet["end"]; ?></td>
      <td><?php echo $sheet["monday_morning"]; ?></td>
      <td><?php echo $sheet["monday_afternoon"]; ?></td>
      <td><?php echo $sheet["tuesday_morning"]; ?></td>
      <td><?php echo $sheet["tuesday_afternoon"]; ?></td>
      <td><?php echo $sheet["wednesday_morning"]; ?></td>
      <td><?php echo $sheet["wednesday_afternoon"]; ?></td>
      <td><?php echo $sheet["thursday_morning"]; ?></td>
      <td><?php echo $sheet["thursday_afternoon"]; ?></td>
      <td><?php echo $sheet["wednesday_morning"]; ?></td>
      <td><?php echo $sheet["wednesday_afternoon"]; ?></td>
      <td><?php echo $sheet["friday_morning"]; ?></td>
      <td><?php echo $sheet["friday_afternoon"]; ?></td>
      <td>
      <a href="sheetUpdate?id=<?php echo $sheet["sheet_id"]; ?>">Modifier</a>
      <a href="sheetDelete?id=<?php echo $sheet["sheet_id"]; ?>">Supprimer</a>
      <?php
      }
      ?>
      </td>
    </tr>
  </tbody>
</table>

<?php
include "template/footer.php";
?>

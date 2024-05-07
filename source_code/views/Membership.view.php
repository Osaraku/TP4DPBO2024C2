<?php
  class MembershipView{
    public function render($data){
      $title = 'Data Membership';
      $navbar = ' <li class="nav-item">
                    <a class="nav-link" href="index.php">Member</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="membership.php">Membership</a>
                  </li>
      ';
      $add = '
          <div class="col-2 my-3">
            <a type="button" class="btn btn-primary nav-link active" href="membership.php?add">Add New Membership </a>
          </div>';
      $header = '
            <th>ID</th>
            <th>NAME</th>
            <th>PRICE</th>
            <th>DESCRIPTION</th>

            <th>ACTIONS</th>';
      $no = 1;
      $dataMembership = null;
      foreach($data as $val){
        list($id, $name, $price, $description) = $val;
            $dataMembership .= "<tr>
                    <td>" . $no++ . "</td>
                    <td>" . $name . "</td>
                    <td>" . $price . "</td>
                    <td>" . $description . "</td>
                    <td>
                    <a href='membership.php?id_edit=" . $id .  "' class='btn btn-warning''>Edit</a>
                    <a href='membership.php?id_hapus=" . $id . "' class='btn btn-danger' onclick='return confirm(\"Apakah Anda yakin ingin menghapus membership ini?\")'>Hapus</a>
                    </td>
                    </tr>";
      }

      $tpl = new Template("templates/table.html");
      $tpl->replace("DATA_TABEL", $dataMembership);
      $tpl->replace("DATA_HEADER", $header);
      $tpl->replace("DATA_ADD", $add);
      $tpl->replace("DATA_NAVBAR", $navbar);
      $tpl->replace("DATA_TITLE", $title);
      $tpl->write();
    }
  }
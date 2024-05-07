<?php
  class MemberView{
    public function render($data){
      $title = 'Data Member';
      $navbar = ' <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Member</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="membership.php">Membership</a>
                  </li>
      ';
      $add = '
          <div class="col-2 my-3">
            <a type="button" class="btn btn-primary nav-link active" href="index.php?add">Add New Member</a>
          </div>';
      $header = '
            <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>PHONE</th>
            <th>MEMBERSHIP</th>
            <th>JOIN DATE</th>

            <th>ACTIONS</th>';
      $no = 1;
      $dataMember = null;
      foreach($data as $val){
        list($id, $name, $email, $phone, $membership, $join) = $val;
            $dataMember .= "<tr>
                    <td>" . $no++ . "</td>
                    <td>" . $name . "</td>
                    <td>" . $email . "</td>
                    <td>" . $phone . "</td>
                    <td>" . $membership . "</td>
                    <td>" . $join . "</td>
                    <td>
                    <a href='index.php?id_edit=" . $id .  "' class='btn btn-warning''>Edit</a>
                    <a href='index.php?id_hapus=" . $id . "' class='btn btn-danger' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data member ini?\")'>Hapus</a>
                    </td>
                    </tr>";
      }

      $tpl = new Template("templates/table.html");
      $tpl->replace("DATA_TABEL", $dataMember);
      $tpl->replace("DATA_HEADER", $header);
      $tpl->replace("DATA_ADD", $add);
      $tpl->replace("DATA_NAVBAR", $navbar);
      $tpl->replace("DATA_TITLE", $title);
      $tpl->write();
    }
  }
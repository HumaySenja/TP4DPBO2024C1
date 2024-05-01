<?php
  class MemberView{
    public function render($data){
      $dataMember = null;
      foreach($data as $val){
        list($id, $nama, $email, $phone, $join_date) = $val;
        
            $dataMember .= "<tr>
                    <td>" . $id. "</td>
                    <td>" . $nama . "</td>
                    <td>" . $email . "</td>
                    <td>" . $phone . "</td>
                    <td>" . $join_date . "</td>
                    <td>
                    <a href='index.php?id_edit=" . $id .  "' class='btn btn-success''>Edit</a>
                    <a href='index.php?id_hapus=" . $id . "' class='btn btn-danger''>Hapus</a>
                    </td>
                    </tr>";

      }

      $tpl = new Template("templates/index.html");
      $tpl->replace("DATA_TABEL", $dataMember);
      $tpl->write();
    }
  }
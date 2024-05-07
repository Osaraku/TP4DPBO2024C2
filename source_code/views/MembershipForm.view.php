<?php
class MembershipForm {
    public function render(){
        $navbar = ' <li class="nav-item">
                        <a class="nav-link" href="index.php">Member</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="membership.php">Membership</a>
                    </li>
        ';
        $form = "<div class='col-lg-6 m-auto'>
            <form method='post' action='membership.php'>
                        <br><br>
                        <div class='card'>
                            <div class='card-header bg-primary'>
                                <h1 class='text-white text-center'>Create New Membership</h1>
                            </div><br>
                            <label>NAME:</label>
                            <input type='text' name='nama' class='form-control' value=''> <br>
                            <label>PRICE:</label>
                            <input type='text' name='harga' class='form-control' value=''> <br>
                            <label>DESCRIPTION:</label>
                            <input type='text' name='deskripsi' class='form-control' value=''> <br>
                            <button class='btn btn-success' type='submit' name='submit'>Submit</button><br>
                            <a class='btn btn-info' href='membership.php'>Cancel</a><br>
                        </div>
                    </form>
                </div>";

        $tpl = new Template("templates/form.html");
        $tpl->replace("DATA_FORM", $form);
        $tpl->replace("DATA_NAVBAR", $navbar);
        $tpl->write();
    }

    public function render_edit($data){ 
        $navbar = ' <li class="nav-item">
                        <a class="nav-link" href="index.php">Member</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="membership.php">Membership</a>
                    </li>
        ';
        $form = "<div class='col-lg-6 m-auto'>
            <form method='post' action='membership.php'>
                <input type='hidden' name='action' value='edit'>
                <input type='hidden' name='id' value='{$data['id_membership']}' class='form-control'> <br>
                        <br><br>
                        <div class='card'>
                            <div class='card-header bg-warning'>
                                <h1 class='text-white text-center'>Edit Membership</h1>
                            </div><br>
                            <label>NAME:</label>
                            <input type='text' name='nama' class='form-control' value='{$data['nama']}'> <br>
                            <label>PRICE:</label>
                            <input type='text' name='harga' class='form-control' value='{$data['harga']}'> <br>
                            <label>DESCRIPTION:</label>
                            <input type='text' name='deskripsi' class='form-control' value='{$data['deskripsi']}'> <br>
                            <button class='btn btn-success' type='submit' name='submit'>Submit</button><br>
                            <a class='btn btn-info' href='membership.php'>Cancel</a><br>
                        </div>
                    </form>
                </div>";

        $tpl = new Template("templates/form.html");
        $tpl->replace("DATA_FORM", $form);
        $tpl->replace("DATA_NAVBAR", $navbar);
        $tpl->write();
    }
}
?>
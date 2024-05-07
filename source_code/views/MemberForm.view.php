<?php
class MemberForm {
    public function render($memberships){
        $navbar = ' <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Member</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="membership.php">Membership</a>
                    </li>
        ';
        $options = "";
        foreach($memberships as $membership){
            $options .= "<option value='{$membership['id_membership']}'>{$membership['nama']}</option>";
        }
        $form = "<div class='col-lg-6 m-auto'>
            <form method='post' action='index.php'>

                        <br><br>
                        <div class='card'>
                            <div class='card-header bg-primary'>
                                <h1 class='text-white text-center'>Create New Member</h1>
                            </div><br>
                            <label>NAME:</label>
                            <input type='text' name='name' class='form-control' value=''> <br>
                            <label>EMAIL:</label>
                            <input type='text' name='email' class='form-control' value=''> <br>
                            <label>PHONE:</label>
                            <input type='text' name='phone' class='form-control' value=''> <br>
                            <label>MEMBERSHIP:</label>
                            <select name='membership' class='form-control'>
                                {$options}
                            </select><br>
                            <label> JOIN DATE: </label>
                            <input type='date' name='join' class='form-control'> <br>
                            <button class='btn btn-success' type='submit' name='submit'>Submit</button><br>
                            <a class='btn btn-info' href='index.php'>Cancel</a><br>
                        </div>
                    </form>
                </div>";

        $tpl = new Template("templates/form.html");
        $tpl->replace("DATA_FORM", $form);
        $tpl->replace("DATA_NAVBAR", $navbar);
        $tpl->write();
    }

    public function render_edit($data, $memberships){ 
        $navbar = ' <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Member</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="membership.php">Membership</a>
                    </li>
        ';
        $options = "";
        foreach($memberships as $membership){
            $selected = ($membership['nama'] == $data['nama']) ? 'selected' : '';
            $options .= "<option value='{$membership['id_membership']}' $selected>{$membership['nama']}</option>";
        }
        $form = "<div class='col-lg-6 m-auto'>
            <form method='post' action='index.php'>
                <input type='hidden' name='action' value='edit'>
                <input type='hidden' name='id' value='{$data['id_member']}' class='form-control'> <br>
                        <br><br>
                        <div class='card'>
                            <div class='card-header bg-warning'>
                                <h1 class='text-white text-center'>Edit Member</h1>
                            </div><br>
                            <label>NAME:</label>
                            <input type='text' name='name' class='form-control' value='{$data['name']}'> <br>
                            <label>EMAIL:</label>
                            <input type='text' name='email' class='form-control' value='{$data['email']}'> <br>
                            <label>PHONE:</label>
                            <input type='text' name='phone' class='form-control' value='{$data['phone']}'> <br>
                            <label>MEMBERSHIP:</label>
                            <select name='membership' class='form-control'>
                                {$options}
                            </select><br>
                            <label> JOIN DATE: </label>
                            <input type='date' name='join' class='form-control' value='{$data['join']}'> <br>
                            <button class='btn btn-success' type='submit' name='submit'>Submit</button><br>
                            <a class='btn btn-info' href='index.php'>Cancel</a><br>
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
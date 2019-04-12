<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User</title>
</head>

<body>
    <?php

 


    if (isset($user_data)) {
        $row = $user_data;
        ?>
        <form method="post" action="<?php echo base_url() . ('index.php/user/update_data'); ?>">
            <table>
                <input type="hidden" name="user_id" value="<?php if (isset($row->user_id)  && !empty($row->user_id))  echo $row->user_id;  ?>">
                <tr>
                    <td>Name</td>
                    <td>:</td>
                    <td><input type="text" name="name" value="<?php if (isset($row->name)  && !empty($row->name))  echo $row->name;  ?>"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><input type="email" name="email" value="<?php if (isset($row->email)  && !empty($row->email))  echo $row->email;  ?>"></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>:</td>
                    <td><input type="radio" name="gender" <?= $row->gender == "Male" ? "checked" : "" ?> value="Male"><label>Male</label>
                        <input type="radio" name="gender" <?= $row->gender == "Female" ? "checked" : "" ?> value="Female">
                        <label>Female</label>
                    </td>
                </tr>
                <tr>
                    <td>Birth Date</td>
                    <td>:</td>
                    <td><input type="date" name="birthdate" value="<?php if (isset($row->birthdate)  && !empty($row->birthdate)) echo $row->birthdate;  ?>"></td>
                </tr>
                <tr>
                    <td>Mobile No</td>
                    <td>:</td>
                    <td><input type="text" name="mobileno" value="<?php if (isset($row->mobileno)  && !empty($row->mobileno))  echo $row->mobileno;  ?>"></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td>:</td>
                    <td><textarea rows="4" cols="50" name="address"><?php if (isset($row->address)  && !empty($row->address)) echo $row->address;  ?></textarea></td>
                </tr>
                <tr>
                    <td>State</td>
                    <td>:</td>
                    <td><select name="state">
                            <option value="">Select</option>
                            <option value="gujarat" <?= $row->state == 'gujarat' ? ' selected="selected"' : ''; ?>>Gujarat</option>
                            <option value="mp" <?= $row->state == 'mp' ? ' selected="selected"' : ''; ?>>Mp</option>
                            <option value="panjab" <?= $row->state == 'panjab' ? ' selected="selected"' : ''; ?>>Panjab</option>
                            <option value="kerela" <?= $row->state == 'kerela' ? ' selected="selected"' : ''; ?>>Kerela</option>
                        </select></td>
                </tr>

            <?php
        } else {  ?>
                <form method="post" action="<?php echo base_url() . ('index.php/user/insert_data'); ?>">
                    <table>
                        <tr>
                            <td>Name</td>
                            <td>:</td>
                            <td><input type="text" name="name"></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td><input type="email" name="email"></td>
                        </tr>
                        <tr>
                            <td>Gender</td>
                            <td>:</td>
                            <td><input type="radio" name="gender" value="Male"><label>Male</label>
                                <input type="radio" name="gender" value="Female"> <label>Female</label>
                            </td>
                        </tr>
                        <tr>
                            <td>Birth Date</td>
                            <td>:</td>
                            <td><input type="date" name="birthdate"></td>
                        </tr>
                        <tr>
                            <td>Mobile No</td>
                            <td>:</td>
                            <td><input type="text" name="mobileno"></td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td>:</td>
                            <td><textarea rows="4" cols="50" name="address"></textarea></td>
                        </tr>
                        <tr>
                            <td>State</td>
                            <td>:</td>
                            <td><select name="state">
                                    <option value="">Select</option>
                                    <option value="gujarat">Gujarat</option>
                                    <option value="mp">Mp</option>
                                    <option value="panjab">Panjab</option>
                                    <option value="kerela">Kerela</option>
                                </select></td>
                        </tr>
                    </table>
                <?php
            }
            ?>

                <br><br>
                <tr>
                    <td>
                        <input type="submit" name=" " value="Submit">
                    </td>
                </tr>
        </table>
        <br>
        <table border="1">
            <tr>
                <th>user_id</th>
                <th>name</th>
                <th>email</th>
                <th>gender</th>
                <th>birthdate</th>
                <th>mobileno</th>
                <th>address</th>
                <th>state</th>
                <th>change</th>
            </tr>
            <?php
            if ($fetch_data->num_rows() > 0) {
                foreach ($fetch_data->result() as $row) {
                    ?>
                    <tr>
                        <td><?php echo $row->user_id; ?></td>
                        <td><?php echo $row->name; ?></td>
                        <td><?php echo $row->email; ?></td>
                        <td><?php echo $row->gender; ?></td>
                        <td><?php echo $row->birthdate; ?></td>
                        <td><?php echo $row->mobileno; ?></td>
                        <td><?php echo $row->address; ?></td>
                        <td><?php echo $row->state; ?></td>
                        <td><a href="<?php echo base_url() . 'index.php/user/delete?id=' . $row->user_id; ?>">Delete</a>
                            <a href='<?php echo base_url() . 'index.php/user/update?id=' . $row->user_id; ?>'>Update</a>
                        </td>
                    </tr>
                <?php
            }
        }
        ?>
        </table>
    </form>
</body>

</html>
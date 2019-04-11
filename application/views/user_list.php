<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User</title>
</head>

<body>
    <form method="post"  action="<?php echo site_url('user/insert_data'); ?>">
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
            <br><br>
            <tr>
                <td>
                <input type="submit" name=" " value="Submit">
                </td>
            </tr>
        </table>
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
       if($fetch_data->num_rows() > 0 ) {

        foreach($fetch_data-> result() as $row)
        {
            ?>
            <tr>
                <td><?php echo $row->user_id;?></td>
                <td><?php echo $row->name;?></td>
                <td><?php echo $row->email;?></td>
                <td><?php echo $row->gender;?></td>
                <td><?php echo $row->birthdate;?></td>
                <td><?php echo $row->mobileno;?></td>
                <td><?php echo $row->address;?></td>
                <td><?php echo $row->state;?></td>
                <td><a href='user/delete?id=<?php echo $row->user_id;?>'>Delete</a>
                    <a href="#" id="<?php echo $row->user_id;?>">Update</a>
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
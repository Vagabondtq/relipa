<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8">
    <title>Login - Register | Relipa Demo</title>
    <?php
        echo \App\Helper\Html::style('css/main.css');
        echo \App\Helper\Html::style('css/style.css');
    ?>
</head>
<body>

<div class="content">

    <table class="list-user table-border">
        <thead>
            <tr>
                <th>Username</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Full name</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($list as $k => $v) :?>
        <tr>
            <td>
                <?php echo $v['username'];?>
            </td>
            <td>
                <?php echo $v['email'];?>
            </td>
            <td>
                <?php echo $v['phone'];?>
            </td>
            <td>
                <?php echo $v['address'];?>
            </td>
            <td>
                <?php echo $v['first_name']. ' '. $v['last_name'];?>
            </td>
        </tr>
        <?php
            endforeach;
        ?>
        </tbody>
    </table>
    <div class="list-user">

    </div>
</div>
</body>
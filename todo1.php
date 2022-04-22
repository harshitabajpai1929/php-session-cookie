<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo list</title>
    <link href="todostyle.css" type="text/css" rel="stylesheet">
</head>
<body>
    <?php
    $_input=$_GET['input'];
    
    ?>
          <form action="" method="GET">
          <div class="container">
            <h2>TODO LIST</h2>
            <h3>Add Item</h3>
            <p>
                <input id="new-task" name="input"  type="text"><button>Add</button>
            </p>
    
            <h3>Todo</h3>
            <ul id="incomplete-tasks">
                <li><input type="checkbox"><label>Pay Bills</label><input type="text"><button class="edit">Edit</button><button class="delete">Delete</button></li>
                <li><input type="checkbox"><label>Go Shopping</label><input type="text" value="Go Shopping"><button class="edit">Edit</button><button class="delete">Delete</button></li>
            </ul>
    
            <h3>Completed</h3>
            <ul id="completed-tasks">
                <li><input type="checkbox" checked><label>See the Doctor</label><input type="text"><button class="edit">Edit</button><button class="delete">Delete</button></li>
            </ul>
        </div>
          </form>
</body>
</html>
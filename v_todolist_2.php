<?php 
require 'db_conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	
	  <link rel="stylesheet" href="../calendar/style.css">
    <link rel="stylesheet" href="sticky_note/menu.css"

   <title></title>
    
    <style>
	body{
    background-image: url('assets/img/bg/bg01.jpg');
  
  /* Center and scale the image nicely */
  background-position: center;
    background-size: cover;
    background-attachment: fixed;
    background-repeat: no-repeat;
    -webkit-animation: color 5s ease-in  0s infinite alternate running;
    -moz-animation: color 5s linear  0s infinite alternate running;
    animation: color 5s linear  0s infinite alternate running;
}
.gambar{
  
    filter: blur(8px);
  -webkit-filter: blur(8px);
  
  /* Full height */
  height: 100%; 
}
   h1{
     color: black;
     border-color:#fff
     font-family: Impact, Charcoal, sans-serif;
   }
  
  * {
    padding: 0px;
    margin: 0px;
    box-sizing: border-box;
  }
  
  .main-section {
    background: transparent;
    max-width: 500px;
    width: 90%;
    height: 500px;
    margin: 30px auto;
    border-radius: 10px;
  }
  
  .add-section {
    width: 100%;
    background: #fff;
    margin: 0px auto;
    padding: 10px;
    border-radius: 5px;
  }
  
  .add-section input {
    display: block;
    width: 95%;
    height: 40px;
    margin: 10px auto;
    border: 2px solid #ccc;
    font-size: 16px;
    border-radius: 5px;
    padding: 0px 5px;
  }
  
  .add-section button {
    display: block;
    width: 95%;
    height: 40px;
    margin: 0px auto;
    border: none;
    outline: none;
    background: #0088FF;
    color: #fff;
    font-family: sans-serif;
    font-size: 16px;
    border-radius: 5px;
    cursor: pointer;
  }
  
  .add-section button:hover {
    box-shadow: 0 2px 2px 0 #ccc, 0 2px 3px 0 #ccc;
    opacity: 0.7;
  }
  
  .add-section button span {
    border: 1px solid #fff;
    border-radius: 50%;
    display: inline-block;
    width: 18px;
    height: 18px;
  }
  
  #errorMes {
    display: block;
    background: #f2dede;
    width: 95%;
    margin: 0px auto;
    color: rgb(139, 19, 19);
    padding: 10px;
    height: 35px;
  }
  
  .show-todo-section {
    width: 100%;
    background: #fff;
    margin: 30px auto;
    padding: 10px;
    border-radius: 5px;
  }
  
  .todo-item {
    width: 95%;
    margin: 10px auto;
    padding: 20px 10px;
    box-shadow: 0 4px 8px 0 #ccc, 0 6px 20px 0 #ccc;
    border-radius: 5px;
  }
  
  .todo-item h2 {
    display: inline-block;
    padding: 5px 0px;
    font-size: 17px;
    font-family: sans-serif;
    color: #555;
  }
  
  .todo-item small {
    display: block;
    width: 100%;
    padding: 5px 0px;
    color: #888;
    padding-left: 30px;
    font-size: 14px;
    font-family: sans-serif;
  }
  
  .remove-to-do {
    display: block;
    float: right;
    width: 20px;
    height: 20px;
    font-family: sans-serif;
    color: rgb(139, 97, 93);
    text-decoration: none;
    text-align: right;
    padding: 0px 5px 8px 0px;
    border-radius: 50%;
    transition: background 1s;
    cursor: pointer;
  }
  
  .remove-to-do:hover {
    background: rgb(139, 97, 93);
    color: #fff;
  }
  
  .checked {
    color: #999 !important;
    text-decoration: line-through;
  }
  
  .todo-item input {
    margin: 0px 5px;
  }
  
  .empty {
    font-family: sans-serif;
    font-size: 16px;
    text-align: center;
    color: #cccc;
  }
  
  </style>
</head>
<body>
<title>Todolist v1
</title>
<!-- navbar -->
<!-- <nav class="navbar navbar-expand-lg navbar-fixed-top navbar-light bg-light">

<a class="navbar-brand" href="#">
  <img src="images/logo.png" width="30" height="30" alt="logo towis">
  Towis
</a>

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">

  <ul class="navbar-nav ml-auto">
    <li class="nav-item active">
      <a class="nav-link" href="home_user">Home <span class="sr-only">(current)</span></a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="todolist.php">Todolist</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="calendar">Calendar</a>
    </li>
    
    <li class="nav-item">
      <a class="nav-link" href="Stickynote/">Sticky note</a>
    </li>
  </ul>

</div>

</nav> -->

<!-- baruu -->

<div class="dropdown">
  <button class="dropbtn">Menu</button>
  <div class="dropdown-content">
    <a href="../towisfix/home_user/v_homeuser.php">Home</a>
    <a href="v_todolist.php">Todolist</a>
    <a href="calendar/v_calendar.php">Calendar</a>
    <a href="sticky_note/v_stickynote.php">Stickynote</a>
  </div>
</div>

<!-- end navbar -->
<br>
    <h1><center>Todolist TOWIS</center></h1>

    <div class="main-section">
       <div class="add-section">
          <form action="app/add.php" method="POST" autocomplete="off">
             <?php if(isset($_GET['mess']) && $_GET['mess'] == 'error'){ ?>
                <input type="text" 
                     name="title" 
                     style="border-color: #ff6666"
                     placeholder="This field is required" />
              <button type="submit" class="btn btn-secondary">Add &nbsp; <span>&#43;</span></button>

             <?php }else{ ?>
              <input type="text" 
                     name="title" 
                     placeholder="What do you need to do?" />
              <button type="submit" class="btn btn-secondary">Add &nbsp; <span>&#43;</span></button>
             <?php } ?>
          </form>
       </div>
       <?php 
          $todos = $conn->query("SELECT * FROM todos ORDER BY id DESC");
       ?>
       <div class="show-todo-section">
            <?php if($todos->rowCount() <= 0){ ?>
                <div class="todo-item">
                    <div class="empty">
                        <img src="img/f.png" width="100%" />
                        <img src="img/Ellipsis.gif" width="80px">
                    </div>
                </div>
            <?php } ?>

            <?php while($todo = $todos->fetch(PDO::FETCH_ASSOC)) { ?>
                <div class="todo-item">
                    <span id="<?php echo $todo['id']; ?>"
                          class="remove-to-do">x</span>
                    <?php if($todo['checked']){ ?> 
                        <input type="checkbox"
                               class="check-box"
                               data-todo-id ="<?php echo $todo['id']; ?>"
                               checked />
                        <h2 class="checked"><?php echo $todo['title'] ?></h2>
                    <?php }else { ?>
                        <input type="checkbox"
                               data-todo-id ="<?php echo $todo['id']; ?>"
                               class="check-box" />
                        <h2><?php echo $todo['title'] ?></h2>
                    <?php } ?>
                    <br>
                    <small>created: <?php echo $todo['date_time'] ?></small> 
                </div>
            <?php } ?>
       </div>
    </div>


    <script src="js/jquery-3.2.1.min.js"></script>

    <script>
        $(document).ready(function(){
            $('.remove-to-do').click(function(){
                const id = $(this).attr('id');
                
                $.post("app/remove.php", 
                      {
                          id: id
                      },
                      (data)  => {
                         if(data){
                             $(this).parent().hide(600);
                         }
                      }
                );
            });

            $(".check-box").click(function(e){
                const id = $(this).attr('data-todo-id');
                
                $.post('app/check.php', 
                      {
                          id: id
                      },
                      (data) => {
                          if(data != 'error'){
                              const h2 = $(this).next();
                              if(data === '1'){
                                  h2.removeClass('checked');
                              }else {
                                  h2.addClass('checked');
                              }
                          }
                      }
                );
            });
        });
    </script>
    <button onclick="window.location.href='../towisfix/mood/v_moodtemperatur.php'">Mood Temperatur</button>
</body>
</html>
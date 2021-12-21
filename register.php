<?php
// $host = "localhost";
// $port = "5432";
// $dbname = "test";
// $user = "postgres";
// $password = "postgres"; 
// $connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} ";
// $dbconn = pg_connect($connection_string);
// if(isset($_POST['submit'])&&!empty($_POST['submit'])){
    
//       $sql = "insert into public.user(name,nim,password)values('".$_POST['name']."','".$_POST['nim']."','".md5($_POST['pwd'])."')";
//     $ret = pg_query($dbconn, $sql);
//     if($ret){
        
//             echo "Data saved Successfully";
//     }else{
        
//             echo "Something Went Wrong";
//     }
// }

// include("config.php");
// if(isset($_POST['submit'])&&!empty($_POST['submit'])){
    
//       $sql = "insert into public.user(name,email,password)values('".$_POST['name']."','".$_POST['email']."','".md5($_POST['pwd'])."')";
//     $ret = pg_query($sql);
//     if($ret){
            
//         header('Location: login.php');
//     }else{
        
//             echo "Soething Went Wrong";
//     }
// }
?>
<?php require_once "template/headContent.php" ?>
<div class="container register">
  <form class="left" method="post">
    <div>
      <h1>Selamat Datang di <span>Tutor4u</span></h1>
      <hr>
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" requuired>
      </div>
      
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
      
      <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
      </div>
      
      <input type="submit" name="submit" class="btn btn-primary" value="Submit">
            <p>Already have an account? <a href="login.php">Login here</a>.</p> 
    </div>
  </form>
  <div class="right"></div>
</div>
<?php require_once "template/footer.php" ?>

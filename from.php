<?php
if(!isset($_SESSION['data'])) {
  $_SESSION['data'] = [];
}


if (isset($_POST['frist']) && isset($_POST['last']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['texts']))

  if ($_POST['frist'] != '' && $_POST['last'] != '' && $_POST['email'] != '' && $_POST['password'] != '' && $_POST['texts'] != '') {
   
    if (isset($_FILES['vedio'])) {

    
      if ($_FILES['vedio']['size'] != 0) {
        $file = $_FILES['vedio'];
        $type = explode('/', $file['type'])[1];
        $vedio = 'videos/' . md5($file['name']) . '.' . $type;
        $types = ['mp4','mpeg4'];
        // echo $name;
    
    
        if (in_array($type, $types)) {
          move_uploaded_file($file['tmp_name'], $vedio);
         
        }
      }

    }




    if (isset($_FILES['rasm'])) {


      print_r($_FILES['rasm']);
    
      if ($_FILES['rasm']['size'] != 0) {
        $file = $_FILES['rasm'];
        $type = explode('/', $file['type'])[1];
        $name = 'imegas/' . md5($file['name']) . '.' . $type;
        $types = ['jpg', 'png', 'gif', 'jpeg'];
        // echo $name;
    
    
        if (in_array($type, $types)) {
          move_uploaded_file($file['tmp_name'], $name);
          $_SESSION['data'][] = [
            'frist' => $_POST['frist'],
            'last' => $_POST['last'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],
            'texts' => $_POST['texts'],
            'rasm' => $name,
            'vedio' =>$vedio
          ]; 
          header('Location:index.php');
        }
      }

    }

   
    
    
  }

?>




<form action="index.php" method="post" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label"> address</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Frist" name="frist">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label"> address</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="last" name="last">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label"> address</label>
    <input type="" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email">
  </div>
  <div class="mb-3">
    <div>
     <input type="file" name="rasm">
    </div>
  </div>
  <div class="mb-3">
    <div>
     <input type="file" name="vedio">
    </div>
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">password</label>
    <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="password" name="password">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="texts"></textarea>
    <button type="Submit" class="btn btn-danger">Submit</button>
  </div>
 
</form>
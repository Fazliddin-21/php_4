<?php

if (!isset($_SESSION['data'])) {
  $_SESSION['data'] = [];
}


if (isset($_POST['frist']) && isset($_POST['last']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['texts']))

  if ($_POST['frist'] != '' && $_POST['last'] != '' && $_POST['email'] != '' && $_POST['password'] != '' && $_POST['texts'] != '') {

    if (isset($_FILES['vedio'])) {


      if ($_FILES['vedio']['size'] != 0) {
        $file = $_FILES['vedio'];
        $type = explode('/', $file['type'])[1];
        $vedio = 'videos/' . md5($file['name']) . '.' . $type;
        $types = ['mp4', 'mpeg4'];
        // echo $name;


        if (in_array($type, $types)) {
          move_uploaded_file($file['tmp_name'], $vedio);
        }
      }
    } else {
      echo 'Video formati notogri: ' . $type;
    }

    if (isset($_FILES['audio'])) {

      if ($_FILES['audio']['size'] != 0) {
        $file = $_FILES['audio'];
        $type = explode('/', $file['type'])[1];
        $audio = 'audios/' . md5($file['name']) . '.' . $type;
        $types = ['mp3', 'aac', 'mpeg'];

        if (in_array($type, $types)) {

          move_uploaded_file($file['tmp_name'], $audio);
        } else {
          echo 'Audio formati notogri: ' . $type;
        }
      }
    }




    if (isset($_FILES['rasm'])) {


      // print_r($_FILES['rasm']);

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
            'vedio' => $vedio,
            'audio' => $audio
          ];
          header('Location:index.php');
        }
      } else {
        echo 'Rasm formati notogri: ' . $type;
      }
    }
  }

?>




<form action="index.php" method="post" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">First name</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Frist" name="frist">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Last name</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="last" name="last">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Country</label>
    <input type="text" class="form-control " placeholder="Uzbekistan" name="email">
  </div>

  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Province</label>
    <input type="text" class="form-control" placeholder="password" name="password">
  </div>


  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="texts" placeholder="Textarea"></textarea>
  </div>

  <div class="mb-3 " style="display: flex;">
    <div>
      <input type="file" name="rasm" class="file-input rasm-input">
    </div>

    <div>
      <input type="file" name="vedio" class="file-input video-input">
    </div>

    <div>
      <input type="file" name="audio" class="file-input audio-input">
    </div>

  </div>



  <button type="Submit" class="mt-3 btn btn-danger">Submit</button>


</form>
<tbody>
  <?php
  function ImageUrl($img)
  {
      $host = $_SERVER['HTTP_HOST'];
      $port = $_SERVER['SERVER_PORT'];
      $path = dirname($_SERVER['PHP_SELF']);
  
      $result = 'http://'.$host . ':' . $port .$path  . '/' . $img;
      return $result;
  }
  
  ?>
  <?php
  foreach ($_SESSION['data'] as $key => $value) :
  ?>
    <tr>]
    <th scope="row"><?= $key ?></th>
      <td>
        <div class="img" style="background-image: url( <?= ImageUrl($value['rasm']) ?> );"></div>
      </td>
      <td>
        <video src="<?= ImageUrl($value['vedio'])?> " width="100px" controls></video>
      </td>
      
      <th><?= $value['frist'] ?></th>
      <th><?= $value['last'] ?></th>
      <th><?= $value['email'] ?></th>
      <th><?= $value['password'] ?></th>
      <th><?= $value['texts'] ?></th>
    </tr>

  <?php
  endforeach;
  ?>
</tbody>
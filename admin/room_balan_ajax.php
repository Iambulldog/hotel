<?php session_start();

if(!isset($_SESSION['UserID']))
{
  echo "<script> alert('Please Login!!');window.location.href='index.php';</script>";
  exit();
}?>
<?php include_once( "../connectdb.php" );error_reporting(E_ALL & ~E_NOTICE);?>
<table class="table table-striped table-bordered table-hover">
  <thead>
    <tr>
      <th>ชื่อห้อง</th>
      <th>จำนวนห้องทั้งหมด</th>
      <th>จำนวนห้องที่เหลือของวันที่</th>
      <th>เลือกตัดห้อง</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $checkin = $_REQUEST['checkin'];
    $checkout = $_REQUEST['checkout'];
    $id_room = $_REQUEST['idroom'];
    
    $sql = ( "SELECT * FROM room " );
    $res = mysqli_query( $con, $sql );
    
    while($r = mysqli_fetch_assoc( $res )){
      $id_room = $r['ID_room'];
      $sqln ="SELECT *, SUM(num_room) AS sumroom FROM booking WHERE STATUS <= 2 AND( ( checkin BETWEEN '$checkin 12:01:00' AND '$checkout 12:00:00' ) OR( checkout BETWEEN '$checkin 12:01:00' AND '$checkout 12:00:00' ) OR( '$checkin 12:01:00' BETWEEN checkin AND checkout ) OR( '$checkout 12:00:00' BETWEEN checkin AND checkout ) ) AND booking.ID_room = '$id_room'";
      $sqlcount = mysqli_query($con,$sqln);
      
      $resu = mysqli_fetch_array($sqlcount);
      $sqlnumrow = mysqli_num_rows($sqlcount);
      
      $tt = $r[ 'total_room' ] -$resu['sumroom']; ?>
      <tr>
        <td><?php echo $r['name_room_th'];?></td>
        <td><?php echo $r['total_room'];?></td>
        <td><?php echo $tt;?></td>
        <td><?php if($tt==0){?>
         <button type="button" class="btn btn-info" disabled>ตัดห้อง</button>
       <?php }else{?>
         <a type="button" class="btn btn-primary"  onClick="fn('<?php echo $id_room?>','<?php echo $checkin?>','<?php echo $checkout?>')" data-toggle="modal" data-target="#exampleModal">ตัดห้อง</a>
       <?php }
     } ?>
   </td>
 </tr>


</tbody>
</table>
<!-- Modal -->
<form action="lock_room.php" method="post">
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">ควบคุมห้องพัก</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <input name="idroom" id="idroom" hidden>
          <input name="checkin" id="checkin1" hidden>
          <input name="checkout" id="checkout1" hidden>
          <div class="form-group">
            <label for="sel1">เลือกจำนวนห้อง ที่จะตัด:</label>
            <select class="form-control" name="num_room" id="num_room" required>
              <option value="1">1  ห้อง</option>
              <option value="2">2  ห้อง</</option>
              <option value="3">3  ห้อง</</option>
              <option value="4">4  ห้อง</</option>
              <option value="5">5  ห้อง</</option>
              <option value="6">6  ห้อง</</option>
              
              
            </select>
          </div>
          
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
</form>






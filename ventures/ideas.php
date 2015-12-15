<?php 
  include_once('header.php');
  $query = "SELECT student_user.id,student_user.username,newideas.id,newideas.u_id,newideas.title,newideas.description,newideas.upload,newideas.area,newideas.create_time FROM student_user INNER JOIN newideas ON student_user.id=newideas.u_id";
    $res = mysqli_query($con, $query);
?>
<div class="container" style="margin-top:80px;">
<?php     while($row = mysqli_fetch_assoc($res)){
 ?>
  <div class="row">
    <div class="col-lg-12">
      <h3><?php echo $row['username']."'s team"; ?></h3>
      <div class="table-responsive">
            <table class="table table-striped" id="ideas-table">
                <thead>
                    <tr>
                        <th>Upload Date</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Area to target</th>
                        <th>Executive Summary</th>
                    </tr>
                </thead>
                <tbody id="ideas_tbody">
              <?php 
                  if(isset($row['title']))
                  echo "<tr>
                    <td>".$row['create_time']."</td>
                    <td>".$row['title']."</td>
                    <td><div style='width:100px;text-overflow:ellipsis;
                    white-space:nowrap;overflow:hidden;'>".$row['description']."</div></td>
                    <td>".$row['area']."</td>
                    <td><a href='../students/uploads/".$row['upload']."'>".$row['upload']."</a></td>
                    <td><a href='more.php?idea_number=".$row['id']."' class='btn btn-default'>view more</a></td>
                  </tr>";
                

               ?>
                </tbody>
            </table>
    </div>
  </div>
</div>
<?php } ?>
</div>
<div class="col-sm-12">
  <div class="card">
    <div class="card-header align-items-center">
   <div class="card-card-title font-weight-bold "> All Guests</div>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table   ">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Image</th>
              <th>Option</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <?php
          $query = 'SELECT * FROM guests';
          $select_posts = query($query);
          $srn = 0;
          while ($row = fetch_array($select_posts)) {
              $p_id = $row['u_id'];

              $p_name = $row['u_name'];

              $p_image = $row['u_image'];

              $p_notes = $row['u_notes'];

              $srn++; ?>

              <th class="align-middle"  scope="row"><?php echo $srn; ?></th>
              <td class="align-middle"> <?php  echo $p_name; ?> </td>


              <td class="align-middle"> <img src="../assets/img/guests/<?php echo $p_image; ?> "
                  style="width: 100px; height: auto;" alt=""> </td>



              <td class="align-middle text-center">
                <a onclick="return confirm('Are you sure to remove this guest?')"
                  class=" mb-1 btn text-danger" href="guests.php?delete=<?php echo $p_id; ?>" role="button"> <i
                    class="fa fa-trash    "></i>
                </a>
              </td>
            </tr>
            <?php } ?>

          </tbody>
        </table>
        <?php guest_delete();  ?>
      </div>
    </div>
  </div>

</div>

<div class="col-sm-12" >
<div class="d-flex justify-content-end mb-2"><a href="users.php?source=add-admin" class="btn btn-primary float-right">Add
      Admin</a></div>
             <div class="card" >
               <div class="card-header">
                 <h6>All Admins</h6>
               </div>
               <div class="card-body">
               <div class="table-responsive">
                    <table class="table table-bordered ">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Option</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                        <?php
                          $query = 'SELECT * FROM users';
                          $select_users = query($query);
                          $srn = 0;
                          while ($row = fetch_array($select_users)) {
                              $u_id = $row['user_id'];

                              $srn++; ?>

                          <th scope="row"><?php echo $srn; ?></th>
                          <td> <?php echo $row['u_name']; ?> </td>
                          <td> <?php echo $row['u_email']; ?> </td>
                          <td class="text-center" >
                        <a class=" mb-1 btn  text-warning" href="users.php?source=edit-admin&edit=<?php echo $u_id; ?>"
                          role="button"><i class="fa fa-edit"></i>
                        </a>
                        <a onclick="return confirm('Are you sure to remove this categories ?')"
                          class=" mb-1 btn text-danger" href="users.php?delete=<?php echo $u_id; ?>"
                          role="button"> <i class="fa fa-trash"></i>
                        </a>
                      </td>
                        </tr>
                          <?php } ?>

                      </tbody>
                    </table>
                    <?php u_delete();  ?>
                  </div>
          </div>
               </div>
             </div>

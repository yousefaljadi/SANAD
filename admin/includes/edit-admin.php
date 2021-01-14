<div class="col-sm-6" >
             <div class="card" >
               <div class="card-header">
                 <h6>Edit Admin</h6>
               </div>
               <div class="card-body">
                 <?php
                  if (isset($_GET['edit'])) {
                    $user_id = $_GET['edit'];
                    }
                    $sql = " SELECT * FROM users WHERE user_id = '$user_id' ";
                    $execute = query($sql);

                    while ($row = fetch_array($execute)) {
                      $u_name = $row['u_name'];
                      $u_email = $row['u_email'];


                    }


                 ?>
                 <form action="" method="POST" >
                   <?php update_admin(); ?>
                   <div class="form-group">
                     <label for="name">Name</label>
                     <input type="text" name="name" value= "<?php echo $u_name; ?>" id="name" class="form-control" placeholder="Name" required >

                   </div>
                   <div class="form-group">
                     <label for="email">Email</label>
                     <input type="Email" name="email" value="<?php echo $u_email; ?>"   id="email" class="form-control" placeholder="Email" required >
                     <small id="helpId" class="text-muted">Email Shoud be unique</small>
                   </div>
                   <div class="form-group">
                     <label for="password">Password</label>
                     <input type="password" name="password" id="password" class="form-control" placeholder="Password" >
                   </div>
                   <!-- <div class="form-group">
                     <label for="c-password">Confirm Password</label>
                     <input type="password" name="c-password" id="c-password" class="form-control" placeholder="Confirm Password" required>
                   </div> -->
                   <div class="form-group">
                    <button type="submit" name="update-admin" class="btn btn-primary">Update  Now</button>
                   </div>
                 </form>
               </div>
             </div>
           </div>

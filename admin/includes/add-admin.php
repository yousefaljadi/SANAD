<div class="col-sm-6" >
             <div class="card" >
               <div class="card-header">
                 <h6>Add New Admin</h6>
               </div>
               <div class="card-body">
                 <form action="" method="POST" >
                   <?php add_user(); ?>
                   <div class="form-group">
                     <label for="name">Name</label>
                     <input type="text" name="name" id="name" class="form-control" placeholder="Name" required >

                   </div>
                   <div class="form-group">
                     <label for="email">Email</label>
                     <input type="Email" name="email"   id="email" class="form-control" placeholder="Email" required >
                     <small id="helpId" class="text-muted">Email Shoud be unique</small>
                   </div>
                   <div class="form-group">
                     <label for="password">Password</label>
                     <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                   </div>
                   <div class="form-group">
                     <label for="c-password">Confirm Password</label>
                     <input type="password" name="c-password" id="c-password" class="form-control" placeholder="Confirm Password" required>
                   </div>
                   <div class="form-group">
                    <button type="submit" name="add-admin" class="btn btn-primary">Add Now</button>
                   </div>
                 </form>
               </div>
             </div>
           </div>

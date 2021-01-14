<div class="col-sm-12">
  <?php
  $post_id_from_url = '';
  if (isset($_GET['edit'])) {
    $post_id_from_url  = $_GET['edit'];

    $query = "SELECT * FROM posts WHERE p_id  = '$post_id_from_url' ";

    $select_posts = query($query);

    while ($row = fetch_array($select_posts)) {
      $post_id = $row['p_id'];


      $post_slug = $row['p_slug'];

      $post_date = $row['p_date'];

      $post_title = $row['p_title'];

      $post_con = $row['p_des'];
      $post_con2 = $row['p_des_2'];

      $image1 = $row['p_img'];
      $image2 = $row['p_img_2'];


    } // end of while



  } // end of if iiset



  ?>

  <div class="card">
    <div class="card-header">
      <h6 class="admin_main_page_title">Update Post </h6>
    </div>
    <div class="card-body">
      <?php  update_post(); ?>

      <form method="POST" action="" enctype="multipart/form-data">
        <div class="form-group">
          <label for="post_title">Post Title</label>
          <input type="text" name="post_title" id="post_title" class="form-control" value="<?php echo $post_title; ?>" placeholder="" aria-describedby="helpId">
        </div>




        <div class="form-group">
          <label for="post_url">Post Url</label>
          <input type="text" name="post_url" id="post_url" class="form-control" value="<?php echo $post_slug; ?>" placeholder="" aria-describedby="helpId">
        </div>


        <script>
          const input = document.querySelector('#post_title');

          input.addEventListener('keyup', updateValue);

          function updateValue(e) {
            document.getElementById("post_url").value = convertToSlug(e.target.value);
          }

          function convertToSlug(Text) {
            return Text
              .toLowerCase()
              .replace(/ /g, '-')
              .replace(/[^\w-]+/g, '');
          }
        </script>






        <span class="d-block my-1"> Default Feature Image </span>
        <img src="../assets/img/blog/<?php echo $image1;  ?>  " style="width: 90px; height: 70px;" alt="">




        <div class="custom-file-container" data-upload-id="myUniqueUploadId">
          <label>Upload File
            <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">&times;</a></label>
          <label class="custom-file-container__custom-file">
            <input type="file"  name="post_image" class="custom-file-container__custom-file__custom-file-input" accept="*"
              aria-label="Choose File" />
            <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
            <span class="custom-file-container__custom-file__custom-file-control"></span>
          </label>
          <div class="custom-file-container__image-preview"></div>
        </div>



        <div class="form-group">
          <label for="post_content">Post Content</label>

          <textarea name="post_content" id="body" cols="30" rows="10"><?php echo $post_con; ?></textarea><!-- /# -->
        </div>


 <span class="d-block my-1"> Old Link Image </span>
        <img src="../assets/img/blog/<?php echo $image2;  ?>  " style="width: 90px; height: 70px;" alt="">

        <div class="form-group mt-3">
          <label for="post_img_2">Link Image as Button</label>
          <input type="file" name="post_image_2" id="post_img_2" class="form-control" aria-describedby="helpId">
          <small> This image will be link </small>
        </div>

        <div class="form-group">
          <label for="post_content_2">Post Content 2</label>
          <textarea name="post_content_2" id="body2" cols="30" rows="10"><?php echo $post_con2; ?></textarea>
        </div>
        <div id="editor"></div>


        <div class="form-group">
          <button name="update-post" type="submit" class="btn btn-primary" btn-lg">
            <i class="fa fa-floppy-o" aria-hidden="true"></i> Update Now
          </button>
        </div>

      </form>


    </div>
  </div>
</div>

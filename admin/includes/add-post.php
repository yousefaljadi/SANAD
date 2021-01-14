<div class="col-sm-11">
  <div class="card">
    <div class="card-header">
      <div class="card-card-title font-weight-bold "> Add Post</div>
    </div>
    <div class="card-body">

      <?php add_post(); ?>
      <form method="POST" action="" enctype="multipart/form-data">
        <div class="form-group">
          <label for="post_title">Post Title</label>
          <input type="text" name="post_title" id="post_title" class="form-control" value="" placeholder=""
            aria-describedby="helpId">
        </div>


        <div class="form-group">
          <label for="post_url">Post Url</label>
          <input type="text" name="post_url" id="post_url" class="form-control" value="" placeholder="" aria-describedby="helpId"
            readonly>
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



        <div class="custom-file-container" data-upload-id="myUniqueUploadId">
          <label>Upload File
            <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">&times;</a></label>
          <label class="custom-file-container__custom-file">
            <input type="file" name="post_image" class="custom-file-container__custom-file__custom-file-input" accept="*"
              aria-label="Choose File" />
            <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
            <span class="custom-file-container__custom-file__custom-file-control"></span>
          </label>
          <div class="custom-file-container__image-preview"></div>
        </div>


        <div class="form-group">
          <label for="post_content">Post Content</label>
          <textarea name="post_content" id="body" cols="30" rows="10"></textarea><!-- /# -->
        </div>
        <div id="editor"></div>

        <div class="form-group mt-3">
          <label for="post_img_2">Link Image as Button</label>
          <input type="file" name="post_image_2" id="post_img_2" class="form-control" aria-describedby="helpId">
          <small> This image will be link </small>
        </div>


        <div class="form-group">
          <label for="post_content_2">Post Content</label>
          <textarea name="post_content_2" id="body2" cols="30" rows="10"></textarea>
        </div>
        <div id="editor"></div>

        <div class="form-group">
          <button name="add-post" type="submit" class="btn btn-primary" btn-lg">Add Now</button>
        </div>

      </form>
    </div>
  </div>
</div>

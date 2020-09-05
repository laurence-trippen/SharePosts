<?php require APP_ROOT . '/views/include/header.php' ?>

  <a href="<?php echo URL_ROOT; ?>/posts" class="btn btn-light"><i class="fa fa-arrow-left"></i> Back</a>

  <div class="card card-body bg-ligh mt-5">
    <h2>Add Post</h2>
    <p>Creat a Post with this form</p>

    <form action="<?php echo URL_ROOT; ?>/posts/add" method="post">
      <div class="form-group">
        <label for="title">Title: <sup>*</sup></label>
        <input type="text" name="title" class="form-control form-control-lg <?php echo (!empty($data['title_error'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['title']; ?>">
        <span class="invalid-feedback"><?php echo $data['title_error']; ?></span>
      </div>
      
      <div class="form-group">
        <label for="body">Body: <sup>*</sup></label>
        <textarea name="body" class="form-control form-control-lg <?php echo (!empty($data['body_error'])) ? 'is-invalid' : ''; ?>"><?php echo $data['body'] ?></textarea>
        <span class="invalid-feedback"><?php echo $data['body_error']; ?></span>
      </div>
      <input type="submit" class="btn btn-success" value="Submit">
    </form>
  </div>

<?php require APP_ROOT . '/views/include/footer.php' ?>
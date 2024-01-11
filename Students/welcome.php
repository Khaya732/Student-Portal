<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
    <title>Document</title>
</head>
<style>
    .column{
      text-align: center;
    }
</style>
<body>
    <figure class="text-center" style="text-align: center;">
        <blockquote class="blockquote">
          <h1>Welcome to our student portal</h1>
        </blockquote>
        <figcaption class="blockquote-footer">
          For lectuer and <cite title="Source Title">student</cite>
        </figcaption>
      </figure>

      <div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div class="card">
      <img src="lecc.jpg" class="card-img-top1" alt="lecc">
      <div class="card-body">
        <br>
        <br>
        <h5 class="card-title">Lecturer</h5>
        <p class="card-text">If you are a lecturer click the LECTURER button below</p>
        <p class="card-text"><small class="text-body-secondary">Login details required</small></p>
        <div class="column"><a class="btn btn-outline-warning" href="lecturerlogin.php">LECTURER</a></div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="stu.jpg" class="card-img-top" alt="stu">
      <br>
      <div class="card-body">
        <h5 class="card-title">Student</h5>
        <p class="card-text">If you are a student click the STUDENT button below</p>
        <p class="card-text"><small class="text-body-secondary">Login details required</small></p>
        <div class="column"><a class="btn btn-outline-warning" href="newstudent.php">STUDENT</a></div>
      </div>
    </div>
  </div>

</body>
</html>
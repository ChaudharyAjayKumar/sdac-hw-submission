<?php
include 'db.php';

if($_SERVER['REQUEST_METHOD']==='POST'){
$pname=$_POST['pname'];
$desc=$_POST['desc'];
$status=$_POST['status'];
$sdate=$_POST['sdate'];
$edate=$_POST['edate'];
$sql=$con ->prepare('insert into project(pname,p_desc,status,s_date,e_date) values(?,?,?,?,?)');
$sql->bind_param('sssss',$pname,$desc,$status,$sdate,$edate);
if($sql ->execute()){
    echo "<script>alert(' inserted')</script>";
}
else{
    echo "<script>alert(' not inserted')</script>";
}
}


$result=$con ->query('select * from project');




?>
<!doctype html>
<html lang="en" data-bs-theme="light">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS v5.3.8 -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
      crossorigin="anonymous"
    />
  </head>

  <body>
    <header>
      <nav class="navbar navbar-expand-md navbar-light bg-light">
        <div class="container d-flex justify-content-between">
          <a class="navbar-brand" href="#">Hello ,<?=$_SESSION['task_id'] ?></a>
          <button
            class="navbar-toggler d-lg-none"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#collapsibleNavId"
            aria-controls="collapsibleNavId"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavId">
            <form class="d-flex my-2 my-lg-0" action="logout.php">
              <button
                class="btn btn-outline-success my-2 my-sm-0"
                type="submit"
              >
                Logout
              </button>
            </form>
          </div>
        </div>
      </nav>
    </header>
    <main>
    


      <div
        class="container col-6"
      >
       <div class="container  text-center rounded bodered shadow p-5">
        
        <h1 class="text-center">add data </h1>
                            <form action="" method="POST">
        

                              <div class="mb-3">
                                <label for="" class="form-label"> Product Name</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  name="pname"
                                  id=""
                                  aria-describedby="helpId"
                                  placeholder=""
                                />
                              </div>

                              <div class="mb-3">
                                <label for="" class="form-label">product descrition</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  name="desc"
                                  id=""
                                  aria-describedby="helpId"
                                  placeholder=""
                                />
                              </div>

                              <div class="mb-3">
                                <label for="" class="form-label">status</label>
                                <input
                                  type="textarea"
                                  class="form-control"
                                  name="status"
                                  id=""
                                  aria-describedby="helpId"
                                  placeholder=""
                                />
                              </div>

                              <div class="mb-3">
                                <label for="" class="form-label"
                                  >start date</label
                                >
                                <input
                                  type="date"
                                  class="form-control"
                                  name="sdate"
                                  id=""
                                  aria-describedby="helpId"
                                  placeholder=""
                                />
                              </div>

                               <div class="mb-3">
                                <label for="" class="form-label"
                                  >end date</label
                                >
                                <input
                                  type="date"
                                  class="form-control"
                                  name="edate"
                                  id=""
                                  aria-describedby="helpId"
                                  placeholder=""
                                />
                              </div>

                              <button type="submit" class="btn btn-primary">
                                Submit
                              </button>
                            </form>
                          </div>
      </div>
        <div class="container col-6">
        <div class="table-responsive-md">
          <h1 class="text-center">do crud operation</h1>
          <table class="table table-primary bodered shadow p-3">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">NAME</th>
                <th scope="col">DESC</th>
                <th scope="col">STATUS</th>
                <th scope="col">START DATE</th>
                <th scope="col">END DATE</th>
                <th scope="col" colspan="2">ACTION</th>
              </tr>
            </thead>
            <tbody>
              <?php while($row=$result -> fetch_assoc()){ ?>
              <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['pname'] ?></td>
                <td><?php echo $row['p_desc'] ?></td>
                <td><?php echo $row['status'] ?></td>
                <td><?php echo $row['s_date'] ?></td>
                <td><?php echo $row['e_date'] ?></td>
                <td><a href="edit.php?id=<?=$row['id']?>">edit</a></td>
                <td><a href="delete.php?id=<?=$row['id']?>">delte</a></td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </main>
    <footer>
      <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Bundle (includes Popper) -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
      crossorigin="anonymous"
    ></script>
  </body>
</html>


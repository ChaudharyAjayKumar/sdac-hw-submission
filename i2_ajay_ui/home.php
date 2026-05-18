<?php
include 'db.php';

if($_SERVER['REQUEST_METHOD']==='GET'){

  $result=$con -> query('select * from book');
    
}

if($_SERVER['REQUEST_METHOD']==='POST'){
  $bid=$_POST['bid'];
  $btitle=$_POST['btitle'];
  $aname=$_POST['aname'];
  $genre=$_POST['genre'];
  $copies=$_POST['copies'];
      $sql=$con -> prepare('insert into book values (?,?,?,?,?)');
      $sql ->bind_param('isssi',$bid,$btitle,$aname,$genre,$copies);


     if(empty($bid) && empty($btitle) && empty($aname) && empty($genre) && empty($copies)){
        echo "<script>alert('enter ')</script>";
     }      
      if ($sql -> execute()) {
       header('location:home.php');
      }
      else{
        echo 'invalid data';
      }

}




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


        <style>

         table   thead{
             background:linear-gradient(30deg,red,blue,green);
             animation: ani 5s ease infinite forwards;

           }

           @keyframes ani {
             0%,50%{
                background-position: 100%;
             }

             100%{
                background-position: 50%;
             }
           }
        </style>
    </head>

    <body>
        <header>
            <nav
                class="navbar navbar-expand-sm navbar-light bg-light"
            >
                <div class="container">
                    <a class="navbar-brand" href="#">hello,     <?php echo $_SESSION['uname'] ?></a>
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
                        <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" href="#" aria-current="page"
                                    >Home
                                    <span class="visually-hidden">(current)</span></a
                                >
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="add_book.php">add book</a>
                            </li>
                            
                        </ul>
                        <form class="d-flex my-2 my-lg-0" action="logout.php">
                           
                            <button
                                class="btn btn-outline-success my-2 my-sm-0"
                                type="submit"
                            >
                                logout
                            </button>

                             <button
                                class="btn btn-outline-success my-2 my-sm-0"
                                type="submit"
                            >
                                <a href="pdf.php">pdf </a>
                            </button>
                        </form>
                    </div>
                </div>
            </nav>
            
        </header>
        <main>
            <div
                class="container-md py-2"
            >
                <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                    <ol class="carousel-indicators">
                        <li
                            data-bs-target="#carouselId"
                            data-bs-slide-to="0"
                            class="active"
                            aria-current="true"
                            aria-label="First slide"
                        ></li>
                        <li
                            data-bs-target="#carouselId"
                            data-bs-slide-to="1"
                            aria-label="Second slide"
                        ></li>
                        <li
                            data-bs-target="#carouselId"
                            data-bs-slide-to="2"
                            aria-label="Third slide"
                        ></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img
                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRjde-XMr0Gx4-oItlCg9Pmthb5JLtNiQoy5A&s"
                                class="w-100 d-block"
                                alt="First slide"
                            />
                            <div class="carousel-caption d-inline d-md-block">
                                <h3>english</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id eligendi necessitatibus alias saepe harum iste cupiditate optio deleniti quaerat natus.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img
                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSNrlziT1evYh6RG2hi12ylcgu2s2AhNZhrrQ&s"
                                class="w-100 d-block"
                                alt="Second slide"
                            />
                            <div class="carousel-caption d-inline d-md-block">
                                <h3>hindi</h3>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum mollitia aliquam, dicta quaerat optio illo expedita dolores quibusdam debitis aperiam.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img
                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQwPVi3gedu1wqqV6c_sTqHGbYsT89-N5BaYw&s"
                                class="w-100 d-block"
                                alt="Third slide"
                            />
                            <div class="carousel-caption d-inline d-md-block">
                                <h3>marathi</h3>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt eligendi quae asperiores fugit vero, totam consequuntur esse quam? Esse, eveniet?

                                </p>
                            </div>
                        </div>
                    </div>
                    <button
                        class="carousel-control-prev"
                        type="button"
                        data-bs-target="#carouselId"
                        data-bs-slide="prev"
                    >
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button
                        class="carousel-control-next"
                        type="button"
                        data-bs-target="#carouselId"
                        data-bs-slide="next"
                    >
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                
            </div>

 <div
            class="container text-center py-4 rounded "
        >
        <h2> fill book detail </h2>
           <form action="" method="POST">
            <div class="mb-3">
                <label for="" class="form-label">book id</label>
                <input
                    type="text"
                    class="form-control"
                    name="bid"
                    id=""
                    aria-describedby="helpId"
                    placeholder=""
                />
                
            </div>
            <div class="mb-3">
                <label for="" class="form-label">book title</label>
                <input
                    type="text"
                    class="form-control"
                    name="btitle"
                    id=""
                    aria-describedby="helpId"
                    placeholder=""
                />
                
            </div>
            <div class="mb-3">
                <label for="" class="form-label">author name</label>
                <input
                    type="text"
                    class="form-control"
                    name="aname"
                    id=""
                    aria-describedby="helpId"
                    placeholder=""
                />
                
            </div>
            <div class="mb-3">
                <label for="" class="form-label">genre</label>
                <input
                    type="text"
                    class="form-control"
                    name="genre"
                    id=""
                    aria-describedby="helpId"
                    placeholder=""
                />
                
            </div>
            <div class="mb-3">
                <label for="" class="form-label">avaliable copies</label>
                <input
                    type="number"
                    class="form-control"
                    name="copies"
                    id=""
                    aria-describedby="helpId"
                    placeholder=""
                />
               
            </div>
            <button
                type="submit"
                class="btn btn-primary "
            >
                Submit
            </button>
            
           </form>
        </div>


            <div
                class="container-md"
            >
                <div
                    class="table-responsive text-center rounded"
                >
                <h2> book detail</h2>
                    <table
                        class="table table-primary table-striped"
                    >
                        <thead>
                            <tr>
                                <th scope="col">book id</th>
                                <th scope="col">book title</th>
                                <th scope="col">author name</th>
                                <th scope="col">genre</th>
                                <th scope="col">avaliable copies</th>
                                <th scope="col">action</th>
                                <th scope="col"> _</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                           <?php while($row =$result -> fetch_assoc()){ ?>
                                <td> <?=$row['bid']?> </td>
                                <td> <?=$row['btitle']?> </td>
                                <td> <?=$row['aname']?> </td>
                                <td> <?=$row['genre']?> </td>
                                <td> <?=$row['copies']?> </td>
                                <td> <a href="edit.php/?=$row['id']">edit</a> </td>
                                <td> <a href="delete.php/?=$row['id']">delete</a> </td>
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

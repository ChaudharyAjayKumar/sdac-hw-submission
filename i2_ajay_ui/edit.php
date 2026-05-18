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
  $sql=$con -> prepare('update book  set btitle =? ,aname =? where bid =?');
  $sql ->bind_param('ssi',$btitle,$aname,$bid);


         
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
            class="container text-center py-4 rounded "
        >
        <h2> edit book detail </h2>
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
                    value="$result['bid']"
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
                    value="$result['btitle']"
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
                    value="$result['aname']"
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
                    value="$result['genre']"
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
                    value="$result['copies']"
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

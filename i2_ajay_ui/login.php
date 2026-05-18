

<?php
include 'db.php';

if($_SERVER['REQUEST_METHOD']==='POST'){
   
    $uname=$_POST['uname'];
    $password=$_POST['password'];

    $sql=$con -> prepare('select password from login1 where uname = ?');
    $sql -> bind_param('s',$uname);
    $sql -> execute();

    $sql -> bind_result($pass);
    $sql ->fetch();

    if(password_verify($pass,$password)){
        $_SESSION['uname']=$uname;
        header('location:home.php');
    }
    else {
        echo "<script>alert('invalid credential')</script>";
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
    </head>

    <body>
        <header>
           
        </header>
        <main><div
            class="container text-center py-2 rounded shadow"
        >
        <h2>login with us</h2>
           <form action="" method="POST">
            
                
          
            <div class="mb-3">
                <label for="" class="form-label">username</label>
                <input
                    type="text"
                    class="form-control"
                    name="uname"
                    id=""
                    aria-describedby="helpId"
                    placeholder=""
                />
                
            </div>
           
            <div class="mb-3">
                <label for="" class="form-label">Password</label>
                <input
                    type="text"
                    class="form-control"
                    name="password"
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


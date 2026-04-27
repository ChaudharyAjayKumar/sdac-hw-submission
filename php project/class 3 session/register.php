<?php
include 'db.php';
if($_SERVER['REQUEST_METHOD']==='POST'){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $pass=password_hash($_POST['password'],PASSWORD_BCRYPT);

    $sql=$con -> prepare('insert into user5 values(?,?,?,?,?)');
    $sql -> bind_param('issss',$id,$name,$email,$address,$pass);

    if($sql -> execute()){
        header('Location:login.php');
    }
    else{
        echo "<script>alert('!! not registered !!')</script>";
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
            <!-- place navbar here -->
        </header>
        <main>
            <div
                class="container col-4 text-center"
            >
            <h1>register with us</h1>
               <form action="" method="POST">
                <div class="mb-3">
                    <label for="" class="form-label">id</label>
                    <input
                        type="text"
                        class="form-control"
                        name="id"
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                    />
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Name</label>
                    <input
                        type="text"
                        class="form-control"
                        name="name"
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                    />
                   
                </div>
                

                <div class="mb-3">
                    <label for="" class="form-label">email</label>
                    <input
                        type="text"
                        class="form-control"
                        name="email"
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                    />
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">address</label>
                    <input
                        type="textarea"
                        class="form-control"
                        name="address"
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                    />
                    
                </div>
                

                <div class="mb-3">
                    <label for="" class="form-label">password</label>
                    <input
                        type="password"
                        class="form-control"
                        name="password"
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                    />
                </div>
                
                <button
                    type="submit"
                    class="btn btn-primary"
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

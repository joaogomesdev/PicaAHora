
<?php error_reporting(1); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/comum.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/icofont.min.css">
    <link rel="stylesheet" href="assets/css/login.css">
    
    
    <title>PicaHoras</title>


</head>
<body>
    <form class="form-login" action="#" method="post">
        <div class="login-card card">
            <div class="card-header">
                
                <i class="icofont-travelling mr-2"></i>
                <span class="font-weight-light">Pica</span>
                <span class="font-weight-bold mx-2">A</span>
                <span class="font-weight-light">Hora</span>
                <i class="icofont-runner-alt-1 ml-2"></i>
            
            </div>
            <div class="card-body">
                <?php include(TEMPLATE_PATH . '/messages.php') ?>
                <div class="form-group">
                    
                    <label for="email">E-Mail</label>
                    <input type="email" id="email"name="email" 
                    class="form-control <?= $errors['email'] ? 'is-invalid' : ' ' ?>" 
                    value="<?php echo $email ?>"
                    placeholder="Insire o E-mail" >   
                    <div class="invalid-feedback">

                        <?php $errors['email'] ?>
                    </div> 
                </div>
                <div class="form-group">

                    <label for="password">Password</label>
                    <input type="password" id="password"name="password" class="form-control <?php $errors['password'] ? 'invalid' : ''?>" 
                    placeholder="Insire a Password" >
                    <div class="invalid-feedback">
                        <?php $errors['password'] ?>
                    </div> 
                
                
                </div>
            </div>
            <div class="card-footer">
                    <button class="btn btn-lg btn-primary d-flex ">Confirmar</button>
            </div>
            


        </div>

    </form>
    
</body>
</html>
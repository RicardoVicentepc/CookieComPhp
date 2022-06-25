<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Untitled Document</title>
    <link rel="stylesheet" type="text/css" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>
    <div class="container">
        <div class="NavZinha">
            <nav class="navbar navbar-expand-lg bg-light">
                <div class="container-fluid">
                    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                        <ul class="navbar-nav">
                            <a class="navbar-brand" href="#"><img src="./Img/Logo.png" class="Logo" alt="..."></a>
                    </div>
                </div>
            </nav>
        </div>
        <div class="spaceForm"></div>
<form id="form1" align="center" text name="form1" method="post" action="home.php">
            <label>Selecione o Produto </label>
              <select name="corSelect">
                <option value="1">Camisas</option>
                <option value="2">Calças</option>
                <option value="3">Moletons</option>
              </select>
              <br/>
              <br/>

            <input type="submit" name="Submit" class='btn btn-outline-danger' value="Aplicar" />
        </form>
        <br><br>

</body>
<?php
    //isset (verifica se existe uma variável)
    //empty (verifica se a variável está nula, ou seja se tem conteúdo)
    //true | false
    $imgCamisas = Array('./Img/Camisa1.jpg', './Img/Camisa2.jpg', './Img/Camisa3.jpg', './Img/Camisa4.jpg', './Img/Camisa5.jpg');
    $descCamisas = Array('Camiseta Beggie', 'Camiseta Preta', 'Camiseta Azul', 'Camiseta Roxa', "Camiseta Cinza");

    $imgCalca = Array('./Img/Calca1.jpg', './Img/Calca2.jpg', './Img/Calca3.jpg', './Img/Calca4.jpg', './Img/Calca5.jpg');
    $descCalca = Array('Calça Beggie', 'Calça Cinza', 'Calça Preta', 'Calça Azul', 'Calça Branca');

    $imgMoletom = Array('./Img/Blusa1.jpg', './Img/Blusa2.jpg', './Img/Blusa3.jpg', './Img/Blusa4.jpg', './Img/Blusa5.jpg');
    $descMoletom = Array('Blusa Branca', 'Blusa Preta', 'Blusa Azul', 'Blusa Vermelha', 'Blusa Cinza');

    if (isset($_COOKIE['corCookie'])){
    //isset verifica se existe
    //true (existe)/false (não existe)
        $cor = $_COOKIE['corCookie'];
        if($cor == 1){
           echo ' <div class="row">';
            for($i=0; $i < 5; $i++){
            echo ("
            <div class='col'>

                <!--init card1-->
                <div class='card' style='width: 190px; height:400px;'>
                    <div class='zoom'>
                        <img src='".$imgCamisas[$i]."' class='card-img-top' alt='...'>
                    </div>
                    <div class='card-body'>
                        <h5 class='card-title'>". $descCamisas[$i] ."</h5>
                        <p class='valor'>R$85,00</p>
                        <button type='button' href='#' class='btn btn-outline-danger'>Comprar</button>
                    </div>
            </div>
            <!--end card1-->
        </div>");
            }
        echo'</div><div class="space"></div>';
        echo ' <div class="row">';
            for($i=0; $i < 5; $i++){
            echo ("
            <div class='col'>

                <!--init card1-->
                <div class='card' style= 'width: 190px; height: 400px;'>
                    <div class='zoom'>
                        <img src='".$imgCalca[$i]."' class='card-img-top' alt='...'>
                    </div>
                    <div class='card-body'>
                        <h5 class='card-title'>". $descCalca[$i] ."</h5>
                        <p class='valor'>R$85,00</p>
                        <button type='button' href='#' class='btn btn-outline-danger'>Comprar</button>
                    </div>
            </div>
            <!--end card1-->
        </div>");
            }
        echo'</div> <div class="space"></div>'; 
        echo ' <div class="row">';
        for($i=0; $i < 5; $i++){
        echo ("
        <div class='col'>

            <!--init card1-->
            <div class='card' style= 'width: 190px; height: 400px;'>
                <div class='zoom'>
                    <img src='".$imgMoletom[$i]."' class='card-img-top' alt='...'>
                </div>
                <div class='card-body'>
                    <h5 class='card-title'>". $descMoletom[$i] ."</h5>
                    <p class='valor'>R$85,00</p>
                    <button type='button' href='#' class='btn btn-outline-danger'>Comprar</button>
                </div>
        </div>
        <!--end card1-->
    </div>");
        }
        
    echo'</div>';  
        }else if($cor == 2){  
            echo ' <div class="row">';
            for($i=0; $i < 5; $i++){
            echo ("
            <div class='col'>

                <!--init card1-->
                <div class='card' style= 'width: 190px; height: 400px;'>
                    <div class='zoom'>
                        <img src='".$imgCalca[$i]."' class='card-img-top' alt='...'>
                    </div>
                    <div class='card-body'>
                        <h5 class='card-title'>". $descCalca[$i] ."</h5>
                        <p class='valor'>R$85,00</p>
                        <button type='button' href='#' class='btn btn-outline-danger'>Comprar</button>
                    </div>
            </div>
            <!--end card1-->
        </div> ");
            }
        echo'</div><div class="space"></div>';
        echo ' <div class="row">';
        for($i=0; $i < 5; $i++){
        echo ("
        <div class='col'>

            <!--init card1-->
            <div class='card' style= 'width: 190px; height: 400px;'>
                <div class='zoom'>
                    <img src='".$imgMoletom[$i]."' class='card-img-top' alt='...'>
                </div>
                <div class='card-body'>
                    <h5 class='card-title'>". $descMoletom[$i] ."</h5>
                    <p class='valor'>R$85,00</p>
                    <button type='button' href='#' class='btn btn-outline-danger'>Comprar</button>
                </div>
              </div>
                 <!--end card1-->
                </div>");
                  }
        echo'</div><div class="space"></div>';
        echo ' <div class="row">';
        for($i=0; $i < 5; $i++){
        echo ("
        <div class='col'>

            <!--init card1-->
            <div class='card' style='width: 190px; height:400px;'>
                <div class='zoom'>
                    <img src='".$imgCamisas[$i]."' class='card-img-top' alt='...'>
                </div>
                <div class='card-body'>
                    <h5 class='card-title'>". $descCamisas[$i] ."</h5>
                    <p class='valor'>R$85,00</p>
                    <button type='button' href='#' class='btn btn-outline-danger'>Comprar</button>
                </div>
            </div>
                <!--end card1-->
                </div>");
                }
            }
            else if($cor == 3){
                echo ' <div class="row">';
                for($i=0; $i < 5; $i++){
                echo ("
                <div class='col'>
        
                    <!--init card1-->
                    <div class='card' style= 'width: 190px; height: 400px;'>
                        <div class='zoom'>
                            <img src='".$imgMoletom[$i]."' class='card-img-top' alt='...'>
                        </div>
                        <div class='card-body'>
                            <h5 class='card-title'>". $descMoletom[$i] ."</h5>
                            <p class='valor'>R$85,00</p>
                            <button type='button' href='#' class='btn btn-outline-danger'>Comprar</button>
                        </div>
                </div>
                <!--end card1-->
            </div>");
                }
        echo'</div><div class="space"></div>';
        echo ' <div class="row">';
        for($i=0; $i < 5; $i++){
        echo ("
        <div class='col'>

            <!--init card1-->
            <div class='card' style='width: 190px; height:400px;'>
                <div class='zoom'>
                    <img src='".$imgCamisas[$i]."' class='card-img-top' alt='...'>
                </div>
                <div class='card-body'>
                    <h5 class='card-title'>". $descCamisas[$i] ."</h5>
                    <p class='valor'>R$85,00</p>
                    <button type='button' href='#' class='btn btn-outline-danger'>Comprar</button>
                </div>
            </div>
                <!--end card1-->
                </div>");
                }
        echo'</div><div class="space"></div>';
    }
    echo ' <div class="row">';
    for($i=0; $i < 5; $i++){
    echo ("
    <div class='col'>

        <!--init card1-->
        <div class='card' style= 'width: 190px; height: 400px;'>
            <div class='zoom'>
                <img src='".$imgCalca[$i]."' class='card-img-top' alt='...'>
            </div>
            <div class='card-body'>
                <h5 class='card-title'>". $descCalca[$i] ."</h5>
                <p class='valor'>R$85,00</p>
                <button type='button' href='#' class='btn btn-outline-danger'>Comprar</button>
            </div>
    </div>
    <!--end card1-->
</div> ");
}

}
else {
    echo ' <div class="row">';
    for($i=0; $i < 2; $i++){
    echo ("
    <div class='col'>

        <!--init card1-->
        <div class='card' style= 'width: 190px; height: 400px;'>
            <div class='zoom'>
                <img src='".$imgCalca[$i]."' class='card-img-top' alt='...'>
            </div>
            <div class='card-body'>
                <h5 class='card-title'>". $descCalca[$i] ."</h5>
                <p class='valor'>R$85,00</p>
                <button type='button' href='#' class='btn btn-outline-danger'>Comprar</button>
            </div>
    </div>
    <!--end card1-->
</div>");  
}
for($i=0; $i < 2; $i++){
echo ("
    <div class='col'>

        <!--init card1-->
        <div class='card' style= 'width: 190px; height: 400px;'>
            <div class='zoom'>
                <img src='".$imgCamisas[$i]."' class='card-img-top' alt='...'>
            </div>
            <div class='card-body'>
                <h5 class='card-title'>". $descCamisas[$i] ."</h5>
                <p class='valor'>R$85,00</p>
                <button type='button' href='#' class='btn btn-outline-danger'>Comprar</button>
            </div>
    </div>
    <!--end card1-->
</div>");  
}
echo ("
    <div class='col'>

        <!--init card1-->
        <div class='card' style= 'width: 190px; height: 400px;'>
            <div class='zoom'>
                <img src='".$imgMoletom[$i]."' class='card-img-top' alt='...'>
            </div>
            <div class='card-body'>
                <h5 class='card-title'>". $descMoletom[$i] ."</h5>
                <p class='valor'>R$85,00</p>
                <button type='button' href='#' class='btn btn-outline-danger'>Comprar</button>
            </div>
    </div>
    <!--end card1-->
</div>");  

echo'</div><div class="space"></div>';

    echo ' <div class="row">';
    for($i=2; $i < 4; $i++){
    echo ("
    <div class='col'>

        <!--init card1-->
        <div class='card' style= 'width: 190px; height: 400px;'>
            <div class='zoom'>
                <img src='".$imgCalca[$i]."' class='card-img-top' alt='...'>
            </div>
            <div class='card-body'>
                <h5 class='card-title'>". $descCalca[$i] ."</h5>
                <p class='valor'>R$85,00</p>
                <button type='button' href='#' class='btn btn-outline-danger'>Comprar</button>
            </div>
    </div>
    <!--end card1-->
    </div>");  
    }
    for($i=2; $i < 4; $i++){
    echo ("
    <div class='col'>

        <!--init card1-->
        <div class='card' style= 'width: 190px; height: 400px;'>
            <div class='zoom'>
                <img src='".$imgCamisas[$i]."' class='card-img-top' alt='...'>
            </div>
            <div class='card-body'>
                <h5 class='card-title'>". $descCamisas[$i] ."</h5>
                <p class='valor'>R$85,00</p>
                <button type='button' href='#' class='btn btn-outline-danger'>Comprar</button>
            </div>
    </div>
    <!--end card1-->
    </div>");  
    }
    echo ("
    <div class='col'>

        <!--init card1-->
        <div class='card' style= 'width: 190px; height: 400px;'>
            <div class='zoom'>
                <img src='".$imgMoletom[$i]."' class='card-img-top' alt='...'>
            </div>
            <div class='card-body'>
                <h5 class='card-title'>". $descMoletom[$i] ."</h5>
                <p class='valor'>R$85,00</p>
                <button type='button' href='#' class='btn btn-outline-danger'>Comprar</button>
            </div>
    </div>
    <!--end card1-->
    </div>");  

    echo'</div><div class="space"></div>';

    echo ' <div class="row">';
    for($i=3; $i < 5; $i++){
    echo ("
    <div class='col'>

        <!--init card1-->
        <div class='card' style= 'width: 190px; height: 400px;'>
            <div class='zoom'>
                <img src='".$imgCalca[$i]."' class='card-img-top' alt='...'>
            </div>
            <div class='card-body'>
                <h5 class='card-title'>". $descCalca[$i] ."</h5>
                <p class='valor'>R$85,00</p>
                <button type='button' href='#' class='btn btn-outline-danger'>Comprar</button>
            </div>
    </div>
    <!--end card1-->
    </div>");  
    }
    for($i=3; $i < 5; $i++){
    echo ("
    <div class='col'>

        <!--init card1-->
        <div class='card' style= 'width: 190px; height: 400px;'>
            <div class='zoom'>
                <img src='".$imgCamisas[$i]."' class='card-img-top' alt='...'>
            </div>
            <div class='card-body'>
                <h5 class='card-title'>". $descCamisas[$i] ."</h5>
                <p class='valor'>R$85,00</p>
                <button type='button' href='#' class='btn btn-outline-danger'>Comprar</button>
            </div>
    </div>
    <!--end card1-->
    </div>");  
    }
    echo ("
    <div class='col'>

        <!--init card1-->
        <div class='card' style= 'width: 190px; height: 400px;'>
            <div class='zoom'>
                <img src='".$imgMoletom[3]."' class='card-img-top' alt='...'>
            </div>
            <div class='card-body'>
                <h5 class='card-title'>". $descMoletom[3] ."</h5>
                <p class='valor'>R$85,00</p>
                <button type='button' href='#' class='btn btn-outline-danger'>Comprar</button>
            </div>
    </div>
    <!--end card1-->
    </div>");  
}
?> 
    <div class="space"></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>
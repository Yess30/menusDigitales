
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Menu</title>
</head>
<body background="src/img/postre1.jpg">
    
    <nav class="navbar navbar-expand-lg navbar-light bg-indigo">
        <div class="container-fluid">
          <a class="navbar-brand">
            <img src="src/img/logoB.png" alt="" width="60" height="60" class="d-inline-block align-top">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Nombre Restaurante</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Categorias
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#postres">Postres</a></li>
                  <li><a class="dropdown-item" href="#bebidas">Bebidas</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal" href="pedido.php">Pedido</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Buscar en el menu..." aria-label="Search">
              <button class="btn btn-outline-dark" type="submit">Buscar</button>
            </form>
          </div>
        </div>
      </nav>

      <div class="container">
          <div class="row">
              <pre><code></code></pre>
            <h3 id="postres" style="color: darkgrey;">Postres</h3>
          </div>
        <div class="row">
            <div class="col sm-12 md-6 lg-4">               
                <!--card1.1-->
                <pre><code></code></pre>
                <div class="card" style="width: 18rem;">
                    <img src="src/img/menu/chocolate.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Pastel chocolate</h5>
                      <p class="card-text">Precio: $40</p>
                      <a href="#" class="btn btn-primary">Detalles</a>
                      <a href="#" class="btn btn-primary">Agregar</a>
                      
                    </div>
                  </div>
            </div>
            <div class="col sm-12 md-6 lg-4">
                <!--card1.2-->
                <pre><code></code></pre>
                <div class="card" style="width: 18rem;">
                    <img src="src/img/menu/pastel3L.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Pastel tres leches</h5>
                      <p class="card-text">Precio: $38</p>
                      <a href="#" class="btn btn-primary">Detalles</a>
                      <a href="#" class="btn btn-primary">Agregar</a>
                    </div>
                  </div>
            </div>
            <div class="col sm-12 md-6 lg-4">
                <!--card1.3-->
                <pre><code></code></pre>
                <div class="card" style="width: 18rem;">
                    <img src="src/img/menu/moka.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Pastel Moka</h5>
                      <p class="card-text">Precio: $35</p>
                      <a href="#" class="btn btn-primary">Detalles</a>
                      <a href="#" class="btn btn-primary">Agregar</a>
                    </div>
                  </div>
            </div>
        </div>
        <div class="row">
            <pre><code></code></pre>
            <h3 id="bebidas" style="color: darkgrey;">Bebidas</h3>
        </div>
        <div class="row">
            <div class="col sm-12 md-6 lg-4">               
                <!--card2.1-->
                <pre><code></code></pre>
                <div class="card" style="width: 18rem;">
                    <img src="src/img/menu/americano.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Café americano</h5>
                      <p class="card-text">Precio: $25</p>
                      <a href="#" class="btn btn-primary">Detalles</a>
                      <a href="#" class="btn btn-primary">Agregar</a>
                    </div>
                  </div>
            </div>
            <div class="col sm-12 md-6 lg-4">
                <!--card2.2-->
                <pre><code></code></pre>
                <div class="card" style="width: 18rem;">
                    <img src="src/img/menu/frappeBlanco.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Frappe Chocolate Blanco</h5>
                      <p class="card-text">Precio: $35</p>
                      <a href="#" class="btn btn-primary">Detalles</a>
                      <a href="#" class="btn btn-primary">Agregar</a>
                    </div>
                  </div>
            </div>
            <div class="col sm-12 md-6 lg-4">
                <!--card2.3-->
                <pre><code></code></pre>
                <div class="card" style="width: 18rem;">
                    <img src="src/img/menu/cappuccino.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Cappuccino</h5>
                      <p class="card-text">Precio: $28</p>
                      <a href="#" class="btn btn-primary">Detalles</a>
                      <a href="#" class="btn btn-primary">Agregar</a>
                    </div>
                  </div>
            </div>
        </div>

      </div>
      <pre><code></code></pre>
      <footer class="footer mt-auto py-3 bg-dark">
        <div class="container">
          <span style="color: aliceblue;">Recuerda seguirnos en nuestras redes sociales</span>
          <div class="col">
              <img src="src/img/menu/facebook.png" width="40" height="40">
              <img src="src/img/menu/instagram.png" width="40" height="40">
              <img src="src/img/menu/twiter.png" width="40" height="40">
          </div>
        </div>
       
      </footer>

      <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tu pedido</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <table class="table">
  <thead>
    <tr>
      <th scope="col">Producto</th>
      <th scope="col">Cantidad </th>
      <th scope="col">Precio</th>
      <th scope="col">Total</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Pastel chocolate</th>
      <td>2</td>
      <td>$40</td>
      <td>$80</td>
    </tr>
  </tbody>
</table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="pedido.php" class="btn btn-secondary">Ver pdf</a>
        <span class="codigo"> <form action="https://t.me/Yess_PG" method="post"> 
<input type=image src="src/img/whatsapp.svg" width="30" height="30"> </form> </span>
      </div>
    </div>
  </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>
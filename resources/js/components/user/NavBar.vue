<template>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#">Project-E</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="input-group">
      <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
      <div class="input-group-append">
        <button class="btn btn-secondary" type="button">
          <i class="fas fa-search"></i>
        </button>
      </div>
    </div>

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item ml-1">
          <button class="nav-link btn btn-secondary">
            <i class="fa fa-shopping-cart"></i> Cart
          </button>
        </li>
        <li class="nav-item ml-1">
          <button class="nav-link btn btn-secondary">
            <i class="fa fa-user"></i> Masuk
          </button>
        </li>
      </ul>
    </div>
  </nav>
</template>

<script>
    export default {
      name: 'NavBar'
    }
</script>

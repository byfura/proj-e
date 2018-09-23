<template>
  <ul class="sidebar navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="index.html">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span>
      </a>
    </li>
    <li class="nav-item">
      <router-link class="nav-link" to="/user">
        <span>User</span>
      </router-link>
    </li>
    <li class="nav-item">
      <router-link class="nav-link" to="/privilege">
        <span>Privilege</span>
      </router-link>
    </li>
    <li class="nav-item">
      <router-link class="nav-link" to="/language">
        <span>Language</span>
      </router-link>
    </li>
    <li class="nav-item">
      <router-link class="nav-link" to="/currency">
        <span>Currency</span>
      </router-link>
    </li>
    <li class="nav-item">
      <router-link class="nav-link" to="/group">
        <span>Group</span>
      </router-link>
    </li>
    <li class="nav-item">
      <router-link class="nav-link" to="/contract">
        <span>Contract</span>
      </router-link>
    </li>
    <li class="nav-item">
      <router-link class="nav-link" to="/contract-group">
        <span>Contract Group</span>
      </router-link>
    </li>
    <li class="nav-item">
      <router-link class="nav-link" to="/product-supplier">
        <span>Product Supplier</span>
      </router-link>
    </li>
    <li class="nav-item">
      <router-link class="nav-link" to="/product-type">
        <span>Product Type</span>
      </router-link>
    </li>
    <li class="nav-item">
      <router-link class="nav-link" to="/product-typevar">
        <span>Product Type-Variable</span>
      </router-link>
    </li>
    <li class="nav-item">
      <router-link class="nav-link" to="/product-pricing">
        <span>Product Pricing</span>
      </router-link>
    </li>
    <li class="nav-item">
      <router-link class="nav-link" to="/product-pricing-group">
        <span>Product Pricing Group</span>
      </router-link>
    </li>
    <li class="nav-item">
      <router-link class="nav-link" to="/product-promotion-type">
        <span>Product Promotion Type</span>
      </router-link>
    </li>
    <!-- <li class="nav-item">
      <a class="nav-link" href="tables.html">
        <i class="fas fa-fw fa-table"></i>
        <span>Tables</span></a>
    </li> -->
    <!-- <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-fw fa-folder"></i>
        <span>Pages</span>
      </a>
      <div class="dropdown-menu" aria-labelledby="pagesDropdown">
        <h6 class="dropdown-header">Login Screens:</h6>
        <a class="dropdown-item" href="login.html">Login</a>
        <a class="dropdown-item" href="register.html">Register</a>
        <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
        <div class="dropdown-divider"></div>
        <h6 class="dropdown-header">Other Pages:</h6>
        <a class="dropdown-item" href="404.html">404 Page</a>
        <a class="dropdown-item" href="blank.html">Blank Page</a>
      </div>
    </li> -->
  </ul>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

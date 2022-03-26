<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="/pages">Home</a>
          <a class="nav-link" href="/pages/about">About</a>
          <a class="nav-link" href="/pages/contact">Contact</a>
          <a class="nav-link" href="/komik">Comics</a>
          <a class="nav-link" href="/orang">User</a>
        </div>
        <?php if (logged_in()) : ?>
          <a class="nav-link" href="/logout">Log Out</a>
        <?php else : ?>
          <a class="nav-link" href="/login">Log In</a>
        <?php endif; ?>

      </div>
    </div>
  </div>
</nav>
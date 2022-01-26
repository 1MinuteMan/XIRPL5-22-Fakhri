<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">Fakhri</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ ($title === 'Home') ? 'active' : ''}}" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === 'About') ? 'active' : ''}}" aria-current="page" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === 'Gallery') ? 'active' : ''}}" aria-current="page" href="/gallery">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === 'Contacts') ? 'active' : ''}}" aria-current="page" href="/contacts">Contact Us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
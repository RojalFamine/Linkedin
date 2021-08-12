
    <ul class="nav">
      <li class="nav-item">
        <a href="?page=home" class="nav-link <?= isPage('home'); ?>" aria-current="page">
          Home
        </a>
      </li>
      <li class="nav-item">
        <a href="?page=about" class="nav-link link-dark <?= isPage('about'); ?>">
          About
        </a>
      </li>
      <li class="nav-item">
        <a href="?page=jobs" class="nav-link link-dark <?= isPage('jobs'); ?>">
          Jobs
        </a>
      </li>
      <li class="nav-item">
        <a href="?page=people" class="nav-link link-dark <?= isPage('people'); ?>">
          People
        </a>
      </li>
      <li class="nav-item">
        <a href="?page=ads" class="nav-link link-dark <?= isPage('ads'); ?>">
         Ads
        </a>
      </li>
    </ul>
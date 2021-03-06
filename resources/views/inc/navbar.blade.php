<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/home">{{ config('app.name', 'PaperShare') }}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/articles">Articles</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/profile">Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/bookmarks">Bookmarks</a>
            </li>
          </ul>
          <form action="/articles/search" method="GET">
            <div class="form-group">
              <input placeholder="Search Articles" class="" type="text" name="title" id="">
              <button class="btn-sm btn-outline-primary" type="submit">Search</button>

            </div>
          </form>
          
        </div>
      </nav>
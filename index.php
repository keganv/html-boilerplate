<!doctype html>
<html lang="en">
    <head>
        <title>Document title</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Description of content here.">
        <!-- For Social Sharing -->
        <meta property="og:title" content="Site title here">
        <meta property="og:description" content="Site description here.">
        <meta property="og:image" content="http://www.keganv.com/thumbnail.jpg">
        <meta property="og:url" content="http://www.keganv.com">
        <meta property="og:site_name" content="Site name here.">
        <meta name="twitter:card" content="summary">
        <!-- End Social Sharing -->
        <link rel="stylesheet" href="./styles/style.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,800&display=swap">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <header role="banner">
          <h1>Logo Main Tag Line</h1>
          <nav role="navigation">
            <ul>
              <li>
                <a href="#">link 1</a>
              </li>
              <li>
                <a href="#">link 2</a>
              </li>
              <li>
                <a href="#">link 3</a>
              </li>
              <li>
                <a href="#">link 4</a>
              </li>
            </ul>
          </nav>
        </header>

        <main role="main">
            <h2>Main Content</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sagittis tempor mauris eget semper. Sed turpis mauris, scelerisque sit amet facilisis quis, molestie id magna.</p>
            <form>
                <p>(*) required.</p>
                <input type="text" name="name" id="name" aria-required="true" aria-label="Your Name">
                <div class="errors" role="alert" aria-relevant="all">
                    <ul>
                    </ul>
                </div>
            </form>
        </main>

        <aside role="complementary">
          <h3>Sidebar</h3>
          <p>Complementary content</p>
        </aside>

        <footer role="contentinfo">
          <h4>Footer</h4>
        </footer>

    </body>
</html>

<!DOCTYPE html>
<html>
    <head>
        <title>Uji Coba Menggunakan Laravel View</title>
    </head>
    
    <body>


        <header>
            <h2>Welcome to My First Blog</h2>
            <nav>
                <a href="/blog">HOME</a>
                |
                <a href="/blog/about">ABOUT</a>
                |
                <a href="/blog/contact">CONTACT</a>
            </nav>
        </header>
        <hr/>
        <br/>
        <br/>

        <!-- bagian judul halaman blog -->
        <h3> @yield('page_title') </h3>

        <!-- bagian konten blog -->
        @yield('content')

        <br/>
        <br/>
        <hr/>
        <footer>
            <p>&copy; <a>Jovitta Jessiqua Rafaella</a>. 2021</p>
        </footer>
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Codix')</title>

    @vite(['resources/css/style.css', 'resources/js/app.js'])
</head>

<body>

    {{-- HEADER اصلی سایت قبلی --}}
    <header>
        <div style="flex: 1; display: flex; justify-content: flex-start;">
            <div id="user-info"></div>
        </div>

        <div style="flex: 1; display: flex; justify-content: center;">
            <div class="logo">CODIX</div>
        </div>

        <div style="flex: 1; display: flex; justify-content: flex-end;">
            <nav>
                <a href="/">HOME</a>
                <a href="/about">ABOUT</a>
                <a href="/contact">CONTACT</a>
                <button id="logout-btn" onclick="logout()">Logout</button>
            </nav>
        </div>
    </header>

    {{-- اینجا محتوای هر صفحه تزریق می‌شود --}}
    <main>
        @yield('content')
    </main>

    {{-- FOOTER اصلی --}}
    <footer>
        © 2025 — All rights reserved.
    </footer>

    {{-- اسکریپت اصلی --}}
    <script>
        function logout() {
            localStorage.removeItem("user");
            window.location.href = "/login";
        }
    </script>

</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <title>Shoe Industry</title>
</head>

<body class="bg-gradient-to-t from-[#fbc2eb] to-[#a6c1ee] h-screen">
    <main>
        <x-navbar />
        {{ $slot }}
        <x-footer />
    </main>

    <script>
        function showProfile() {
            const Profile = document.querySelector('.profile')
            if (Profile.style.display == 'flex') {
                Profile.style.display = 'none'
            }else{
                Profile.style.display = 'flex'
            }
        }
        function onToggleMenu(e){
            const navLinks = document.querySelector('.nav-links')
            e.name = e.name === 'menu' ? 'close' : 'menu'
            if (navLinks.style.display == 'flex') {
                navLinks.style.display = 'none'
            }else{
                navLinks.style.display = 'flex'
            }
        }
    </script>
</body>

</html>
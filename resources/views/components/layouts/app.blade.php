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

<body class="">
    <main>
        <x-navbar />
        {{ $slot }}
        <x-footer />
    </main>

    <script>
        var heelbutton = document.getElementById("heel");
        var shoebutton = document.getElementById("shoe");
        var allbutton = document.getElementById("all");
        var shoediv = document.getElementById('shoes');
        var heeldiv = document.getElementById('heels');
        const Profile = document.querySelector('.profile')
        const navLinks = document.querySelector('.nav-links')

        function showProfile() {
            if (Profile.style.display == 'flex') {
                Profile.style.display = 'none'
            } else {
                Profile.style.display = 'flex'
            }
        }

        function toggleNavbar() {
            if (navLinks.style.display == 'flex') {
                navLinks.style.display = 'none'
            } else {
                navLinks.style.display = 'flex'
            }
        }

        function showAll() {
            if (shoediv.style.display = "none", allbutton.style.background = "white") {
                heeldiv.style.display = "grid",
                    shoediv.style.display = "grid",
                    allbutton.style.background = "rgb(96 165 250)"
                    shoebutton.style.background = "white"
                    heelbutton.style.background = "white"
                    allbutton.style.color = "white"
                    shoebutton.style.color = "black"
                    heelbutton.style.color = "black"
            } else {
                shoediv.style.display = "none"
                allbutton.style.color = "black"
                shoebutton.style.color = "white"
                heelbutton.style.color = "white"
            }
        }

        function showShoe() {
            if (shoediv.style.display = "none", shoebutton.style.background = "white", shoebutton.style.color = "black") {
                shoediv.style.display = "grid",
                    heeldiv.style.display = "none",
                    allbutton.style.background = "white",
                    shoebutton.style.background = "rgb(96 165 250)"
                allbutton.style.color = "black"
                shoebutton.style.color = "white"
                heelbutton.style.color = "black"
                heelbutton.style.background = "white"
            } else {
                heeldiv.style.display = "none",
                    shoebutton.style.background = "white"
                heelbutton.style.background = "rgb(96 165 250)"
                allbutton.style.color = "white"
                shoebutton.style.color = "black"
                heelbutton.style.color = "white"
            }
        }

        function showHeels() {
            if (heeldiv.style.display = "none", document.getElementById("heels").style.background = "white", heelbutton.style.color = "black") {
                heeldiv.style.display = "grid",
                    shoediv.style.display = "none",
                    allbutton.style.background = "white",
                    heelbutton.style.background = "rgb(96 165 250)"
                allbutton.style.color = "black"
                shoebutton.style.background = "white"
                allbutton.style.color = "black"
                shoebutton.style.color = "black"
                heelbutton.style.color = "white"
            } else {
                shoediv.style.display = "none"
                heelbutton.style.background = "white"
                shoebutton.style.background = "rgb(96 165 250)"
                allbutton.style.color = "white"
                shoebutton.style.color = "white"
                heelbutton.style.color = "black"
            }
        }


        // function showHeels() {
        //     document.getElementsByClassName("active").current = 'false';
        // }
        // function onToggleMenu(e){
        //     const navLinks = document.querySelector('.nav-links')
        //     e.name = e.name === 'menu' ? 'close' : 'menu'
        //     if (navLinks.style.display == 'flex') {
        //         navLinks.style.display = 'none'
        //     }else{
        //         navLinks.style.display = 'flex'
        //     }
        // }
    </script>
</body>

</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laracast Assets</title>

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css">

</head>

<body class="font-sans">

    <div id="app">

        <header class="py-8 px-8 mb-8" style="background: url('/images/splash.svg') 0px 10px no-repeat;">
            <h1 class="">
                <img alt="Laracasts" src="/images/logo.svg">
            </h1>
        </header>

        <div class="container px-8 pb-10">


            <main class="flex">

                <aside class="w-64 pt-8">
                    <section class="mb-10">
                        <h5 class="uppercase font-bold mb-5 text-base">The brand</h5>
                    <ul class="list-rest">
                        <li class="text-sm leading-loose">
                            <router-link class="text-black" to="/" exact>Logo</router-link>
                        </li>
                        <li class="text-sm leading-loose">
                            <router-link class="text-black" to="/logo-symbol">Logo Symbol</router-link>
                        </li>
                        <li class="text-sm leading-loose">
                            <router-link class="text-black" to="/colors">Colors</router-link>
                        </li>
                        <li class="text-sm leading-loose">
                            <router-link class="text-black" to="/typography">Typography</router-link>
                        </li>
                    </ul>
                    </section >

                    <section class="mb-10">
                        <h5 class="uppercase font-bold mb-5 text-base">Doodles</h5>
                    <ul class="list-rest">
                        <li class="text-sm leading-loose">
                            <router-link class="text-black" to="/mascot">Mascot</router-link>
                        </li>
                        <li class="text-sm leading-loose">
                            <router-link class="text-black" to="/illustrations">Illustrations</router-link>
                        </li>
                        <li class="text-sm leading-loose">
                            <router-link class="text-black" to="/loaders-animations">Loaders & animations</router-link>
                        </li>
                        <li class="text-sm leading-loose">
                            <router-link class="text-black" to="/wallpapers">Wallpapers</router-link>
                        </li>
                    </ul>
                    </section>

                    <section>
                        <h5 class="uppercase font-bold mb-5 text-base">Stats</h5>

                        <ul class="list-rest">
                            <li class="text-sm leading-loose">
                                <router-link class="text-black" to="/site-stats">Site Stats</router-link>
                            </li>
                            <li class="text-sm leading-loose">
                                <router-link class="text-black" to="/your-achievements">Your Achievements</router-link>
                            </li>
                        </ul>
                    </section>

                </aside>

                <div class="primary flex-1 bg-blue-500">
                    <router-view></router-view>
                </div>

            </main>

        </div>

    </div>
    <script src='/js/app.js'></script>
</body>

</html>

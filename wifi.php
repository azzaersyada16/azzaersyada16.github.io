<!DOCTYPE html>
<html>

<head>
    <!-- Responsive -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Title -->
    <title>Progressive Web App</title>

    <!-- Meta Tags required for	Progressive Web App -->
    <meta name="apple-mobile-web-app-status-bar" content="#aa7700">
    <meta name="theme-color" content="black">

    <!-- Manifest File link -->
    <link rel="manifest" href="manifest.json">

    <!-- Style -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
<main class="container">

   <!-- Wifi Access -->
   <div class="divider">
            <h2>Wifi Access</h2>
            <button onclick="checkConnW()">Check Connection</button>
            <h3 id="conn-type-2"></h3>
            <h3 id="conn-ef-type-2"></h3>
            <h3 id="conn-down-2"></h3>
        </div>

        <div class="divider"></div>
    </main>

    
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow-models/blazeface"></script>
    <script src="assets/js/script.js"></script>
    <script>
        // Script for Service Worker
        window.addEventListener('load', () => {
            registerSW()
        });

        // Register the Service Worker
        async function registerSW() {
            if ('serviceWorker' in navigator) {
                try {
                    await navigator
                        .serviceWorker
                        .register('service-worker.js');
                } catch (e) {
                    console.log('SW registration failed');
                }
            }
        }
    </script>
</body>

</html>

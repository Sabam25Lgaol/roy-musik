<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roy Musik - Hiburan Musik & Sound System Profesional</title>
    <!-- Memuat Tailwind CSS via Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-900 text-slate-100 font-sans antialiased min-h-screen flex flex-col justify-between">

    <!-- Header / Navbar -->
    <header class="py-6 px-6 max-w-6xl mx-auto w-full flex justify-between items-center">
        <div class="text-2xl font-bold tracking-wider text-amber-400">
            ROY MUSIK
        </div>
        <div>
            <a href="https://wa.me/6281234567890?text=Halo%20Roy%20Musik,%20saya%20tertarik%20mau%20booking%20untuk%20acara..." 
               target="_blank" 
               class="bg-green-600 hover:bg-green-500 text-white px-4 py-2 rounded-full font-medium text-sm transition shadow-lg">
                Hubungi WhatsApp
            </a>
        </div>
    </header>

    <!-- Hero Section -->
    <main class="flex-grow flex items-center justify-center px-6 py-12">
        <div class="max-w-3xl text-center">
            <span class="bg-amber-400/10 text-amber-400 text-xs font-semibold px-3 py-1 rounded-full uppercase tracking-wider border border-amber-400/20">
                Penyedia Musik & Sound System Profesional
            </span>
            <h1 class="text-4xl sm:text-6xl font-extrabold mt-6 mb-4 tracking-tight leading-tight">
                Meriahkan Acara Spesial Anda Bersama <span class="text-amber-400">Roy Musik</span>
            </h1>
            <p class="text-lg text-slate-300 mb-8 max-w-xl mx-auto">
                Siap melayani hiburan musik untuk pesta pernikahan, acara adat, ulang tahun, dan berbagai acara keluarga lainnya dengan kualitas suara dan penampilan terbaik.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="https://wa.me/6281234567890?text=Halo%20Roy%20Musik,%20saya%20ingin%20tanya%20jadwal%20dan%20harga." 
                   target="_blank"
                   class="bg-amber-500 hover:bg-amber-400 text-slate-950 font-bold px-8 py-3 rounded-xl shadow-lg transition">
                    Booking Sekarang via WhatsApp
                </a>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="py-6 text-center text-xs text-slate-500 border-t border-slate-800">
        &copy; 2026 Roy Musik. All rights reserved. Built with Laravel.
    </footer>

</body>
</html>
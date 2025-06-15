<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gewerbe Dashboard – Gebäudereinigung &amp; Hausmeisterservice</title>

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
  
  <!-- FontAwesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <!-- Chart.js -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.min.js"></script>

  <!-- FullCalendar -->
  <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script>

  <style>
    ::-webkit-scrollbar { width: 8px; }
    ::-webkit-scrollbar-thumb { background: #888; border-radius: 4px; }
    ::-webkit-scrollbar-thumb:hover { background: #555; }
    .modal { position: fixed; inset: 0; display: flex; align-items: center; justify-content: center; z-index: 30; }
    .modal-content { background: white; padding: 1.5rem; border-radius: 0.5rem; max-width: 28rem; width: 100%; }
    .modal.hidden { display: none; }
    body.dark .modal-content { background: #1e1e2e; color: #e4e4e7; }
  </style>
</head>
<body class="bg-gray-100 text-gray-800 flex h-screen overflow-hidden">

  <aside class="bg-slate-800 text-gray-100 w-60 flex-shrink-0 flex flex-col">
    <div class="p-4 flex items-center gap-2 text-xl font-semibold">
      <i class="fa-solid fa-broom"></i> Gewerbe Dashboard
    </div>
    <nav class="flex-1 overflow-y-auto">
      <button onclick="showSection('overview')" class="w-full text-left px-4 py-2 hover:bg-slate-700"><i class="fa-solid fa-gauge-high"></i> Pregled</button>
      <button onclick="showSection('finance')" class="w-full text-left px-4 py-2 hover:bg-slate-700"><i class="fa-solid fa-coins"></i> Financije</button>
      <button onclick="showSection('clients')" class="w-full text-left px-4 py-2 hover:bg-slate-700"><i class="fa-solid fa-users"></i> Klijenti</button>
      <button onclick="showSection('employees')" class="w-full text-left px-4 py-2 hover:bg-slate-700"><i class="fa-solid fa-user-gear"></i> Zaposlenici</button>
      <button onclick="showSection('calendar')" class="w-full text-left px-4 py-2 hover:bg-slate-700"><i class="fa-solid fa-calendar-days"></i> Kalendar</button>
      <button onclick="showSection('equipment')" class="w-full text-left px-4 py-2 hover:bg-slate-700"><i class="fa-solid fa-screwdriver-wrench"></i> Oprema</button>
      <button onclick="showSection('reports')" class="w-full text-left px-4 py-2 hover:bg-slate-700"><i class="fa-solid fa-chart-pie"></i> Izvještaji</button>
    </nav>
    <div class="p-4">
      <button onclick="toggleDark()" class="w-full bg-slate-700 hover:bg-slate-600 px-3 py-2 rounded"><i class="fa-solid fa-moon"></i> Tamni mod</button>
    </div>
  </aside>

  <main class="flex-1 flex flex-col">
    <h1 id="sectionTitle" class="text-2xl font-bold p-4">Pregled</h1>
    <div class="flex-1 overflow-y-auto p-4">
      <!-- Sadržaj sekcija će ovde biti generisan JS-om -->
    </div>
  </main>

  <script>
    function toggleDark() {
      document.body.classList.toggle('dark');
      localStorage.setItem('dark', document.body.classList.contains('dark'));
    }
    if (localStorage.getItem('dark') === 'true') document.body.classList.add('dark');

    function showSection(section) {
      document.getElementById('sectionTitle').innerText = {
        overview: 'Pregled',
        finance: 'Financije',
        clients: 'Klijenti',
        employees: 'Zaposlenici',
        calendar: 'Kalendar',
        equipment: 'Oprema',
        reports: 'Izvještaji'
      }[section] || 'Pregled';
      // Ovde bi išla logika za prikaz/sakrivanje sekcija
    }
  </script>

</body>
</html>

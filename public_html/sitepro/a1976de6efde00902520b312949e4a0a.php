<!DOCTYPE html>
<html lang="en-us">
<head>
	<script type="text/javascript">
			</script>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "test"); ?></title>
	<base href="{{base_url}}" />
	<?php echo isset($sitemapUrls) ? generateCanonicalUrl($sitemapUrls) : ""; ?>	
	
						<meta name="viewport" content="width=device-width, initial-scale=1" />
					<meta name="description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "test"); ?>" />
			<meta name="keywords" content="<?php echo htmlspecialchars((isset($seoKeywords) && $seoKeywords !== "") ? $seoKeywords : "test"); ?>" />
		
	<!-- Facebook Open Graph -->
		<meta property="og:title" content="<?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "test"); ?>" />
			<meta property="og:description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "test"); ?>" />
			<meta property="og:image" content="<?php echo htmlspecialchars((isset($seoImage) && $seoImage !== "") ? "{{base_url}}".$seoImage : ""); ?>" />
			<meta property="og:type" content="article" />
			<meta property="og:url" content="{{curr_url}}" />
		<!-- Facebook Open Graph end -->

		<meta name="generator" content="NameSilo Website Builder" />
			<script src="js/common-bundle.js?ts=20250614194415" type="text/javascript"></script>
	<script src="js/a1976de6efde00902520b312949e4a0a-bundle.js?ts=20250614194415" type="text/javascript"></script>
	<link href="css/common-bundle.css?ts=20250614194415" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=cyrillic,cyrillic-ext,latin,latin-ext,vietnamese" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Nunito:400&amp;subset=latin" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin,latin-ext,vietnamese" rel="stylesheet" type="text/css" />
	<link href="css/a1976de6efde00902520b312949e4a0a-bundle.css?ts=20250614194415" rel="stylesheet" type="text/css" id="wb-page-stylesheet" />
	<ga-code/>
	<script type="text/javascript">
	window.useTrailingSlashes = true;
	window.disableRightClick = false;
	window.currLang = 'en';
</script>
		
	<!--[if lt IE 9]>
	<script src="js/html5shiv.min.js"></script>
	<![endif]-->

		<script type="text/javascript">
		$(function () {
<?php $wb_form_send_success = popSessionOrGlobalVar("wb_form_send_success"); ?>
<?php if (($wb_form_send_state = popSessionOrGlobalVar("wb_form_send_state"))) { ?>
	<?php if (($wb_form_popup_mode = popSessionOrGlobalVar("wb_form_popup_mode")) && (isset($wbPopupMode) && $wbPopupMode)) { ?>
		if (window !== window.parent && window.parent.postMessage) {
			var data = {
				event: "wb_contact_form_sent",
				data: {
					state: "<?php echo str_replace('"', '\"', $wb_form_send_state); ?>",
					type: "<?php echo $wb_form_send_success ? "success" : "danger"; ?>"
				}
			};
			window.parent.postMessage(data, "<?php echo str_replace('"', '\"', popSessionOrGlobalVar("wb_target_origin")); ?>");
		}
	<?php $wb_form_send_success = false; $wb_form_send_state = null; $wb_form_popup_mode = false; ?>
	<?php } else { ?>
		wb_show_alert("<?php echo str_replace(array('"', "\r", "\n"), array('\"', "", "<br/>"), $wb_form_send_state); ?>", "<?php echo $wb_form_send_success ? "success" : "danger"; ?>");
	<?php } ?>
<?php } ?>
});    </script>
</head>


<body class="site site-lang-en<?php if (isset($wbPopupMode) && $wbPopupMode) echo ' popup-mode'; ?> " <?php ?>><div id="wb_root" class="root wb-layout-vertical"><div class="wb_sbg"></div><div id="wb_header_a1976de6efde00902520b312949e4a0a" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dda148e7383403d3f16ae48ab001" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1976858d3b8005e39bbc6558afe8c9a" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h4 class="wb-stl-custom4"><span style="color:#inherit;">Team Bavaria Hausmeisterservice</span></h4>
</div><div id="a188dda148e73982e690500af38491f3" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a188dda148e73ae8fa438e0c8f5c9beb" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><a href="{{base_url}}"><img loading="lazy" alt="" src="gallery_gen/7f86f44fb2e58a49bfd7cdc63b4c98e3_264x264_fit.png?ts=1749919455"></a></div></div></div></div></div><div id="a18b5c0479dc00fb4bd23cebc7ac4c6e" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dda148e73cd443e4f11ea6e33459" class="wb_element wb-menu wb-prevent-layout-click wb-menu-mobile" data-plugin="Menu"><a class="btn btn-default btn-collapser"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a><ul class="hmenu" dir="ltr"><li class=""><a href="{{base_url}}">Home</a></li><li class=""><a href="About-us/">über uns</a></li><li class=""><a href="novitettagmoj/">dienstleistungen</a></li><li class=""><a href="Contacts/">Kontakt</a></li><li class="wb_this_page_menu_item"><a href="test/">test</a></li></ul><div class="clearfix"></div></div></div></div></div></div></div></div><div id="wb_main_a1976de6efde00902520b312949e4a0a" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1976de6f0d205a03932764a118ce071" class="wb_element wb-anim-entry wb-anim wb-anim-fade-in-none wb-layout-element" data-plugin="LayoutElement" data-wb-anim-entry-time="0.6" data-wb-anim-entry-delay="0"><div class="wb_content wb-layout-vertical"><div id="a1976de789b600656905385058fda5eb" class="wb_element" data-plugin="CustomHtml" style=" overflow: hidden;"><div style="width: 100%; height: 100%; overflow-y: auto;">
<div data-replaced-tag="html" lang="hr">
<div data-replaced-tag="head">
  <title>Gewerbe Dashboard – Gebäudereinigung &amp; Hausmeisterservice</title><!-- Tailwind CSS --><script src="https://cdn.tailwindcss.com">
    // Load initial data
    function loadInitialData() {
      if (!confirm('Učitati inicijalne testne podatke? Ovo će prebrisati postojeće.')) return;
      revenue = initRevenue.slice();
      cost = initCost.slice();
      buildings = initBuildings.slice();
      hours = initHours.slice();
      localStorage.setItem('revenue', JSON.stringify(revenue));
      localStorage.setItem('cost', JSON.stringify(cost));
      localStorage.setItem('buildings', JSON.stringify(buildings));
      localStorage.setItem('hours', JSON.stringify(hours));
      renderFinanceTable(); updateFinance(); updateKPIs();
    }

    // Reset all data to zero
    function resetData() {
      if (!confirm('Resetirati sve podatke na nulu?')) return;
      revenue = Array(12).fill(0);
      cost = Array(12).fill(0);
      buildings = Array(12).fill(0);
      hours = Array(12).fill(0);
      localStorage.setItem('revenue', JSON.stringify(revenue));
      localStorage.setItem('cost', JSON.stringify(cost));
      localStorage.setItem('buildings', JSON.stringify(buildings));
      localStorage.setItem('hours', JSON.stringify(hours));
      renderFinanceTable(); updateFinance(); updateKPIs();
    }

  </script><!-- FontAwesome Icons --><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"><!-- Chart.js --><script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.min.js">
    // Load initial data
    function loadInitialData() {
      if (!confirm('Učitati inicijalne testne podatke? Ovo će prebrisati postojeće.')) return;
      revenue = initRevenue.slice();
      cost = initCost.slice();
      buildings = initBuildings.slice();
      hours = initHours.slice();
      localStorage.setItem('revenue', JSON.stringify(revenue));
      localStorage.setItem('cost', JSON.stringify(cost));
      localStorage.setItem('buildings', JSON.stringify(buildings));
      localStorage.setItem('hours', JSON.stringify(hours));
      renderFinanceTable(); updateFinance(); updateKPIs();
    }

    // Reset all data to zero
    function resetData() {
      if (!confirm('Resetirati sve podatke na nulu?')) return;
      revenue = Array(12).fill(0);
      cost = Array(12).fill(0);
      buildings = Array(12).fill(0);
      hours = Array(12).fill(0);
      localStorage.setItem('revenue', JSON.stringify(revenue));
      localStorage.setItem('cost', JSON.stringify(cost));
      localStorage.setItem('buildings', JSON.stringify(buildings));
      localStorage.setItem('hours', JSON.stringify(hours));
      renderFinanceTable(); updateFinance(); updateKPIs();
    }

  </script><!-- FullCalendar --><link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.css" rel="stylesheet"><script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js">
    // Load initial data
    function loadInitialData() {
      if (!confirm('Učitati inicijalne testne podatke? Ovo će prebrisati postojeće.')) return;
      revenue = initRevenue.slice();
      cost = initCost.slice();
      buildings = initBuildings.slice();
      hours = initHours.slice();
      localStorage.setItem('revenue', JSON.stringify(revenue));
      localStorage.setItem('cost', JSON.stringify(cost));
      localStorage.setItem('buildings', JSON.stringify(buildings));
      localStorage.setItem('hours', JSON.stringify(hours));
      renderFinanceTable(); updateFinance(); updateKPIs();
    }

    // Reset all data to zero
    function resetData() {
      if (!confirm('Resetirati sve podatke na nulu?')) return;
      revenue = Array(12).fill(0);
      cost = Array(12).fill(0);
      buildings = Array(12).fill(0);
      hours = Array(12).fill(0);
      localStorage.setItem('revenue', JSON.stringify(revenue));
      localStorage.setItem('cost', JSON.stringify(cost));
      localStorage.setItem('buildings', JSON.stringify(buildings));
      localStorage.setItem('hours', JSON.stringify(hours));
      renderFinanceTable(); updateFinance(); updateKPIs();
    }

  </script><style>
    /* Scrollbar */
    ::-webkit-scrollbar { width: 8px; }
    ::-webkit-scrollbar-thumb { background: #888; border-radius: 4px; }
    ::-webkit-scrollbar-thumb:hover { background: #555; }
    /* Modal */
    .modal { position: fixed; inset: 0; display: flex; align-items: center; justify-content: center; z-index: 30; }
    .modal-content { background: white; padding: 1.5rem; border-radius: 0.5rem; max-width: 28rem; width: 100%; }
    .modal.hidden { display: none; }
    body.dark .modal-content { background: #1e1e2e; color: #e4e4e7; }
  </style></div>
<div data-replaced-tag="body" class="bg-gray-100 text-gray-800 flex h-screen overflow-hidden">
  <!-- Sidebar -->
  <aside class="bg-slate-800 text-gray-100 w-60 flex-shrink-0 flex flex-col"><div class="p-4 flex items-center gap-2 text-xl font-semibold"><i class="fa-solid fa-broom"></i> Gewerbe Dashboard</div>
    <nav class="flex-1 overflow-y-auto"><button onclick="showSection('overview')" class="w-full text-left px-4 py-2 hover:bg-slate-700"><i class="fa-solid fa-gauge-high"></i> Pregled</button>
      <button onclick="showSection('finance')" class="w-full text-left px-4 py-2 hover:bg-slate-700"><i class="fa-solid fa-coins"></i> Financije</button>
      <button onclick="showSection('clients')" class="w-full text-left px-4 py-2 hover:bg-slate-700"><i class="fa-solid fa-users"></i> Klijenti</button>
      <button onclick="showSection('employees')" class="w-full text-left px-4 py-2 hover:bg-slate-700"><i class="fa-solid fa-user-gear"></i> Zaposlenici</button>
      <button onclick="showSection('calendar')" class="w-full text-left px-4 py-2 hover:bg-slate-700"><i class="fa-solid fa-calendar-days"></i> Kalendar</button>
      <button onclick="showSection('equipment')" class="w-full text-left px-4 py-2 hover:bg-slate-700"><i class="fa-solid fa-screwdriver-wrench"></i> Oprema</button>
      <button onclick="showSection('reports')" class="w-full text-left px-4 py-2 hover:bg-slate-700"><i class="fa-solid fa-chart-pie"></i> Izvještaji</button>
    </nav><div class="p-4">
      <button onclick="toggleDark()" class="w-full bg-slate-700 hover:bg-slate-600 px-3 py-2 rounded"><i class="fa-solid fa-moon"></i> Tamni mod</button>
    </div>
  </aside><!-- Main --><main class="flex-1 flex flex-col"><!-- Header --><h1 id="sectionTitle" class="text-2xl font-bold">Pregled</h1>
      <div class="flex gap-2">
        <button onclick="generateData()" class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded"><i class="fa-solid fa-database"></i> Generiraj</button>
        <button onclick="exportCurrentSection()" class="bg-gray-500 hover:bg-gray-600 text-white px-3 py-1 rounded"><i class="fa-solid fa-file-csv"></i> Export CSV</button>
        <button onclick="loadInitialData()" class="bg-green-500 hover:bg-green-600 text-white px-3 py-1 rounded"><i class="fa-solid fa-rotate"></i> Inicijalni podaci</button>
        <button onclick="resetData()" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded"><i class="fa-solid fa-ban"></i> Resetiraj sve</button>
      </div>
    <!-- Content --><div class="flex-1 overflow-y-auto p-6">
      <!-- Overview -->
      <section id="overviewSection" class="space-y-6"><div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 xl:grid-cols-6 gap-6">
          <div class="bg-white dark:bg-slate-800 p-4 rounded shadow text-center">
            <div class="text-sm text-gray-500">Aktivni klijenti</div>
            <div id="kpiClients" class="text-3xl font-semibold">0</div>
          </div>
          <div class="bg-white dark:bg-slate-800 p-4 rounded shadow text-center">
            <div class="text-sm text-gray-500">Zaposlenici</div>
            <div id="kpiEmployees" class="text-3xl font-semibold">0</div>
          </div>
          <div class="bg-white dark:bg-slate-800 p-4 rounded shadow text-center">
            <div class="text-sm text-gray-500">Zadaci</div>
            <div id="kpiTasks" class="text-3xl font-semibold">0</div>
          </div>
          <div class="bg-white dark:bg-slate-800 p-4 rounded shadow text-center">
            <div class="text-sm text-gray-500">Prihod (EUR)</div>
            <div id="kpiRevenue" class="text-3xl font-semibold">0</div>
          </div>
          <div class="bg-white dark:bg-slate-800 p-4 rounded shadow text-center">
            <div class="text-sm text-gray-500">Ukupno zgrada</div>
            <div id="kpiBuildings" class="text-3xl font-semibold">0</div>
          </div>
          <div class="bg-white dark:bg-slate-800 p-4 rounded shadow text-center">
            <div class="text-sm text-gray-500">Prosječna satnica</div>
            <div id="kpiAvgHourly" class="text-3xl font-semibold">0</div>
          </div>
        </div>
      </section><!-- Finance --><section id="financeSection" class="hidden space-y-6"><!-- Finance Data Input --><div class="bg-white dark:bg-slate-800 p-4 rounded shadow">
          <h2 class="text-xl font-semibold mb-4">Podaci</h2>
          <div class="overflow-x-auto mb-4">
            <table id="financeTable" class="min-w-full text-sm"><thead><tr class="bg-gray-200 dark:bg-slate-700"><th class="px-2 py-1">Mjesec</th>
                  <th class="px-2 py-1">Zgrade</th>
                  <th class="px-2 py-1">Sati</th>
                  <th class="px-2 py-1">Prihod</th>
                  <th class="px-2 py-1">Trošak</th>
                  <th class="px-2 py-1">Neto</th>
                  <th class="px-2 py-1">Satnica</th>
                </tr></thead><tbody id="financeRows"></tbody></table></div>
          <button onclick="updateFinance()" class="bg-emerald-600 hover:bg-emerald-700 text-white px-4 py-2 rounded">Ažuriraj podatke</button>
        </div>
        <!-- Finance Charts -->
        <div class="flex flex-col lg:flex-row gap-6">
          <div class="flex-1 bg-white dark:bg-slate-800 p-4 rounded shadow">
            <h2 class="text-xl font-semibold mb-4">Prihodi, Troškovi &amp; Neto</h2>
            <canvas id="financeChart" height="200"></canvas></div>
          <div class="flex-1 bg-white dark:bg-slate-800 p-4 rounded shadow">
            <h2 class="text-xl font-semibold mb-4">Satnica po mjesecu</h2>
            <canvas id="hourlyChart" height="200"></canvas></div>
        </div>
      </section><!-- Clients --><section id="clientsSection" class="hidden space-y-4"><div class="flex justify-between items-center">
          <h2 class="text-xl font-semibold">Klijenti</h2>
          <button onclick="openModal('clientModal')" class="bg-emerald-600 hover:bg-emerald-700 text-white px-4 py-2 rounded">
            <i class="fa-solid fa-plus"></i> Dodaj
          </button>
        </div>
        <input oninput="filterTable('clientsTable', this.value)" type="text" placeholder="Brza pretraga..." class="border px-2 py-1 rounded w-full mb-2"><div class="overflow-x-auto">
          <table id="clientsTable" class="min-w-full text-sm bg-white dark:bg-slate-800 rounded shadow"><thead><tr class="bg-gray-200 dark:bg-slate-700"><th class="px-2 py-1">Ime</th><th class="px-2 py-1">Adresa</th><th class="px-2 py-1">Telefon</th><th class="px-2 py-1">Akcija</th>
              </tr></thead><tbody></tbody></table></div>
      </section><!-- Employees --><section id="employeesSection" class="hidden space-y-4"><div class="flex justify-between items-center">
          <h2 class="text-xl font-semibold">Zaposlenici</h2>
          <button onclick="openModal('employeeModal')" class="bg-emerald-600 hover:bg-emerald-700 text-white px-4 py-2 rounded">
            <i class="fa-solid fa-plus"></i> Dodaj
          </button>
        </div>
        <input oninput="filterTable('employeesTable', this.value)" type="text" placeholder="Brza pretraga..." class="border px-2 py-1 rounded w-full mb-2"><div class="overflow-x-auto">
          <table id="employeesTable" class="min-w-full text-sm bg-white dark:bg-slate-800 rounded shadow"><thead><tr class="bg-gray-200 dark:bg-slate-700"><th class="px-2 py-1">Ime</th><th class="px-2 py-1">Pozicija</th><th class="px-2 py-1">Ocjena</th><th class="px-2 py-1">Akcija</th>
              </tr></thead><tbody></tbody></table></div>
      </section><!-- Calendar --><section id="calendarSection" class="hidden space-y-4"><h2 class="text-xl font-semibold">Kalendar</h2>
        <div id="calendar" class="bg-white dark:bg-slate-800 rounded shadow overflow-hidden"></div>
      </section><!-- Equipment --><section id="equipmentSection" class="hidden space-y-4"><div class="flex justify-between items-center">
          <h2 class="text-xl font-semibold">Oprema</h2>
          <button onclick="openModal('equipmentModal')" class="bg-emerald-600 hover:bg-emerald-700 text-white px-4 py-2 rounded">
            <i class="fa-solid fa-plus"></i> Dodaj
          </button>
        </div>
        <input oninput="filterTable('equipmentTable', this.value)" type="text" placeholder="Brza pretraga..." class="border px-2 py-1 rounded w-full mb-2"><div class="overflow-x-auto">
          <table id="equipmentTable" class="min-w-full text-sm bg-white dark:bg-slate-800 rounded shadow"><thead><tr class="bg-gray-200 dark:bg-slate-700"><th class="px-2 py-1">Naziv</th><th class="px-2 py-1">Status</th><th class="px-2 py-1">Akcija</th>
              </tr></thead><tbody></tbody></table></div>
      </section><!-- Reports --><section id="reportsSection" class="hidden space-y-4">
        <h2 class="text-xl font-semibold">Izvještaji</h2>
        <div class="bg-white dark:bg-slate-800 p-4 rounded shadow">
          <p>Ukupan prihod: <span id="repRevenue">0</span> EUR</p>
          <p>Ukupan trošak: <span id="repCost">0</span> EUR</p>
          <p>Neto dobit: <span id="repNet">0</span> EUR</p>
          <button onclick="exportAllData()" class="bg-emerald-600 hover:bg-emerald-700 text-white px-4 py-2 rounded mt-2">Preuzmi JSON</button>
        </div>
      </section></div>
  </main><!-- Overlay & Modals --><div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 hidden"></div>

  <!-- Client Modal -->
  <div id="clientModal" class="modal hidden"><div class="modal-content">
    <h3 class="text-lg font-semibold mb-4">Dodaj klijenta</h3>
    <input id="clientName" type="text" placeholder="Ime" class="w-full border px-3 py-2 rounded mb-2"><input id="clientAddress" type="text" placeholder="Adresa" class="w-full border px-3 py-2 rounded mb-2"><input id="clientPhone" type="text" placeholder="Telefon" class="w-full border px-3 py-2 rounded mb-2"><div class="flex justify-end gap-2 mt-4">
      <button onclick="closeModal('clientModal')" class="px-4 py-2">Odustani</button>
      <button onclick="addClient()" class="bg-emerald-600 hover:bg-emerald-700 text-white px-4 py-2 rounded">Spremi</button>
    </div>
  </div></div>

  <!-- Employee Modal -->
  <div id="employeeModal" class="modal hidden"><div class="modal-content">
    <h3 class="text-lg font-semibold mb-4">Dodaj zaposlenika</h3>
    <input id="employeeName" type="text" placeholder="Ime" class="w-full border px-3 py-2 rounded mb-2"><input id="employeeRole" type="text" placeholder="Pozicija" class="w-full border px-3 py-2 rounded mb-2"><input id="employeeRating" type="number" min="1" max="5" placeholder="Ocjena" class="w-full border px-3 py-2 rounded mb-2"><div class="flex justify-end gap-2 mt-4">
      <button onclick="closeModal('employeeModal')" class="px-4 py-2">Odustani</button>
      <button onclick="addEmployee()" class="bg-emerald-600 hover:bg-emerald-700 text-white px-4 py-2 rounded">Spremi</button>
    </div>
  </div></div>

  <!-- Equipment Modal -->
  <div id="equipmentModal" class="modal hidden"><div class="modal-content">
    <h3 class="text-lg font-semibold mb-4">Dodaj opremu</h3>
    <input id="equipmentName" type="text" placeholder="Naziv" class="w-full border px-3 py-2 rounded mb-2"><input id="equipmentStatus" type="text" placeholder="Status" class="w-full border px-3 py-2 rounded mb-2"><div class="flex justify-end gap-2 mt-4">
      <button onclick="closeModal('equipmentModal')" class="px-4 py-2">Odustani</button>
      <button onclick="addEquipment()" class="bg-emerald-600 hover:bg-emerald-700 text-white px-4 py-2 rounded">Spremi</button>
    </div>
  </div></div>

  <script>
    // Data arrays
    const months = ["Januar","Februar","Mart","April","Maj","Jun","Jul","Avgust","Septembar","Oktobar","Novembar","Decembar"];
    const initBuildings = [2,3,4,5,6,7,8,9,10,11,12,13];
    const initHours = [10,15,20,25,30,40,50,60,65,70,75,80];
    const initRevenue = [400,600,800,1000,1200,1600,2000,2400,2600,2800,3000,3200];
    const initCost    = [950,950,975,975,1000,1050,1100,1150,1175,1200,1250,1300];

    // State
    let buildings = [], hours = [], revenue = [], cost = [];
    let netProfit = [], hourlyRate = [];
    let clients = JSON.parse(localStorage.getItem('clients')||'[]');
    let employees = JSON.parse(localStorage.getItem('employees')||'[]');
    let equipment = JSON.parse(localStorage.getItem('equipment')||'[]');
    let calendarInstance, financeChart, hourlyChart;

    // Persistence
    function saveData() {
      localStorage.setItem('revenue', JSON.stringify(revenue));
      localStorage.setItem('cost', JSON.stringify(cost));
      updateKPIs();
    }

    // Dark mode
    function toggleDark() {
      document.body.classList.toggle('dark');
      localStorage.setItem('dark', document.body.classList.contains('dark'));
    }
    if(localStorage.getItem('dark')==='true') document.body.classList.add('dark');

    // Navigation
    function showSection(section) {
      ['overview','finance','clients','employees','calendar','equipment','reports'].forEach(s=>{
        document.getElementById(s+'Section').classList.toggle('hidden', s!==section);
      });
      document.getElementById('sectionTitle').innerText = {
        overview:'Pregled', finance:'Financije', clients:'Klijenti', employees:'Zaposlenici', calendar:'Kalendar', equipment:'Oprema', reports:'Izvještaji'
      }[section];
      if(section==='finance') { renderFinanceTable(); updateFinance(); }
      if(section==='reports') {
        document.getElementById('repRevenue').innerText = revenue.reduce((a,b)=>a+b,0);
        document.getElementById('repCost').innerText = cost.reduce((a,b)=>a+b,0);
        document.getElementById('repNet').innerText = revenue.reduce((a,b,i)=>a+(b-cost[i]),0);
      }
      updateKPIs();
    }

    // Export CSV
    function exportTableToCSV(filename, tableId) {
      const rows = Array.from(document.querySelectorAll('#'+tableId+' tr'));
      const csv = rows.map(row=>{
        const cells = Array.from(row.querySelectorAll('th,td'));
        return cells.map(cell=>`"${cell.innerText.replace(/"/g,'""')}"`).join(',');
      }).join('\n');
      const blob = new Blob([csv], {type:'text/csv'});
      const link = document.createElement('a');
      link.download = filename; link.href = URL.createObjectURL(blob);
      link.click();
    }
    function exportCurrentSection() {
      const sec = document.getElementById('sectionTitle').innerText.toLowerCase();
      if(sec==='financije' || sec==='financije' ) exportTableToCSV('finance.csv','financeTable');
      else if(sec==='klijenti') exportTableToCSV('clients.csv','clientsTable');
      else if(sec==='zaposlenici') exportTableToCSV('employees.csv','employeesTable');
      else if(sec==='oprema') exportTableToCSV('equipment.csv','equipmentTable');
      else alert('Nema podataka za izvoz u ovoj sekciji.');
    }

    function exportAllData() {
      const events = calendarInstance.getEvents().map(e=>({title:e.title,start:e.startStr}));
      const data = {revenue,cost,buildings,hours,clients,employees,equipment,events};
      const blob = new Blob([JSON.stringify(data,null,2)], {type:'application/json'});
      const link = document.createElement('a');
      link.download = 'dashboard_data.json';
      link.href = URL.createObjectURL(blob);
      link.click();
    }

    // CRUD render
    function renderClients() {
      const tbody = document.querySelector('#clientsTable tbody'); tbody.innerHTML='';
      clients.forEach((c,i)=>{ tbody.innerHTML+=`<tr><td>${c.name}<td>${c.address}<td>${c.phone}<td><button onclick="removeClient(${i})">🗑️`; });
    }
    function addClient() {
      const name=document.getElementById('clientName').value.trim(), address=document.getElementById('clientAddress').value.trim(), phone=document.getElementById('clientPhone').value.trim();
      if(!name||!address) return alert('Ime i adresa obavezni');
      clients.push({name,address,phone}); localStorage.setItem('clients',JSON.stringify(clients)); closeModal('clientModal'); renderClients(); updateKPIs();
    }
    function removeClient(i){ if(confirm('Obrisati klijenta?')){ clients.splice(i,1); localStorage.setItem('clients',JSON.stringify(clients)); renderClients(); updateKPIs(); }}

    function renderEmployees() {
      const tbody=document.querySelector('#employeesTable tbody'); tbody.innerHTML='';
      employees.forEach((e,i)=>{ tbody.innerHTML+=`<tr><td>${e.name}<td>${e.role}<td>${e.rating}<td><button onclick="removeEmployee(${i})">🗑️`; });
    }
    function addEmployee(){
      const name=document.getElementById('employeeName').value.trim(), role=document.getElementById('employeeRole').value.trim(), rating=document.getElementById('employeeRating').value;
      if(!name||!role) return alert('Ime i pozicija obavezni');
      employees.push({name,role,rating}); localStorage.setItem('employees',JSON.stringify(employees)); closeModal('employeeModal'); renderEmployees(); updateKPIs();
    }
    function removeEmployee(i){ if(confirm('Obrisati zaposlenika?')){ employees.splice(i,1); localStorage.setItem('employees',JSON.stringify(employees)); renderEmployees(); updateKPIs(); }}

    function renderEquipment(){
      const tbody=document.querySelector('#equipmentTable tbody'); tbody.innerHTML='';
      equipment.forEach((eq,i)=>{ tbody.innerHTML+=`<tr><td>${eq.name}<td>${eq.status}<td><button onclick="removeEquipment(${i})">🗑️`; });
    }
    function addEquipment(){
      const name=document.getElementById('equipmentName').value.trim(), status=document.getElementById('equipmentStatus').value.trim();
      if(!name||!status) return alert('Naziv i status obavezni');
      equipment.push({name,status}); localStorage.setItem('equipment',JSON.stringify(equipment)); closeModal('equipmentModal'); renderEquipment(); updateKPIs();
    }
    function removeEquipment(i){ if(confirm('Obrisati opremu?')){ equipment.splice(i,1); localStorage.setItem('equipment',JSON.stringify(equipment)); renderEquipment(); updateKPIs(); }}

    // Finance table/chart
    function renderFinanceTable(){
      const tbody=document.getElementById('financeRows'); tbody.innerHTML='';
      for(let i=0;i<12;i++){
        const net = revenue[i]-cost[i];
        const rate = (net/hours[i]).toFixed(2);
        tbody.innerHTML+=`<tr>
          <td class="px-2 py-1">${months[i]}
          <td class="px-2 py-1">${buildings[i]}
          <td class="px-2 py-1">${hours[i]}
          <td class="px-2 py-1"><input id="rev${i}" type="number" class="w-20 border rounded px-1" value="${revenue[i]}">
          <td class="px-2 py-1"><input id="cost${i}" type="number" class="w-20 border rounded px-1" value="${cost[i]}">
          <td class="px-2 py-1" id="net${i}">${net}
          <td class="px-2 py-1" id="rate${i}">${rate}
        `;
      }
    }
    function initFinance(){
      // load or init data
      const storedRev = JSON.parse(localStorage.getItem('revenue')||'null');
      if(storedRev && storedRev.length===12){
        revenue = storedRev;
        cost = JSON.parse(localStorage.getItem('cost'));
        buildings = JSON.parse(localStorage.getItem('buildings')||JSON.stringify(initBuildings));
        hours = JSON.parse(localStorage.getItem('hours')||JSON.stringify(initHours));
      } else {
        revenue = initRevenue.slice(); cost = initCost.slice();
        buildings = initBuildings.slice(); hours = initHours.slice();
        localStorage.setItem('revenue',JSON.stringify(revenue));
        localStorage.setItem('cost',JSON.stringify(cost));
        localStorage.setItem('buildings',JSON.stringify(buildings));
        localStorage.setItem('hours',JSON.stringify(hours));
      }
      renderFinanceTable();
      // charts
      const ctx = document.getElementById('financeChart').getContext('2d');
      financeChart = new Chart(ctx,{
        type:'line',
        data:{labels:months,datasets:[
          {label:'Prihod',data:revenue,borderWidth:2,tension:0.3},
          {label:'Trošak',data:cost,borderWidth:2,tension:0.3},
          {label:'Neto',data:revenue.map((v,i)=>v-cost[i]),borderWidth:2,tension:0.3}
        ]},
        options:{responsive:true,scales:{y:{beginAtZero:true}}}
      });
      const ctx2 = document.getElementById('hourlyChart').getContext('2d');
      hourlyChart = new Chart(ctx2,{
        type:'bar',
        data:{labels:months,datasets:[
          {label:'Satnica',data:hours,borderWidth:1},
          {label:'Efektivna satnica',data:months.map((_,i)=>((revenue[i]-cost[i])/hours[i]).toFixed(2)),borderWidth:1}
        ]},
        options:{responsive:true,scales:{y:{beginAtZero:true}}}
      });
    }
    function updateFinance(){
      for(let i=0;i<12;i++){
        revenue[i] = Number(document.getElementById('rev'+i).value);
        cost[i]    = Number(document.getElementById('cost'+i).value);
        const net = revenue[i] - cost[i];
        const rate = (net/hours[i]).toFixed(2);
        document.getElementById('net'+i).innerText = net;
        document.getElementById('rate'+i).innerText = rate;
      }
      financeChart.data.datasets[0].data = revenue;
      financeChart.data.datasets[1].data = cost;
      financeChart.data.datasets[2].data = revenue.map((v,i)=>v-cost[i]);
      financeChart.update();
      hourlyChart.data.datasets[1].data = months.map((_,i)=>((revenue[i]-cost[i])/hours[i]).toFixed(2));
      hourlyChart.update();
      saveData();
    }

    // Calendar
    function initCalendar(){
      const el = document.getElementById('calendar');
      calendarInstance = new FullCalendar.Calendar(el,{
        initialView:'dayGridMonth',
        height:600,
        selectable:true,
        headerToolbar:{left:'title',center:'prev,next today',right:'dayGridMonth,timeGridWeek'},
        dateClick:info=>{const t=prompt('Naziv zadatka:');if(t){calendarInstance.addEvent({title:t,start:info.dateStr});updateKPIs();}}
      });
      calendarInstance.render();
    }

    // KPIs
    function updateKPIs(){
      document.getElementById('kpiClients').innerText = clients.length;
      document.getElementById('kpiEmployees').innerText = employees.length;
      document.getElementById('kpiTasks').innerText = calendarInstance.getEvents().length;
      document.getElementById('kpiRevenue').innerText = revenue.reduce((a,b)=>a+b,0);
      document.getElementById('kpiBuildings').innerText = buildings.reduce((a,b)=>a+b,0);
      const avg = (revenue.reduce((a,b,i)=>a+((b-cost[i])/hours[i]),0)/12).toFixed(2);
      document.getElementById('kpiAvgHourly').innerText = avg;
    }

    // Modals
    function openModal(id){document.getElementById('overlay').classList.remove('hidden');document.getElementById(id).classList.remove('hidden');}
    function closeModal(id){document.getElementById('overlay').classList.add('hidden');document.getElementById(id).classList.add('hidden');}

    // Init
    document.addEventListener('DOMContentLoaded',()=>{
      renderClients(); renderEmployees(); renderEquipment();
      initFinance(); initCalendar(); showSection('overview');
    });
  
    // Load initial data
    function loadInitialData() {
      if (!confirm('Učitati inicijalne testne podatke? Ovo će prebrisati postojeće.')) return;
      revenue = initRevenue.slice();
      cost = initCost.slice();
      buildings = initBuildings.slice();
      hours = initHours.slice();
      localStorage.setItem('revenue', JSON.stringify(revenue));
      localStorage.setItem('cost', JSON.stringify(cost));
      localStorage.setItem('buildings', JSON.stringify(buildings));
      localStorage.setItem('hours', JSON.stringify(hours));
      renderFinanceTable(); updateFinance(); updateKPIs();
    }

    // Reset all data to zero
    function resetData() {
      if (!confirm('Resetirati sve podatke na nulu?')) return;
      revenue = Array(12).fill(0);
      cost = Array(12).fill(0);
      buildings = Array(12).fill(0);
      hours = Array(12).fill(0);
      localStorage.setItem('revenue', JSON.stringify(revenue));
      localStorage.setItem('cost', JSON.stringify(cost));
      localStorage.setItem('buildings', JSON.stringify(buildings));
      localStorage.setItem('hours', JSON.stringify(hours));
      renderFinanceTable(); updateFinance(); updateKPIs();
    }

  </script></div>
</div>
</div></div></div></div></div></div><div id="wb_footer_a1976de6efde00902520b312949e4a0a" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a188dda148e748511ce746122eed1567" class="wb_element wb-anim-entry wb-anim wb-anim-fade-in-none wb-layout-element" data-plugin="LayoutElement" data-wb-anim-entry-time="0.6" data-wb-anim-entry-delay="0"><div class="wb_content wb-layout-absolute"><div id="a188dda148e749e8bf4b89de03522b25" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a188dda148e74ae845946ff0eb29e074" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap" style="height: 100%"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><a href="{{base_url}}"><svg xmlns="http://www.w3.org/2000/svg" width="1793.982" height="1793.982" viewBox="0 0 1793.982 1793.982" style="direction: ltr; color:#ffffff"><text x="385.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></a></div></div></div><div id="a188dda148e74bded7aceae7acc72043" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h4 class="wb-stl-pagetitle"><span style="color:#ffffff;">Cleaning service</span></h4>
</div></div></div><div id="a188dda148e74cfc3ff9ce3a5cfb80c2" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a188dda148e74dbd934f5ff41adb586d" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-footer"><strong>Address:</strong></p>

<p class="wb-stl-footer">Empire State Building</p>

<p class="wb-stl-footer">350 5th Ave</p>

<p class="wb-stl-footer">New York</p>

<p class="wb-stl-footer">NY 10118</p>

<p class="wb-stl-footer">USA</p>
</div><div id="a188dda148e74e251560eee8e0baf21b" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-footer"><strong>Phone:</strong></p>

<p class="wb-stl-footer"><a href="tel:+1 212 736 3100"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;">+1 212 736 3100</span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></a></p>

<p class="wb-stl-footer"><strong>Email:</strong><br><a data-_="Link" href="mailto:info@example.com">info@example.com</a></p>
</div></div></div><div id="a188dda148e74fbbb71549f46c7830ec" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dda148e750e90e497f7c99d32eb7" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a188dda148e751162d1eddbe064b42bb" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap" style="height: 100%"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><a href="{{base_url}}"><svg xmlns="http://www.w3.org/2000/svg" width="1793.982" height="1793.982" viewBox="0 0 1793.982 1793.982" style="direction: ltr; color:#ffffff"><text x="385.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></a></div></div></div><div id="a188dda148e75205fd1dc56d4fdfce6b" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap" style="height: 100%"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><a href="{{base_url}}"><svg xmlns="http://www.w3.org/2000/svg" width="1024" height="1024" viewBox="0 0 1024 1024" style="direction: ltr; color:#ffffff"><text x="0" y="960" font-size="1024" fill="currentColor" style='font-family: "builder-ui-icons-plugins"'></text></svg></a></div></div></div><div id="a188dda148e753d3a9f2d23000e75dc2" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap" style="height: 100%"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><a href="{{base_url}}"><svg xmlns="http://www.w3.org/2000/svg" width="1793.982" height="1793.982" viewBox="0 0 1793.982 1793.982" style="direction: ltr; color:#ffffff"><text x="129.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></a></div></div></div><div id="a188dda148e75458975db98ba200d499" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap" style="height: 100%"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><a href="{{base_url}}"><svg xmlns="http://www.w3.org/2000/svg" width="1793.982" height="1793.982" viewBox="0 0 1793.982 1793.982" style="direction: ltr; color:#ffffff"><text x="1.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></a></div></div></div></div></div><div id="a188dda148e755bee237e7bebbd35b8c" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-footer">© 2025 <a href="http://tmbv-hms.de">tmbv-hms.de</a></p></div><div id="a188dda148e756043bc84a02e0fff979" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery/c01ddc7e120d6b1979f9eb44f59db4ea.lock.png?ts=1749919455"></div></div></div></div></div><div id="a1976e0d321300036e1814856b323e88" class="wb_element wb-menu wb-prevent-layout-click wb-menu-mobile" data-plugin="Menu"><a class="btn btn-default btn-collapser"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a><ul class="hmenu" dir="ltr"><li class="wb_this_page_menu_item"><a href="test/">.</a></li></ul><div class="clearfix"></div></div></div></div><div id="wb_footer_c" class="wb_element" data-plugin="WB_Footer" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
			$(function() {
				var footer = $(".wb_footer");
				var html = (footer.html() + "").replace(/^\s+|\s+$/g, "");
				if (!html) {
					footer.parent().remove();
					footer = $("#footer, #footer .wb_cont_inner");
					footer.css({height: ""});
				}
			});
			</script></div></div></div></div>{{hr_out}}</body>
</html>

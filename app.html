<!DOCTYPE html>
<html lang="el">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>TV Scheduler Panel</title>
  <style>
    :root {
      --bg: #0f172a;
      --panel: #111827;
      --panel2: #1f2937;
      --text: #f8fafc;
      --muted: #94a3b8;
      --border: #334155;
      --accent: #38bdf8;
      --danger: #fb7185;
      --ok: #34d399;
      --warn: #fbbf24;
      --purple: #c084fc;
    }

    * { box-sizing: border-box; }

    body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
      background: linear-gradient(135deg, #020617, #0f172a);
      color: var(--text);
    }

    header {
      padding: 22px;
      border-bottom: 1px solid var(--border);
      background: rgba(15, 23, 42, 0.88);
      position: sticky;
      top: 0;
      z-index: 10;
      backdrop-filter: blur(10px);
    }

    header h1 {
      margin: 0 0 6px;
      font-size: 26px;
    }

    header p {
      margin: 0;
      color: var(--muted);
    }

    main {
      display: grid;
      grid-template-columns: 430px 1fr;
      gap: 18px;
      padding: 18px;
    }

    .card {
      background: rgba(17, 24, 39, 0.94);
      border: 1px solid var(--border);
      border-radius: 18px;
      padding: 16px;
      box-shadow: 0 18px 45px rgba(0,0,0,0.22);
    }

    .card h2 {
      margin: 0 0 12px;
      font-size: 18px;
    }

    label {
      display: block;
      margin: 12px 0 6px;
      color: var(--muted);
      font-size: 13px;
    }

    input, select, textarea, button {
      width: 100%;
      border-radius: 12px;
      border: 1px solid var(--border);
      background: #020617;
      color: var(--text);
      padding: 11px;
      font-size: 14px;
      outline: none;
    }

    textarea {
      min-height: 78px;
      resize: vertical;
    }

    input:focus, select:focus, textarea:focus {
      border-color: var(--accent);
      box-shadow: 0 0 0 3px rgba(56, 189, 248, 0.15);
    }

    .grid2 {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 10px;
    }

    .grid3 {
      display: grid;
      grid-template-columns: 1fr 1fr 1fr;
      gap: 10px;
    }

    .btnrow {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 10px;
      margin-top: 14px;
    }

    button {
      cursor: pointer;
      background: var(--accent);
      color: #001018;
      font-weight: bold;
      border: 0;
      transition: transform 0.08s ease, opacity 0.12s ease;
    }

    button:hover { opacity: 0.9; }
    button:active { transform: scale(0.99); }

    .secondary {
      background: #334155;
      color: var(--text);
    }

    .danger {
      background: var(--danger);
      color: #fff;
    }

    .ok {
      background: var(--ok);
      color: #052e1c;
    }

    .warn {
      background: var(--warn);
      color: #3b2500;
    }

    .purple {
      background: var(--purple);
      color: #210333;
    }

    .small {
      font-size: 12px;
      color: var(--muted);
      line-height: 1.45;
    }

    .toolbar {
      display: grid;
      grid-template-columns: 1fr 160px 160px;
      gap: 10px;
      margin-bottom: 14px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      overflow: hidden;
      border-radius: 14px;
    }

    th, td {
      padding: 11px 10px;
      border-bottom: 1px solid var(--border);
      vertical-align: top;
      font-size: 13px;
    }

    th {
      color: var(--muted);
      text-align: left;
      background: #020617;
      position: sticky;
      top: 91px;
      z-index: 5;
    }

    tr:hover td { background: rgba(56, 189, 248, 0.04); }

    .tag {
      display: inline-block;
      padding: 4px 8px;
      border-radius: 999px;
      font-size: 12px;
      font-weight: bold;
      color: #020617;
      margin-bottom: 4px;
    }

    .tag-ident { background: #38bdf8; }
    .tag-series { background: #a7f3d0; }
    .tag-show { background: #fde68a; }
    .tag-ads { background: #fecdd3; }
    .tag-movie { background: #ddd6fe; }
    .tag-other { background: #cbd5e1; }

    .actions {
      display: flex;
      gap: 6px;
    }

    .actions button {
      padding: 7px 8px;
      border-radius: 9px;
      font-size: 12px;
      width: auto;
    }

    .notice {
      border: 1px dashed var(--border);
      border-radius: 14px;
      padding: 11px;
      color: var(--muted);
      margin-top: 12px;
      line-height: 1.45;
    }

    .preview-box {
      white-space: pre-wrap;
      background: #020617;
      border: 1px solid var(--border);
      border-radius: 14px;
      padding: 12px;
      color: #dbeafe;
      max-height: 260px;
      overflow: auto;
      font-family: Consolas, monospace;
      font-size: 12px;
    }

    .conflict {
      color: var(--danger);
      font-weight: bold;
    }

    .now {
      outline: 2px solid var(--ok);
      outline-offset: -2px;
    }

    @media (max-width: 980px) {
      main { grid-template-columns: 1fr; }
      .toolbar { grid-template-columns: 1fr; }
      th { position: static; }
    }
  </style>
</head>
<body>
  <header>
    <h1>TV Scheduler Panel</h1>
    <p>Προγραμμάτισε σειρές, εκπομπές, διαφημίσεις και ident ανά ώρα Ελλάδας.</p>
  </header>

  <main>
    <section class="card">
      <h2>Προσθήκη προγράμματος</h2>

      <label>Τύπος</label>
      <select id="type">
        <option value="series">Σειρά</option>
        <option value="show">Εκπομπή</option>
        <option value="movie">Ταινία</option>
        <option value="ads">Διαφημίσεις</option>
        <option value="ident">Ident Καναλιού</option>
        <option value="other">Άλλο</option>
      </select>

      <label>Τίτλος</label>
      <input id="title" placeholder="π.χ. Η σειρά μου - Επεισόδιο 12" />

      <div class="grid2">
        <div>
          <label>Ώρα έναρξης Ελλάδας</label>
          <input id="start" type="time" value="18:00" />
        </div>
        <div>
          <label>Διάρκεια</label>
          <input id="duration" type="number" min="1" value="30" />
        </div>
      </div>

      <label>Μονάδα διάρκειας</label>
      <select id="durationUnit">
        <option value="minutes">Λεπτά</option>
        <option value="seconds">Δευτερόλεπτα</option>
      </select>

      <label>URL βίντεο / m3u8 / αρχείο</label>
      <input id="url" placeholder="π.χ. https://site.com/video.m3u8 ή C:\videos\episode.mp4" />

      <label>Στήλη / Ζώνη</label>
      <select id="column">
        <option value="main">Κύριο πρόγραμμα</option>
        <option value="repeat">Επαναλήψεις</option>
        <option value="kids">Παιδική ζώνη</option>
        <option value="late">Late night</option>
        <option value="ads">Διαφημιστικό block</option>
      </select>

      <label>Σημειώσεις</label>
      <textarea id="notes" placeholder="π.χ. Να μπει μετά από διαφημίσεις ή πριν το δελτίο"></textarea>

      <div class="btnrow">
        <button onclick="addItem()">Προσθήκη</button>
        <button class="secondary" onclick="clearForm()">Καθαρισμός</button>
      </div>

      <div class="notice">
        <strong>Ident καναλιού:</strong> Μπορείς να ορίσεις μόνιμο ident και να το βάζει αυτόματα πριν και μετά από κάθε κανονικό πρόγραμμα.
      </div>

      <h2 style="margin-top:18px;">Μόνιμο Ident</h2>
      <label>Ident URL / αρχείο</label>
      <input id="identUrl" placeholder="π.χ. C:\videos\ident.mp4" />

      <div class="grid2">
        <div>
          <label>Διάρκεια ident</label>
          <input id="identDuration" type="number" min="1" value="10" />
        </div>
        <div>
          <label>Μονάδα</label>
          <select id="identUnit">
            <option value="seconds">Δευτερόλεπτα</option>
            <option value="minutes">Λεπτά</option>
          </select>
        </div>
      </div>

      <div class="grid2" style="margin-top:10px;">
        <button class="purple" onclick="saveIdentSettings()">Αποθήκευση ident</button>
        <button class="secondary" onclick="autoInsertIdents()">Βάλε ident αυτόματα</button>
      </div>

      <h2 style="margin-top:18px;">Διαφημίσεις</h2>
      <label>Γρήγορο διαφημιστικό block στις</label>
      <div class="grid3">
        <input id="adTime" type="time" value="19:55" />
        <input id="adDuration" type="number" min="1" value="5" />
        <button class="warn" onclick="quickAdBlock()">Add</button>
      </div>
    </section>

    <section class="card">
      <div class="toolbar">
        <input id="search" placeholder="Αναζήτηση τίτλου, τύπου, ζώνης..." oninput="render()" />
        <select id="filterColumn" onchange="render()">
          <option value="all">Όλες οι στήλες</option>
          <option value="main">Κύριο πρόγραμμα</option>
          <option value="repeat">Επαναλήψεις</option>
          <option value="kids">Παιδική ζώνη</option>
          <option value="late">Late night</option>
          <option value="ads">Διαφημιστικό block</option>
        </select>
        <button class="ok" onclick="downloadScheduleJson()">Export JSON</button>
      </div>

      <div class="btnrow" style="margin-bottom:14px;">
        <button class="secondary" onclick="downloadM3U()">Export M3U</button>
        <button class="danger" onclick="clearSchedule()">Διαγραφή όλων</button>
      </div>

      <h2>Ημερήσιο πρόγραμμα</h2>
      <table>
        <thead>
          <tr>
            <th>Ώρα</th>
            <th>Τύπος</th>
            <th>Τίτλος / URL</th>
            <th>Στήλη</th>
            <th>Ενέργειες</th>
          </tr>
        </thead>
        <tbody id="scheduleBody"></tbody>
      </table>

      <h2 style="margin-top:18px;">Preview για scheduler</h2>
      <div id="jsonPreview" class="preview-box"></div>
    </section>
  </main>

  <script>
    const STORAGE_KEY = "tv_scheduler_items_v1";
    const IDENT_KEY = "tv_scheduler_ident_v1";

    let items = loadItems();
    let editId = null;

    const typeLabels = {
      series: "Σειρά",
      show: "Εκπομπή",
      movie: "Ταινία",
      ads: "Διαφημίσεις",
      ident: "Ident Καναλιού",
      other: "Άλλο"
    };

    const columnLabels = {
      main: "Κύριο πρόγραμμα",
      repeat: "Επαναλήψεις",
      kids: "Παιδική ζώνη",
      late: "Late night",
      ads: "Διαφημιστικό block"
    };

    function loadItems() {
      try {
        return JSON.parse(localStorage.getItem(STORAGE_KEY)) || [];
      } catch {
        return [];
      }
    }

    function saveItems() {
      localStorage.setItem(STORAGE_KEY, JSON.stringify(items));
    }

    function loadIdentSettings() {
      try {
        return JSON.parse(localStorage.getItem(IDENT_KEY)) || {
          url: "",
          duration: 10,
          unit: "seconds"
        };
      } catch {
        return { url: "", duration: 10, unit: "seconds" };
      }
    }

    function saveIdentSettings() {
      const settings = {
        url: document.getElementById("identUrl").value.trim(),
        duration: Number(document.getElementById("identDuration").value),
        unit: document.getElementById("identUnit").value
      };

      if (!settings.url) {
        alert("Βάλε URL ή αρχείο για το ident.");
        return;
      }

      localStorage.setItem(IDENT_KEY, JSON.stringify(settings));
      alert("Το ident αποθηκεύτηκε.");
    }

    function restoreIdentFields() {
      const s = loadIdentSettings();
      document.getElementById("identUrl").value = s.url || "";
      document.getElementById("identDuration").value = s.duration || 10;
      document.getElementById("identUnit").value = s.unit || "seconds";
    }

    function toMinutes(duration, unit) {
      const value = Number(duration) || 0;
      return unit === "seconds" ? value / 60 : value;
    }

    function toSeconds(duration, unit) {
      const value = Number(duration) || 0;
      return unit === "minutes" ? value * 60 : value;
    }

    function timeToMinutes(t) {
      const [h, m] = t.split(":").map(Number);
      return h * 60 + m;
    }

    function minutesToTime(total) {
      total = ((Math.round(total) % 1440) + 1440) % 1440;
      const h = Math.floor(total / 60);
      const m = total % 60;
      return String(h).padStart(2, "0") + ":" + String(m).padStart(2, "0");
    }

    function endTimeOf(item) {
      return minutesToTime(timeToMinutes(item.start) + toMinutes(item.duration, item.durationUnit));
    }

    function uid() {
      return Date.now().toString(36) + Math.random().toString(36).slice(2);
    }

    function addItem() {
      const item = {
        id: editId || uid(),
        type: document.getElementById("type").value,
        title: document.getElementById("title").value.trim(),
        start: document.getElementById("start").value,
        duration: Number(document.getElementById("duration").value),
        durationUnit: document.getElementById("durationUnit").value,
        url: document.getElementById("url").value.trim(),
        column: document.getElementById("column").value,
        notes: document.getElementById("notes").value.trim()
      };

      if (!item.title) {
        alert("Βάλε τίτλο.");
        return;
      }

      if (!item.start) {
        alert("Βάλε ώρα έναρξης.");
        return;
      }

      if (!item.duration || item.duration <= 0) {
        alert("Βάλε σωστή διάρκεια.");
        return;
      }

      if (editId) {
        items = items.map(x => x.id === editId ? item : x);
        editId = null;
      } else {
        items.push(item);
      }

      sortItems();
      saveItems();
      clearForm();
      render();
    }

    function clearForm() {
      editId = null;
      document.getElementById("type").value = "series";
      document.getElementById("title").value = "";
      document.getElementById("start").value = "18:00";
      document.getElementById("duration").value = 30;
      document.getElementById("durationUnit").value = "minutes";
      document.getElementById("url").value = "";
      document.getElementById("column").value = "main";
      document.getElementById("notes").value = "";
    }

    function sortItems() {
      items.sort((a, b) => timeToMinutes(a.start) - timeToMinutes(b.start));
    }

    function editItem(id) {
      const item = items.find(x => x.id === id);
      if (!item) return;

      editId = id;
      document.getElementById("type").value = item.type;
      document.getElementById("title").value = item.title;
      document.getElementById("start").value = item.start;
      document.getElementById("duration").value = item.duration;
      document.getElementById("durationUnit").value = item.durationUnit || "minutes";
      document.getElementById("url").value = item.url || "";
      document.getElementById("column").value = item.column || "main";
      document.getElementById("notes").value = item.notes || "";
      window.scrollTo({ top: 0, behavior: "smooth" });
    }

    function deleteItem(id) {
      if (!confirm("Να διαγραφεί αυτό το πρόγραμμα;")) return;
      items = items.filter(x => x.id !== id);
      saveItems();
      render();
    }

    function duplicateItem(id) {
      const item = items.find(x => x.id === id);
      if (!item) return;

      const copy = {
        ...item,
        id: uid(),
        title: item.title + " copy",
        start: endTimeOf(item)
      };

      items.push(copy);
      sortItems();
      saveItems();
      render();
    }

    function hasConflict(item, list) {
      if (item.type === "ident") return false;

      const start = timeToMinutes(item.start);
      const end = start + toMinutes(item.duration, item.durationUnit);

      return list.some(other => {
        if (other.id === item.id) return false;
        if (other.type === "ident") return false;
        if ((other.column || "main") !== (item.column || "main")) return false;

        const oStart = timeToMinutes(other.start);
        const oEnd = oStart + toMinutes(other.duration, other.durationUnit);
        return start < oEnd && end > oStart;
      });
    }

    function currentlyPlaying(item) {
      const now = new Date();
      const nowMinutes = now.getHours() * 60 + now.getMinutes();
      const start = timeToMinutes(item.start);
      const end = start + toMinutes(item.duration, item.durationUnit);
      return nowMinutes >= start && nowMinutes < end;
    }

    function render() {
      sortItems();
      const tbody = document.getElementById("scheduleBody");
      const search = document.getElementById("search").value.toLowerCase();
      const filterColumn = document.getElementById("filterColumn").value;

      tbody.innerHTML = "";

      const filtered = items.filter(item => {
        const haystack = [
          item.title,
          item.type,
          typeLabels[item.type],
          item.column,
          columnLabels[item.column],
          item.url,
          item.notes
        ].join(" ").toLowerCase();

        const matchesSearch = haystack.includes(search);
        const matchesColumn = filterColumn === "all" || item.column === filterColumn;
        return matchesSearch && matchesColumn;
      });

      if (filtered.length === 0) {
        tbody.innerHTML = `<tr><td colspan="5" class="small">Δεν υπάρχει πρόγραμμα ακόμα.</td></tr>`;
      }

      filtered.forEach(item => {
        const tr = document.createElement("tr");
        if (currentlyPlaying(item)) tr.classList.add("now");

        const conflict = hasConflict(item, items);
        const end = endTimeOf(item);
        const durationText = item.durationUnit === "seconds" ? `${item.duration}s` : `${item.duration}'`;

        tr.innerHTML = `
          <td>
            <strong>${item.start} - ${end}</strong><br />
            <span class="small">${durationText}</span>
            ${conflict ? `<div class="conflict">Σύγκρουση ώρας</div>` : ""}
          </td>
          <td><span class="tag tag-${item.type}">${typeLabels[item.type] || item.type}</span></td>
          <td>
            <strong>${escapeHtml(item.title)}</strong><br />
            <span class="small">${escapeHtml(item.url || "χωρίς URL")}</span>
            ${item.notes ? `<br /><span class="small">${escapeHtml(item.notes)}</span>` : ""}
          </td>
          <td>${columnLabels[item.column] || item.column}</td>
          <td>
            <div class="actions">
              <button class="secondary" onclick="editItem('${item.id}')">Edit</button>
              <button class="secondary" onclick="duplicateItem('${item.id}')">Copy</button>
              <button class="danger" onclick="deleteItem('${item.id}')">X</button>
            </div>
          </td>
        `;

        tbody.appendChild(tr);
      });

      updatePreview();
    }

    function escapeHtml(value) {
      return String(value || "")
        .replaceAll("&", "&amp;")
        .replaceAll("<", "&lt;")
        .replaceAll(">", "&gt;")
        .replaceAll('"', "&quot;")
        .replaceAll("'", "&#039;");
    }

    function buildSchedulerJson() {
      return {
        timezone: "Europe/Athens",
        generatedAt: new Date().toISOString(),
        ident: loadIdentSettings(),
        items: items.map(item => ({
          start: item.start,
          end: endTimeOf(item),
          type: item.type,
          title: item.title,
          url: item.url,
          column: item.column,
          durationSeconds: toSeconds(item.duration, item.durationUnit),
          notes: item.notes || ""
        }))
      };
    }

    function updatePreview() {
      document.getElementById("jsonPreview").textContent = JSON.stringify(buildSchedulerJson(), null, 2);
    }

    function downloadFile(filename, content, mime) {
      const blob = new Blob([content], { type: mime });
      const url = URL.createObjectURL(blob);
      const a = document.createElement("a");
      a.href = url;
      a.download = filename;
      document.body.appendChild(a);
      a.click();
      a.remove();
      URL.revokeObjectURL(url);
    }

    function downloadScheduleJson() {
      downloadFile("schedule.json", JSON.stringify(buildSchedulerJson(), null, 2), "application/json");
    }

    function downloadM3U() {
      let output = "#EXTM3U\n";

      items.forEach(item => {
        const seconds = toSeconds(item.duration, item.durationUnit);
        output += `#EXTINF:${seconds},${item.start} - ${item.title}\n`;
        output += `#TVSCHED:type=${item.type};start=${item.start};end=${endTimeOf(item)};column=${item.column}\n`;
        output += `${item.url || "# NO URL"}\n`;
      });

      downloadFile("program_playlist.m3u", output, "audio/x-mpegurl");
    }

    function clearSchedule() {
      if (!confirm("Να διαγραφεί όλο το πρόγραμμα;")) return;
      items = [];
      saveItems();
      render();
    }

    function autoInsertIdents() {
      const settings = loadIdentSettings();
      if (!settings.url) {
        alert("Πρώτα βάλε και αποθήκευσε ident URL.");
        return;
      }

      const identMinutes = toMinutes(settings.duration, settings.unit);
      const normalItems = items.filter(item => item.type !== "ident");

      const newIdents = [];

      normalItems.forEach(item => {
        const startMin = timeToMinutes(item.start);
        const endMin = timeToMinutes(endTimeOf(item));

        const beforeStart = minutesToTime(startMin - identMinutes);
        const afterStart = minutesToTime(endMin);

        newIdents.push({
          id: uid(),
          type: "ident",
          title: "Ident πριν: " + item.title,
          start: beforeStart,
          duration: settings.duration,
          durationUnit: settings.unit,
          url: settings.url,
          column: item.column || "main",
          notes: "Αυτόματο ident πριν το πρόγραμμα"
        });

        newIdents.push({
          id: uid(),
          type: "ident",
          title: "Ident μετά: " + item.title,
          start: afterStart,
          duration: settings.duration,
          durationUnit: settings.unit,
          url: settings.url,
          column: item.column || "main",
          notes: "Αυτόματο ident μετά το πρόγραμμα"
        });
      });

      items = items.filter(item => item.type !== "ident");
      items.push(...newIdents);
      sortItems();
      saveItems();
      render();
    }

    function quickAdBlock() {
      const start = document.getElementById("adTime").value;
      const duration = Number(document.getElementById("adDuration").value);

      if (!start || !duration) {
        alert("Βάλε ώρα και διάρκεια διαφημίσεων.");
        return;
      }

      items.push({
        id: uid(),
        type: "ads",
        title: "Διαφημιστικό block",
        start,
        duration,
        durationUnit: "minutes",
        url: "",
        column: "ads",
        notes: "Γρήγορη προσθήκη διαφημίσεων"
      });

      sortItems();
      saveItems();
      render();
    }

    restoreIdentFields();
    render();
    setInterval(render, 30000);
  </script>
</body>
</html>

<!DOCTYPE html>
<html class="light" lang="en">
<head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>Bosowa GAIS - Add New Asset</title>

  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100..700&display=swap" rel="stylesheet"/>

  <script>
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          colors: {
            primary: "#137fec",
            secondary: "#e11d48",
            "background-light": "#f6f7f8",
            "background-dark": "#101922",
          },
          fontFamily: { display: ["Inter"] },
          borderRadius: { DEFAULT: "0.25rem", lg: "0.5rem", xl: "0.75rem", full: "9999px" },
        },
      },
    }
  </script>

  <style type="text/tailwindcss">
    @layer base {
      input[type="text"], input[type="date"], input[type="number"], select, textarea {
        @apply bg-slate-50 border-slate-200 rounded-lg text-sm focus:ring-primary focus:border-primary w-full transition-colors dark:bg-slate-800 dark:border-slate-700 dark:text-white;
      }
      label { @apply block text-xs font-semibold text-slate-500 uppercase tracking-wider mb-1.5 dark:text-slate-400; }
    }
  </style>
</head>

<body class="font-display bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 min-h-screen flex">
  {{-- Sidebar & header kamu biarkan sama (aku ringkas biar fokus ke form) --}}
  <main class="flex-1 flex flex-col min-h-screen">
    <div class="p-8 max-w-5xl mx-auto w-full">

      <div class="flex items-center justify-between mb-6">
        <div>
          <h2 class="text-2xl font-bold text-slate-800 dark:text-white">Register New Asset</h2>
          <p class="text-slate-500 text-sm">Enter the details to add a new physical asset to the inventory.</p>
        </div>

        <a href="{{ route('assets.index') }}" class="text-slate-500 hover:text-slate-800 flex items-center gap-1 transition-colors">
          <span class="material-icons text-sm">arrow_back</span>
          <span class="text-sm font-medium">Back to List</span>
        </a>
      </div>

      {{-- ERROR LIST --}}
      @if ($errors->any())
        <div class="mb-6 rounded-lg border border-red-200 bg-red-50 p-4 text-sm text-red-700">
          <div class="font-semibold mb-2">Validation error:</div>
          <ul class="list-disc pl-5 space-y-1">
            @foreach ($errors->all() as $e)
              <li>{{ $e }}</li>
            @endforeach
          </ul>
        </div>
      @endif

      <div class="bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm overflow-hidden">
        <form class="p-8 space-y-10"
              method="POST"
              action="{{ route('assets.store') }}"
              enctype="multipart/form-data"
              id="assetForm">
          @csrf

          {{-- Basic Information --}}
          <section>
            <div class="flex items-center gap-2 mb-6 pb-2 border-b border-slate-100 dark:border-slate-800">
              <span class="material-icons text-primary">info</span>
              <h3 class="text-lg font-bold text-slate-800 dark:text-white">Basic Information</h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
              <div class="md:col-span-2">
                <label for="asset_name">Asset Name</label>
                <input id="asset_name" name="name" value="{{ old('name') }}" placeholder="e.g. MacBook Pro 14' M3" required type="text"/>
              </div>

              <div>
                <label for="category">Category</label>
                {{-- Backend kamu sekarang validate category = string nullable, jadi kirim string --}}
                <select id="category" name="category">
                  <option value="">Select Category</option>
                  <option value="IT Hardware" @selected(old('category')==='IT Hardware')>IT Hardware</option>
                  <option value="Operations Vehicle" @selected(old('category')==='Operations Vehicle')>Operations Vehicle</option>
                  <option value="Office Furniture" @selected(old('category')==='Office Furniture')>Office Furniture</option>
                  <option value="Production Equipment" @selected(old('category')==='Production Equipment')>Production Equipment</option>
                </select>
              </div>

              <div>
                <label for="asset_tag">Asset ID / Tag Prefix</label>
                <div class="flex">
                  <span class="inline-flex items-center px-3 text-sm text-slate-500 bg-slate-100 dark:bg-slate-800 border border-r-0 border-slate-200 dark:border-slate-700 rounded-l-lg">BSW-</span>
                  {{-- Optional: kalau kamu mau pakai input ini utk asset code, perlu ubah controller.
                       Untuk sekarang controller auto-generate asset_code, jadi ini hanya UI.
                  --}}
                  <input class="rounded-l-none" id="asset_tag" name="asset_tag_ui" value="{{ old('asset_tag_ui') }}" placeholder="IT-2024-001" type="text"/>
                </div>
                <p class="text-[11px] mt-1 text-slate-400">*Asset code currently auto-generated by system on save.</p>
              </div>
            </div>
          </section>

          {{-- Technical Details --}}
          <section>
            <div class="flex items-center gap-2 mb-6 pb-2 border-b border-slate-100 dark:border-slate-800">
              <span class="material-icons text-primary">settings_suggest</span>
              <h3 class="text-lg font-bold text-slate-800 dark:text-white">Technical Details</h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
              <div class="space-y-6">
                <div>
                  <label for="serial_number">Serial Number</label>
                  <input id="serial_number" name="serial_number" value="{{ old('serial_number') }}" placeholder="SN-XXXXXXXXXX" type="text"/>
                </div>

                <div>
                  <label for="brand">Model / Brand</label>
                  {{-- Simpan ke description/specifications atau tambah kolom sendiri. Saat ini controller TIDAK simpan model_brand.
                      Aku simpan ke description otomatis via JS optional (di bawah), atau kamu tambah kolom & controller.
                  --}}
                  <input id="brand" name="model_brand_ui" value="{{ old('model_brand_ui') }}" placeholder="e.g. Apple / Dell / Toyota" type="text"/>
                </div>

                <div>
                  <label for="specifications">Specifications</label>
                  {{-- Controller kamu saat ini tidak punya field specifications. Aku map ke description juga via JS optional. --}}
                  <textarea id="specifications" name="specifications_ui" placeholder="Detailed technical specifications..." rows="3">{{ old('specifications_ui') }}</textarea>
                </div>

                <div>
                  <label for="description">Description / Notes</label>
                  <textarea id="description" name="description" placeholder="Additional notes..." rows="3">{{ old('description') }}</textarea>
                </div>
              </div>

              {{-- PHOTO UPLOAD + CAMERA --}}
              <div class="space-y-2">
                <label>Capture/Upload Asset Photo</label>

                <div class="h-full border-2 border-dashed border-slate-200 dark:border-slate-700 rounded-xl bg-slate-50 dark:bg-slate-800/50 flex flex-col items-center justify-center p-6 text-center group hover:border-primary transition-colors min-h-[220px]">

                  {{-- Preview area --}}
                  <img id="photoPreview" class="hidden w-full max-h-56 object-contain rounded-lg border border-slate-200 dark:border-slate-700 mb-4" alt="Preview"/>

                  <div id="photoPlaceholder" class="flex flex-col items-center justify-center">
                    <div class="w-16 h-16 bg-white dark:bg-slate-900 rounded-full shadow-sm flex items-center justify-center mb-3 group-hover:scale-110 transition-transform">
                      <span class="material-icons text-slate-400 group-hover:text-primary text-3xl">photo_camera</span>
                    </div>
                    <p class="text-sm font-semibold text-slate-700 dark:text-slate-300">Upload / take photo</p>
                    <p class="text-xs text-slate-500 mt-1">browse file or open camera</p>
                  </div>

                  {{-- Input file yang benar-benar dikirim ke backend --}}
                  <input id="photoInput" name="photo" accept="image/*" class="hidden" type="file"/>

                  <div class="mt-4 flex gap-2">
                    <button id="browseBtn" class="text-[10px] uppercase tracking-wider font-bold px-3 py-1 bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-700 rounded-full hover:bg-slate-50 dark:hover:bg-slate-800" type="button">
                      Browse Files
                    </button>

                    <button id="openCameraBtn" class="text-[10px] uppercase tracking-wider font-bold px-3 py-1 bg-primary text-white rounded-full hover:bg-primary/90" type="button">
                      Open Camera
                    </button>
                  </div>

                  {{-- Camera modal --}}
                  <div id="cameraModal" class="hidden fixed inset-0 bg-black/50 items-center justify-center z-50">
                    <div class="bg-white dark:bg-slate-900 rounded-xl p-4 w-[92%] max-w-xl border border-slate-200 dark:border-slate-700">
                      <div class="flex items-center justify-between mb-3">
                        <div class="font-bold">Camera</div>
                        <button type="button" id="closeCameraBtn" class="p-2 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-800">
                          <span class="material-icons">close</span>
                        </button>
                      </div>

                      <video id="cameraVideo" autoplay playsinline class="w-full rounded-lg bg-black"></video>
                      <canvas id="cameraCanvas" class="hidden"></canvas>

                      <div class="flex gap-2 mt-3 justify-end">
                        <button type="button" id="captureBtn" class="px-4 py-2 rounded-lg bg-primary text-white font-semibold hover:bg-primary/90">
                          Capture
                        </button>
                        <button type="button" id="stopCameraBtn" class="px-4 py-2 rounded-lg bg-slate-200 dark:bg-slate-700 font-semibold hover:bg-slate-300 dark:hover:bg-slate-600">
                          Stop
                        </button>
                      </div>

                      <p class="text-xs text-slate-500 mt-2">
                        *Jika browser menolak akses kamera, pastikan pakai HTTPS atau localhost dan beri permission.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          {{-- Procurement Info --}}
          <section>
            <div class="flex items-center gap-2 mb-6 pb-2 border-b border-slate-100 dark:border-slate-800">
              <span class="material-icons text-primary">shopping_bag</span>
              <h3 class="text-lg font-bold text-slate-800 dark:text-white">Procurement Info</h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
              <div>
                <label for="vendor">Vendor Selection</label>
                {{-- Controller sekarang belum simpan vendor/purchase_date/purchase_price.
                    Kalau kamu mau simpan, tambahkan kolom + controller.
                    Untuk saat ini, aku kirim sebagai hidden mapping ke description via JS optional.
                --}}
                <select id="vendor" name="vendor_ui">
                  <option value="">Select Vendor</option>
                  <option value="Mitra Solusi IT" @selected(old('vendor_ui')==='Mitra Solusi IT')>Mitra Solusi IT</option>
                  <option value="Astra International" @selected(old('vendor_ui')==='Astra International')>Astra International</option>
                  <option value="Informa Furnishings" @selected(old('vendor_ui')==='Informa Furnishings')>Informa Furnishings</option>
                </select>
              </div>

              <div>
                <label for="purchase_date">Purchase Date</label>
                <input id="purchase_date" name="purchase_date_ui" value="{{ old('purchase_date_ui') }}" type="date"/>
              </div>

              <div>
                <label for="purchase_price">Purchase Price</label>
                <div class="flex">
                  <span class="inline-flex items-center px-3 text-sm text-slate-500 bg-slate-100 dark:bg-slate-800 border border-r-0 border-slate-200 dark:border-slate-700 rounded-l-lg">IDR</span>
                  <input class="rounded-l-none" id="purchase_price" name="purchase_price_ui" value="{{ old('purchase_price_ui') }}" placeholder="0" type="number" min="0"/>
                </div>
              </div>

              <div>
                <label for="warranty_expiry">Warranty Expiry Date</label>
                <input id="warranty_expiry" name="warranty_expiry" value="{{ old('warranty_expiry') }}" type="date"/>
              </div>
            </div>
          </section>

          <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
            {{-- Location --}}
            <section>
              <div class="flex items-center gap-2 mb-6 pb-2 border-b border-slate-100 dark:border-slate-800">
                <span class="material-icons text-primary">place</span>
                <h3 class="text-lg font-bold text-slate-800 dark:text-white">Location & Assignment</h3>
              </div>

              <div class="space-y-6">
                <div>
                  <label for="location">Room / Office Location</label>
                  {{-- backend validate location string nullable -> kirim string --}}
                  <select id="location" name="location">
                    <option value="">Select Location</option>
                    <option value="Head Office - Level 5" @selected(old('location')==='Head Office - Level 5')>Head Office - Level 5</option>
                    <option value="Makassar Plant - Warehouse A" @selected(old('location')==='Makassar Plant - Warehouse A')>Makassar Plant - Warehouse A</option>
                    <option value="Maros Site - Admin Block" @selected(old('location')==='Maros Site - Admin Block')>Maros Site - Admin Block</option>
                  </select>
                </div>

                <div>
                  <label for="pic">Assigned User / PIC</label>
                  {{-- backend belum simpan PIC. Kirim utk mapping opsional --}}
                  <input id="pic" name="pic_ui" value="{{ old('pic_ui') }}" placeholder="Search by name or employee ID" type="text"/>
                </div>
              </div>
            </section>

            {{-- Condition --}}
            <section>
              <div class="flex items-center gap-2 mb-6 pb-2 border-b border-slate-100 dark:border-slate-800">
                <span class="material-icons text-primary">health_and_safety</span>
                <h3 class="text-lg font-bold text-slate-800 dark:text-white">Asset Condition</h3>
              </div>

              <div class="space-y-4">
                <label>Current Status</label>

                <div class="grid grid-cols-3 gap-3">
                  <label class="flex flex-col items-center justify-center p-4 border rounded-lg cursor-pointer hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors border-slate-200 dark:border-slate-700 [&:has(input:checked)]:border-primary [&:has(input:checked)]:bg-primary/5">
                    <input class="hidden" name="condition" type="radio" value="good" @checked(old('condition','good')==='good') />
                    <span class="material-icons text-green-500 mb-1">check_circle</span>
                    <span class="text-sm font-semibold">Good</span>
                  </label>

                  <label class="flex flex-col items-center justify-center p-4 border rounded-lg cursor-pointer hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors border-slate-200 dark:border-slate-700 [&:has(input:checked)]:border-primary [&:has(input:checked)]:bg-primary/5">
                    <input class="hidden" name="condition" type="radio" value="fair" @checked(old('condition')==='fair') />
                    <span class="material-icons text-amber-500 mb-1">warning</span>
                    <span class="text-sm font-semibold">Fair</span>
                  </label>

                  <label class="flex flex-col items-center justify-center p-4 border rounded-lg cursor-pointer hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors border-slate-200 dark:border-slate-700 [&:has(input:checked)]:border-primary [&:has(input:checked)]:bg-primary/5">
                    <input class="hidden" name="condition" type="radio" value="broken" @checked(old('condition')==='broken') />
                    <span class="material-icons text-secondary mb-1">cancel</span>
                    <span class="text-sm font-semibold">Broken</span>
                  </label>
                </div>
              </div>
            </section>
          </div>

          {{-- Footer actions --}}
          <div class="pt-8 border-t border-slate-200 dark:border-slate-800 flex flex-col md:flex-row items-end md:items-center justify-between gap-6">
            <div class="flex items-center gap-4 bg-slate-50 dark:bg-slate-800/50 p-4 rounded-xl border border-slate-200 dark:border-slate-700">
              <div class="p-2 bg-white rounded-lg shadow-inner">
                <span class="material-symbols-outlined text-5xl text-slate-900">qr_code_2</span>
              </div>
              <div>
                <h4 class="text-xs font-bold text-slate-800 dark:text-white uppercase tracking-tight">Generate Asset Tag</h4>
                <p class="text-[10px] text-slate-500 mb-2">QR will be generated after saving.</p>
                <button id="previewQrBtn" class="px-3 py-1.5 bg-slate-200 dark:bg-slate-700 hover:bg-primary hover:text-white text-slate-700 dark:text-slate-200 rounded-md text-[10px] font-bold uppercase transition-all flex items-center gap-1" type="button">
                  <span class="material-icons text-xs">refresh</span>
                  Preview QR Code
                </button>
              </div>
            </div>

            <div class="flex items-center gap-4">
              <a href="{{ route('assets.index') }}" class="px-6 py-2.5 rounded-lg font-semibold text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors">
                Cancel
              </a>

              <button class="px-8 py-2.5 bg-primary hover:bg-primary/90 text-white rounded-lg font-bold shadow-lg shadow-primary/20 transition-all" type="submit">
                Save Asset
              </button>
            </div>
          </div>

          {{-- QR Preview Modal --}}
          <div id="qrModal" class="hidden fixed inset-0 bg-black/50 items-center justify-center z-50">
            <div class="bg-white dark:bg-slate-900 rounded-xl p-4 w-[92%] max-w-md border border-slate-200 dark:border-slate-700">
              <div class="flex items-center justify-between mb-3">
                <div class="font-bold">QR Preview</div>
                <button type="button" id="closeQrBtn" class="p-2 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-800">
                  <span class="material-icons">close</span>
                </button>
              </div>

              <div class="text-sm text-slate-600 dark:text-slate-300 mb-2">
                Preview data (will be used after saving):
              </div>

              <div class="text-xs break-all bg-slate-50 dark:bg-slate-800/60 border border-slate-200 dark:border-slate-700 rounded-lg p-3" id="qrDataBox"></div>

              <p class="text-xs text-slate-500 mt-3">
                *QR file is generated by backend after save (recommended).
              </p>
            </div>
          </div>

          {{-- Optional hidden to store merged info into description --}}
          <input type="hidden" name="description_merged" id="descriptionMerged" />
        </form>
      </div>
    </div>
  </main>

  <script>
    // ===== File picker & preview =====
    const photoInput = document.getElementById('photoInput');
    const browseBtn = document.getElementById('browseBtn');
    const photoPreview = document.getElementById('photoPreview');
    const photoPlaceholder = document.getElementById('photoPlaceholder');

    browseBtn?.addEventListener('click', () => photoInput.click());

    function showPreviewFromFile(file) {
      if (!file) return;
      const url = URL.createObjectURL(file);
      photoPreview.src = url;
      photoPreview.classList.remove('hidden');
      photoPlaceholder.classList.add('hidden');
    }

    photoInput?.addEventListener('change', (e) => {
      const file = e.target.files?.[0];
      showPreviewFromFile(file);
    });

    // ===== Camera =====
    const openCameraBtn = document.getElementById('openCameraBtn');
    const cameraModal = document.getElementById('cameraModal');
    const closeCameraBtn = document.getElementById('closeCameraBtn');
    const stopCameraBtn = document.getElementById('stopCameraBtn');
    const captureBtn = document.getElementById('captureBtn');
    const video = document.getElementById('cameraVideo');
    const canvas = document.getElementById('cameraCanvas');

    let stream = null;

    async function startCamera() {
      // works on https or localhost
      stream = await navigator.mediaDevices.getUserMedia({ video: { facingMode: "environment" }, audio: false });
      video.srcObject = stream;
    }

    function stopCamera() {
      if (stream) {
        stream.getTracks().forEach(t => t.stop());
        stream = null;
      }
    }

    function openCameraModal() {
      cameraModal.classList.remove('hidden');
      cameraModal.classList.add('flex');
    }

    function closeCameraModal() {
      cameraModal.classList.add('hidden');
      cameraModal.classList.remove('flex');
      stopCamera();
    }

    openCameraBtn?.addEventListener('click', async () => {
      if (!navigator.mediaDevices?.getUserMedia) {
        alert('Camera API not supported in this browser.');
        return;
      }
      try {
        openCameraModal();
        await startCamera();
      } catch (err) {
        closeCameraModal();
        alert('Tidak bisa akses kamera. Pastikan izin camera diberikan dan gunakan https/localhost.');
        console.error(err);
      }
    });

    closeCameraBtn?.addEventListener('click', closeCameraModal);
    stopCameraBtn?.addEventListener('click', closeCameraModal);

    captureBtn?.addEventListener('click', async () => {
      if (!stream) return;

      const w = video.videoWidth || 1280;
      const h = video.videoHeight || 720;
      canvas.width = w;
      canvas.height = h;

      const ctx = canvas.getContext('2d');
      ctx.drawImage(video, 0, 0, w, h);

      canvas.toBlob((blob) => {
        if (!blob) return;

        // Create a File and inject into file input
        const file = new File([blob], `asset_${Date.now()}.png`, { type: 'image/png' });
        const dt = new DataTransfer();
        dt.items.add(file);
        photoInput.files = dt.files;

        showPreviewFromFile(file);
        closeCameraModal();
      }, 'image/png', 0.95);
    });

    // Close modal by clicking outside content
    cameraModal?.addEventListener('click', (e) => {
      if (e.target === cameraModal) closeCameraModal();
    });

    // ===== QR Preview (Frontend preview only) =====
    const previewQrBtn = document.getElementById('previewQrBtn');
    const qrModal = document.getElementById('qrModal');
    const closeQrBtn = document.getElementById('closeQrBtn');
    const qrDataBox = document.getElementById('qrDataBox');

    function openQrModal() {
      qrModal.classList.remove('hidden');
      qrModal.classList.add('flex');
    }
    function closeQrModal() {
      qrModal.classList.add('hidden');
      qrModal.classList.remove('flex');
    }

    previewQrBtn?.addEventListener('click', () => {
      // Karena asset_code dibuat backend, preview hanya berupa "placeholder"
      const tagUi = document.getElementById('asset_tag').value || 'AUTO-GENERATED';
      const name = document.getElementById('asset_name').value || 'New Asset';
      const previewData = `BSW-${tagUi} | ${name}`;
      qrDataBox.textContent = previewData;
      openQrModal();
    });

    closeQrBtn?.addEventListener('click', closeQrModal);
    qrModal?.addEventListener('click', (e) => { if (e.target === qrModal) closeQrModal(); });

    // ===== Optional: merge extra UI fields into description (since controller only saves 'description') =====
    const form = document.getElementById('assetForm');
    form?.addEventListener('submit', () => {
      const brand = document.getElementById('brand').value || '';
      const specs = document.getElementById('specifications').value || '';
      const vendor = document.getElementById('vendor').value || '';
      const pDate = document.getElementById('purchase_date').value || '';
      const pPrice = document.getElementById('purchase_price').value || '';
      const pic = document.getElementById('pic').value || '';
      const desc = document.getElementById('description').value || '';

      const merged = [
        desc ? `Notes: ${desc}` : null,
        brand ? `Model/Brand: ${brand}` : null,
        specs ? `Specifications: ${specs}` : null,
        vendor ? `Vendor: ${vendor}` : null,
        pDate ? `Purchase Date: ${pDate}` : null,
        pPrice ? `Purchase Price: IDR ${pPrice}` : null,
        pic ? `PIC: ${pic}` : null,
      ].filter(Boolean).join('\n');

      document.getElementById('descriptionMerged').value = merged;
    });
  </script>
</body>
</html>
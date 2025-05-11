<!-- Modern Keen Modal -->
<style>
    .keen-modal .modal-content {
        border-radius: 18px;
        overflow: hidden;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        animation: keenFadeIn 0.4s ease-in-out;
    }

    .keen-modal .modal-header {
        background: linear-gradient(135deg, #ef4444, #b91c1c);
        color: white;
        padding: 18px 28px;
        border: none;
    }

    .keen-modal .modal-body {
        background-color: #f9fafb;
        padding: 24px 28px;
        font-size: 0.95rem;
        color: #111827;
    }

    .keen-modal .modal-footer {
        background-color: #f3f4f6;
        padding: 18px 28px;
        border-top: 1px solid #e5e7eb;
    }

    .keen-badge {
        padding: 6px 12px;
        font-size: 0.75rem;
        font-weight: 600;
        border-radius: 9999px;
        text-transform: capitalize;
        display: inline-block;
    }

    .badge-primary { background-color: #3b82f6; color: white; }
    .badge-dark { background-color: #374151; color: white; }
    .badge-info { background-color: #0ea5e9; color: white; }
    .badge-danger { background-color: #ef4444; color: white; }
    .badge-success { background-color: #10b981; color: white; }

    .keen-btn {
        border: none;
        border-radius: 8px;
        padding: 10px 18px;
        font-weight: 600;
        transition: all 0.3s ease;
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
    }

    .keen-btn-close {
        background-color: #e5e7eb;
        color: #1f2937;
    }

    .keen-btn-close:hover {
        background-color: #d1d5db;
    }

    .keen-btn-delete {
        background-color: #ef4444;
        color: white;
    }

    .keen-btn-delete:hover {
        background-color: #b91c1c;
        transform: translateY(-1px);
    }

    @keyframes keenFadeIn {
        0% { opacity: 0; transform: scale(0.95); }
        100% { opacity: 1; transform: scale(1); }
    }
</style>

<div class="modal fade keen-modal" id="exampleModal{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header d-flex justify-content-between align-items-center">
                <h5 class="modal-title">
                    <i class="fas fa-trash-alt mr-2"></i> Konfirmasi Hapus {{ $title }}
                </h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span>&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <div class="row mb-3">
                    <div class="col-5 font-weight-bold">Nama</div>
                    <div class="col-7">: {{ $item->nama }}</div>
                </div>
                <div class="row mb-3">
                    <div class="col-5 font-weight-bold">Email</div>
                    <div class="col-7">
                        : <span class="keen-badge badge-primary">{{ $item->email }}</span>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-5 font-weight-bold">Jabatan</div>
                    <div class="col-7">
                        :
                        @if ($item->jabatan == 'admin')
                            <span class="keen-badge badge-dark">{{ $item->jabatan }}</span>
                        @else
                            <span class="keen-badge badge-info">{{ $item->jabatan }}</span>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-5 font-weight-bold">Status</div>
                    <div class="col-7">
                        :
                        @if (!$item->is_tugas)
                            <span class="keen-badge badge-danger">Belum ada tugas</span>
                        @else
                            <span class="keen-badge badge-success">Sudah ada tugas</span>
                        @endif
                    </div>
                </div>
            </div>

            <div class="modal-footer d-flex justify-content-between">
                <button type="button" class="keen-btn keen-btn-close" data-dismiss="modal">Tutup</button>
                <a href="{{ route('userDestroy', $item->id) }}" class="keen-btn keen-btn-delete">
                    <i class="fas fa-trash mr-1"></i> Hapus Data
                </a>
            </div>
        </div>
    </div>
</div>

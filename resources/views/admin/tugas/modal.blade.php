<!-- STYLE -->
<style>
    .modal-content {
        background: linear-gradient(to bottom right, #f1f8e9, #e0f2f1);
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(76, 175, 80, 0.3);
        animation: breezeIn 0.5s ease-out;
    }

    .modal-header.bg-danger {
        background-color: #8d6e63 !important; /* earthy red */
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
    }

    .modal-header.bg-info {
        background-color: #66bb6a !important; /* leafy green */
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
    }

    .modal-title {
        font-weight: bold;
        display: flex;
        align-items: center;
    }

    .modal-title::before {
        content: "🌿";
        margin-right: 8px;
    }

    .badge-primary {
        background: linear-gradient(to right, #43a047, #9ccc65);
        color: #fff;
    }

    .badge-info {
        background: linear-gradient(to right, #66bb6a, #a5d6a7);
        color: #fff;
    }

    .badge-dark {
        background-color: #5d4037;
        color: #fff;
    }

    .modal-footer .btn-danger {
        background-color: #d84315;
        border: none;
    }

    .modal-footer .btn-danger:hover {
        background-color: #bf360c;
    }

    .modal-footer .btn-secondary {
        background-color: #a1887f;
        border: none;
    }

    .modal-footer .btn-secondary:hover {
        background-color: #8d6e63;
    }

    @keyframes breezeIn {
        0% {
            transform: scale(0.8);
            opacity: 0;
        }
        100% {
            transform: scale(1);
            opacity: 1;
        }
    }

    .row {
        margin-bottom: 6px;
    }

    .modal-body {
        font-size: 14px;
    }
</style>

<!-- MODAL DELETE -->
<div class="modal fade" id="modalTugasDestroy{{ $item->id }}" tabindex="-1" aria-labelledby="deleteLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title" id="deleteLabel">Hapus {{ $title }}?</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="col-6">Nama</div>
                    <div class="col-6">: {{ $item->user->nama }}</div>
                </div>
                <div class="row">
                    <div class="col-6">Email</div>
                    <div class="col-6">:
                        <span class="badge badge-primary">{{ $item->user->email }}</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">Jabatan</div>
                    <div class="col-6">:
                        @if ($item->jabatan == 'admin')
                            <span class="badge badge-dark">{{ $item->jabatan }}</span>
                        @else
                            <span class="badge badge-info">{{ $item->user->jabatan }}</span>
                        @endif
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <a href="{{ route('tugasDestroy', $item->id) }}" class="btn btn-danger">Hapus</a>
            </div>
        </div>
    </div>
</div>

<!-- MODAL SHOW -->
<div class="modal fade" id="modalTugasShow{{ $item->id }}" tabindex="-1" aria-labelledby="showLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header bg-info text-white">
                <h5 class="modal-title" id="showLabel">Detail {{ $title }}</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="col-6">Nama</div>
                    <div class="col-6">: {{ $item->user->nama }}</div>
                </div>
                <div class="row">
                    <div class="col-6">Email</div>
                    <div class="col-6">:
                        <span class="badge badge-primary">{{ $item->user->email }}</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">Jabatan</div>
                    <div class="col-6">:
                        @if ($item->jabatan == 'admin')
                            <span class="badge badge-dark">{{ $item->jabatan }}</span>
                        @else
                            <span class="badge badge-info">{{ $item->user->jabatan }}</span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

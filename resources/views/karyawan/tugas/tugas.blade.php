@extends('layout/app')

@section('content')
    <h1 class="h3 mb-4 text-danger text-center font-weight-bold" style="text-shadow: 1px 1px 2px #f5c6cb;">
        <i class="fas fa-tasks fa-bounce"></i> {{ $title }}
    </h1>

    <div class="card shadow-lg mb-5 border-left-danger"
         style="background: linear-gradient(to right, #fff0f0, #ffe6dc); border-radius: 12px;">
        <div class="card-header d-flex justify-content-between align-items-center"
             style="background: linear-gradient(to right, #ff416c, #ff4b2b); color: white; font-weight: bold; font-size: 18px; box-shadow: 0 4px 8px rgba(0,0,0,0.2); border-top-left-radius: 12px; border-top-right-radius: 12px;">
            <i class="fas fa-info-circle mr-2"></i> Detail Tugas
            @if (auth()->user()->is_tugas)
                <a href="{{ route('tugasPdf') }}" class="btn btn-sm btn-light text-danger font-weight-bold" target="_blank">
                    <i class="fas fa-file-pdf mr-1"></i> Export PDF
                </a>
            @endif
        </div>

        <div class="card-body px-5 py-4"
             style="background: linear-gradient(to right, #fff7f0, #ffeaea); border-radius: 0 0 12px 12px;">

            @if (auth()->user()->is_tugas)

                @php
                    $items = [
                        ['icon' => 'fa-user', 'label' => 'Nama', 'value' => $tugas->user->nama],
                        ['icon' => 'fa-envelope', 'label' => 'Email', 'value' => $tugas->user->email, 'badge' => 'danger'],
                        ['icon' => 'fa-tasks', 'label' => 'Tugas', 'value' => $tugas->tugas, 'badge' => 'warning'],
                        ['icon' => 'fa-calendar-day', 'label' => 'Tanggal Mulai', 'value' => $tugas->tanggal_mulai, 'badge' => 'info'],
                        ['icon' => 'fa-calendar-check', 'label' => 'Tanggal Selesai', 'value' => $tugas->tanggal_selesai, 'badge' => 'info'],
                    ];
                @endphp

                @foreach ($items as $item)
                    <div class="row py-3 border-bottom border-danger-subtle align-items-center" style="transition: all 0.2s ease-in-out;">
                        <div class="col-md-4 font-weight-bold text-dark d-flex align-items-center">
                            <i class="fas {{ $item['icon'] }} fa-fw mr-2 text-danger"></i> {{ $item['label'] }}
                        </div>
                        <div class="col-md-8">
                            :
                            @if (isset($item['badge']))
                                <span class="badge badge-{{ $item['badge'] }} py-2 px-3" style="font-size: 0.9rem; border-radius: 8px;">
                                    {{ $item['value'] }}
                                </span>
                            @else
                                <span class="text-secondary font-weight-normal">
                                    {{ $item['value'] }}
                                </span>
                            @endif
                        </div>
                    </div>
                @endforeach

            @else
                <div class="alert alert-warning text-center mt-4">
                    <i class="fas fa-exclamation-circle fa-shake"></i> Belum ada tugas yang diberikan.
                </div>
            @endif

        </div>
    </div>
@endsection
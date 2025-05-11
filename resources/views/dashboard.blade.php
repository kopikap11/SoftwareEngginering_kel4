@extends('layout/app')

@section('content')
    <h1 class="h3 mb-4 text-center" style="color: #4E342E; background-color: #EFEBE9; padding: 10px; border-radius: 15px;">
        <i class="fas fa-chart-line mr-2"></i>{{ $title }}
    </h1>

    <div class="row">
        @if (auth()->user()->jabatan == 'admin')
            @php
                $cards = [
                    ['label' => 'Total User', 'value' => $jumlahUser, 'icon' => 'fa-users', 'bg' => '#A1887F', 'accent' => '#D7CCC8'],
                    ['label' => 'Total Admin', 'value' => $jumlahAdmin, 'icon' => 'fa-user-shield', 'bg' => '#6D4C41', 'accent' => '#BCAAA4'],
                    ['label' => 'Total Karyawan', 'value' => $jumlahKaryawan, 'icon' => 'fa-user-tie', 'bg' => '#8D6E63', 'accent' => '#D7CCC8'],
                    ['label' => 'Yang Ditugaskan', 'value' => $jumlahDitugaskan, 'icon' => 'fa-tasks', 'bg' => '#4E342E', 'accent' => '#EFEBE9'],
                ];
            @endphp

            @foreach ($cards as $card)
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card h-100 shadow-sm" style="
                        background-color: {{ $card['bg'] }};
                        color: white;
                        border-radius: 25px;
                        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
                        transition: transform 0.3s ease;
                    " onmouseover="this.style.transform='scale(1.03)'" onmouseout="this.style.transform='scale(1)'">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div class="mb-3">
                                <i class="fas {{ $card['icon'] }} fa-2x mb-2" style="color: {{ $card['accent'] }};"></i>
                                <div class="text-uppercase font-weight-bold" style="font-size: 0.85rem;">
                                    {{ $card['label'] }}
                                </div>
                            </div>
                            <div class="h4 font-weight-bold text-right" style="color: {{ $card['accent'] }};">
                                {{ $card['value'] }}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif

        @if (auth()->user()->jabatan == 'karyawan')
            @php
                $isTugas = auth()->user()->is_tugas;
                $status = [
                    'label' => $isTugas ? 'DITUGASKAN' : 'BELUM DITUGASKAN',
                    'icon' => $isTugas ? 'fa-check-circle' : 'fa-exclamation-circle',
                    'bg' => $isTugas ? '#558B2F' : '#BF360C',
                    'accent' => $isTugas ? '#DCEDC8' : '#FFCCBC'
                ];
            @endphp

            <div class="col-xl-6 col-md-6 mb-4">
                <div class="card h-100" style="
                    background-color: {{ $status['bg'] }};
                    color: white;
                    border-radius: 25px;
                    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
                    transition: transform 0.3s ease;
                " onmouseover="this.style.transform='scale(1.03)'" onmouseout="this.style.transform='scale(1)'">
                    <div class="card-body d-flex align-items-center justify-content-between">
                        <div>
                            <div class="text-uppercase font-weight-bold mb-2" style="color: {{ $status['accent'] }};">Status</div>
                            <span class="badge px-3 py-2" style="background-color: {{ $status['accent'] }}; color: {{ $status['bg'] }};">
                                {{ $status['label'] }}
                            </span>
                        </div>
                        <div>
                            <i class="fas {{ $status['icon'] }} fa-2x" style="color: {{ $status['accent'] }};"></i>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection

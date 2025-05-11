<body style="margin: 0; padding: 0; font-family: Arial, sans-serif; background-color: #f5f7fa;">

    <div style="max-width: 1000px; margin: 40px auto; padding: 30px; background-color: white; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.05); border: 1px solid #002B5B;">

        <!-- Header -->
        <div style="text-align: center; color: #002B5B; margin-bottom: 20px;">
            <h1 style="margin: 0; font-size: 30px; border-bottom: 2px solid #FFD700; display: inline-block; padding-bottom: 5px;">Data User</h1>
            <p style="margin: 10px 0 5px; font-size: 16px;"> <strong style="color: #FFD700;">Tanggal:</strong> {{ $tanggal }}</p>
            <p style="margin: 0; font-size: 16px;"> <strong style="color: #FFD700;">Pukul:</strong> {{ $jam }}</p>
        </div>

        <hr style="border: none; height: 3px; background-color: #002B5B; margin: 20px 0;">

        <!-- Table -->
        <table width="100%" cellpadding="12" cellspacing="0" style="border-collapse: collapse; font-size: 15px;">
            <thead style="background-color: #002B5B; color: #FFD700;">
                <tr>
                    <th align="center">No</th>
                    <th align="left">Nama</th>
                    <th align="left">Email</th>
                    <th align="center">Jabatan</th>
                    <th align="center">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user as $item)
                    <tr style="background-color: {{ $loop->iteration % 2 == 0 ? '#f0f0f0' : '#ffffff' }};">
                        <td align="center">{{ $loop->iteration }}</td>
                        <td style="color: #002B5B; font-weight: bold;">{{ $item->nama }}</td>
                        <td>{{ $item->email }}</td>
                        <td align="center">
                            <span style="color: white; background-color: {{ $item->jabatan == 'admin' ? '#4B0082' : '#00897B' }}; padding: 3px 8px; border-radius: 5px;">
                                {{ $item->jabatan }}
                            </span>
                        </td>
                        <td align="center">
                            <span style="color: white; background-color: {{ $item->is_tugas ? '#689F38' : '#D84315' }}; padding: 3px 8px; border-radius: 5px;">
                                {{ $item->is_tugas ? 'Sudah di tugaskan' : 'Belum di tugaskan' }}
                            </span>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <hr style="border: none; height: 2px; background-color: #FFD700; margin-top: 30px;">
    </div>

</body>

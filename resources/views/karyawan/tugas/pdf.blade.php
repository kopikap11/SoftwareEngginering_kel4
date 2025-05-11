<body style="margin: 0; padding: 0; font-family: Arial, sans-serif; background-color: #f5f7fa;">

    <div style="max-width: 800px; margin: 40px auto; padding: 30px; background-color: white; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.05); border: 1px solid #002B5B;">

        <!-- Header -->
        <div style="text-align: center; color: #002B5B; margin-bottom: 20px;">
            <h1 style="margin: 0; font-size: 30px; border-bottom: 2px solid #FFD700; display: inline-block; padding-bottom: 5px;"> Data Tugas</h1>
            <p style="margin: 10px 0 5px; font-size: 16px;"> <strong style="color: #FFD700;">Tanggal:</strong> {{ $tanggal }}</p>
            <p style="margin: 0; font-size: 16px;"> <strong style="color: #FFD700;">Pukul:</strong> {{ $jam }}</p>
        </div>

        <hr style="border: none; height: 3px; background-color: #002B5B; margin: 20px 0;">

        <!-- Table -->
        <table width="100%" cellpadding="12" cellspacing="0" style="border-collapse: collapse; font-size: 15px;">
            <tbody>
                <tr style="background-color: #002B5B; color: #FFD700;">
                    <td width="30%"><strong>Nama</strong></td>
                    <td width="5%" align="center">:</td>
                    <td width="65%" style="color: #ffffff;">{{ $tugas->user->nama }}</td>
                </tr>
                <tr style="background-color: #f0f0f0;">
                    <td><strong style="color: #002B5B;">Email</strong></td>
                    <td align="center">:</td>
                    <td>{{ $tugas->user->email }}</td>
                </tr>
                <tr style="background-color: #002B5B; color: #FFD700;">
                    <td><strong>Tugas</strong></td>
                    <td align="center">:</td>
                    <td style="color: #ffffff;">{{ $tugas->tugas }}</td>
                </tr>
                <tr style="background-color: #f0f0f0;">
                    <td><strong style="color: #002B5B;">Tanggal Mulai</strong></td>
                    <td align="center">:</td>
                    <td>{{ $tugas->tanggal_mulai }}</td>
                </tr>
                <tr style="background-color: #002B5B; color: #FFD700;">
                    <td><strong>Tanggal Selesai</strong></td>
                    <td align="center">:</td>
                    <td style="color: #ffffff;">{{ $tugas->tanggal_selesai }}</td>
                </tr>
            </tbody>
        </table>

        <hr style="border: none; height: 2px; background-color: #FFD700; margin-top: 30px;">
    </div>

</body>
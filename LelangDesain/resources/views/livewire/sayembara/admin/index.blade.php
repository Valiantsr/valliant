<x-table title="Data Sayembara" id="dt">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Tanggal Mulai</th>
            <th>Tanggal Akhir</th>
            <th>Konsep</th>
            <th>Luas Bangunan</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        {{-- {{dd($data)}} --}}
        <?php $no=1 ?>
        @foreach ($data as $k)
        <tr>
            <td>{{$no}}</td>
            <td>{{$k->nama}}</td>
            <td>{{$k->tanggal}}</td>
            <td>{{$k->akhir}}</td>
            <td>{{$k->konsep}}</td>
            <td>{{$k->luas_bangunan}}</td>
            <td>
                @if ($k->status == 'terverifikasi')
                <span class="badge badge-success">{{$k->status}}</span>
                @else
                <span class="badge badge-danger">{{$k->status}}</span>
                @endif
            </td>
            <td>
                @if ($k->status == 'belum diverifikasi')
                <x-button.button wire:click="verifikasi({{$k->id}})" color="primary" class="btn-sm">
                    <x-icon type="pencil-alt" />
                    Verifikasi
                </x-button.button>
                @endif
            </td>
            <?php $no++ ?>
        </tr>
        @endforeach
    </tbody>
</x-table>

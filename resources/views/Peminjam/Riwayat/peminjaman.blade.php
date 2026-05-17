@include('peminjam.layout.header')
<h3 class="text-center">Riwayat Peminjaman</h3>

@if ($allPeminjaman->isEmpty())
<div class="d-flex justify-content-center align-items-center" style="height:390px;">
    <h3 class="text-muted">--Tidak ada riwayat--</h3>
</div>
@else
    @foreach ($allPeminjaman as $p)
    <a href="{{ route('peminjaman.detail', $p->id) }}">
        <div class="card mb-3 p-3 shadow-sm">
            <h5 class="fw-bold">ID Transaksi: {{$p->id}}</h5>
            <p>Alat: {{$p->alat->nama}}</p>
            <p class="text-muted">Tanggal Peminjaman: {{$p->tanggal_peminjaman}}</p>
            <p class="fw-bold">Status:
                @if ($p->pengembalian?->pelanggaran != null)
                    @if ($p->pengembalian->pelanggaran->status == 0)
                    <span class="badge bg-danger font-size-12 ms-2">Pelanggaran</span>
                    @else
                    <span class="badge bg-success font-size-12 ms-2">Lunas</span>
                    @endif
                @elseif ($p->pengembalian)
                <span class="badge bg-success font-size-12 ms-2">Dikembalikan</span>
                @elseif ($p->status == 'pending')
                <span class="badge bg-secondary font-size-12 ms-2">Pending</span>
                @elseif ($p->status == 'disetujui')
                <span class="badge bg-primary font-size-12 ms-2">Disetujui</span>
                @else
                <span class="badge bg-danger font-size-12 ms-2">Ditolak</span>
                @endif
            </p>
        </div>
    </a>
    @endforeach 
@endif
@include('peminjam.layout.footer')
<div>
    <!-- Tabel untuk laporan interaksi harian -->
    <div style="height: 32rem;">
        <livewire:livewire-column-chart
        :column-chart-model="$chart "
    />
     </div>
<center>
    <table>
        <thead>
            <tr>
                <th>Data</th>
                @foreach ($totalInteractionsPerMonth as $monthLabel => $interactionsPerService)
                    <th>{{ $monthLabel }}</th>
                @endforeach
                @foreach ($services as $service)
                <tr>
                    <td>{{ $service->name }}</td>
                    @foreach ($totalInteractionsPerMonth as $monthLabel => $interactionsPerService)
                    <td>
                    <center>
                        @php
                            $totalInteractions = isset($interactionsPerService[$service->name]) ? $interactionsPerService[$service->name] : 0;
                        @endphp
                        {{ $totalInteractions }}
                    </center>
                    </td>
                    @endforeach
                </tr>
                @endforeach
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
    </center>
</div>

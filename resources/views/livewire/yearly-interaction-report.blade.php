<div>
    <div style="height: 32rem;">
        <livewire:livewire-column-chart
        :column-chart-model="$chart"
    />
     </div>
<center>
     <table>
        <thead>
            <tr>
                <th>Service</th>
                <th>Kunjungan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($services as $service)
                <tr>
                    <td>{{ $service->name }}</td>
                    <td><center>
                        @php
                            $totalInteractions = $yearlyReports->where('service_id', $service->id)->sum('interactions');
                        @endphp
                        {{ $totalInteractions }}
                    </center></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </center>
</div>

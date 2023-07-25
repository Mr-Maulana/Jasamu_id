<div>
    <div style="height: 30rem;">
        <livewire:livewire-column-chart
            :column-chart-model="$chart"
        />
    </div>
<center>
    <table>
        <thead>
            <tr>
                <th>Service</th>
                <th>Interaction Count</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($interactionsPerService as $service => $interactionCount)
                <tr>
                    <td>{{ $service }}</td>
                    <td><center>{{ $interactionCount }}</center></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </center>
</div>

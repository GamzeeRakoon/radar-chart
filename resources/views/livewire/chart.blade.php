<div>
    <h1> yur</h1>

    
    <div style="width: 800px">
        <canvas id="myChart"></canvas>
    </div>

@script
    <script>
        const ctx = document.getElementById('myChart');
        const labeled = $wire.label
        const stats = $wire.kwarterly
        console.log(stats[3].Stats)


        
        const scoreLabels = labeled.map(item=>item.Type)

        new Chart(ctx, {
            type: 'radar',
            data: {
                labels: scoreLabels,
                datasets: [{ 
                    label: stats[0].Month, 
                    data: stats[0].Stats,
                    fill: false,
                }, {
                    label: stats[1].Month, 
                    data: stats[1].Stats,
                    fill: false,
                }, {
                    label: stats[2].Month, 
                    data: stats[2].Stats,
                    fill: false,
                }, {
                    label: stats[3].Month, 
                    data: stats[3].Stats,
                    fill: false,
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: true,
            }
        });
    </script>
@endscript
</div>

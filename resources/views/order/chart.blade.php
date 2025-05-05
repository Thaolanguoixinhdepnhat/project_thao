@extends('layout.app')
@section('title', 'Danh sách đơn hàng')

@section('content')
<h1 style="font-size: 3rem; margin-bottom: 5rem;">Biểu Đồ Doanh Thu Theo Tháng</h1>
    <canvas id="revenueChart" width="400" height="200"></canvas>

    <script>
        const ctx = document.getElementById('revenueChart').getContext('2d');
        const revenueData = @json($revenues);

        const months = revenueData.map(item => item.month);
        const revenues = revenueData.map(item => item.total_revenue);

        const revenueChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: months.map(month => `Tháng ${month}`),
                datasets: [{
                    label: 'Doanh Thu',
                    data: revenues,
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>


@endsection
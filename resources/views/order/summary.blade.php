@extends('layout.app')

@section('content')
<style>
.revenue {
    max-width: 1200px;
    margin: 40px auto;
    padding: 0 20px;
}

.revenue .title {
    font-size: 26px;
    margin-bottom: 30px;
    text-align: center;
    color: #333;
}

.card-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
}

.card-box {
    color: #fff;
    padding: 20px;
    border-radius: 16px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.08);
    position: relative;
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    background: linear-gradient(135deg, #00c0ef, #0097c7);
}

.card-box:hover {
    transform: translateY(-8px);
    box-shadow: 0 12px 25px rgba(0,0,0,0.15);
}

.card-box.green { background: linear-gradient(135deg, #00a65a, #008e4e); }
.card-box.blue { background: linear-gradient(135deg, #00c0ef, #0097c7); }
.card-box.purple { background: linear-gradient(135deg, #8e44ad, #732d91); }
.card-box.orange { background: linear-gradient(135deg, #f39c12, #d68910); }

.card-content {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.card-content .icon {
    font-size: 40px;
    opacity: 0.2;
}

.card-box h5 {
    margin: 0;
    font-size: 16px;
    font-weight: 600;
    color: #fff;
}

.card-box .number {
    font-size: 22px;
    margin-top: 8px;
    font-weight: bold;
}

.card-box .more {
    display: block;
    margin-top: 12px;
    color: rgba(255, 255, 255, 0.9);
    text-decoration: none;
    font-weight: 500;
    font-size: 14px;
}

.card-box .more:hover {
    text-decoration: underline;
}

.chart-container {
    background: #fff;
    padding: 20px;
    border-radius: 16px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.05);
    margin-top: 40px;
}

.chart-row {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
}

.chart-half {
    flex: 1;
    min-width: 300px;
    background: #fff;
    height: 400px;
    padding: 20px;
    border-radius: 16px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.05);
}

.chart-half canvas {
    width: 100%;
   height: 300px !important;
   margin: 0 auto;
}
</style>

<div class="revenue">
    <h1 class="title">📊 Tóm Tắt Doanh Thu & Đơn Hàng</h1>

    <div class="card-grid">
        <div class="card-box green">
            <div class="card-content">
                <div>
                    <h5>💰 Tổng Doanh Thu</h5>
                    <p class="number">{{ number_format($totalRevenue, 0, ',', '.') }} VNĐ</p>
                </div>
                <i class="icon bi bi-cash-coin"></i>
            </div>
            <a href="#" class="more">Chi tiết <i class="bi bi-arrow-right-circle"></i></a>
        </div>

        <div class="card-box blue">
            <div class="card-content">
                <div>
                    <h5>📦 Tổng Số Đơn Hàng</h5>
                    <p class="number">{{ $totalOrders }} đơn hàng</p>
                </div>
                <i class="icon bi bi-bag-check"></i>
            </div>
            <a href="#" class="more">Chi tiết <i class="bi bi-arrow-right-circle"></i></a>
        </div>

        <div class="card-box purple">
            <div class="card-content">
                <div>
                    <h5>📈 Doanh Thu Hôm Nay</h5>
                    <p class="number" id="today-revenue">0 VNĐ</p>
                </div>
                <i class="icon bi bi-graph-up"></i>
            </div>
            <a href="#" class="more">Chi tiết <i class="bi bi-arrow-right-circle"></i></a>
        </div>

        <div class="card-box orange">
            <div class="card-content">
                <div>
                    <h5>🛒 Đơn Bán Hôm Nay</h5>
                    <p class="number" id="today-orders">{{ $todayOrders }} đơn hàng</p>

                </div>
                <i class="icon bi bi-cart-check"></i>
            </div>
            <a href="#" class="more">Chi tiết <i class="bi bi-arrow-right-circle"></i></a>
        </div>
    </div>
<div class="chart-row">
    <div class="chart-container">
        <h3 style="text-align: center; margin-bottom: 20px;">📅 Doanh Thu Theo Ngày</h3>
        <canvas id="dailyRevenueChart" height="100"></canvas>
    </div>

    <div class="chart-container">
        <h3 style="text-align: center; margin-bottom: 20px;">📆 Doanh Thu Theo Tuần</h3>
        <canvas id="weeklyRevenueChart" height="100"></canvas>
    </div>

    
        <div class="chart-half">
            <h3 style="text-align: center; margin-bottom: 20px;">🗓️ Doanh Thu Theo Tháng</h3>
            <canvas id="monthlyRevenueChart" height="100"></canvas>
        </div>

        <div class="chart-half">
            <h3 style="text-align: center; margin-bottom: 20px;">📅 Doanh Thu Theo Năm</h3>
            <canvas id="yearlyRevenueChart" height="100"></canvas>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
const dailyRevenue = @json($dailyRevenue);
const weeklyRevenue = @json($weeklyRevenue);
const monthlyRevenue = @json($monthlyRevenue);
const yearlyRevenue = @json($yearlyRevenue);
const todayOrdersFromServer = @json($todayOrders);

function formatNumber(n) {
    return n.toLocaleString('vi-VN');
}

document.addEventListener('DOMContentLoaded', () => {
    const today = new Date().toISOString().slice(0, 10);
    const todayData = dailyRevenue.find(d => d.date === today);
    const revenue = todayData ? todayData.total : 0;

    // ✅ Chỉ cập nhật doanh thu hôm nay từ dữ liệu biểu đồ
    document.getElementById('today-revenue').innerText = formatNumber(revenue) + ' VNĐ';

    // ✅ Sử dụng đúng số đơn hàng từ server đã có
    document.getElementById('today-orders').innerText = formatNumber(todayOrdersFromServer) + ' đơn hàng';

    renderChart(dailyRevenue, 'dailyRevenueChart', 'line', 'Ngày');
    renderChart(weeklyRevenue, 'weeklyRevenueChart', 'bar', 'Tuần');
    renderChart(monthlyRevenue, 'monthlyRevenueChart', 'radar', 'Tháng');
    renderChart(yearlyRevenue, 'yearlyRevenueChart', 'pie', 'Năm');
});

function renderChart(data, canvasId, type, labelPrefix) {
    const ctx = document.getElementById(canvasId).getContext('2d');
    const labels = data.map(d => labelPrefix + ' ' + (d.date || d.week || d.month || d.year));
    const values = data.map(d => d.total);

    new Chart(ctx, {
        type: type,
        data: {
            labels: labels,
            datasets: [{
                label: 'Doanh thu (VNĐ)',
                data: values,
                backgroundColor: type === 'pie' ? [
                    '#00a65a', '#00c0ef', '#f39c12', '#8e44ad', '#e74c3c'
                ] : 'rgba(0,192,239,0.2)',
                borderColor: '#00c0ef',
                borderWidth: 2,
                fill: type === 'line' || type === 'radar',
                tension: 0.4
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: { display: type === 'pie' },
                tooltip: {
                    callbacks: {
                        label: ctx => formatNumber(ctx.parsed || ctx.raw) + ' VNĐ'
                    }
                }
            },
            scales: type === 'pie' ? {} : {
                y: {
                    ticks: {
                        callback: value => formatNumber(value) + ' VNĐ'
                    }
                }
            }
        }
    });
}
</script>

@endsection

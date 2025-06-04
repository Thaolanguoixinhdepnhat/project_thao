{{-- <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Đơn hàng #{{ $order->id }}</title>
    <style>
        body { font-family: DejaVu Sans; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #333; padding: 8px; }
        h2{
            text-align: center
        }
    </style>
</head>
<body>
    <h2>Hóa đơn</h2>
    <p>Ngày đặt: {{ $order->order_date }}</p>
    <p>Ngày giao: {{ $order->ship_date }}</p>

    <h4>Chi tiết hóa đơn</h4>
    <table>
        <thead>
            <tr>
                <th>Sản phẩm</th>
                <th>Số lượng</th>
                <th>Đơn giá</th>
                <th>Thành tiền</th>
            </tr>
        </thead>
        <tbody>
            @foreach($order->items as $item)
                <tr>
                    <td>{{ $item->product_name }}</td>
                    <td align="right">{{ $item->quantity }}</td>
                    <td align="right">{{ $item->price }}</td>
                    <td align="right">{{ $item->quantity*$item->price }}</td>
                </tr>
            @endforeach
                <tr>
                    <td colspan="3" align="center">Tổng tiền:</td>
                    <td align="right">{{$order->amount}}</td>
                </tr>
        </tbody>
    </table>
</body>
</html> --}}

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <title>Hóa đơn #{{ $order->id }}</title>
    <style>
     body { font-family: DejaVu Sans; }
    .header-section {
    text-align: center;
    margin-bottom: 20px;
    color: #000;
}

 .header-section .txt {
    font-size: 18px; 
    font-weight: 700; 
    text-transform: uppercase;
    color: #333;
    margin: 0;
  
}

.header-section .txt1 {
    font-size: 15px;
    font-style: italic;
    color: #333;
    margin: 2px 0;
 
}

.header-section hr {
    width: 200px;
    margin: 4px auto; 
    border: 1px solid #333;
}

.invoice-table {
  width: 100%;
  border-collapse: collapse;
  margin-top: 10px;
}

.invoice-table thead tr {
  background-color:#a3d5f2;
}

.invoice-table th,
.invoice-table td {
  border: 1px solid #ccc;
  padding: 8px 12px;
  text-align: center;
}

.invoice-table th {
  font-weight: bold;
  color: #333;
}

.invoice-table tr:nth-child(even) {
  background-color: #f9f9f9;
}

.invoice-table tr:hover {
  background-color: #eef;
}

.invoice-table .total-row td {
  font-weight: bold;
  background-color:  #a3d5f2; 
  color: #000;
}
.footer {
  display: flex;
  justify-content: flex-end;
  align-items: flex-start;
  position: relative;
  margin-top: 20px;
}

.signature {
  text-align: right;
  margin-right: 20px;
  position: relative;
}

.signature p:first-child strong {
  font-size: 18px; /* chữ "Giám đốc" to hơn */
  text-transform: uppercase; /* viết hoa nếu bạn thích */
  text-align: center;
}

.signature h2 {
  font-size: 12px;
  font-weight: bold; 
  padding: 0 20px;
}

.signature p:last-child {
  font-size: 14px;
  font-weight: bold; /* Đậm hơn */
}

.company-stamp-square {
  width: 100px;
  height: 60px;
  border: 2px solid red;
  color: red;
  font-weight: normal;
  font-size: 12px;
  display: flex;
  align-items: center;
  justify-content: center;
  position: absolute;
  right: 20px;
  padding: 20px;
  top: 40px;
  background-color: rgba(255, 255, 255, 0.8);
  opacity: 0.6;
}

.stamp-content {
  text-align: center;
  line-height: 1.2;
}









    
    </style>
</head>
<body>

           
    <div class="header-section">
        <p class="txt">CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM</p>
        <p class="txt1">Độc lập - Tự do - Hạnh phúc</p>
        <hr>
    </div>

<div style="text-align: center; width: 100%;">
  <table style="margin: 0 auto; ">
    <tr>
      <td style=" text-align: center;width: 150px;">
        <img src="{{ public_path('storage/product_images/S.jpg') }}" style="width: 80px;">
      </td>
      <td>
        CÔNG TY TNHH SAMSUNG<br>
        Địa chỉ: 123 Đường A, Quận B, HN<br>
        Điện thoại:1800588890<br>
        Email: Samsung@gmail.com.vn
      </td>
    </tr>
  </table>
</div>
  <h2 class="title" style="text-align: center; font-size: 19px; ">HÓA ĐƠN BÁN HÀNG</h2>
<table style="width: 100%; border-collapse: collapse;padding: 40px;">
  <tr>
    <td style="width: 50%; text-align: left; vertical-align: top; padding-right: 20px;">
      @if(count($order->items) > 0)
        @php $item = $order->items[0]; @endphp
        <strong>Người nhận hàng:</strong> {{ $item->customer_name }}<br>
          <strong>Số điện thoại:</strong> {{ $item->customer_phone }}<br>
          <strong>Địa chỉ giao hàng: </strong>{{ $item->customer_address }}
      @endif
    </td>
    <td style="width: 50%; text-align: left; vertical-align: top; padding-left: 20px;">
      Mã đơn hàng:{{ $order->id }}<br>
      {{-- Ngày đặt: {{ $order->order_date }}<br>
      Ngày giao: {{ $order->ship_date }} --}}
   Ngày đặt: {{ \Carbon\Carbon::parse($order->order_date)->format('d/m/Y H:i:s') }}<br>
    Ngày giao: {{ $order->ship_date }}

    </td>
  </tr>
</table>
    <table class="invoice-table">
        <thead>
            <tr>
                <th>Sản phẩm</th>
                <th>Số lượng</th>
                <th>Đơn giá (VNĐ)</th>
                <th>Thành tiền (VNĐ)</th>
            </tr>
        </thead>
        <tbody>
            @foreach($order->items as $item)
            <tr>
                <td>{{ $item->product_name }}</td>
                <td>{{ $item->quantity }}</td>
                <td>{{ number_format($item->price, 0, ',', '.') }}</td>
                <td>{{ number_format($item->quantity * $item->price, 0, ',', '.') }}</td>
            </tr>
            @endforeach
            <tr class="total-row">
                <td colspan="3" align="center">Tổng tiền</td>
                <td>{{ number_format($order->amount, 0, ',', '.') }} VNĐ</td>
            </tr>
        </tbody>
    </table>

   
<div class="footer">
  <div class="signature">
    <p><strong>Giám đốc</strong></p>
    <h2>Thảo Nè</h2>
    <p>Phạm Thị Thu Thảo</p>
  </div>
  <div class="company-stamp-square">
    <div class="stamp-content">ĐÃ XÁC NHẬN</div>
  </div>
</div>











</body>
</html>


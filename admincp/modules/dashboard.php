<!DOCTYPE html>
<html>
<head>
    <title>Biểu đồ Morris.js</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.3.0/raphael.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
</head>
<body>

<div id="myChart" style="height: 250px;">Thống kê số lượng bán ra</div>

<script>
    $(document).ready(function() {
        // Dữ liệu mẫu cho biểu đồ theo tháng
        const data = [
            { month: '2024-01', value: 200 },
            { month: '2024-02', value: 100},
            { month: '2024-03', value: 150 },
            { month: '2024-04', value: 170 },
            { month: '2024-05', value: 190 },
            { month: '2024-06', value: 120 },
            { month: '2024-07', value: 250 },
            { month: '2024-08', value: 300 },
            { month: '2024-09', value: 200 }
        ];

        // Vẽ biểu đồ
        new Morris.Line({
            // ID của thẻ div nơi biểu đồ sẽ được vẽ
            element: 'myChart',
            // Dữ liệu cho biểu đồ
            data: data,
            // Tên của các cột dữ liệu
            xkey: 'month',
            ykeys: ['value'],
            labels: ['Giá trị'],
            // Màu sắc của đường biểu đồ
            lineColors: ['#0b62a4'],
            // Định dạng cho trục x
            xLabelAngle: 60,
            // Định dạng cho trục y
            yLabelFormat: function(y) { return y; }
        });
    });
</script>

</body>
</html>
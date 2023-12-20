
<!DOCTYPE html>
<head>
<title>Admincp</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/all.min.css" rel="stylesheet"> 
<link href="css/fontawesome.min.css" rel="stylesheet"> 
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- calendar -->
<link rel="stylesheet" href="css/monthly.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
<!-- //calendar -->
<!-- //font-awesome icons -->

<script src="js/jquery2.0.3.min.js"></script>
<script src="js/raphael-min.js"></script>
<!-- <script src="js/morris.js"></script> -->
<!-- <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script> -->
</head>
<?php
    session_start();
    if(!isset($_SESSION['dangnhap'])){
        header("Location:login.php");
    }
?>
<body>
    <?php
    include("config/config.php");
    include("modules/header.php");
    include("modules/menu.php");
    include("modules/main.php");
    include("modules/footer.php");
    ?>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    <script>
    
                        // ClassicEditor
                        //         .create( document.querySelector( '#tomtatsanpham' ) )
                        // ClassicEditor
                        //         .create( document.querySelector( '#noidungsanpham' ) )
                        // ClassicEditor
                        //         .create( document.querySelector( '#tablienquan' ) )
                                </script>
                                <script type="text/javascript">
                                    $(document).ready(function(){
                                    thongke();
                                    var char = new Morris.Bar({
                                    element: 'chart',
                                    lineColors: ['#000000','#000000','#000000'],
                                    xkey: 'date',
                                    ykeys: ['date','order','sales','quantity'],
                                    barColors: function (row, series, type) {
                                        if (type === 'bar') {
                                        var red = Math.ceil(255 * row.y / this.ymax);
                                        return 'rgb(' + red + ',0,0)';
                                        }
                                        else {
                                        return '#000';
                                        }
                                    },
                                    labels: ['','Don hang','Doanh thu','So luong ban ra']
                                    });
                                         $('.select-date').change(function(){
                                        var thoigian = $(this).val();
                                        if (thoigian=='7ngay'){
                                            var text = '7 ngay qua';
                                        }else if(thoigian=='28ngay'){
                                            var text = '28 ngay qua';
                                        }else if(thoigian=='90ngay'){
                                            var text = '90 ngay qua';
                                        }else{
                                            var text = '365 ngay qua';
                                        }
                                                $('#text-date').text(text);
                                        $.ajax({
                                            url: "modules/thongke.php",
                                            method: "POST",
                                            dataType: "JSON",
                                            data:{thoigian:thoigian},
                                            success:function(data){
                                                char.setData(data);
                                                $('#text-date').text(text);
                                            }
                                        })
                                    })
                                    function thongke(){
                                        var text = '365 ngay qua';
                                        $('#text-date').text(text);
                                        $.ajax({
                                            url:"modules/thongke.php",
                                            method:"POST",
                                            dataType:"JSON",
                                            success:function(data){
                                                char.setData(data);
                                                $('#text-date').text(text);
                                            }
                                        });
                                }
                            });
                            </script>
</body>
</html>
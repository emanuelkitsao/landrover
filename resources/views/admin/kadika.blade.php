<html>
<head>
<title>Untitled-2</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style>
p {text-transform: uppercase;font-family: sans-serif;font-weight: 600;font-size:12px;color:211f20;}
media print{
  /* hide evrery other element*/
  body *{
    visibility: hidden;
  }
  /* Then Displaying Print contailer elements*/
  .print-container, .print-container *{
    visibility:visible;
  }
  /* Adjusting the position to always start from the left*/
  .print-container{
    position: absolute;
    left: 0px;
    top: 0px;
  }

</style>
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">


    
<div>
    <h2 style="text-align:center">miniiste Name</h2>
    
       <button onclick="window.print();" class="print_align">
    PRINT
  </button>
  
  </div class="card print-container">
        <!-- Save for Web Slices (Untitled-2) -->
        <table style="margin-left: auto;margin-right: auto;"  id="Table_01" width="409.5" height="237.5" border="0" cellpadding="0" cellspacing="0">
            <tr>
                <td colspan="3">
                    <img src="{{asset('admin/assets/cards/card_a_eshot/images/carda_01.jpg')}}" width="409.5" height="95" alt=""></td>
            </tr>
            <tr>
                <td rowspan="6">
                    <img src="{{asset('admin/assets/cards/card_a_eshot/images/carda_02.jpg')}}" width="120" height="101" alt=""></td>
                <td>
                    <p>{{$viewpastor->minister}}</p><!--<img src="images/carda_03.jpg" width="409" height="35" alt="">--></td>
                <td rowspan="7">
                    <img src="{{asset('admin/assets/cards/card_a_eshot/images/carda_04.jpg')}}" width="85" height="142.5" alt=""></td>
            </tr>
            <tr>
                <td>
                    <p></p><!--<img src="images/carda_05.jpg" width="409" height="37" alt="">--></td>
            </tr>
            <tr>
                <td>
                    <p>{{$minister->district}}</p><!--<img src="images/carda_06.jpg" width="409" height="31" alt="">--></td>
            </tr>
            <tr>
                <td>
                    <p>{{$minister->region}}</p><!--<img src="images/carda_07.jpg" width="409" height="34" alt="">--></td>
            </tr>
            <tr>
                <td>
                    <p> Pefa Pin No: 0203606001646</p><!--<img src="images/carda_08.jpg" width="409" height="36" alt="">--></td>
            </tr>
            <tr>
                <td>
                    <p>ID No. 2221705</p><!--<img src="images/carda_09.jpg" width="409" height="29" alt="">--></td>
            </tr>
            <tr>
                <td>
                    <img src="{{asset('admin/assets/cards/card_a_eshot/images/carda_10.jpg')}}" width="120" height="41.2" alt=""></td>
                <td>
                    <img src="{{asset('admin/assets/cards/card_a_eshot/images/carda_11.jpg')}}" width="204.5" height="41.5" alt=""></td>
            </tr>
        </table>

</div>  
<!-- End Save for Web Slices -->
</body>
</html>
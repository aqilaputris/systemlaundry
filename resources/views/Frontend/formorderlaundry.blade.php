<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IU Laundry</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="{{url('text.css')}}">

</head>
<body>
    
<!-- laundry section starts  -->

<section class="laundry" id="laundry">


<form action="{{url('/frontend/laundry')}}" method="POST" enctype="multipart/form-data">
    @csrf
        <h1 class="heading">Form Order Laundry</h1>

        <input type="hidden" name="tipe" value="laundry" >
        <div class="inputBox">
            <input type="text" value="{{ $errors }}" name="code_order" required>
            <label>Code Order</label>
        </div>

        <div class="inputBox">
            <input type="text" name="user_name" required>
            <label>User Name</label>
        </div>

        <div class="inputBox">
            <input type="text" name="user_phone" required>
            <label>User Phone</label>
        </div>

        <div class="inputBox">
            <input type="text" name="user_address" required>
            <label>User Address</label>
        </div>

        <div class="inputSelect">
            <select  name="package_id" id="package_id" onclick="harga();" required>
                <option disable option selected>Pilih Paket</option>
                @foreach($package as $data)
                <option value="{{$data->id}}">{{$data->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="inputBox">
            @php 
            $harga = DB::table('package')->where('id', g('package_id'))->pluck('price')->first();
            @endphp
            <input type="text" name="total_price" id="total_price" value="" required>
            <label>Price</label>
        </div> 

        <div class="inputBox">
            <input type="text" name="date_drop_laundry" required>
            <label>Date Drop</label>
        </div>


        <button type="submit" class="btn">Order</button>

    </form>

</section>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script type="text/javascript">
    function harga(){
		iddd = $("#package_id").val();
        // console.log(iddd);
		if (iddd==''){
			$('#total_price').val('');
		}
		$.ajax({
			url:"{{route('cari')}}",
			type:"GET",
			dataType:"json",
			data:{
				package_id:$("#package_id").val()
			},
			success:function(hasil){
				if (hasil.val==0) {
					// alert('Data tidak ditemukan');
					$('#total_price').val('');

				}else if(hasil.val==2){
					// alert('Data tidak ditemukan 2');
					$('#total_price').val('');

				}else{
					// alert('Data tidak ditemukan 3');
					$('#total_price').val(hasil.data.price);
				}
			}
		});
    }
</script>
<!-- laundry section edns -->

</body>
</html>
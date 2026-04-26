@include('dashboard.header')
<!-- End Sidebar -->
<div class="main-panel bg-light">
  <div class="content bg-light">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
      {{ session('status') }}
    </div>
    @endif
    @if($message = Session::get('success'))
    <div class="alert alert-success">
      <p>{{$message}}</p>
    </div>
    @endif
    <div class="card text-center bg-light">
      <div class="card-header">
        <h2>.......</h2>
      </div>
      <div class="mt-2 mb-4">
        <h1 class="title1 text-dark">{{$item}} Payment</h1>
      </div>
      <div class="mt-2 mb-4">
        <p class="title1 text-primary">SEND
          @if($item=='Bitcoin')
          <strong>{{$btc_amount}}</strong>
          @elseif($item=='Ethereum')
          <strong>{{$eth_amount}}</strong>
          @endif

          {{$item}} TO THE WALLET ADDRESS BELOW OR
          SCAN THE QR CODE WITH YOUR WALLET APP
        </p>
      </div>


      <div class="card-body bg-light">
        @if($item=='Bitcoin')
        @foreach($payment as $payments)
        <input type="text" id="myInput1" class="form-control" style="color: black;" class="bg-light text-dark"
          value="{{$payments->btc_address}}" readonly>
         
        <img src="{{asset('manager/uploads/manager/'.$payments->btcImage)}}" width="40%" height="50%" />
        @endforeach
        @elseif($item=='Usdt')

        @foreach($payment as $payments)
        <input type="text" id="myInput1" class="form-control" style="color: black;" class="bg-light text-dark"
          value="{{$payments->usdt_address}}" readonly>
        <img src="{{asset('manager/uploads/manager/'.$payments->usdtImage)}}" width="40%" height="50%" />
        @endforeach
        @elseif($item=='Ethereum')

        @foreach($payment as $payments)
        <input type="text" id="myInput1" class="form-control" style="color: black;" class="bg-light text-dark"
          value="{{$payments->eth_address}}" readonly>
        <br>
        <img src="{{asset('manager/uploads/manager/'.$payments->ethImage)}}" width="40%" height="50%" />
        @endforeach
        @endif
        <br>
        <br>
        <button class="btn btn-primary" type="button" id="button-addon2" onclick="copyAdr1()">copy address</button>
      </div>
    </div>
    <div class="col card bg-light shadow-lg">
      <div>
        <center>

          <form action="{{ url('/make-deposit')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              
   <!--          <h5 class="text-dark">Upload Payment Proof</h5>-->
			<!--<input type="file" name="image" class="form-control col-lg-4 bg-light text-dark" required>-->
   <!--         </div>-->
   
   
    <div class="form-group text-center p-4 bg-white rounded-3 shadow-sm border">
    <h4 class="text-dark mb-3">✨ Upload Payment Proof</h4>
    <p class="text-muted" style="font-size: 1.05rem;">
        Thank you for initiating your payment! 💸<br>
        To complete the process, please send a clear screenshot or photo of your payment receipt via our 
        <span class="fw-bold text-primary">Live Chat Support</span> just tap the chat bubble at the bottom right corner of your screen. 💬
    </p>
    <p class="text-muted fst-italic mt-2">We're here to help 24/7. Fast verification, guaranteed. ✅</p>
</div>
            <input type="hidden" name="amount" value="{{$amount}}">
            <input type="hidden" name="payment_method" value="{{$item}}">

            <div class="form-group">
              <input type="submit" class="btn btn-dark" value="Confirm Payment">
            </div>
          </form>
   
  

        </center>

      </div>
    </div>

  </div>
</div>

<script type="text/javascript">
  function copyAdr(){
        var copyText = document.getElementById("myInput");
         copyText.select();


        /* Copy the text inside the text field */
        document.execCommand("copy");
         copyText.setSelectionRange(0, 99999);
         navigator.clipboard.writeText(copyText.value);

        }

          function copyAdr1(){
        var copyText = document.getElementById("myInput1");
         copyText.select();


        /* Copy the text inside the text field */
        document.execCommand("copy");
         copyText.setSelectionRange(0, 99999);
         navigator.clipboard.writeText(copyText.value);

        }


  function copyAdr2(){
        var copyText = document.getElementById("myInput2");
         copyText.select();


        /* Copy the text inside the text field */
        document.execCommand("copy");
         copyText.setSelectionRange(0, 99999);
         navigator.clipboard.writeText(copyText.value);

        }

</script>





<script type="text/javascript">
    function copyAdr1() {
        var copyText = document.getElementById("myInput1");
        copyText.select();
        /* Copy the text inside the text field */
        document.execCommand("copy");
        copyText.setSelectionRange(0, 99999);
        navigator.clipboard.writeText(copyText.value);
        
        // Change button text to "Copied" after copying
        var button = document.getElementById("button-addon2");
        button.innerText = "Copied";
        button.disabled = true; // Disable button after clicking
    }
</script>

@include('dashboard.footer')
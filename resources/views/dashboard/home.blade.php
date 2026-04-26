@include('dashboard.header')
<!-- main header @e -->
<!-- content @s -->


    
{{--
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>



<div class="nk-content nk-content-fluid">
    <div class="container-xl wide-lg">
        <div class="nk-content-body">
            <div class="nk-block-head">
                <div class="nk-block-head-sub"><span>Welcome!</span>
                </div>
                <div class="nk-block-between-md g-4">
                    <div class="nk-block-head-content">
                        <h2 class="nk-block-title fw-normal">{{Auth::user()->name}}</h2>
                    </div><!-- .nk-block-head-content -->
                    <div class="nk-block-head-content">
                        <ul class="nk-block-tools gx-3">
                            <!--<li><a href="{{url('deposit')}}" class="btn btn-primary"><span>Deposit</span> <em-->
                            <!--            class="icon ni ni-arrow-long-right"></em></a></li>-->
                            <li><button class="btn" onclick="openModal()">Deposit</button></li>
                            
                             <li><button class="btn" onclick="openModal1()">Withdraw</button></li>
                                        
                                         

                        </ul>
                    </div><!-- .nk-block-head-content -->
                </div><!-- .nk-block-between -->
            </div><!-- .nk-block-head -->



<!--<div class="card">-->
<!--						@if (session('error'))-->
<!--                              <div class="alert box-bdr-red alert-dismissible fade show text-red" role="alert">-->
<!--															<b>Error!</b>{{ session('error') }}-->
<!--											<button type="button" class="btn-close" data-bs-dismiss="alert"-->
<!--																aria-label="Close"></button>-->
<!--									</div>-->
<!--                                    @elseif (session('status'))-->
<!--									<div class="alert box-bdr-green alert-dismissible fade show text-green" role="alert">-->
<!--															<b>Success!</b> {{ session('status') }}-->
<!--							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>-->
<!--									</div>-->
<!--                                  @endif-->




@if(session('notice'))
  <div style="color: red; text-align: center; margin-top: 20px;">
      {{ session('notice') }}
  </div>
@endif

<!--@if(session('show_deposit_modal'))-->
<!--  <script>-->
<!--    window.onload = function () {-->
<!--      openModal();-->
<!--    };-->
<!--  </script>-->
<!--@endif-->










<!-- .modal PASS -->
    <!-- @@ Confirm Coin Modal @e -->
    <div class="modal fade" tabindex="-1" role="dialog" id="password">
      <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
          <a href="#" class="close" data-bs-dismiss="modal"
            ><em class="icon ni ni-cross-sm"></em
          ></a>
          <div class="modal-body modal-body-lg text-center">
            <div class="nk-modal">
						<form  action="{{ route('confirm-password') }}" method="POST">
                                              @csrf
				  <h4 class="nk-modal-title">Please to confirm this is you kindly enter your password</h4>
				  <div class="nk-modal-text">
					<input type="password" name="cpassword" id="conpass" class="form-control form-control-lg form-control-number" placeholder="******">
					<input type="hidden" id="check" value="408be55d3a7601e647facaeb58753eb7" class="form-control form-control-lg form-control-number" placeholder="******">
				  </div>
				  <div class="nk-modal-action-lg">
					<ul class="btn-group gx-4">
					  <li>
						<button class="btn btn-lg btn-mw btn-primary"
						name="password"
						
					>Confirm</button
					>
					  </li>
					</ul>
				  </div>
			  </form>
            </div>
          </div>
          <!-- .modal-body -->
        </div>
        <!-- .modal-content -->
      </div>
      <!-- .modla-dialog -->
    </div>
    
    
    
    <!-- Modal Structure -->
<div id="pass" class="modal">
  <div class="modal-content">
    <span class="close" onclick="closeModal()">&times;</span>
    <h3 style="text-align: center;">CONFIRM YOUR IDENTITY</h3>
    
    <form action="{{ route('confirm-password') }}" method="POST">
      @csrf
      <h4 class="nk-modal-title" style="text-align: center;">Please confirm this is you by entering your password</h4>
      
      <div class="nk-modal-text" style="margin-top: 20px;">
        <label for="conpass">Password</label>
        <input type="password" name="cpassword" id="conpass" class="form-control form-control-lg form-control-number" placeholder="******" required>

        <input type="hidden" name="check" id="check" value="408be55d3a7601e647facaeb58753eb7">
      </div>

      <div class="nk-modal-action-lg" style="margin-top: 25px; text-align: center;">
        <button class="btn btn-lg btn-mw btn-primary" type="submit" name="password">Confirm</button>
      </div>
    </form>
  </div>
</div>

<!-- JavaScript -->
<script>
  function openModal1() {
    document.getElementById('pass').style.display = 'block';
  }

  function closeModal() {
    document.getElementById('pass').style.display = 'none';
  }

  window.onclick = function(event) {
    const modal = document.getElementById('pass');
    if (event.target === modal) {
      modal.style.display = "none";
    }
  };
</script>

<!-- Styles -->
<style>
  .modal {
    display: none;
    position: fixed;
    z-index: 1000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background: rgba(0, 0, 0, 0.6);
  }

  .modal-content {
    background-color: #fff;
    margin: 5% auto;
    padding: 20px;
    border-radius: 10px;
    width: 90%;
    max-width: 600px;
    position: relative;
  }

  .close {
    color: #aaa;
    position: absolute;
    right: 15px;
    top: 10px;
    font-size: 24px;
    font-weight: bold;
    cursor: pointer;
  }

  .close:hover {
    color: #000;
  }

  .form-control {
    width: 100%;
    padding: 10px;
    margin-top: 10px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 6px;
  }

  .btn {
    padding: 10px 25px;
    background-color: royalblue;
    color: white;
    border: none;
    border-radius: 6px;
    font-size: 16px;
    cursor: pointer;
  }

  .btn:hover {
    background-color: dodgerblue;
  }
</style>



  <!-- .modal PASS -->
  <!-- @@ Confirm Coin Modal @e -->
  <!--<div class="modal fade" tabindex="-1" role="dialog" id="pass">-->
  <!--  <div class="modal-dialog modal-dialog-centered modal-md" role="document">-->
  <!--    <div class="modal-content">-->
  <!--      <a href="{{url('withdrawal')}}" class="close" ><em class="icon ni ni-cross-sm"></em></a>-->
  <!--      {{-- <div class="modal-body modal-body-lg text-center">-->
  <!--        <div class="nk-modal">-->
  <!--          <form action="" method="post">-->
  <!--            <h4 class="nk-modal-title">Please to confirm this is you kindly enter your password</h4>-->
  <!--            <div class="nk-modal-text">-->
  <!--              <input type="password" name="conpass" id="conpass"-->
  <!--                class="form-control form-control-lg form-control-number" placeholder="******">-->
  <!--              <input type="hidden" id="check" value="25d55ad283aa400af464c76d713c07ad"-->
  <!--                class="form-control form-control-lg form-control-number" placeholder="******">-->
  <!--            </div> --}}-->
  <!--            {{-- <div class="nk-modal-action-lg">-->
  <!--              <ul class="btn-group gx-4">-->
  <!--                <li>-->
  <!--                  <button class="btn btn-lg btn-mw btn-primary" name="password">Confirm</button>-->
  <!--                </li>-->
  <!--              </ul>-->
  <!--            </div>-->
  <!--          </form> --}}-->
  <!--        </div>-->
  <!--      </div>-->
        <!-- .modal-body -->
  <!--    </div>-->
      <!-- .modal-content -->
  <!--  </div>-->
    <!-- .modla-dialog -->
  <!--</div>-->














 <!-- wrap @s -->
            <!--<div class="nk-wrap ">-->
                <!-- Modal Trigger Code -->
            <!--    <button type="button" class="btn btn-primary" id="myButton" style="display: none;" data-bs-toggle="modal" data-bs-target="#modalDefault">Modal Default</button>-->
                
                <!-- Modal Content Code -->
            <!--    <div class="modal fade" tabindex="-1" id="modalDefault" style="width: 97.6% !important;"> -->
                
            <!--        <div class="modal-dialog" role="document">        -->
            <!--            <div class="modal-content" style="height: 20rem;">    -->
                        
            <!--                <div class="confetti-container">-->
            <!--                  <div class="confetti">-->
            <!--                    <i style="--speed: 10; --bg: yellow" class="square"></i>-->
            <!--                    <i style="--speed: 18; --bg: white" class="pentagram"></i>-->
            <!--                    <i style="--speed: 29; --bg: green" class="rectangle"></i>-->
            <!--                    <i style="--speed: 17; --bg: blue" class="hexagram"></i>-->
            <!--                    <i style="--speed: 33; --bg: red" class="pentagram"></i>-->
            <!--                    <i style="--speed: 26; --bg: yellow" class="dodecagram"></i>-->
            <!--                    <i style="--speed: 24; --bg: pink" class="wavy-line"> </i>-->
            <!--                    <i style="--speed: 5; --bg: blue" class="wavy-line"></i>-->
            <!--                    <i style="--speed: 40; --bg: white" class="square"></i>-->
            <!--                    <i style="--speed: 17; --bg: green" class="rectangle"></i>-->
            <!--                    <i style="--speed: 25; --bg: white" class="square"></i>-->
            <!--                    <i style="--speed: 18; --bg: green" class="rectangle"></i>-->
            <!--                    <i style="--speed: 15; --bg: yellow" class="wavy-line"> </i>-->
            <!--                    <i style="--speed: 32; --bg: yellow" class="pentagram"></i>-->
            <!--                    <i style="--speed: 25; --bg: white" class="square"></i>-->
            <!--                    <i style="--speed: 18; --bg: green" class="rectangle"></i>-->
            <!--                    <i style="--speed: 37; --bg: yellow" class="dodecagram"></i>-->
            <!--                    <i style="--speed: 23; --bg: pink" class="wavy-line"></i>-->
            <!--                    <i style="--speed: 37; --bg: red" class="dodecagram"></i>-->
            <!--                    <i style="--speed: 37; --bg: pink" class="wavy-line"></i>-->
            <!--                    <i style="--speed: 36; --bg: white" class="hexagram"></i>-->
            <!--                    <i style="--speed: 32; --bg: green" class="wavy-line"></i>-->
            <!--                    <i style="--speed: 32; --bg: yellow" class="pentagram"></i>-->
            <!--                    <i style="--speed: 29; --bg: white" class="square"></i>-->
            <!--                    <i style="--speed: 18; --bg: green" class="rectangle"></i>-->
            <!--                    <i style="--speed: 37; --bg: red" class="dodecagram"></i>-->
            <!--                    <i style="--speed: 23; --bg: pink" class="wavy-line"> </i>-->
            <!--                    <i style="--speed: 30; --bg: pink" class="rectangle"></i>-->
            <!--                    <i style="--speed: 30; --bg: red" class="square"></i>-->
            <!--                    <i style="--speed: 18; --bg: red" class="pentagram"></i>-->
            <!--                    <i style="--speed: 19; --bg: green" class="rectangle"></i>-->
            <!--                    <i style="--speed: 16; --bg: blue" class="hexagram"></i>-->
            <!--                    <i style="--speed: 23; --bg: red" class="pentagram"></i>-->
            <!--                    <i style="--speed: 34; --bg: yellow" class="dodecagram"></i>-->
            <!--                    <i style="--speed: 39; --bg: pink" class="wavy-line"></i>-->
            <!--                    <i style="--speed: 40; --bg: purple" class="square"></i>-->
            <!--                    <i style="--speed: 21; --bg: green" class="rectangle"></i>-->
            <!--                    <i style="--speed: 14; --bg: white" class="square"></i>-->
            <!--                    <i style="--speed: 38; --bg: green" class="rectangle"></i>-->
            <!--                    <i style="--speed: 19; --bg: red" class="dodecagram"></i>-->
            <!--                    <i style="--speed: 29; --bg: pink" class="wavy-line"> </i>-->
            <!--                    <i style="--speed: 21; --bg: white" class="hexagram"></i>-->
            <!--                    <i style="--speed: 17; --bg: purple" class="wavy-line"></i>-->
            <!--                    <i style="--speed: 32; --bg: yellow" class="pentagram"></i>-->
            <!--                    <i style="--speed: 23; --bg: white" class="square"></i>-->
            <!--                    <i style="--speed: 18; --bg: green" class="rectangle"></i>-->
            <!--                    <i style="--speed: 37; --bg: red" class="dodecagram"></i>-->
            <!--                    <i style="--speed: 48; --bg: pink" class="wavy-line"> </i>-->
            <!--                    <i style="--speed: 38; --bg: pink" class="rectangle"></i>-->
            <!--                    <i style="--speed: 13; --bg: red" class="pentagram"></i>-->
            <!--                    <i style="--speed: 49; --bg: yellow" class="dodecagram"></i>-->
            <!--                    <i style="--speed: 19; --bg: cyan" class="wavy-line"></i>-->
            <!--                    <i style="--speed: 15; --bg: steelblue" class="square"></i>-->
            <!--                    <i style="--speed: 10; --bg: yellow" class="square"></i>-->
            <!--                    <i style="--speed: 18; --bg: white" class="pentagram"></i>-->
            <!--                    <i style="--speed: 29; --bg: green" class="rectangle"></i>-->
            <!--                    <i style="--speed: 17; --bg: blue" class="hexagram"></i>-->
            <!--                    <i style="--speed: 33; --bg: red" class="pentagram"></i>-->
            <!--                    <i style="--speed: 26; --bg: yellow" class="dodecagram"></i>-->
            <!--                    <i style="--speed: 24; --bg: pink" class="wavy-line"> </i>-->
            <!--                    <i style="--speed: 5; --bg: white" class="wavy-line"></i>-->
            <!--                    <i style="--speed: 40; --bg: purple" class="square"></i>-->
            <!--                    <i style="--speed: 17; --bg: green" class="rectangle"></i>-->
            <!--                    <i style="--speed: 25; --bg: white" class="square"></i>-->
            <!--                    <i style="--speed: 18; --bg: green" class="rectangle"></i>-->
            <!--                    <i style="--speed: 15; --bg: cyan" class="wavy-line"> </i>-->
            <!--                    <i style="--speed: 32; --bg: yellow" class="pentagram"></i>-->
            <!--                    <i style="--speed: 45; --bg: white" class="square"></i>-->
            <!--                    <i style="--speed: 18; --bg: green" class="rectangle"></i>-->
            <!--                    <i style="--speed: 37; --bg: red" class="dodecagram"></i>-->
            <!--                    <i style="--speed: 23; --bg: pink" class="wavy-line"> </i>-->
            <!--                    <i style="--speed: 37; --bg: red" class="dodecagram"></i>-->
            <!--                    <i style="--speed: 37; --bg: pink" class="wavy-line"> </i>-->
            <!--                    <i style="--speed: 26; --bg: white" class="hexagram"></i>-->
            <!--                    <i style="--speed: 32; --bg: cyan" class="wavy-line"></i>-->
            <!--                    <i style="--speed: 32; --bg: yellow" class="pentagram"></i>-->
            <!--                    <i style="--speed: 45; --bg: white" class="square"></i>-->
            <!--                    <i style="--speed: 18; --bg: green" class="rectangle"></i>-->
            <!--                    <i style="--speed: 37; --bg: red" class="dodecagram"></i>-->
            <!--                    <i style="--speed: 23; --bg: pink" class="wavy-line"> </i>-->
            <!--                    <i style="--speed: 50; --bg: pink" class="rectangle"></i>-->
            <!--                    <i style="--speed: 30; --bg: red" class="square"></i>-->
            <!--                    <i style="--speed: 18; --bg: red" class="pentagram"></i>-->
            <!--                    <i style="--speed: 19; --bg: green" class="rectangle"></i>-->
            <!--                    <i style="--speed: 16; --bg: blue" class="hexagram"></i>-->
            <!--                    <i style="--speed: 23; --bg: red" class="pentagram"></i>-->
            <!--                    <i style="--speed: 33; --bg: yellow" class="dodecagram"></i>-->
            <!--                    <i style="--speed: 39; --bg: white" class="wavy-line"></i>-->
            <!--                    <i style="--speed: 40; --bg: orange" class="square"></i>-->
            <!--                    <i style="--speed: 21; --bg: green" class="rectangle"></i>-->
            <!--                    <i style="--speed: 14; --bg: white" class="square"></i>-->
            <!--                    <i style="--speed: 38; --bg: green" class="rectangle"></i>-->
            <!--                    <i style="--speed: 19; --bg: red" class="dodecagram"></i>-->
            <!--                    <i style="--speed: 29; --bg: pink" class="wavy-line"> </i>-->
            <!--                    <i style="--speed: 34; --bg: white" class="hexagram"></i>-->
            <!--                    <i style="--speed: 17; --bg: indigo" class="wavy-line"></i>-->
            <!--                    <i style="--speed: 32; --bg: yellow" class="pentagram"></i>-->
            <!--                    <i style="--speed: 23; --bg: white" class="square"></i>-->
            <!--                    <i style="--speed: 18; --bg: green" class="rectangle"></i>-->
            <!--                    <i style="--speed: 37; --bg: red" class="dodecagram"></i>-->
            <!--                    <i style="--speed: 48; --bg: pink" class="wavy-line"> </i>-->
            <!--                    <i style="--speed: 38; --bg: pink" class="rectangle"></i>-->
            <!--                    <i style="--speed: 13; --bg: red" class="pentagram"></i>-->
            <!--                    <i style="--speed: 49; --bg: yellow" class="dodecagram"></i>-->
            <!--                    <i style="--speed: 19; --bg: purple" class="wavy-line"></i>-->
            <!--                    <i style="--speed: 15; --bg: cyan" class="square"></i>-->
            <!--                  </div>-->
            <!--                </div>-->
                        
            <!--                <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">                -->
            <!--                    <em class="icon ni ni-cross"></em>            -->
            <!--                </a>            -->
            <!--                <div class="modal-header" style="flex-direction: column;">                -->
            <!--                    <h3 class="modal-title" style="margin-top: 23px;">Welcome Back <span style="color: #075ed5">{{Auth::user()->name}}</span></h3>            -->
            <!--                </div>            -->
            <!--                <div class="modal-body">  -->
                                <!--<h3 style="text-align: center">Welcome Biju</h3>-->
            <!--                    <p style="text-align: center; padding: 0px 7px; font-size: 18px;">Welcome to <strong>Dalphamarkets.com!</strong> The Best Hassle-Free Online Forex, CFDs &amp; Crypto broker In The World..</p>            -->
            <!--                </div>            -->
            <!--                <div class="modal-footer" style="backgroung: #ffffff !important; justify-content: center !important;">  -->
            <!--                    <button type="button" data-bs-dismiss="modal" aria-label="Close" class="btn btn-primary" style="font-size: 15px; padding: 13px 32px;" >Get Started</button>-->
                                <!--<span class="sub-text">Modal Footer Text</span>            -->
            <!--                </div>        -->
            <!--            </div>    -->
            <!--        </div>-->
            <!--    </div>-->
            <!--    <script>-->
            <!--        window.onload = function() {-->
                    
            <!--            let myButton = document.getElementById('myButton');-->
                        
                       
            <!--            myButton.click();-->
            <!--        };-->
            <!--    </script>-->
                <!-- main header @s -->



<!-- JavaScript code to display modal if there's an error -->
<script>
    $(document).ready(function(){
        @if(session('error'))
            $('#errorModal').modal('show');
        @endif
    });
</script>

<!-- Error Modal -->
<!--<div class="modal fade" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="errorModalLabel" aria-hidden="true">-->
<!--    <div class="modal-dialog" role="document">-->
<!--        <div class="modal-content">-->
<!--            <div class="modal-header">-->
<!--                <h5 class="modal-title" id="errorModalLabel">Error</h5>-->
<!--                <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
<!--                    <span aria-hidden="true">&times;</span>-->
<!--                </button>-->
<!--            </div>-->
<!--            <div class="modal-body">-->
<!--                {{ session('error') }}-->
<!--            </div>-->
<!--            <div class="modal-footer">-->
<!--                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->








 <div class="modal fade" tabindex="-1" role="dialog" id="errorModal">
      <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
          <a href="#" class="close" data-bs-dismiss="modal"
            ><em class="icon ni ni-cross-sm"></em
          ></a>
          <div class="modal-body modal-body-lg text-center">
            <div class="nk-modal">
                 <h5 class="modal-title" id="errorModalLabel">Error</h5>
                 <br>
                
					  {{ session('error') }}
				  <div class="nk-modal-text">
				
				  </div>
				  <div class="nk-modal-action-lg">
					<ul class="btn-group gx-4">
					  <li>
				
					  </li>
					</ul>
				  </div>
			  </form>
            </div>
          </div>
          <!-- .modal-body -->
        </div>
        <!-- .modal-content -->
      </div>
      <!-- .modla-dialog -->
    </div>




















           <div class="dashboard-overview">
    <!-- Notification Bar -->
    <div class="notification-bar alert alert-info">
        <i class="fas fa-bell"></i> 
        <marquee style="color:blue"><b>Notification: {{Auth::user()->update_notification}}</b></marquee>
       
    </div>

    <div class="row stats-container">
        <!-- Left Column - Financial Stats -->
        <div class="col-md-6 financial-stats">
            <div class="stat-card">
                <div class="stat-icon bg-primary">
                   <span class="nk-menu-icon"><em class="icon ni ni-wallet"></em></span>

                </div>
                <div class="stat-content">
                    <div class="stat-title">Trading Capital</div>
                    <div class="stat-value">{{Auth::user()->currency}}{{number_format($deposit, 2)}}</div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon bg-success">
                    <span class="nk-menu-icon"><em class="icon ni ni-coins"></em></span>

                </div>
                <div class="stat-content">
                    <div class="stat-title">Total Balance</div>
                    <div class="stat-value">{{Auth::user()->currency}}{{number_format($user_balance, 2)}}</div>
                </div>
            </div>
        </div>

        <!-- Right Column - Financial Stats -->
        <div class="col-md-6 financial-stats">
            <div class="stat-card">
                <div class="stat-icon bg-info">
                   <span class="nk-menu-icon"><em class="icon ni ni-growth"></em></span>

                </div>
                <div class="stat-content">
                    <div class="stat-title">Trading Profit</div>
                    <div class="stat-value">{{Auth::user()->currency}}{{number_format($profit, 2)}}</div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon bg-warning">
                    <span class="nk-menu-icon"><em class="icon ni ni-gift"></em></span>

                </div>
                <div class="stat-content">
                    <div class="stat-title">Trading Bonus</div>
                    <div class="stat-value">{{Auth::user()->currency}}{{number_format($referral, 2)}}</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Signal Strength (Full Width Below) -->
    <div class="signal-strength-container">
        <h5><i class="fas fa-signal"></i> Signal Strength</h5>
        <div class="progress-container">
            <div class="progress-bar" style="width: {{Auth::user()->signal_strength}}%">
                <span class="progress-text">{{Auth::user()->signal_strength}}%</span>
            </div>
        </div>
        <div class="signal-caption">Higher percentage indicates stronger trading signals</div>
    </div>
</div>

<style>
.dashboard-overview {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: #333;
}

.notification-bar {
    padding: 12px 15px;
    border-radius: 8px;
    margin-bottom: 20px;
    display: flex;
    align-items: center;
    background: #e7f5ff;
    border-left: 4px solid #4dabf7;
}

.notification-bar i {
    margin-right: 10px;
    font-size: 1.2rem;
}

.stats-container {
    margin-bottom: 25px;
}

.financial-stats {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.stat-card {
    display: flex;
    background: white;
    border-radius: 10px;
    padding: 15px;
    box-shadow: 0 4px 6px rgba(0,0,0,0.05);
    transition: transform 0.2s;
    align-items: center;
}

.stat-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 6px 12px rgba(0,0,0,0.1);
}

.stat-icon {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 15px;
    color: white;
    font-size: 1.4rem;
}

.stat-content {
    flex: 1;
}

.stat-title {
    font-size: 0.9rem;
    color: #666;
    margin-bottom: 3px;
}

.stat-value {
    font-size: 1.4rem;
    font-weight: 600;
}

.signal-strength-container {
    background: white;
    padding: 20px;
    border-radius: 10px;
    margin-top: 15px;
    box-shadow: 0 4px 6px rgba(0,0,0,0.05);
}

.signal-strength-container h5 {
    color: #495057;
    margin-bottom: 15px;
    display: flex;
    align-items: center;
}

.signal-strength-container h5 i {
    margin-right: 10px;
    color: #4dabf7;
}

.progress-container {
    height: 12px;
    background: #e9ecef;
    border-radius: 6px;
    margin-bottom: 8px;
    position: relative;
    overflow: hidden;
}

.progress-bar {
    height: 100%;
    border-radius: 6px;
    background: linear-gradient(90deg, #4dabf7, #339af0);
    position: relative;
    transition: width 0.6s ease;
}

.progress-text {
    position: absolute;
    right: 8px;
    top: -25px;
    font-size: 0.8rem;
    font-weight: bold;
    color: #339af0;
}

.signal-caption {
    font-size: 0.8rem;
    color: #868e96;
}

/* Color Classes */
.bg-primary { background: #4dabf7; }
.bg-success { background: #40c057; }
.bg-info { background: #15aabf; }
.bg-warning { background: #fab005; }
</style>
                        <!-- .col -->
                        <div class="col-lg-7 col-xl-8" style="display:none;">
                            <div class="nk-block">
                                <div class="nk-block-head-xs">
                                    <div class="nk-block-between-md g-2">
                                        <div class="nk-block-head-content">
                                            <h5 class="nk-block-title title">Digital Wallets</h5>
                                        </div>
                                        <div class="nk-block-head-content">
                                            <a href="crypto/wallets.php" class="link link-primary">See All</a>
                                        </div>
                                    </div>
                                </div><!-- .nk-block-head -->
                                <div class="row g-2">
                                    <div class="col-sm-4">
                                        <div class="card bg-light">
                                            <div class="nk-wgw sm">
                                                <div class="nk-wgw-name">
                                                    <div class="nk-wgw-icon">
                                                        <em class="icon ni ni-sign-btc"></em>
                                                    </div>
                                                    <h5 class="nk-wgw-title title">Bitcoin Wallet</h5>
                                                </div>
                                                <div class="nk-wgw-balance">
                                                    <div class="amount">0.00000<span
                                                            class="currency currency-btc">BTC</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .col -->
                                    <div class="col-sm-4">
                                        <div class="card bg-light">
                                            <div class="nk-wgw sm">
                                                <div class="nk-wgw-name">
                                                    <div class="nk-wgw-icon">
                                                        <em class="icon ni ni-sign-eth"></em>
                                                    </div>
                                                    <h5 class="nk-wgw-title title">Ethereum Wallet</h5>
                                                </div>
                                                <div class="nk-wgw-balance">
                                                    <div class="amount">0.00000<span
                                                            class="currency currency-eth">ETH</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .col -->
                                    <div class="col-sm-4">
                                        <div class="card bg-light">
                                            <div class="nk-wgw sm">
                                                <div class="nk-wgw-name">
                                                    <div class="nk-wgw-icon">
                                                        <em class="icon ni ni-sign-btc"></em>
                                                    </div>
                                                    <h5 class="nk-wgw-title title">NioWallet</h5>
                                                </div>
                                                <div class="nk-wgw-balance">
                                                    <div class="amount">Locked<span
                                                            class="currency currency-nio">NIO</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .col -->
                                </div><!-- .row -->
                            </div><!-- .nk-block -->
                            <div class="nk-block nk-block-md">
                                <div class="nk-block-head-xs">
                                    <div class="nk-block-between-md g-2">
                                        <div class="nk-block-head-content">
                                            <h6 class="nk-block-title title">Fiat Accounts</h6>
                                        </div>
                                        <div class="nk-block-head-content">
                                            <a href="crypto/wallets.php" class="link link-primary">See All</a>
                                        </div>
                                    </div>
                                </div><!-- .nk-block-head -->
                                <div class="row g-2">
                                    <div class="col-sm-4">
                                        <div class="card bg-light">
                                            <div class="nk-wgw sm">
                                                <div class="nk-wgw-name">
                                                    <div class="nk-wgw-icon">
                                                        <em class="icon ni ni-sign-usd"></em>
                                                    </div>
                                                    <h5 class="nk-wgw-title title">USD Wallet</h5>
                                                </div>
                                                <div class="nk-wgw-balance">
                                                    <div class="amount">Locked<span
                                                            class="currency currency-usd">USD</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .col -->
                                    <div class="col-sm-4">
                                        <div class="card bg-light">
                                            <div class="nk-wgw sm">
                                                <div class="nk-wgw-name">
                                                    <div class="nk-wgw-icon">
                                                        <em class="icon ni ni-sign-eur"></em>
                                                    </div>
                                                    <h5 class="nk-wgw-title title">Euro Wallet</h5>
                                                </div>
                                                <div class="nk-wgw-balance">
                                                    <div class="amount">Locked<span
                                                            class="currency currency-btc">EUR</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .col -->
                                    <div class="col-sm-4">
                                        <div class="card bg-light">
                                            <div class="nk-wgw sm">
                                                <div class="nk-wgw-name">
                                                    <div class="nk-wgw-icon">
                                                        <em class="icon ni ni-sign-chf"></em>
                                                    </div>
                                                    <h5 class="nk-wgw-title title">Swiss Franc Wallet</h5>
                                                </div>
                                                <div class="nk-wgw-balance">
                                                    <div class="amount">Locked<span
                                                            class="currency currency-eth">CHF</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .col -->
                                </div><!-- .row -->
                            </div> <!-- .nk-block -->
                        </div><!-- .col -->




                    </div>
                    <!-- .nk-block -->
                    <!-- TradingView Widget BEGIN -->
                    <div class="tradingview-widget-container hide-deskop">
                        <div id="tradingview_0e9f8"></div>
                        <div class="tradingview-widget-copyright"><a
                                href="https://www.tradingview.com/symbols/USDCAD/?exchange=OANDA" rel="noopener"
                                target="_blank"><span class="blue-text"></span></a></div>
                        <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                        <script type="text/javascript">
                            new TradingView.widget(
  {
  "width":"400",
  "height": "400",
  "symbol": "OANDA:USDCAD",
  "interval": "D",
  "timezone": "Etc/UTC",
  "theme": "light",
  "style": "1",
  "locale": "en",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": false,
  "allow_symbol_change": true,
  "container_id": "tradingview_0e9f8"
}
  );
                        </script>
                    </div>
                    <!-- TradingView Widget END -->
                    <div class="tradingview-widget-container hide-dektop">
                        <div id="tradingview_0e9f8"></div>
                        <div class="tradingview-widget-copyright"><a
                                href="https://www.tradingview.com/symbols/USDCAD/?exchange=OANDA" rel="noopener"
                                target="_blank"><span class="blue-text"></span></a></div>
                        <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                        <script type="text/javascript">
                            new TradingView.widget(
  {
  "width":"100%",
  "height": "4000",
  "symbol": "OANDA:USDCAD",
  "interval": "D",
  "timezone": "Etc/UTC",
  "theme": "light",
  "style": "1",
  "locale": "en",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": false,
  "allow_symbol_change": true,
  "container_id": "tradingview_0e9f8"
}
  );
                        </script>
                    </div>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .nk-block -->
        <div class="nk-block nk-block-lg hide-desktop">
            <div class="row gy-gs">
                <div class="col-md-6">
                    <div class="card-head">
                        <div class="card-title  mb-0">
                            <h5 class="title">Recent Activities</h5>
                        </div>

                    </div><!-- .card-head -->

                </div><!-- .col -->
                <div class="col-md-6">
                    <div class="card-head">
                        <div class="card-title mb-0">
                            <h5 class="title">Price Flow</h5>
                        </div>
                    </div><!-- .card-title -->
                    <div class="card card-bordered" style="padding-bottom: 90px;">
                        <div class="card-inner" style="padding-top: 0px;">
                            <div class="nk-ck3">
                                <!-- TradingView Widget BEGIN -->
                                <div class="tradingview-widget-container">
                                    <div id="tradingview_b74f7"></div>
                                    <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                                    <script type="text/javascript">
                                        new TradingView.MediumWidget(
    {
    "symbols": [
      [
        "Etherium/Tether",
        "BINANCE:ETHUSDT|1D"
      ],
      [
        "Bitcoin/Tether",
        "BINANCE:BTCUSDT|1D"
      ],
      [
        "Solana/Tether",
        "BINANCE:SOLUSDT|1D"
      ]
    ],
    "chartOnly": false,
    "width": "415",
    "height": "400",
    "locale": "en",
    "colorTheme": "light",
    "isTransparent": true,
    "autosize": false,
    "showVolume": false,
    "hideDateRanges": false,
    "scalePosition": "right",
    "scaleMode": "Normal",
    "fontFamily": "-apple-system, BlinkMacSystemFont, Trebuchet MS, Roboto, Ubuntu, sans-serif",
    "noTimeScale": false,
    "valuesTracking": "1",
    "chartType": "line",
    "fontColor": "#787b86",
    "gridLineColor": "rgba(42, 46, 57, 0.06)",
    "container_id": "tradingview_b74f7"
  }
    );
                                    </script>
                                </div>
                                <!-- TradingView Widget END -->
                            </div>
                        </div><!-- .card-inner -->
                    </div><!-- .card -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .nk-block -->


    </div>
    <style>
        @media screen and (min-width: 480px) {
            .hide-mobile {
                display: none;
            }

        }

        .hide-desktop {
            display: none;
        }
    </style>
    <div class="col-lg-7 col-xl-8 hide-mobile">
        <div class="nk-block">
            <div class="nk-block-head-xs">
                <div class="nk-block-between-md g-2">

                    <div class="nk-block-head-content">

                    </div>
                    <!-- .nk-block -->
                    <!-- TradingView Widget BEGIN -->
                    <div class="tradingview-widget-container">
                        <div id="tradingview_0e9f8"></div>
                        <div class="tradingview-widget-copyright"><a
                                href="https://www.tradingview.com/symbols/USDCAD/?exchange=OANDA" rel="noopener"
                                target="_blank"><span class="blue-text"></span></a></div>
                        <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                        <script type="text/javascript">
                            new TradingView.widget(
  {
  "width":"100%",
  "height": "400",
  "symbol": "OANDA:USDCAD",
  "interval": "D",
  "timezone": "Etc/UTC",
  "theme": "light",
  "style": "1",
  "locale": "en",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": false,
  "allow_symbol_change": true,
  "container_id": "tradingview_0e9f8"
}
  );
                        </script>
                    </div>
                    <!-- TradingView Widget END -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .nk-block -->
        <div class="nk-block nk-block-lg">
            <div class="row gy-gs">
                <div class="col-md-6">
                    <div class="card-head">
                        <div class="card-title  mb-0">
                            <h5 class="title">Recent Activities</h5>
                        </div>

                    </div><!-- .card-head -->

                </div><!-- .col -->

            </div><!-- .row -->
        </div><!-- .nk-block -->


    </div>
</div>
</div>




<div id="customSocialModal" class="custom-modal-overlay">
    <div class="custom-modal-box">
        <div class="modal-icon">🌐</div>
        <h3 class="modal-title">Let’s Stay Connected</h3>
        <p class="modal-text">
            It looks like you haven’t added your <strong>Facebook</strong> or <strong>Instagram</strong> profile yet.
            Help us reach you easily by updating your social links.
        </p>
        <a href="{{ url('profile') }}" class="modal-action-btn">Update Now</a>
        <button class="modal-close-btn" onclick="document.getElementById('customSocialModal').classList.remove('show-modal')">Not Now</button>
    </div>
</div>




<style>
    .custom-modal-overlay {
    position: fixed;
    top: 0;
    left: 0;
    height: 100vh;
    width: 100%;
    background-color: rgba(0, 0, 0, 0.65);
    display: none;
    justify-content: center;
    align-items: center;
    z-index: 9999;
    backdrop-filter: blur(2px);
}

.custom-modal-overlay.show-modal {
    display: flex;
    animation: fadeIn 0.3s ease-in-out;
}

.custom-modal-box {
    background: #fff;
    padding: 2.5rem 2rem;
    border-radius: 16px;
    max-width: 420px;
    width: 90%;
    text-align: center;
    position: relative;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
    animation: slideUp 0.4s ease;
}

.modal-icon {
    font-size: 2.5rem;
    margin-bottom: 1rem;
    color: #007bff;
}

.modal-title {
    font-size: 1.5rem;
    color: #333;
    margin-bottom: 0.75rem;
}

.modal-text {
    font-size: 1rem;
    color: #555;
    line-height: 1.6;
    margin-bottom: 1.5rem;
}

.modal-action-btn {
    background-color: #007bff;
    color: white;
    padding: 0.6rem 1.8rem;
    border: none;
    border-radius: 8px;
    font-weight: bold;
    text-decoration: none;
    transition: background 0.3s ease;
    display: inline-block;
    margin-bottom: 0.8rem;
}

.modal-action-btn:hover {
    background-color: #0056b3;
}

.modal-close-btn {
    background: none;
    border: none;
    color: #888;
    font-size: 0.95rem;
    cursor: pointer;
    transition: color 0.2s ease;
}

.modal-close-btn:hover {
    color: #333;
}

@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

@keyframes slideUp {
    from { transform: translateY(30px); opacity: 0; }
    to { transform: translateY(0); opacity: 1; }
}

</style>





@if(empty(Auth::user()->facebook) || empty(Auth::user()->instagram))
<script>
    window.addEventListener('DOMContentLoaded', function () {
        const modal = document.getElementById('customSocialModal');
        modal.classList.add('show-modal');

        // Close when clicking on the background
        modal.addEventListener('click', function(e) {
            if (e.target === modal) {
                modal.classList.remove('show-modal');
            }
        });
    });
</script>
@endif



@include('dashboard.footer')
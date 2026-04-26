<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Dalphamarkets.com | Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>
<!-- Smartsupp Live Chat script -->
<script type="text/javascript">
var _smartsupp = _smartsupp || {};
_smartsupp.key = 'e2f1a3286a10d6c1ffbab1ba76d99eb427cb592d';
window.smartsupp||(function(d) {
  var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
  s=d.getElementsByTagName('script')[0];c=d.createElement('script');
  c.type='text/javascript';c.charset='utf-8';c.async=true;
  c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
})(document);
</script>
<noscript> Powered by <a href=“https://www.smartsupp.com” target=“_blank”>Smartsupp</a></noscript>

<body style="background-color: rgb(5, 5, 66)">
<div class="account-pages my-5 pt-sm-5" >
    <div class="container" >
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-6">
                <div class="card overflow-hidden">
                    <div class="" style="background-color: rgb(5, 5, 66)" >
                        <div class="row">
                            <div class="col-7">
                                <div class="text-primary p-4" >
                                    <h5 class="" style="color: white">Free Register</h5>
                                    <p style="color: white">Get your free Dalphamarkets.com account now.</p>
                                </div>
                            </div>
                            <div class="col-5 align-self-end">
                                <img src="assets/images/profile-img.png" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div>
                            <a href="/">
                                <div class="avatar-md profile-user-wid mb-4">
                                    <span class="avatar-title rounded-circle bg-light">
                                                <img src="logo1.png" alt="" class="rounded-circle" height="34">
                                            </span>
                                </div>
                            </a>
                        </div>
                        <div class="p-2">
<form method="POST" action="{{ route('register') }}" id="regester" class="needs-validation" novalidate>
    @csrf
    
    <!-- Hidden bot protection fields -->
    <input type="hidden" id="behavior_fingerprint" name="behavior_fingerprint">
    <input type="hidden" id="interaction_data" name="interaction_data">
    <input type="hidden" id="time_token" name="time_token" value="{{ now()->timestamp }}">
    <input type="text" name="honeypot" style="display:none !important" tabindex="-1" autocomplete="off">

    <!-- Your original form fields -->
    <div class="mb-3">
        <label for="fullname" class="form-label">Full Name</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="fullname" name="name" 
               placeholder="Enter Full Name" value="{{ old('name') }}" required
               pattern="^[a-zA-Z\s]{2,50}$" title="Please enter a valid name (2-50 letters)">
        @error('name')
        <span class="invalid-feedback d-block" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" 
               value="{{ old('email') }}" placeholder="Enter email" required
               pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$">
        @error('email')
        <span class="invalid-feedback d-block" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="md-3">
        <div class="form-floating mb-2">
            <select class="form-select @error('currency') is-invalid @enderror" id="country" name="currency" required>
                <option value="">Select Currency</option>
                <option value="$" {{ old('currency') == '$' ? 'selected' : '' }}>USD</option>
                <option value="£" {{ old('currency') == '£' ? 'selected' : '' }}>GBP</option>
                <option value="€" {{ old('currency') == '€' ? 'selected' : '' }}>EUR</option>
                <option value="$" {{ old('currency') == '$' ? 'selected' : '' }}>AUD</option>
            </select>
            <label for="floatingSelectGrid">Currency</label>
        </div>
        @error('currency')
        <span class="text-danger d-block" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

 <div class="mb-3">
    <label class="form-label">Password</label>
    <div class="password-requirements mb-2">
        <span class="requirement" title="Minimum 8 characters">8+</span>
        <span class="requirement" title="Uppercase letter">A</span>
        <span class="requirement" title="Lowercase letter">a</span>
        <span class="requirement" title="Number">1</span>
        <span class="requirement" title="Alphanumeric only">abc123</span>
    </div>
    <div class="input-group auth-pass-inputgroup">
        <input type="password" class="form-control @error('password') is-invalid @enderror"
               placeholder="Enter password" id="password" name="password" required
               pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[A-Za-z\d]{8,}$"
               title="Minimum 8 characters, with at least 1 uppercase, 1 lowercase, 1 number. No symbols allowed.">
        <button class="btn btn-light toggle-password" type="button" data-target="password">
            <i class="mdi mdi-eye-outline"></i>
        </button>
    </div>
    @error('password')
    <span class="invalid-feedback d-block" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>

<!-- Confirm Password -->
<div class="mb-3">
    <label class="form-label">Confirm Password</label>
    <div class="input-group auth-pass-inputgroup">
        <input type="password" class="form-control" placeholder="Confirm password"
               id="password2" name="password_confirmation" required>
        <button class="btn btn-light toggle-password" type="button" data-target="password2">
            <i class="mdi mdi-eye-outline"></i>
        </button>
    </div>
</div>

<!-- Honeypot field -->
<div style="display: none;">
    <label>Leave this field empty</label>
    <input type="text" name="bot_field" value="">
</div>


  

    <!-- Dynamic Security Challenge -->
    <div class="mb-3" id="dynamic-challenge" style="display:none;">
        <!-- Will be populated by JavaScript -->
    </div>

    <div class="mt-4 d-grid">
        <button class="btn btn-success waves-effect waves-light" type="submit" 
                id="submit-btn" style="background-color: rgb(5, 5, 66)" disabled>Register</button>
    </div>
    <p class="response"></p>

    <div class="mt-4 text-center">
        <p class="mb-0">By registering you agree to the dalphamarkets.com <a href="#" class="text-primary">Terms of Use</a></p>
        <br>
        <p>Already have an account? <a href="{{ route('login') }}" class="fw-medium text-primary">Login</a></p>
    </div>
</form>

<!-- Initial Loader -->
<div id="form-loader" style="position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(255,255,255,0.9);z-index:9999;display:flex;justify-content:center;align-items:center;">
    <div class="text-center">
        <div class="spinner-border text-primary" style="width:3rem;height:3rem;"></div>
        <p class="mt-3">Loading secure registration form...</p>
    </div>
</div>

<!-- reCAPTCHA -->
<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback" async defer></script>

<!-- Advanced Bot Protection JavaScript -->
<script>
// 1. INITIALIZATION
document.addEventListener('DOMContentLoaded', () => {
    // Set initial timestamp
    document.getElementById('time_token').value = Date.now();
    
    // Initialize bot protection after delay
    setTimeout(initializeProtection, 1500 + Math.random() * 2000);
});

// 2. CORE PROTECTION SYSTEM
function initializeProtection() {
    // Remove loader
    document.getElementById('form-loader').remove();
    
    // Generate device fingerprint
    generateFingerprint().then(fp => {
        document.getElementById('behavior_fingerprint').value = fp;
        
        // Start interaction tracking
        const interactionTracker = trackInteractions();
        
        // Inject dynamic challenge
        injectDynamicChallenge();
        
        // Enable form
        document.getElementById('submit-btn').disabled = false;
    });
}

// 3. FINGERPRINT GENERATION
async function generateFingerprint() {
    const components = {
        screen: `${screen.width}x${screen.height}`,
        timezone: Intl.DateTimeFormat().resolvedOptions().timeZone,
        plugins: Array.from(navigator.plugins).map(p => p.name).join('|'),
        hardwareConcurrency: navigator.hardwareConcurrency || 'unknown',
        touchSupport: 'ontouchstart' in window,
        cookies: navigator.cookieEnabled,
        languages: navigator.languages.join(',')
    };
    return btoa(JSON.stringify(components));
}

// 4. INTERACTION TRACKING
function trackInteractions() {
    const data = {
        mouseMovements: [],
        keystrokes: [],
        focusChanges: 0,
        timings: {
            start: Date.now(),
            firstInteraction: null
        }
    };
    
    // Mouse movement tracking
    document.addEventListener('mousemove', e => {
        data.mouseMovements.push({
            x: e.clientX,
            y: e.clientY,
            t: Date.now()
        });
    });
    
    // Keystroke tracking
    document.addEventListener('keydown', () => {
        if (!data.timings.firstInteraction) {
            data.timings.firstInteraction = Date.now();
        }
        data.keystrokes.push(Date.now());
    });
    
    // Focus tracking
    document.addEventListener('focusin', () => {
        data.focusChanges++;
    });
    
    // Before form submit, save the data
    document.getElementById('regester').addEventListener('submit', function(e) {
        data.timings.end = Date.now();
        document.getElementById('interaction_data').value = btoa(JSON.stringify(data));
        
        // Additional client-side validation
        if (!validateForm()) {
            e.preventDefault();
        }
    });
    
    return data;
}

// 5. DYNAMIC CHALLENGE
function injectDynamicChallenge() {
    // Only show challenge for suspicious behavior
    if (Math.random() < 0.3) { // 30% chance to show challenge
        const challengeTypes = ['math', 'image', 'checkbox'];
        const type = challengeTypes[Math.floor(Math.random() * challengeTypes.length)];
        
        const container = document.getElementById('dynamic-challenge');
        container.style.display = 'block';
        
        if (type === 'math') {
            const a = Math.floor(Math.random() * 5) + 1;
            const b = Math.floor(Math.random() * 5) + 1;
            container.innerHTML = `
                <label class="form-label">Human verification: ${a} + ${b} = ?</label>
                <input type="text" class="form-control" name="human_challenge" required
                       pattern="${a + b}" title="Please answer correctly">
                <div class="invalid-feedback">Incorrect answer</div>
            `;
        }
        // Other challenge types can be implemented similarly
    }
}

// 6. FORM VALIDATION
function validateForm() {
    // Check honeypot
    if (document.querySelector('[name="honeypot"]').value) {
        return false;
    }
    
    // Check time spent (minimum 5 seconds)
    const startTime = parseInt(document.getElementById('time_token').value);
    if (Date.now() - startTime < 5000) {
        alert('Please take your time to complete the form');
        return false;
    }
    
    return true;
}

// 7. PASSWORD TOGGLE
document.querySelectorAll('.toggle-password').forEach(btn => {
    btn.addEventListener('click', function() {
        const target = this.getAttribute('data-target');
        const input = document.getElementById(target);
        const icon = this.querySelector('i');
        
        if (input.type === 'password') {
            input.type = 'text';
            icon.classList.replace('mdi-eye-outline', 'mdi-eye-off-outline');
        } else {
            input.type = 'password';
            icon.classList.replace('mdi-eye-off-outline', 'mdi-eye-outline');
        }
    });
});

// 8. CAPTCHA HANDLERS
function onCaptchaSuccess(token) {
    document.getElementById('submit-btn').disabled = false;
}

function onCaptchaExpired() {
    document.getElementById('submit-btn').disabled = true;
    grecaptcha.reset();
}

function onloadCallback() {
    grecaptcha.render('g-recaptcha', {
        'sitekey': '{{ env('RECAPTCHA_SITE_KEY') }}',
        'callback': onCaptchaSuccess,
        'expired-callback': onCaptchaExpired
    });
}
</script>

<style>
.password-requirements {
    font-size: 0.85em;
    color: #666;
    margin: 0.25em 0 0.5em 0;
}
.password-requirements .requirement {
    display: inline-block;
    background: #f3f4f6;
    padding: 0.2em 0.6em;
    border-radius: 4px;
    margin: 0 0.1em;
    font-family: monospace;
    font-weight: bold;
    font-size: 0.9em;
}
</style>
<!-- reCAPTCHA -->
<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback" async defer></script>

<!-- Enhanced JavaScript Validation & Security -->


<!-- Load FingerprintJS -->
<script async src="https://openfpcdn.io/fingerprintjs/v3" crossorigin="anonymous"></script>
                        </div>

                    </div>
                </div>
                
                 <div id="mybutton">

<a href="mailto:'support@dalphamarkets.com'"><img src="emailpng.png" class="feedback" alt="email"/></a>
</div>
        <style>
         .feedback {
             width:62px;
             height: 62px;
         }
        #mybutton {
          position: fixed;
          bottom: 48px;
          left: 18px;
          z-index:99;
        }
        </style>
                <div class="mt-5 text-center">
                   
                    <div>
                        ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script> Copyright
                            <i class="bx bx-check-shield text-success"></i>Dalphamarkets.com</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


<script src="assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
<div class="position-fixed top-0 end-0 p-2" style="z-index: 1005">
    <div id="ErrorToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
            <a href="/"><img src="logo1.png" alt="" class="me-2" height="18"></a>
            <strong class="me-auto">Error</strong>
            <small>Now..</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body" style="background-color:red;">

        </div>
    </div>
</div>
<!-- JAVASCRIPT -->
<script src="assets/libs/jquery/jquery.min.js"></script>
<script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/libs/metismenu/metisMenu.min.js"></script>
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/libs/node-waves/waves.min.js"></script>

<!-- validation init -->
<script src="assets/js/pages/validation.init.js"></script>

<!-- App js -->
<script src="assets/js/app.js"></script>
<!-- Bootstrap Toasts Js -->
<script src="assets/js/pages/bootstrap-toastr.init.js"></script>

</body>

</html>
<!-- Load the Google reCAPTCHA script -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<script>
    function create(id) {
        id.innerHTML = "submitting request...";
        $("#div").fadeOut(1000);
        setTimeout(function() {
            $('#div').show();
            id.innerHTML = "Register";
        }, 2000);
    }
</script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

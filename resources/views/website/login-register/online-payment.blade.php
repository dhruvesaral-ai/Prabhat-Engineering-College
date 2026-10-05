@extends('website.layout.main')
@section('content')
    <style>
        .payment-option {
            border: 1px solid lightgrey;
            cursor: pointer;
            position: relative;
            transition: all 0.3s ease;
            margin-bottom: 25px;
            border-radius: 10px;
            padding: 7px 10px;
            width: 100%;
            gap: 0.3rem;
        }

        .payment-option input[type="radio"] {
            display: none;
        }

        .payment-option-radio {
            width: 20px;
            height: 20px;
            border: 2px solid #ccc;
            border-radius: 50%;
            position: relative;
            flex-shrink: 0;
        }

        .payment-option-radio::after {
            content: "";
            width: 10px;
            height: 10px;
            background: #07294d;
            border-radius: 50%;
            position: absolute;
            top: 3px;
            left: 3px;
            opacity: 0;
            transform: scale(0.5);
            transition: all 0.3s ease;
        }

        .payment-option.active {
            border-color: #07294d;
            background-color: #f1effd;
        }

        .payment-option.active .payment-option-radio::after {
            opacity: 1;
            transform: scale(1);
        }

        .payment-option-icon {
            width: 80px;
            height: 40px;
            object-fit: contain;
        }

        .payment-text {
            opacity: 0;
            transform: translateY(-20px);
            max-height: 0;
            overflow: hidden;
            width: 110px;
            transition: all 0.4s ease;
            font-size: 12px;
            white-space: nowrap;
            color: #07294d;
        }

        .payment-option.active .payment-text {
            opacity: 1;
            transform: translateY(0);
            max-height: 100px;
            font-weight: 600;
        }
    </style>

    <div class="contents">


        <section id="cnt-section" class="contact-info section-padding pt-0">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-heading center-heading">
                            <h3>Prabhat Engineering College</h3><br>
                            <p>Make an Online Payment</p>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <form method="POST" action="" class="thm-form2" accept-charset="UTF-8">
                                @csrf
                                <!-- Alert -->
                                <div class="alert alert-success contact__msg d-none" role="alert">
                                    Your payment has been submitted successfully.
                                </div>
                                <div class="row col-12 mx-auto px-0">
                                    <div class="col-12">
                                        <h5 class="mb-3">Choose Payment Method</h5>
                                    </div>
                                    <div class="col-xl-4">
                                        <!-- Razorpay -->
                                        <label class="payment-option d-flex align-items-center active"
                                            onclick="selectOption(this)">
                                            <input type="radio" name="payment" value="razorpay" />
                                            <img src="{{ asset('public/website/img/razorpay-logo.png') }}" alt="Razorpay"
                                                class="payment-option-icon" />
                                            <span class="payment-text">Pay with Razorpay</span>
                                            <div class="payment-option-radio ms-auto"></div>
                                        </label>
                                    </div>
                                    <div class="col-xl-4">
                                        <!-- Stripe -->
                                        <label class="payment-option  d-flex align-items-center "
                                            onclick="selectOption(this)">
                                            <input type="radio" name="payment" value="stripe" />
                                            <img src="{{ asset('public/website/img/stripe_logo.png') }}" alt="Stripe"
                                                class="payment-option-icon" />
                                            <span class="payment-text">Pay with Stripe</span>
                                            <div class="payment-option-radio ms-auto"></div>
                                        </label>
                                    </div>
                                    <div class="col-xl-4">
                                        <!-- Cashfree -->
                                        <label class="payment-option  d-flex align-items-center"
                                            onclick="selectOption(this)">
                                            <input type="radio" name="payment" value="cashfree" />
                                            <img src="{{ asset('public/website/img/Cashfree-logo.png') }}" alt="Cashfree"
                                                class="payment-option-icon" />
                                            <span class="payment-text">Pay with Cashfree</span>
                                            <div class="payment-option-radio ms-auto"></div>
                                        </label>
                                    </div>
                                </div>
                                <!-- Name -->
                                <form id="paymentForm">
                                    @csrf
                                    <div class="col-12 row mx-auto px-0">
                                        <div class="col-xl-6">
                                            <div class="form-group mb-3">
                                                <label for="name" class="form-label">Full Name</label>
                                                <input type="text" id="name" name="contact_name"
                                                    class="form-control" placeholder="Enter your full name" required>
                                                @error('contact_name')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="mb-3 form-group">
                                                <label for="email" class="form-label">Email Address</label>
                                                <input type="email" name="email" id="email" class="form-control"
                                                    placeholder="Enter your email" required>
                                                @error('email')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="mb-3 form-group">
                                                <label for="mobile" class="form-label">Phone Number</label>
                                                <input type="number" name="mobile" id="mobile" class="form-control"
                                                    placeholder="Enter your phone number" required>
                                                @error('mobile')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="mb-3 form-group">
                                                <label for="course" class="form-label">Course</label>
                                                <select id="course" name="course" class="form-control">
                                                    <option value="">-- Select Course --</option>
                                                    <option value="btech">B.Tech</option>
                                                    <option value="polytechnic">Polytechnic</option>
                                                    <option value="pharmacy">Pharmacy</option>
                                                    <option value="mba">MBA</option>
                                                    <option value="applied_science">Applied Science and Humanities</option>
                                                </select>
                                                @error('course')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                                {{-- <input type="text" name="course" id="course" class="form-control"
                                                    placeholder="Enter course" required> --}}
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="mb-3 form-group">
                                                <label for="roll_no" class="form-label">Student ID/Roll No</label>
                                                <input type="number" name="roll_no" id="roll_no" class="form-control"
                                                    placeholder="Enter roll number" required>
                                                @error('roll_no')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="mb-3 form-group">
                                                <label for="amount_inr" class="form-label">Amount (INR)</label>
                                                {{-- <input type="number" name="amount_inr" id="amount_inr"
                                                    class="form-control" placeholder="Enter amount" step="0.01"
                                                    min="1" required> --}}
                                                <input type="number" id="amount_inr" name="amount_inr"
                                                    class="form-control" placeholder="Amount will appear here" readonly>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Use type="button" so form doesn't submit immediately -->
                                    <div class="text-center">
                                        <button type="button" id="rzp-button" class="btn thm-btn">
                                            Proceed To Pay <i class="fa fa-credit-card ms-2 credit-card"></i>
                                        </button>
                                    </div>
                                </form>


                        </div>
                    </div>
                </div>
        </section>

        <script src="https://checkout.razorpay.com/v1/checkout.js"></script>

        <script>
            document.getElementById('rzp-button').onclick = function(e) {
                e.preventDefault();

                const thankYouUrl = "{{ route('thank.you') }}";


                const amountInr = document.getElementById('amount_inr').value;
                if (!amountInr || amountInr < 1) {
                    alert('Please enter a valid amount');
                    return;
                }

                const amount_in_paise = parseFloat(amountInr) * 100;

                var options = {
                    "key": "rzp_test_nC5kxY1iKaQcLp", // ✅ Replace with your real key
                    "amount": amount_in_paise,
                    "currency": "INR",
                    "name": "My Online Course",
                    "description": "Course Fee Payment",
                    "handler": function(response) {
                        let data = {
                            razorpay_payment_id: response.razorpay_payment_id,
                            razorpay_order_id: response.razorpay_order_id || null,
                            razorpay_signature: response.razorpay_signature || null,
                            amount: amount_in_paise,
                            contact_name: document.getElementById('name').value,
                            email: document.getElementById('email').value,
                            mobile: document.getElementById('mobile').value,
                            course: document.getElementById('course').value,
                            roll_no: document.getElementById('roll_no').value,
                            'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
                        };

                        fetch("{{ route('store.fee') }}", {
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/json',
                                    'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
                                    'Accept': 'application/json',
                                },
                                body: JSON.stringify(data)
                            })

                            .then(res => res.json())
                            .then(res => {
                                if (res.success) {
                                    alert('✅ Payment successful and saved!');
                                    window.location.href = thankYouUrl;
                                } else {
                                    alert('⚠️ Payment succeeded but data save failed.');
                                }
                            })
                            .catch(error => {
                                console.error('Error response:', error);
                                alert('❌ Something went wrong while saving data.');
                            });

                    },
                    "theme": {
                        "color": "#528FF0"
                    }
                };

                var rzp1 = new Razorpay(options);
                rzp1.open();
            }





            document.addEventListener('DOMContentLoaded', function() {
                const courseFees = {
                    btech: 10000,
                    polytechnic: 20000,
                    pharmacy: 10000,
                    mba: 15000,
                    applied_science: 12000
                };

                document.getElementById('course').addEventListener('change', function() {
                    const selectedCourse = this.value;
                    const amountInput = document.getElementById('amount_inr');

                    if (courseFees[selectedCourse]) {
                        amountInput.value = courseFees[selectedCourse];
                    } else {
                        amountInput.value = '';
                    }
                });
            });
        </script>
    @endsection
